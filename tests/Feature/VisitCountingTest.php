<?php

use App\Models\BannedIpAddress;
use App\Models\DailyVisitTotal;
use App\Models\PageVisit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Testing\TestResponse;

uses(RefreshDatabase::class);

const HUMAN_USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36';

const VISITOR_IP = '203.0.113.42';

/**
 * Send the visit beacon as a browser on this site would, with any header overridden (null removes it).
 *
 * @param  array<string, string|null>  $headers
 * @param  array<string, mixed>  $payload
 */
function sendBeacon(array $headers = [], array $payload = [], string $ipAddress = VISITOR_IP): TestResponse
{
    $headers = array_filter(array_merge([
        'User-Agent' => HUMAN_USER_AGENT,
        'Accept-Language' => 'en-GB,en;q=0.9',
        'Origin' => 'http://localhost',
    ], $headers), fn (?string $value): bool => $value !== null);

    return test()
        ->flushHeaders()
        ->withServerVariables(['REMOTE_ADDR' => $ipAddress])
        ->withHeaders($headers)
        ->post(route('visits.beacon'), array_merge([
            'token' => PageVisit::issueBeaconToken(),
            'path' => '/',
        ], $payload));
}

beforeEach(function () {
    Carbon::setTestNow(Carbon::parse('2026-10-12 12:00:00', 'Europe/London'));
});

it('counts a beacon with a valid token and a human user agent', function () {
    sendBeacon(payload: ['path' => '/meet-the-owner'])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(1)
        ->and(PageVisit::query()->first())
        ->date->toBe('2026-10-12')
        ->path->toBe('/meet-the-owner')
        ->visitor_hash->toBe(PageVisit::visitorHash(VISITOR_IP, HUMAN_USER_AGENT));
});

it('drops bots and AI crawlers by user agent', function (string $userAgent) {
    sendBeacon(['User-Agent' => $userAgent])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
})->with([
    'Googlebot' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
    'GPTBot' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)',
    'ClaudeBot' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; ClaudeBot/1.0; +claudebot@anthropic.com)',
    'anthropic-ai' => 'anthropic-ai',
    'CCBot' => 'CCBot/2.0 (https://commoncrawl.org/faq/)',
    'PerplexityBot' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; PerplexityBot/1.0; +https://perplexity.ai/perplexitybot)',
    'Bytespider' => 'Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; Bytespider; spider-feedback@bytedance.com)',
    'Google-Extended' => 'Google-Extended',
    'Amazonbot' => 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Amazonbot/0.1; +https://developer.amazon.com/support/amazonbot) Chrome/119.0.6045.214 Safari/537.36',
    'Applebot-Extended' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot-Extended/0.1)',
    'an uptime ping' => 'Mozilla/5.0+(compatible; UptimeRobot/2.0; http://www.uptimerobot.com/)',
    'a headless browser' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/141.0.0.0 Safari/537.36',
]);

it('drops a beacon whose client hints give away a headless browser', function () {
    sendBeacon(['Sec-CH-UA' => '"Chromium";v="141", "HeadlessChrome";v="141"'])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
});

it('drops a beacon with no user agent or no Accept-Language', function (array $headers) {
    sendBeacon($headers)->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
})->with([
    'no user agent' => [['User-Agent' => '']],
    'no Accept-Language' => [['Accept-Language' => '']],
]);

it('drops a beacon with a missing, forged, tampered or expired token', function (Closure $makeToken) {
    sendBeacon(payload: ['token' => $makeToken()])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
})->with([
    'missing' => fn () => null,
    'forged' => fn () => now()->timestamp.'.'.hash_hmac('sha256', 'visit-beacon|'.now()->timestamp, 'not-the-app-key'),
    'tampered' => fn () => (now()->timestamp + 60).'.'.explode('.', PageVisit::issueBeaconToken())[1],
    'expired' => function () {
        $token = PageVisit::issueBeaconToken();
        Carbon::setTestNow(now()->addSeconds(config('visits.token_ttl') + 1));

        return $token;
    },
]);

it('drops a beacon from another origin', function () {
    sendBeacon(['Origin' => 'https://elsewhere.example'])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
});

it('counts a same-origin beacon without an Origin header only when the browser says it is same-origin', function () {
    sendBeacon(['Origin' => null, 'Sec-Fetch-Site' => 'same-origin'])->assertNoContent();
    sendBeacon(['Origin' => null])->assertNoContent();

    expect(PageVisit::query()->count())->toBe(1);
});

it('drops a beacon from a banned IP address', function () {
    BannedIpAddress::create(['ip_address' => VISITOR_IP, 'reason' => 'Test ban']);

    sendBeacon()->assertNoContent();

    expect(PageVisit::query()->count())->toBe(0);
});

it('drops the beacons of a honeypot visitor for the rest of the day', function () {
    $this->withServerVariables(['REMOTE_ADDR' => VISITOR_IP])
        ->get(route('visits.honeypot'))
        ->assertNotFound();

    sendBeacon()->assertNoContent();
    sendBeacon(['User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.0 Safari/605.1.15'])->assertNoContent();
    sendBeacon(ipAddress: '198.51.100.7')->assertNoContent();

    expect(PageVisit::query()->count())->toBe(1);

    Carbon::setTestNow(now()->addDay());

    sendBeacon()->assertNoContent();

    expect(PageVisit::query()->count())->toBe(2);
});

it('counts unique visitors per day by hash, with the salt changing daily', function () {
    sendBeacon();
    sendBeacon(payload: ['path' => '/meet-the-owner']);
    sendBeacon(ipAddress: '198.51.100.7');

    expect(PageVisit::query()->where('date', '2026-10-12')->count())->toBe(3)
        ->and(PageVisit::query()->where('date', '2026-10-12')->distinct()->count('visitor_hash'))->toBe(2);

    $todaysHash = PageVisit::visitorHash(VISITOR_IP, HUMAN_USER_AGENT);

    Carbon::setTestNow(now()->addDay());

    sendBeacon();

    $tomorrowsHash = PageVisit::query()->where('date', '2026-10-13')->value('visitor_hash');

    expect($tomorrowsHash)->not->toBe($todaysHash)
        ->and($tomorrowsHash)->toBe(PageVisit::visitorHash(VISITOR_IP, HUMAN_USER_AGENT));
});

it('stores no IP address', function () {
    sendBeacon();

    $storedValues = implode('|', PageVisit::query()->first()->getAttributes());

    expect($storedValues)->not->toContain(VISITOR_IP)
        ->and(Schema::getColumnListing('page_visits'))->toBe(['id', 'date', 'visitor_hash', 'path', 'created_at']);
});

it('stores only a site path', function (mixed $path, string $storedPath) {
    sendBeacon(payload: ['path' => $path]);

    expect(PageVisit::query()->value('path'))->toBe($storedPath);
})->with([
    'a full URL' => ['https://elsewhere.example/page', '/'],
    'an array' => [['/'], '/'],
    'a long path' => ['/'.str_repeat('a', 400), '/'.str_repeat('a', 254)],
]);

it('renders the beacon and the honeypot link into pages', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('navigator.sendBeacon', false)
        ->assertSee(route('visits.honeypot'), false);
});

it('disallows the honeypot link in robots.txt', function () {
    expect(file_get_contents(public_path('robots.txt')))->toContain('Disallow: /archive');
});

it('mentions anonymous visit counting on the privacy page', function () {
    $this->get(route('privacy-policy'))
        ->assertSuccessful()
        ->assertSee('Anonymous Visit Counting');
});

it('prunes visit rows past the retention period and keeps their daily totals', function () {
    PageVisit::factory()->on('2026-07-01')->by('visitor-a')->count(2)->create();
    PageVisit::factory()->on('2026-07-01')->by('visitor-b')->create();
    PageVisit::factory()->on('2026-07-13')->create();
    PageVisit::factory()->on('2026-07-14')->create();

    $this->artisan('visits:prune')->assertSuccessful();

    expect(PageVisit::query()->pluck('date')->all())->toBe(['2026-07-14'])
        ->and(DailyVisitTotal::query()->orderBy('date')->get(['date', 'human_visits', 'unique_visitors'])->toArray())
        ->toBe([
            ['date' => '2026-07-01', 'human_visits' => 3, 'unique_visitors' => 2],
            ['date' => '2026-07-13', 'human_visits' => 1, 'unique_visitors' => 1],
        ]);
});

it('schedules pruning daily', function () {
    $this->artisan('schedule:list')
        ->expectsOutputToContain('visits:prune')
        ->assertSuccessful();
});

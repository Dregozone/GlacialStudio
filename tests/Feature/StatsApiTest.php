<?php

use App\Models\ContactMessage;
use App\Models\DailyVisitTotal;
use App\Models\PageVisit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

uses(RefreshDatabase::class);

beforeEach(function () {
    config(['services.stats.token' => 'stats-secret']);
    Carbon::setTestNow(Carbon::parse('2026-10-13 09:00:00', 'Europe/London'));
});

it('returns the daily counts for a date', function () {
    PageVisit::factory()->on('2026-10-12')->by('visitor-a')->count(3)->create();
    PageVisit::factory()->on('2026-10-12')->by('visitor-b')->create();
    PageVisit::factory()->on('2026-10-11')->create();

    ContactMessage::factory()->create(['created_at' => Carbon::parse('2026-10-12 00:30:00', 'Europe/London')]);
    ContactMessage::factory()->create(['created_at' => Carbon::parse('2026-10-12 23:30:00', 'Europe/London')]);
    ContactMessage::factory()->create(['created_at' => Carbon::parse('2026-10-11 23:30:00', 'Europe/London')]);
    ContactMessage::factory()->create(['created_at' => Carbon::parse('2026-10-13 00:30:00', 'Europe/London')]);

    $this->withToken('stats-secret')
        ->getJson('/api/stats/daily?date=2026-10-12')
        ->assertOk()
        ->assertExactJson([
            'app' => 'Glacial Studio',
            'date' => '2026-10-12',
            'contact_messages' => 2,
            'visits' => ['human' => 4, 'unique' => 2],
        ]);
});

it('defaults to yesterday in Europe/London', function () {
    Carbon::setTestNow(Carbon::parse('2026-10-13 00:30:00', 'Europe/London'));

    $this->withToken('stats-secret')
        ->getJson('/api/stats/daily')
        ->assertOk()
        ->assertJsonPath('date', '2026-10-12');
});

it('returns the kept daily totals once the visit rows are pruned', function () {
    DailyVisitTotal::create(['date' => '2026-06-01', 'human_visits' => 48, 'unique_visitors' => 31]);

    $this->withToken('stats-secret')
        ->getJson('/api/stats/daily?date=2026-06-01')
        ->assertOk()
        ->assertJsonPath('visits', ['human' => 48, 'unique' => 31]);
});

it('gives 401 for a missing or wrong token', function (?string $token) {
    $request = $token === null ? $this : $this->withToken($token);

    $request->getJson('/api/stats/daily')->assertUnauthorized();
})->with([
    'missing' => [null],
    'wrong' => ['not-the-secret'],
]);

it('is off when no stats token is set', function () {
    config(['services.stats.token' => null]);

    $this->withToken('anything')
        ->getJson('/api/stats/daily')
        ->assertNotFound();
});

it('rejects a malformed date', function () {
    $this->withToken('stats-secret')
        ->getJson('/api/stats/daily?date=12-10-2026')
        ->assertUnprocessable();
});

it('is throttled to 30 requests a minute', function () {
    foreach (range(1, 30) as $attempt) {
        $this->withToken('stats-secret')->getJson('/api/stats/daily')->assertOk();
    }

    $this->withToken('stats-secret')->getJson('/api/stats/daily')->assertTooManyRequests();
});

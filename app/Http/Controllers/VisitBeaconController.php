<?php

namespace App\Http\Controllers;

use App\Models\BannedIpAddress;
use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class VisitBeaconController extends Controller
{
    /**
     * Count a human visit from the page's beacon. Always answers 204, so a dropped
     * beacon looks the same as a counted one.
     */
    public function store(Request $request): Response
    {
        if ($this->isHumanVisit($request)) {
            PageVisit::create([
                'date' => PageVisit::today(),
                'visitor_hash' => PageVisit::visitorHash($request->ip(), (string) $request->userAgent()),
                'path' => $this->visitedPath($request),
            ]);
        }

        return response()->noContent();
    }

    /**
     * The honeypot link, hidden from people and disallowed in robots.txt: whatever
     * follows it is flagged as a bot for the rest of the day.
     */
    public function honeypot(Request $request): Response
    {
        PageVisit::flagAsBot($request->ip());

        abort(404);
    }

    private function isHumanVisit(Request $request): bool
    {
        $userAgent = (string) $request->userAgent();

        return PageVisit::isValidBeaconToken($request->input('token'))
            && $this->isSameOrigin($request)
            && filled($userAgent)
            && filled($request->header('Accept-Language'))
            && ! $this->isBotUserAgent($userAgent)
            && ! $this->isHeadless($request)
            && ! PageVisit::isFlaggedAsBot($request->ip())
            && ! BannedIpAddress::where('ip_address', $request->ip())->exists();
    }

    private function isSameOrigin(Request $request): bool
    {
        $origin = $request->header('Origin');

        if (filled($origin)) {
            return parse_url($origin, PHP_URL_HOST) === $request->getHost();
        }

        return $request->header('Sec-Fetch-Site') === 'same-origin';
    }

    private function isBotUserAgent(string $userAgent): bool
    {
        return Str::contains($userAgent, config('visits.bot_user_agents', []), ignoreCase: true)
            || (new CrawlerDetect)->isCrawler($userAgent);
    }

    private function isHeadless(Request $request): bool
    {
        $clientHints = $request->userAgent().' '.$request->header('Sec-CH-UA');

        return Str::contains($clientHints, config('visits.headless_markers', []), ignoreCase: true);
    }

    private function visitedPath(Request $request): string
    {
        $path = $request->input('path');

        return is_string($path) && str_starts_with($path, '/') ? Str::limit($path, 255, '') : '/';
    }
}

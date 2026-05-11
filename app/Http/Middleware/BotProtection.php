<?php

namespace App\Http\Middleware;

use App\Models\BannedIpAddress;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class BotProtection
{
    private const BANNED_IPS_CACHE_KEY = 'bot_protection:banned_ips';

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        if ($this->isWhitelisted($ip)) {
            return $next($request);
        }

        if ($this->isBanned($ip)) {
            abort(403, 'Your IP address has been blocked.');
        }

        if ($this->exceedsThreshold($ip)) {
            $this->ban($ip, 'Automated ban: exceeded request threshold.');
            abort(403, 'Your IP address has been blocked due to excessive requests.');
        }

        return $next($request);
    }

    private function isWhitelisted(string $ip): bool
    {
        return in_array($ip, config('bot-protection.whitelist', []), true);
    }

    private function isBanned(string $ip): bool
    {
        $bannedIps = Cache::remember(
            self::BANNED_IPS_CACHE_KEY,
            config('bot-protection.banned_cache_ttl', 300),
            fn () => BannedIpAddress::pluck('ip_address')->all()
        );

        return in_array($ip, $bannedIps, true);
    }

    private function exceedsThreshold(string $ip): bool
    {
        $window = (int) config('bot-protection.window', 60);
        $threshold = (int) config('bot-protection.threshold', 60);
        $windowKey = (int) floor(now()->timestamp / $window);
        $cacheKey = "bot_protection:count:{$ip}:{$windowKey}";

        $count = Cache::increment($cacheKey);

        if ($count === 1) {
            Cache::put($cacheKey, 1, $window);
        }

        return $count > $threshold;
    }

    private function ban(string $ip, string $reason): void
    {
        BannedIpAddress::firstOrCreate(
            ['ip_address' => $ip],
            ['reason' => $reason]
        );

        Cache::forget(self::BANNED_IPS_CACHE_KEY);
    }

    public static function flushBannedCache(): void
    {
        Cache::forget(self::BANNED_IPS_CACHE_KEY);
    }
}

<?php

namespace App\Models;

use Database\Factories\PageVisitFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PageVisit extends Model
{
    /** @use HasFactory<PageVisitFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'date',
        'visitor_hash',
        'path',
    ];

    /**
     * Today's date in the visits timezone, as Y-m-d.
     */
    public static function today(): string
    {
        return now(config('visits.timezone'))->toDateString();
    }

    /**
     * Hash a visitor's IP address and user agent with today's salt, so no IP is stored
     * and the same visitor can't be followed from one day to the next.
     */
    public static function visitorHash(string $ipAddress, string $userAgent): string
    {
        return hash_hmac('sha256', $ipAddress."\n".$userAgent, self::dailySalt());
    }

    /**
     * Hash an IP address alone with today's salt, used to flag honeypot visitors for the day.
     */
    public static function ipHash(string $ipAddress): string
    {
        return hash_hmac('sha256', $ipAddress, self::dailySalt());
    }

    /**
     * Flag the visitor behind an IP address as a bot until the end of the day.
     */
    public static function flagAsBot(string $ipAddress): void
    {
        Cache::put(self::botFlagCacheKey($ipAddress), true, self::endOfToday());
    }

    public static function isFlaggedAsBot(string $ipAddress): bool
    {
        return Cache::has(self::botFlagCacheKey($ipAddress));
    }

    /**
     * Issue a short-lived signed token to render into a page for its visit beacon.
     */
    public static function issueBeaconToken(): string
    {
        $issuedAt = (string) now()->timestamp;

        return $issuedAt.'.'.self::signBeaconToken($issuedAt);
    }

    public static function isValidBeaconToken(mixed $token): bool
    {
        if (! is_string($token) || ! str_contains($token, '.')) {
            return false;
        }

        [$issuedAt, $signature] = explode('.', $token, 2);

        if (! ctype_digit($issuedAt) || ! hash_equals(self::signBeaconToken($issuedAt), $signature)) {
            return false;
        }

        $age = now()->timestamp - (int) $issuedAt;

        return $age >= 0 && $age <= (int) config('visits.token_ttl');
    }

    private static function signBeaconToken(string $issuedAt): string
    {
        return hash_hmac('sha256', 'visit-beacon|'.$issuedAt, (string) config('app.key'));
    }

    /**
     * A random salt for today, rotated each day and thrown away once the day is over.
     */
    private static function dailySalt(): string
    {
        return Cache::remember('visits:salt:'.self::today(), self::endOfToday(), fn (): string => Str::random(64));
    }

    private static function botFlagCacheKey(string $ipAddress): string
    {
        return 'visits:bot:'.self::today().':'.self::ipHash($ipAddress);
    }

    private static function endOfToday(): Carbon
    {
        return now(config('visits.timezone'))->endOfDay();
    }
}

<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Request Threshold
    |--------------------------------------------------------------------------
    |
    | Maximum number of requests an IP may make to the protected route within
    | the detection window before being permanently banned.
    |
    */
    'threshold' => env('BOT_PROTECTION_THRESHOLD', 40),

    /*
    |--------------------------------------------------------------------------
    | Detection Window (seconds)
    |--------------------------------------------------------------------------
    |
    | The rolling window (in seconds) used to count requests per IP.
    |
    */
    'window' => env('BOT_PROTECTION_WINDOW', 300), // Within 5 mins

    /*
    |--------------------------------------------------------------------------
    | Banned IPs Cache TTL (seconds)
    |--------------------------------------------------------------------------
    |
    | How long to cache the list of banned IP addresses before re-querying the
    | database. Keeps the middleware fast by avoiding a DB hit on every request.
    |
    */
    'banned_cache_ttl' => env('BOT_PROTECTION_BANNED_CACHE_TTL', 300),

    /*
    |--------------------------------------------------------------------------
    | IP Whitelist
    |--------------------------------------------------------------------------
    |
    | These IP addresses are always allowed through and can never be banned.
    | Add your own IP here if you want to be permanently exempt.
    |
    */
    'whitelist' => array_filter(
        explode(',', env('BOT_PROTECTION_WHITELIST', '127.0.0.1,::1'))
    ),
];

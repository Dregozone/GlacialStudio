<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Timezone
    |--------------------------------------------------------------------------
    |
    | The timezone that decides which day a visit belongs to, for the daily
    | salt, the honeypot flags and the stats API.
    |
    */
    'timezone' => 'Europe/London',

    /*
    |--------------------------------------------------------------------------
    | Beacon Token Lifetime (seconds)
    |--------------------------------------------------------------------------
    |
    | How long the signed token rendered into each page stays valid for the
    | visit beacon. Beacons sent with an older token are dropped.
    |
    */
    'token_ttl' => env('VISITS_TOKEN_TTL', 3600),

    /*
    |--------------------------------------------------------------------------
    | Retention (days)
    |--------------------------------------------------------------------------
    |
    | Individual visit rows older than this are pruned by visits:prune. Their
    | daily totals are kept.
    |
    */
    'retention_days' => env('VISITS_RETENTION_DAYS', 90),

    /*
    |--------------------------------------------------------------------------
    | Bot User Agents
    |--------------------------------------------------------------------------
    |
    | Crawlers and AI scrapers dropped by user agent, on top of those known to
    | jaybizzle/crawler-detect. Matched case-insensitively.
    |
    */
    'bot_user_agents' => [
        'GPTBot',
        'ChatGPT-User',
        'OAI-SearchBot',
        'ClaudeBot',
        'Claude-Web',
        'anthropic-ai',
        'CCBot',
        'PerplexityBot',
        'Bytespider',
        'Google-Extended',
        'Amazonbot',
        'Applebot-Extended',
    ],

    /*
    |--------------------------------------------------------------------------
    | Headless Browser Markers
    |--------------------------------------------------------------------------
    |
    | Beacons whose user agent or client hints contain any of these are
    | dropped. Matched case-insensitively.
    |
    */
    'headless_markers' => [
        'HeadlessChrome',
        'PhantomJS',
        'Puppeteer',
        'Playwright',
        'Selenium',
        'SlimerJS',
    ],
];

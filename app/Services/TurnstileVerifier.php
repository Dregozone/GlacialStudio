<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class TurnstileVerifier
{
    public const SITEVERIFY_URL = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    /**
     * Verify a Turnstile token with Cloudflare, requiring success, the expected action and the current hostname.
     */
    public function verify(?string $token, string $expectedAction, ?string $remoteIp = null): bool
    {
        if (! is_string($token) || $token === '' || strlen($token) > 2048) {
            return false;
        }

        try {
            $response = Http::asForm()->timeout(10)->post(self::SITEVERIFY_URL, [
                'secret' => config('services.turnstyle.secret_key'),
                'response' => $token,
                'remoteip' => $remoteIp,
            ]);
        } catch (ConnectionException) {
            return false;
        }

        return $response->successful()
            && $response->json('success') === true
            && $response->json('action') === $expectedAction
            && $response->json('hostname') === request()->getHost();
    }
}

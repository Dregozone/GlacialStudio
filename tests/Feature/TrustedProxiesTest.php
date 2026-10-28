<?php

it('resolves the visitor ip when the request comes through cloudflare', function (string $cloudflareIp) {
    $this->withServerVariables(['REMOTE_ADDR' => $cloudflareIp])
        ->withHeader('X-Forwarded-For', '203.0.113.42')
        ->get(route('my-ip'))
        ->assertOk()
        ->assertSee('203.0.113.42');
})->with([
    'ipv4' => '162.158.1.10',
    'ipv6' => '2a06:98c0:3600::103',
]);

it('ignores forwarded headers from untrusted sources', function () {
    $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.7'])
        ->withHeader('X-Forwarded-For', '203.0.113.42')
        ->get(route('my-ip'))
        ->assertOk()
        ->assertSee('198.51.100.7')
        ->assertDontSee('203.0.113.42');
});

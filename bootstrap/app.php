<?php

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\RateLimiter;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    // ->withMiddleware(function (Middleware $middleware) {
    //     //
    // })
    ->withMiddleware(function (Middleware $middleware) {
        RateLimiter::for('web-routes', function (Request $request) {
            return Limit::perMinute(20)->by($request->ip())
                ->response(function (Request $request, array $headers) {
                    return response('Too many requests. Please slow down.', 429, $headers);
                });
        });

        $middleware->web(append: [
            ThrottleRequests::class.':web-routes',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

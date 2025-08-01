<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RedirectAdminMiddleware;
use Illuminate\Foundation\Application;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ])->alias([
                    'locale' => LocaleMiddleware::class,
                    'admin' => AdminMiddleware::class,
                    'redirectAdmin' => RedirectAdminMiddleware::class
                ]);

        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

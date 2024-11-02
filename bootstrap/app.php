<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Global middleware: it will apply on every route
        // $middleware->append(AgeCheck::class);

        // Group middleware
        $middleware->appendToGroup('ageAndCountryCheck', [AgeCheck::class, CountryCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

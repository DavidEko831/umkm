<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middleware global
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware untuk aplikasi web
        ],

        'api' => [
            // Middleware untuk API
        ],
    ];

    protected $routeMiddleware = [
        // Middleware bawaan Laravel
        'auth' => \App\Http\Middleware\AdminAuth::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        // Middleware custom
        'admin' => \App\Http\Middleware\AdminAuth::class, // Middleware admin ditambahkan di sini
    ];
}

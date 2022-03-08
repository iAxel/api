<?php

namespace App\Services;

use App\Http\Auth;
use App\Http\Guest;
use App\Http\Locale;
use App\Http\TrustHosts;
use App\Http\TrimStrings;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;

final class Http extends Kernel
{
    /**
     * @var array
     */
    protected $middleware = [
        TrustHosts::class,
        TrustProxies::class,
        HandleCors::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
        Locale::class,
    ];

    /**
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => Auth::class,
        'guest' => Guest::class,
        'throttle' => ThrottleRequests::class,
        'can' => Authorize::class,
    ];
}

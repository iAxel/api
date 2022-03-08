<?php

namespace App\Http;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

final class TrimStrings extends Middleware
{
    /**
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
        'current_password',
    ];
}

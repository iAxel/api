<?php

namespace App\Providers;

use function base_path;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class RouteProvider extends RouteServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::group(['as' => 'auth.', 'prefix' => 'auth'], base_path('routes/auth.php'));
            Route::group(['as' => 'main.', 'prefix' => 'main'], base_path('routes/main.php'));
            Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], base_path('routes/dashboard.php'));
        });
    }
}

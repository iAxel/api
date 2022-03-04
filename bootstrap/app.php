<?php

/*
|--------------------------------------------------------------------------
| Create The App
|--------------------------------------------------------------------------
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__),
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Services\Http::class,
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Services\Console::class,
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Services\Exceptions::class,
);

/*
|--------------------------------------------------------------------------
| Return The App
|--------------------------------------------------------------------------
*/

return $app;

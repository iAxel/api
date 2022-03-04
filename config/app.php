<?php

return [

    /*
    |--------------------------------------------------------------------------
    | App Env
    |--------------------------------------------------------------------------
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | App Key
    |--------------------------------------------------------------------------
    */

    'key' => env('APP_KEY'),

    /*
    |--------------------------------------------------------------------------
    | App URL
    |--------------------------------------------------------------------------
    */

    'url' => env('APP_URL', 'https://api.project.dev'),

    /*
    |--------------------------------------------------------------------------
    | App Name
    |--------------------------------------------------------------------------
    */

    'name' => env('APP_NAME', 'api.project.dev'),

    /*
    |--------------------------------------------------------------------------
    | App Debug
    |--------------------------------------------------------------------------
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | App Timezone
    |--------------------------------------------------------------------------
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | App Asset URL
    |--------------------------------------------------------------------------
    */

    'asset_url' => env('APP_ASSET_URL', 'https://api.project.dev/assets'),

    /*
    |--------------------------------------------------------------------------
    | App Locale
    |--------------------------------------------------------------------------
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | App Fallback Locale
    |--------------------------------------------------------------------------
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | App Cipher
    |--------------------------------------------------------------------------
    */

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | App Providers
    |--------------------------------------------------------------------------
    */

    'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        App\Providers\AppProvider::class,
        App\Providers\AppProvider::class,
        App\Providers\EventProvider::class,
        App\Providers\RouteProvider::class,
        App\Providers\ObserverProvider::class,
        App\Providers\ContractProvider::class,
        App\Providers\ValidatorProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | App Aliases
    |--------------------------------------------------------------------------
    */

    'aliases' => [],
];

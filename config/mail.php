<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mailer Default
    |--------------------------------------------------------------------------
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configs
    |--------------------------------------------------------------------------
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST'),
            'port' => env('MAIL_PORT'),
            'username' => env('MAIL_USER'),
            'password' => env('MAIL_PASS'),
            'encryption' => env('MAIL_ENCRYPT'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Mailer Global "From" Address
    |--------------------------------------------------------------------------
    */

    'from' => [
        'name' => env('MAIL_FROM_NAME', 'project.dev'),
        'address' => env('MAIL_FROM_ADDRESS', 'noreply@project.dev'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Mailer Markdown Settings
    |--------------------------------------------------------------------------
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
];

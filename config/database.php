<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database Default Connection
    |--------------------------------------------------------------------------
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('MYSQL_URL'),
            'host' => env('MYSQL_HOST'),
            'port' => env('MYSQL_PORT'),
            'username' => env('MYSQL_USER'),
            'password' => env('MYSQL_PASS'),
            'database' => env('MYSQL_DATABASE'),
            'unix_socket' => env('MYSQL_UNIX_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,

            'options' => extension_loaded('pdo_mysql')
                ? array_filter([ PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA') ])
                : [],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Migration Table
    |--------------------------------------------------------------------------
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Database Redis
    |--------------------------------------------------------------------------
    */

    'redis' => [
        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'cache:',
            'database' => 2,
            'lock_connection' => 'default',
        ],

        'queue' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'queue:',
            'database' => 1,
            'lock_connection' => 'default',
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'default:',
            'database' => 0,
        ],
    ],
];

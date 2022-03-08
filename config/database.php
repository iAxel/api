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
            'engine' => 'InnoDB',

            'options' => extension_loaded('pdo_mysql')
                ? array_filter([ PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA') ])
                : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('PGSQL_URL'),
            'host' => env('PGSQL_HOST'),
            'port' => env('PGSQL_PORT'),
            'username' => env('PGSQL_USER'),
            'password' => env('PGSQL_PASS'),
            'database' => env('PGSQL_DATABASE'),
            'unix_socket' => env('PGSQL_UNIX_SOCKET'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
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
        'client' => 'phpredis',

        'options' => [
            'cluster' => 'redis',
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST'),
            'port' => env('REDIS_PORT'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'cache:',
            'database' => 2,
        ],

        'queue' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST'),
            'port' => env('REDIS_PORT'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'queue:',
            'database' => 1,
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST'),
            'port' => env('REDIS_PORT'),
            'password' => env('REDIS_PASS'),
            'prefix' => 'default:',
            'database' => 0,
        ],
    ],
];

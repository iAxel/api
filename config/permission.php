<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Role Permissions Configs
    |--------------------------------------------------------------------------
    */

    'role' => [
        'administrator' => [
            'role' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'user' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'session' => [
                'read',
                'revoke',
                'revoke_all',
            ],

            'social' => [
                'read',
                'revoke',
                'revoke_all',
            ],

            'ban' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'report' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'photo' => [
                'create',
                'read',
                'update',
                'delete',
            ],
        ],

        'moderator' => [
            'role' => [
                'read',
            ],

            'user' => [
                'read',
            ],

            'social' => [
                'read',
            ],

            'ban' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'report' => [
                'create',
                'read',
                'update',
                'delete',
            ],

            'photo' => [
                'read',
            ],
        ],

        'user' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Policy Permissions Configs
    |--------------------------------------------------------------------------
    */

    'policy' => [
        'role' => [
            'create',
            'read',
            'update',
            'delete',
        ],

        'user' => [
            'create',
            'read',
            'update',
            'delete',
        ],

        'session' => [
            'read',
            'revoke',
            'revoke_all',
        ],

        'social' => [
            'read',
            'revoke',
            'revoke_all',
        ],

        'ban' => [
            'create',
            'read',
            'update',
            'delete',
        ],

        'report' => [
            'create',
            'read',
            'update',
            'delete',
        ],

        'photo' => [
            'create',
            'read',
            'update',
            'delete',
        ],
    ],
];

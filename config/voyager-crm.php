<?php

return [
    /*
     * The config_key for voyager-crm package.
     */
    'config_key'     => env('VOYAGER_CRM_CONFIG_KEY', 'joy-voyager-crm'),

    /*
     * The route_prefix for voyager-crm package.
     */
    'route_prefix'   => env('VOYAGER_CRM_ROUTE_PREFIX', 'joy-voyager-crm'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers'    => [
        'namespace' => 'Joy\\VoyagerCrm\\Http\\Controllers',
    ],

    'default_status' => 'Active',
    'statuses'       => [
        'Active'   => 'Active',
        'Inactive' => 'Inactive',
    ],

    'currencies'     => [
        'default_status' => 'Active',
        'statuses'       => [
            'Active'   => 'Active',
            'Inactive' => 'Inactive',
        ]
    ],

    'surveys'        => [
        'default_status' => 'Published',
        'statuses'       => [
            'Published' => 'Published',
            'Draft'     => 'Draft',
        ]
    ],

    'bugs'           => [
        'default_type'     => 'Type1',
        'types'            => [
            'Type1' => 'Type1',
            'Type2' => 'Type2',
        ],
        'default_status'   => 'Active',
        'statuses'         => [
            'Active'   => 'Active',
            'Inactive' => 'Inactive',
        ],
        'default_priority' => 'Low',
        'priorities'       => [
            'Low'    => 'Low',
            'Medium' => 'Medium',
            'High'   => 'High',
        ]
    ]
];

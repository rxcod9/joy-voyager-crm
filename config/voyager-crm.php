<?php

return [
    /*
     * The config_key for voyager-crm package.
     */
    'config_key'   => env('VOYAGER_CRM_CONFIG_KEY', 'joy-voyager-crm'),

    /*
     * The route_prefix for voyager-crm package.
     */
    'route_prefix' => env('VOYAGER_CRM_ROUTE_PREFIX', 'joy-voyager-crm'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers'  => [
        'namespace' => 'Joy\\VoyagerCrm\\Http\\Controllers',
    ],
];

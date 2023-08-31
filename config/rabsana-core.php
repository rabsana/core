<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Rabsana-core Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Rabsana-core will be accessible from. If the
    | setting is null, Rabsana-core will reside under the same domain as the
    | application. Otherwise, this value will be used as the subdomain.
    |
    */

    'domain' => env('RABSANA_CORE_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | Rabsana-core Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Rabsana-core will be accessible from. Feel free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of its internal API that aren't exposed to users.
    |
    */

    'path' => env('RABSANA_CORE_PATH', 'rabsana-core'),

    /*
    |--------------------------------------------------------------------------
    | Rabsana-core Admin Api middleware
    |--------------------------------------------------------------------------
    |
    | Here you can add the middlewares for public and private routes.
    | for example you can set the auth:api middleware to private routes to check
    | the user is authenticated or not
    */

    'adminApiMiddlewares' => [
        'group'  => 'web', // web or api
        'public' => [],
        'private' => []
    ],

    /*
    |--------------------------------------------------------------------------
    | Rabsana-core  Api middleware
    |--------------------------------------------------------------------------
    |
    | Here you can add the middlewares for public and private routes.
    | for example you can set the auth:api middleware to private routes to check
    | the user is authenticated or not
    */

    'apiMiddlewares' => [
        'group' => 'api',  // web or api
        'public' => [],
        'private' => []
    ],

    /*
    |--------------------------------------------------------------------------
    | Rabsana-core  views config
    |--------------------------------------------------------------------------
    |
    | for showing the views you can determine these configs or you can publish
    | the package views
    |
    */

    'views' => [
        'admin' => [
            'extends'           => 'rabsana-core::admin.master',
            'content-section'   => 'content',
            'title-section'     => 'title',
            'scripts-stack'     => 'scripts',
            'styles-stack'      => 'styles'
        ],
    ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Docsify Route
    |--------------------------------------------------------------------------
    |
    | Find your docs at the given route.
    |
    */

    'route' => 'docs',

    /*
    |--------------------------------------------------------------------------
    | Laravel Docsify Route Middleware
    |--------------------------------------------------------------------------
    |
    | Add middleware to the route. Usefull for use with packages such as
    | spartie/laravel-permissions
    | laratrust
    | e.t.c.
    |
    | examples:
    | permission:view-docs
    | role: admin|sudo
    | ['auth', 'role:sudo|admin']
    | ['auth', 'permission:view-docs']
    | ['auth', 'role:sudo|admin', 'permission:view-docs']
    | ['auth:sanctum', 'role:sudo|admin', 'permission:view-docs']
    |
    */

    'middleware' => ['auth', 'role:sudo|admin'],
    
    /*
    |--------------------------------------------------------------------------
    | Laravel Docsify Route Alias
    |--------------------------------------------------------------------------
    |
    | Name the docs route
    |
    */

    'alias' => 'docs.',

];
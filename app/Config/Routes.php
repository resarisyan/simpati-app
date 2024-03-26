<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
    return view('layouts/dashboard/app');
});

service('auth')->routes($routes);

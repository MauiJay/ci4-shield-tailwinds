<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sass', 'Home::sass');
$routes->get('/landing-page', 'Home::lp');

service('auth')->routes($routes);

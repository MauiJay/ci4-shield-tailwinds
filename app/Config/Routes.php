<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',             'Home::index');
$routes->get('about-us',      'Home::about');
$routes->get('contact',       'Home::contact');
$routes->get('services',      'Home::service');
$routes->get('landing-page',  'Home::lp');

service('auth')->routes($routes);

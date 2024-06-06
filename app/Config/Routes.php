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
$routes->get('terms-of-service',  'LegalController::terms',   ['as' => 'terms']);
$routes->get('privacy-policy',    'LegalController::privacy', ['as' => 'privacy']);
// Help section
$routes->match(['get', 'post'], 'help',         'HelpController::index',    ['as' => 'pages']);
$routes->match(['get', 'post'], 'help/(:any)',  'HelpController::show/$1',  ['as' => 'page']);

service('auth')->routes($routes);

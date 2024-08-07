<?php

use CodeIgniter\Router\RouteCollection;

/**         
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/receba', 'Home::receba');
$routes->get('/showForm', 'Home::showForm');
$routes->get('/editar/(:num)', 'Home::editar/$1');
$routes->post('/update/(:num)', 'Home::update/$1');
$routes->post('delete/(:num)', 'Home::delete/$1');
$routes->get('/expensive', 'Home::expensive');
$routes->get('/quantity', 'Home::mostqtd');
$routes->post('/search', 'Home::search');

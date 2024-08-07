<?php

use CodeIgniter\Router\RouteCollection;

/**         
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/receba', 'Home::receba');
$routes->get('/showForm', 'Home::showForm');
$routes->get('/edit/(:num)', 'Home::editar/$1');

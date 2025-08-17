<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contactProcess', 'Ajax::contactProcess');
$routes->get('news/(:any)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('nytime', 'Nytime::index');
$routes->get('(:any)', 'Pages::view/$1');

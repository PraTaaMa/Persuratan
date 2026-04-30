<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::');

$routes->get('authsup', 'Auth::signup');  
$routes->get('authsin', 'Auth::signin');  

$routes->get('reads', 'Crud::index');
$routes->get('creates', 'Crud::create');
$routes->post('reads', 'Crud::save');
 


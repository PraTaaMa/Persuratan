<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::');
$routes->get('', 'Home::login');
$routes->get('crud', 'Crud::index');
$routes->get('crud-create', 'Crud::create');
$routes->post('crud-create', 'Crud::save');
$routes->get('signup', 'Home::signup');  
$routes->get('signin', 'Home::signin');  
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('register', 'Auth\Register::index');
$routes->post('register/save', 'Auth\Register::save');

$routes->get('signup', 'Signup::index');
$routes->post('signup/processSignup', 'Signup::processSignup');

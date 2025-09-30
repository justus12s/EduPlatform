<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::accueil');
$routes->get('/accueil', 'Home::accueil');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

$routes->post('dashboard/index', 'Dashboard::index');
$routes->get('dashboard/index', 'Dashboard::index');
$routes->get('dashboard/fontawesome', 'Dashboard::fontawesome');
$routes->get('dashboard/blank', 'Dashboard::blank');
$routes->get('dashboard/profile', 'Dashboard::profile');
$routes->get('dashboard/authentication_login', 'Dashboard::authentication_login');
$routes->get('dashboard/authentication_register', 'Dashboard::authentication_register');
$routes->get('dashboard/basic_table', 'Dashboard::basic_table');
$routes->get('dashboard/map_google', 'Dashboard::map_google');

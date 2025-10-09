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
$routes->get('dashboard/notes', 'Dashboard::notes');
$routes->get('dashboard/profile', 'Dashboard::profile');
$routes->get('dashboard/cours', 'Dashboard::cours');
$routes->get('dashboard/details', 'Dashboard::details');

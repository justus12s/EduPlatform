<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::accueil');
$routes->get('/accueil', 'Home::accueil');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

$routes->post('dashboard/etudiant/index', 'Dashboard::index');
$routes->get('dashboard/etudiant/index', 'Dashboard::index');
$routes->get('dashboard/etudiant/notes', 'Dashboard::notes');
$routes->get('dashboard/etudiant/profile', 'Dashboard::profile');
$routes->get('dashboard/etudiant/cours', 'Dashboard::cours');
$routes->get('dashboard/etudiant/details', 'Dashboard::details');

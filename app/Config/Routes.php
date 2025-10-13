<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::accueil');
$routes->get('/accueil', 'Home::accueil');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

$routes->post('dashboard/etudiant/index', 'Dashstud::index');
$routes->get('dashboard/etudiant/index', 'Dashstud::index');
$routes->get('dashboard/etudiant/notes', 'Dashstud::notes');
$routes->get('dashboard/etudiant/profile', 'Dashstud::profile');
$routes->get('dashboard/etudiant/cours', 'Dashstud::cours');
$routes->get('dashboard/etudiant/details', 'Dashstud::details');

$routes->post('dashboard/teacher/index', 'Dashteach::index');
$routes->get('dashboard/teacher/index', 'Dashteach::index');
$routes->get('dashboard/teacher/notes', 'Dashteach::notes');
$routes->get('dashboard/teacher/profile', 'Dashteach::profile');
$routes->get('dashboard/teacher/cours', 'Dashteach::cours');
$routes->get('dashboard/teacher/gestion', 'Dashteach::gestion');

$routes->post('dashboard/admin/index', 'Dashadmin::index');
$routes->get('dashboard/admin/index', 'Dashadmin::index');
$routes->get('dashboard/admin/notes', 'Dashadmin::notes');
$routes->get('dashboard/admin/profile', 'Dashadmin::profile');
$routes->get('dashboard/admin/cours', 'Dashadmin::cours');
$routes->get('dashboard/admin/teacher', 'Dashadmin::teacher');
$routes->get('dashboard/admin/student', 'Dashadmin::student');

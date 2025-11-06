<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Pages publiques
$routes->get('/', 'Accueil::index');
$routes->get('accueil', 'Accueil::index');
$routes->get('a_propos', 'Pages::a_propos');
$routes->get('fonctionnalites', 'Pages::fonctionnalites');
$routes->get('contact', 'Pages::contact');

// Authentification générale
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/process_login', 'Auth::process_login');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/process_register', 'Auth::process_register');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/forgot_password', 'Auth::forgot_password');
$routes->post('auth/process_forgot_password', 'Auth::process_forgot_password');
$routes->get('auth/reset_password/(:any)', 'Auth::reset_password/$1');
$routes->post('auth/process_reset_password', 'Auth::process_reset_password');
$routes->get('auth/demo', 'Auth::demo');

// Connexion par profil avec méthodes spécifiques
$routes->get('admin/login', 'Admin::login');
$routes->post('admin/process_login', 'Admin::process_login');
$routes->get('enseignant/login', 'Enseignant::login');
$routes->post('enseignant/process_login', 'Enseignant::process_login');
$routes->get('etudiant/login', 'Etudiant::login');
$routes->post('etudiant/process_login', 'Etudiant::process_login');

// Tableaux de bord (protégés)
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('enseignant/dashboard', 'Enseignant::dashboard');
$routes->get('etudiant/dashboard', 'Etudiant::dashboard');

// Vérification "Se souvenir de moi"
$routes->get('auth/check_remember', 'Auth::checkRememberMe');

// Routes Admin
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/courses', 'Admin::courses');
$routes->get('admin/add_course', 'Admin::add_course');
$routes->post('admin/add_course', 'Admin::add_course');
$routes->get('admin/grade-validation', 'Admin::grade_validation');
$routes->get('admin/approve_grade/(:num)', 'Admin::approve_grade/$1');
$routes->get('admin/scheduling', 'Admin::scheduling');
$routes->get('admin/add_schedule', 'Admin::add_schedule');
$routes->post('admin/add_schedule', 'Admin::add_schedule');
$routes->get('admin/outings', 'Admin::outings');
$routes->get('admin/analytics', 'Admin::analytics');

// Routes Étudiant
$routes->get('etudiant/login', 'Etudiant::login');
$routes->post('etudiant/login', 'Etudiant::process_login');
$routes->get('etudiant/dashboard', 'Etudiant::dashboard');
$routes->get('etudiant/mes_cours', 'Etudiant::mes_cours');
$routes->get('etudiant/mes_notes', 'Etudiant::mes_notes');
$routes->get('etudiant/emploi_du_temps', 'Etudiant::emploi_du_temps');

$routes->get('install', 'Install::index');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Routes
$routes->get('/', 'PublicController::index');
$routes->get('/profil', 'PublicController::profil');
$routes->get('/wilayah', 'PublicController::wilayah');
$routes->get('/statistik', 'PublicController::statistik');
$routes->get('/data', 'PublicController::data');
$routes->get('/data/detail/(:num)', 'PublicController::detail/$1');
$routes->get('/kontak', 'PublicController::kontak');
$routes->post('/kontak/submit', 'PublicController::submitKontak');

// Auth Routes
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

// Admin Routes (Protected)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('residents', 'Admin::residents');
    $routes->get('residents/create', 'Admin::create');
    $routes->post('residents/store', 'Admin::store');
    $routes->get('residents/edit/(:num)', 'Admin::edit/$1');
    $routes->post('residents/update/(:num)', 'Admin::update/$1');
    $routes->get('residents/delete/(:num)', 'Admin::delete/$1');
});

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('/beranda', 'Home::index');
$routes->get('/profil', 'Home::profil');

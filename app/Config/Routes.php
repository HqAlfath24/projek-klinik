<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->get('/daftar_obat', 'Admin\Daftar::daftar_obat');
$routes->get('/daftar_pekerja', 'Admin\Daftar::daftar_pekerja');

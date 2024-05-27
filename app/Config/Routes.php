<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//HALAMAN UTAMA
$routes->get('/', 'Home::index');
$routes->get('/pasien', 'Login::Pasien');
$routes->get('/karyawan', 'Login::karyawan');
$routes->get('/dokter', 'Login::dokter');
$routes->get('/admin', 'Login::admin');



// ADMIN
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->get('/daftar_obat', 'Admin\Daftar::daftar_obat');
$routes->get('/daftar_pekerja', 'Admin\Daftar::daftar_pekerja');
$routes->get('/daftar_dokter', 'Admin\Daftar::daftar_dokter');
$routes->get('/daftar_poli', 'Admin\Daftar::daftar_poli');
// $routes->get('/daftar_pasien', 'Admin\Daftar::daftar_pasien');
$routes->get('/daftar_pasien', 'Admin\Pasien::index');

// detail
$routes->get('/pasien/(:segment)', 'Admin\Pasien::detail/$1');
// $routes->get('/pasien/(:segment), 'Admin\Pasien::');

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
$routes->get('/formedit_obat', 'Admin\Daftar::formedit_obat');



// employee
$routes->get('/daftar_pekerja', 'Admin\Daftar::daftar_pekerja');
$routes->get('/formedit_pekerja', 'Admin\Daftar::formedit_pekerja');



// dokter
$routes->get('/daftar_dokter', 'Admin\Daftar::daftar_dokter');
$routes->get('/formedit_dokter', 'Admin\Daftar::formedit_dokter');



// poli
$routes->get('/daftar_poli', 'Admin\Daftar::daftar_poli');
$routes->get('/formedit_poli', 'Admin\Daftar::formedit_poli');



// pasien
// $routes->get('/daftar_pasien', 'Admin\Daftar::daftar_pasien');
$routes->get('/daftar_pasien', 'Admin\Pasien::index');
// $routes->get('/formedit_pasien', 'Admin\Daftar::formedit_pasien');
$routes->get('/edit_pasien', 'Admin\Pasien::edit_pasien');
$routes->get('/edit/(:segment)', 'Admin\Pasien::edit_pasien/$1');
// detail
$routes->get('/detail/(:segment)', 'Admin\Pasien::detail/$1');
// $routes->get('/pasien/(:segment), 'Admin\Pasien::');

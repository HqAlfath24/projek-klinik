<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// =============== HALAMAN UTAMA ===============
$routes->get('/', 'Home::index');
$routes->get('/pasien', 'Login::Pasien');
$routes->get('/karyawan', 'Login::karyawan');
$routes->get('/dokter', 'Login::dokter');
$routes->get('/admin', 'Login::admin');



// =============== ADMIN ===============
$routes->get('/dashboard', 'Admin\Dashboard::index');



// =============== dokter ===============
$routes->get('/daftar_dokter', 'Admin\Dokter::index');
$routes->get('/detail_dokter/(:segment)', 'Admin\Dokter::detail/$1');
// $routes->get('/dokter/(:segment), 'Admin\Dokter:::detail/$1'');
$routes->get('/edit_dokter', 'Admin\Dokter::edit_dokter');
// $routes->get('/edit_dokter/(:segment)', 'Admin\Dokter::edit_dokter/$1');



// =============== employee ===============
$routes->get('/daftar_pekerja', 'Admin\Pekerja::daftar_pekerja');
$routes->get('/edit_pekerja', 'Admin\Pekerja::edit_pekerja');



// =============== obat ===============
$routes->get('/daftar_obat', 'Admin\Obat::index');
$routes->get('/detail_obat/(:segment)', 'Admin\Obat::detail/$1');
// $routes->get('/obat/(:segment)', 'Admin\Obat::detail/$1');
$routes->get('/edit_obat', 'Admin\Obat::edit_obat');
// $routes->get('/edit_obat/(:segment)', 'Admin\Obat::edit_obat/$1');



// =============== pasien ===============
$routes->get('/daftar_pasien', 'Admin\Pasien::index');
$routes->get('/detail_pasien/(:segment)', 'Admin\Pasien::detail/$1');
// $routes->get('/pasien/(:segment), 'Admin\Pasien:::detail/$1'');
$routes->get('/edit_pasien', 'Admin\Pasien::edit_pasien');
// $routes->get('/edit_pasien/(:segment)', 'Admin\Pasien::edit_pasien/$1');



// =============== poli ===============
$routes->get('/daftar_poli', 'Admin\Daftar::daftar_poli');
$routes->get('/formedit_poli', 'Admin\Daftar::formedit_poli');

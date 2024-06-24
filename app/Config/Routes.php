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
$routes->get('/doctor', 'Admin\Dokter::index');
$routes->get('/detail_dokter/(:segment)', 'Admin\Dokter::detail/$1');
// $routes->get('/dokter/(:segment), 'Admin\Dokter:::detail/$1'');
$routes->get('/edit_dokter', 'Admin\Dokter::edit_dokter');
// $routes->get('/edit_dokter/(:segment)', 'Admin\Dokter::edit_dokter/$1');



// =============== employee ===============
$routes->get('/employee', 'Admin\Employee::index');
$routes->get('/detail_pekerja/(:segment)', 'Admin\Employee::detail/$1');
// $routes->get('/pekerja/(:segment)', 'Admin\Employee::detail/$1');
$routes->get('/edit_pekerja', 'Admin\Employee::edit_employee');
// $routes->get('/edit_pekerja/(:segment)', 'Admin\Employee::edit_pekerja/$1');



// =============== obat ===============
$routes->get('/drug', 'Admin\Obat::index');
$routes->get('/detail_obat/(:segment)', 'Admin\Obat::detail/$1');
// $routes->get('/obat/(:segment)', 'Admin\Obat::detail/$1');
$routes->get('/edit_obat', 'Admin\Obat::edit_obat');
// $routes->get('/edit_obat/(:segment)', 'Admin\Obat::edit_obat/$1');



// =============== pasien ===============
$routes->get('/patient', 'Admin\Pasien::index');
$routes->get('/patient/create', 'Admin\Pasien::create');
$routes->get('/patient/detail/(:segment)', 'Admin\Pasien::detail/$1');
// $routes->get('/edit_pasien', 'Admin\Pasien::edit_pasien');
// $routes->get('/patient/edit', 'Admin\Pasien::edit_pasien');
$routes->get('/patient/edit/(:segment)', 'Admin\Pasien::edit/$1');
// =====
$routes->post('/patient/save', 'Admin\Pasien::save');
$routes->post('/patient/update/(:segment)', 'Admin\Pasien::update/$1');
// $routes->post('/patient/delete/(:segment)', 'Admin\Pasien::delete/$1');
$routes->delete('patient/delete/(:segment)', 'Admin\Pasien::delete/$1');



// =============== poli ===============
$routes->get('/polyclinic', 'Admin\Polyclinic::index');
$routes->get('/polyclinic/create', 'Admin\Polyclinic::create');
$routes->get('/detail_poli/(:segment)', 'Admin\Polyclinic::detail/$1');
// $routes->get('/polyclinic/(:segment)', 'Admin\Polyclinic::detail/$1');
$routes->get('/edit_poli', 'Admin\Polyclinic::edit_poly');
// $routes->get('/edit_poli/(:segment)', 'Admin\Polyclinic::edit_poly/$1');
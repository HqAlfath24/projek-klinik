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
$routes->get('/employee/create', 'Admin\Employee::create');
$routes->get('/employee/detail/(:segment)', 'Admin\Employee::detail/$1');
$routes->get('/employee/edit/(:segment)', 'Admin\Employee::edit/$1');
// $routes->get('/detail_pekerja/(:segment)', 'Admin\Employee::detail/$1');
// $routes->get('/pekerja/(:segment)', 'Admin\Employee::detail/$1');
$routes->get('/edit_pekerja', 'Admin\Employee::edit_employee');
// $routes->get('/edit_pekerja/(:segment)', 'Admin\Employee::edit_pekerja/$1');
// =====
$routes->post('/employee/save', 'Admin\Employee::save');
$routes->post('/employee/update/(:segment)', 'Admin\Employee::update/$1');
$routes->delete('employee/delete/(:segment)', 'Admin\Employee::delete/$1');



// =============== obat ===============
$routes->get('/drug', 'Admin\Obat::index');
$routes->get('/drug/create', 'Admin\Obat::create');
$routes->get('/drug/detail/(:segment)', 'Admin\Obat::detail/$1');
$routes->get('/drug/edit/(:segment)', 'Admin\Obat::edit/$1');
// =====
$routes->post('/drug/save', 'Admin\Obat::save');
$routes->post('/drug/update/(:segment)', 'Admin\Obat::update/$1');
$routes->delete('drug/delete/(:segment)', 'Admin\Obat::delete/$1');



// =============== pasien ===============
$routes->get('/patient', 'Admin\Pasien::index');
$routes->get('/patient/create', 'Admin\Pasien::create');
$routes->get('/patient/detail/(:segment)', 'Admin\Pasien::detail/$1');
$routes->get('/patient/edit/(:segment)', 'Admin\Pasien::edit/$1');
// =====
$routes->post('/patient/save', 'Admin\Pasien::save');
$routes->post('/patient/update/(:segment)', 'Admin\Pasien::update/$1');
$routes->delete('patient/delete/(:segment)', 'Admin\Pasien::delete/$1');



// =============== poli ===============
$routes->get('/polyclinic', 'Admin\Polyclinic::index');
$routes->get('/polyclinic/create', 'Admin\Polyclinic::create');
$routes->get('/polyclinic/detail/(:segment)', 'Admin\Polyclinic::detail/$1');
$routes->get('/polyclinic/edit/(:segment)', 'Admin\Polyclinic::edit/$1');
// =====
$routes->post('/polyclinic/save', 'Admin\Polyclinic::save');
$routes->post('/polyclinic/update/(:segment)', 'Admin\Pasien::update/$1');
$routes->delete('polyclinic/delete/(:segment)', 'Admin\Polyclinic::delete/$1');



// =============== treatment ===============
// $routes->get('/polyclinic', 'Admin\Polyclinic::index');
// $routes->get('/polyclinic/create', 'Admin\Polyclinic::create');
// $routes->get('/polyclinic/detail/(:segment)', 'Admin\Polyclinic::detail/$1');
// $routes->get('/polyclinic/edit/(:segment)', 'Admin\Polyclinic::edit/$1');
// // =====
// $routes->post('/polyclinic/save', 'Admin\Polyclinic::save');
// $routes->post('/polyclinic/update/(:segment)', 'Admin\Pasien::update/$1');
// $routes->delete('polyclinic/delete/(:segment)', 'Admin\Polyclinic::delete/$1');

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



// =============== queue ===============
$routes->get('/queue', 'Admin\Queue::index');
$routes->get('/queue/check/(:segment)', 'Admin\Queue::check/$1');
$routes->get('/queue/printQueue/(:segment)', 'Admin\Queue::printQueue/$1');
// $routes->get('search', 'Admin\Queue::search');
// // =====
$routes->post('/queue/save', 'Admin\Queue::save');
// $routes->post('/queue/search_patient', 'Admin\Queue::search_patient');
// $routes->post('/queue/search_polyclinic', 'Admin\Queue::search_patient');

// $routes->get('admin/queue/search_patient', 'Admin\Queue::search_patient');



// =============== mrecord ===============
// $routes->get('/mrecord/check/(:segment)', 'Admin\Mrecord::check/$1');
// $routes->get('/mrecord/check', 'Admin\Mrecord::check');
// // =====
// $routes->post('/mrecord/proses', 'Admin\Mrecord::proses');
$routes->post('/mrecord/diagnosis/(:segment)', 'Admin\Mrecord::diagnosis/$1');



// =============== dokter ===============
$routes->get('/doctor', 'Admin\Dokter::index');
$routes->get('/doctor/create', 'Admin\Dokter::create');
$routes->get('/doctor/detail/(:segment)', 'Admin\Dokter::detail/$1');
$routes->get('/doctor/edit/(:segment)', 'Admin\Dokter::edit/$1');
// =====
$routes->post('/doctor/save', 'Admin\Dokter::save');
$routes->post('/doctor/update/(:segment)', 'Admin\Dokter::update/$1');
$routes->delete('doctor/delete/(:segment)', 'Admin\Dokter::delete/$1');



// =============== employee ===============
$routes->get('/employee', 'Admin\Employee::index');
$routes->get('/employee/create', 'Admin\Employee::create');
$routes->get('/employee/detail/(:segment)', 'Admin\Employee::detail/$1');
$routes->get('/employee/edit/(:segment)', 'Admin\Employee::edit/$1');
// =====
$routes->post('/employee/save', 'Admin\Employee::save');
$routes->post('/employee/update/(:segment)', 'Admin\Employee::update/$1');
$routes->delete('employee/delete/(:segment)', 'Admin\Employee::delete/$1');



// =============== obat ===============
$routes->get('/medicine', 'Admin\Medicine::index');
$routes->get('/medicine/create', 'Admin\Medicine::create');
$routes->get('/medicine/detail/(:segment)', 'Admin\Medicine::detail/$1');
$routes->get('/medicine/edit/(:segment)', 'Admin\Medicine::edit/$1');
$routes->get('/medicine/printStock', 'Admin\Medicine::printStock');
// =====
$routes->post('/medicine/save', 'Admin\Medicine::save');
$routes->post('/medicine/update/(:segment)', 'Admin\Medicine::update/$1');
$routes->delete('medicine/delete/(:segment)', 'Admin\Medicine::delete/$1');



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

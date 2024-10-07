<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(True);
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa/index', 'Mahasiswa::index');
$routes->get('/mahasiswa/tampildata', 'Mahasiswa::datamhs');
$routes->get('/mahasiswa/tambahdatamhs', 'Mahasiswa::tambahdatamhs');

// Tambahkan rute untuk data dosen
$routes->get('/dosen/index', 'Dosen::index');
$routes->get('/dosen/tampildata', 'Dosen::datadsn');
$routes->get('/dosen/tambahdatadsn', 'Dosen::tambahdatadsn');
$routes->post('/dosen/simpandatadsn', 'Dosen::simpandatadsn');
$routes->post('/dosen/saveDosen', 'Dosen::saveDosen');
$routes->get('/dosen/editdsn/(:any)', 'Dosen::editdsn/$1');
$routes->put('/dosen/updatedatadsn', 'Dosen::updatedsn');
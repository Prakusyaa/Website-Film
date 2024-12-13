<?php
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/Film/create', 'Film::create');
$routes->get('/Film/(:any)', 'Films::detail/$1');
$routes->get('/Film/edit/(:segment)', 'Film::edit/$1');
$routes->delete('/film/delete/(:num)', 'Films::delete/$1'); 
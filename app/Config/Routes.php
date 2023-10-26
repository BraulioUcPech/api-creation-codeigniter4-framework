<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('temperatura','TemperaturaController::index');

$routes->get('temperatura', 'APIcontroller::index');

$routes->resource('api/temperatura', ['controller' => 'APIcontroller']);
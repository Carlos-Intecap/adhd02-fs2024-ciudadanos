<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('regiones','RegionesController::index');
$routes->get('departamentos','DepartamentosController::index');
$routes->get('ciudadanos','CiudadanosController::index');
$routes->get('municipios','MunicipiosController::index');
$routes->get('niveles','NivelesController::index');
$routes->post('agregar_nivel','NivelesController::agregarNivel');
$routes->get('nuevo_nivel','NivelesController::nuevoNivel');
$routes->post('agregar_ciudadano','CiudadanosController::agregarCiudadano');
$routes->get('nuevo_ciudadano','CiudadanosController::nuevoCiudadano');
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

//CIUDADANO
$routes->post('agregar_ciudadano','CiudadanosController::agregarCiudadano');
$routes->get('nuevo_ciudadano','CiudadanosController::nuevoCiudadano');

$routes->post('agregar_municipio','MunicipiosController::agregarMunicipio');
$routes->get('nuevo_municipio','MunicipiosController::nuevoMunicipio');
$routes->post('agregar_departamento','DepartamentosController::agregarDepartamento');
$routes->get('nuevo_departamento','DepartamentosController::nuevoDepartamento');
$routes->post('agregar_region','RegionesController::agregarRegion');
$routes->get('nueva_region','RegionesController::nuevaRegion');

$routes->get('eliminar_nivel/(:num)','NivelesController::eliminarNivel/$1');
$routes->get('eliminar_ciudadano/(:num)','CiudadanosController::eliminarCiudadano/$1');
$routes->get('eliminar_municipio/(:num)','MunicipiosController::eliminarMunicipio/$1');
$routes->get('eliminar_departamento/(:num)','DepartamentosController::eliminarDepartamento/$1');
$routes->get('eliminar_region/(:num)','RegionesController::eliminarRegion/$1');
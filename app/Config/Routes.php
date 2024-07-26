<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//VISTAS
$routes->get('/', 'Home::index');
$routes->get('regiones','RegionesController::index');
$routes->get('departamentos','DepartamentosController::index');
$routes->get('ciudadanos','CiudadanosController::index');
$routes->get('municipios','MunicipiosController::index');
$routes->get('niveles','NivelesController::index');

//AGREGAR
$routes->post('agregar_nivel','NivelesController::agregarNivel');
$routes->get('nuevo_nivel','NivelesController::nuevoNivel');

$routes->post('agregar_ciudadano','CiudadanosController::agregarCiudadano');
$routes->get('nuevo_ciudadano','CiudadanosController::nuevoCiudadano');

$routes->post('agregar_municipio','MunicipiosController::agregarMunicipio');
$routes->get('nuevo_municipio','MunicipiosController::nuevoMunicipio');

$routes->post('agregar_departamento','DepartamentosController::agregarDepartamento');
$routes->get('nuevo_departamento','DepartamentosController::nuevoDepartamento');

$routes->post('agregar_region','RegionesController::agregarRegion');
$routes->get('nueva_region','RegionesController::nuevaRegion');

//ELIMINAR
$routes->get('eliminar_nivel/(:num)','NivelesController::eliminarNivel/$1');
$routes->get('eliminar_ciudadano/(:num)','CiudadanosController::eliminarCiudadano/$1');
$routes->get('eliminar_municipio/(:num)','MunicipiosController::eliminarMunicipio/$1');
$routes->get('eliminar_departamento/(:num)','DepartamentosController::eliminarDepartamento/$1');
$routes->get('eliminar_region/(:num)','RegionesController::eliminarRegion/$1');

//ACTUALIZAR
$routes->get('buscar_nivel/(:num)','NivelesController::buscarNivel/$1');
$routes->post('modificar_nivel','NivelesController::modificarNivel');

$routes->get('buscar_ciudadano/(:num)','CiudadanosController::buscarCiudadano/$1');
$routes->post('modificar_ciudadano','CiudadanosController::modificarCiudadano');

$routes->get('buscar_municipio/(:num)','MunicipiosController::buscarMunicipio/$1');
$routes->post('modificar_municipio','MunicipiosController::modificarMunicipio');

$routes->get('buscar_departamento/(:num)','DepartamentosController::buscarDepartamento/$1');
$routes->post('modificar_departamento','DepartamentosController::modificarDepartamento');

$routes->get('buscar_region/(:num)','RegionesController::buscarRegion/$1');
$routes->post('modificar_region','RegionesController::modificarRegion');
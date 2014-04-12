<?php

/* configuracion de reporte de errores */
error_reporting(E_ALL);

/* cargo las constantes de aplicacion */
include_once join(DIRECTORY_SEPARATOR, array('conf','define.php'));

/* cargo el autoload del framework */
include  join(DIRECTORY_SEPARATOR, array(__BASE_PATH , 'framework','autoload.php'));

//Inicio la sesion
session_start();

//Al momento de crear la session el usuario no está autenticado
if (!isset($_SESSION["autenticado"])) {
    $_SESSION["autenticado"] = false;
}

/** creo una nueva instancia del objeto Registry */	
$registry = new framework\Registry;

$registry->router = new framework\Router($registry);

/* creo una instancia de Template para */
$registry->template = new framework\Template($registry);

/* seteo el directorio de los controladores de la aplicacion */
$registry->router->setPath(__CONTROLLERS_PATH);

/**
 *  Creo una instancia del entityManager (conexion a la base de datos usando Doctrine)
 *  y la cargo en el Registry para la instanciacion de los Daos.
 */
include join (DIRECTORY_SEPARATOR , array(__APP_PATH , 'bootstrap.php'));
$registry->entityManager = $entityManager;

/* cargo los permisos definidos para la aplicacion */
include_once join(DIRECTORY_SEPARATOR , array(__APP_PATH , 'permissions.php'));
$registry->routerConditions = $routerConditions;

/* delego la linea de ejecucion al controlador cuya accion fue invocada en el request */
$registry->router->loader();

<?php

/**
 * archivo para la definicion de constantes de la aplicacion
 *  - url para autoloader
 *  - url a controladores
 *  - etc..
 */

//se parsea el archivo de configuracion
$ev = parse_ini_file("appConfig.ini");

define('__BASE_PATH', $ev["base_path"]);
define('__APP_PATH', __BASE_PATH . "/app");
define('__CONTROLLERS_PATH', __APP_PATH . "/controllers");
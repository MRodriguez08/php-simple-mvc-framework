<?php

/**
 * Application global constants definition file.
 * Here are defined>
 *  - autoloader url
 *  - controller's directory definition
 *  - others..
 */

/**
 * Current script directory to infer other directories.
 */
$scrUrl = dirname($_SERVER['PHP_SELF']);
$scrPath = __FILE__;
/**
 * Base path of the application on the filesystem
 */
$parts =  explode(DIRECTORY_SEPARATOR , $scrPath);
$baseArr = array_slice($parts, 0, count($parts) - 3);
$basePath = join(DIRECTORY_SEPARATOR, $baseArr);
define('__BASE_PATH', $basePath);

/**
 * Base url of the application in the web server
 */
$parts =  explode(DIRECTORY_SEPARATOR , $scrUrl);
define('__BASE_URL','/' . $parts[1]);

/**
 * Application root directory
 */
define('__APP_PATH', __BASE_PATH . "/app");

/**
 * Application controller's directory
 */
define('__CONTROLLERS_PATH', __APP_PATH . "/controllers");
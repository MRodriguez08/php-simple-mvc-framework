<?php

/*
 * This file inicializes the required configurations for this framework and algo loads the needed classes.
 */

/*
 * set up the autoloading 
 */
include  join(DIRECTORY_SEPARATOR, array(__BASE_PATH , 'framework','bootstrap','autoload.php'));

/*
 * create a new instance of the Registry object 
 */	
$registry = new framework\lascano\core\Registry();

/*
 * create a new instance of the Router object 
 */
$registry->router = new framework\lascano\core\Router($registry);

/*
 * create a new instance of the Template object 
 */
$registry->template = new framework\lascano\core\Template($registry);

/*
 * set the controllers path for this application 
 */	
$registry->router->setPath(__CONTROLLERS_PATH);
include join (DIRECTORY_SEPARATOR , array(__BASE_PATH , 'framework','bootstrap','persistence','datasource.php'));
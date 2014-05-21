<?php

/*
 * This file inicializes the required configurations for this framework and algo loads the needed classes.
 */


/*
 * load error configurations for this framework
 */
include  join(DIRECTORY_SEPARATOR, array(__BASE_PATH , 'framework','error','errorConfiguration.php'));

/*
 * set up the autoloading 
 */
include  join(DIRECTORY_SEPARATOR, array(__BASE_PATH , 'framework','autoload.php'));

/*
 * create a new instance of the Registry object 
 */	
$registry = new framework\Registry();

/*
 * create a new instance of the Router object 
 */
$registry->router = new framework\Router($registry);

/*
 * create a new instance of the Template object 
 */
$registry->template = new framework\Template($registry);

/*
 * set the controllers path for this application 
 */	
$registry->router->setPath(__CONTROLLERS_PATH);

include join (DIRECTORY_SEPARATOR , array(__BASE_PATH , 'framework','persistence','datasource','bootstrap.php'));
<?php

/* 
 * Load application base paths
 */
include_once join(DIRECTORY_SEPARATOR, array('framework','bootstrap','define.php'));

/*
 * Initialize framework 
 */
include_once join(DIRECTORY_SEPARATOR, array(__BASE_PATH , 'framework','initFramework.php'));

/*
 * Start the session if not already started
 */
framework\lascano\modules\session\Session::getSession()->startSession();

/* 
 * make the the router execute the requested action 
 */
$registry->router->loader();

<?php

spl_autoload_register(function ($class_name) {
    if (strcmp($class_name, 'LK') == 0) {
        $file = __BASE_PATH . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, array('framework', 'LK.php'));
    } else {
        $pieces = explode("\\", $class_name);
        $file = __BASE_PATH;
        foreach ($pieces as &$i) {
            $file .= "/" . $i;
        }
        $file .= ".php";

        if (file_exists($file) == false) {
            return false;
        }
    }
    include_once $file;
});
<?php

    spl_autoload_register(function ($class_name) {
        $pieces = explode("\\", $class_name); 
        $file = __BASE_PATH;
        foreach ($pieces as &$i) {
            $file .= "/" . $i;
        }
        $file .= ".php";

        if (file_exists($file) == false)
        {
            return false;
        }
        include_once $file;
    });
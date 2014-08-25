<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of LK
 *
 * @author ubuntu
 */
class LK {
    
    private $__BASE_PATH;
    private $__BASE_URL;
    private $config;
    
    public static function app(){       
        
    }
    
    public static function createUrl($route){
        
        
        
        return __BASE_URL . DIRECTORY_SEPARATOR . 'index.php' . DIRECTORY_SEPARATOR . $route;
    }
    
}

<?php

namespace framework;

class Session {
    
    const USER_INFO = 'userInfo';
    const AUTENTICADO = 'autenticado';
    
    public static function has($var){
        return isset($_SESSION[$var]);
    }
    
    public static function get($key){
        if (array_key_exists($key , $_SESSION) == false)
        {
            return null;
        }
        return $_SESSION[$key];
    }
    
    public static function set($key , $value){
        $_SESSION[$key] = $value;
    }
    
}


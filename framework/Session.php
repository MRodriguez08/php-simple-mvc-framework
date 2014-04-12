<?php

namespace framework;

class Session {
    
    const AUTENTICADO = 'autenticado';   
    
    public static function has($var){
        return isset($_SESSION[$var]);
    }
    
    public static function get($var){
        return $_SESSION[$var];
    }
    
}


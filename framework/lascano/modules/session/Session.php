<?php

namespace framework\lascano\modules\session;

class Session {

    const USER_INFO = 'userInfo';
    const AUTHENTICATED = 'authenticated';

    public function has($var) {
        return isset($_SESSION[$var]);
    }

    public function get($key) {
        if (array_key_exists($key, $_SESSION) == false) {
            return null;
        }
        return $_SESSION[$key];
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function startSession() {
        if (session_id() == '' || !isset($_SESSION)) {
            session_start();
            $_SESSION[Session::AUTHENTICATED] = true;
        }
    }

    public function killSession() {
        $_SESSION[Session::AUTHENTICATED] = false;
    }
    
    public static function getSession(){
        return new Session();
    }
    

}

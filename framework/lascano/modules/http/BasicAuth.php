<?php

namespace framework\lascano\modules\http;

/**
 * Description of LKHTTPBasicAuth
 *
 * @author mrodriguez
 */
class BasicAuth {

    public static function check() {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            Response::send('You are not authorized to perform this action', 401);
            exit;
        }
    }

}

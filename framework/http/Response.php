<?php

namespace framework\http;

class Response {
    
    const CONTENT_TYPE_HTML = "text/html";
    const CONTENT_TYPE_JSON = "application/json";
    
    const HTTP_STATUS_ERROR = 500;
    const HTTP_STATUS_OK = 200;

    public static function send($data , $status = 200, $contentType = 'text/html'){
        header('Content-type: ' . $contentType);
        http_response_code($status);
        echo $data;
    }
    
    public static function ok($data , $contentType = 'text/html'){
        header('Content-type: ' . $contentType);
        http_response_code(200);
        echo $data;
    }
    
    public static function error($data , $contentType = 'text/html'){
        header('Content-type: ' . $contentType);
        http_response_code(500);
        echo $data;
    }
    
}


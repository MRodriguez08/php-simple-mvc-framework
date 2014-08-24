<?php

namespace framework\lascano\modules\util;

class Http {
    
    /* HTTP METHODS */
    const REQUEST_METHOD = "REQUEST_METHOD";
    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const METHOD_PUT = "PUT";
    const METHOD_HEAD = "HEAD";
    const METHOD_DELETE = "DELETE";
    
    const REQUEST_URI = "REQUEST_URI";
    
    public function getFullRequestUri(){
        return filter_input(INPUT_SERVER, Http::REQUEST_URI);
    }
    
    public function isGetHttpContextMethod(){
        return (filter_input(INPUT_SERVER, Http::REQUEST_METHOD) == Http::METHOD_GET);
    }
    
    public function isPostHttpContextMethod(){
        return (filter_input(INPUT_SERVER, Http::REQUEST_METHOD) == Http::METHOD_POST);
    }
    
    public function getHttpContextMethod(){
         return filter_input(INPUT_SERVER, Http::REQUEST_METHOD);     
    }
    
}
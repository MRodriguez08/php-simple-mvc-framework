<?php

namespace framework\http;

class HttpUtils {
    
    /* HTTP METHODS */
    const REQUEST_METHOD = "REQUEST_METHOD";
    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const METHOD_PUT = "PUT";
    const METHOD_HEAD = "HEAD";
    const METHOD_DELETE = "DELETE";
    
    public function isGetHttpContextMethod(){
        return (filter_input(INPUT_SERVER, HttpUtils::REQUEST_METHOD) == HttpUtils::METHOD_GET);
    }
    
    public function isPostHttpContextMethod(){
        return (filter_input(INPUT_SERVER, HttpUtils::REQUEST_METHOD) == HttpUtils::METHOD_POST);
    }
    
    public function getHttpContextMethod(){
         return filter_input(INPUT_SERVER, HttpUtils::REQUEST_METHOD);     
    }
    
}
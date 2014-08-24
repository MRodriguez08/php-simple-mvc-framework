<?php

namespace framework\lascano\core\mvc\controller;

use framework\lascano\modules\util\Http;

abstract class RwsController {
    
    /*
     * @registry object
     */
    protected $registry;
    protected $arguments;
    protected $httpMethod;

    function __construct($registry) {
        
        if (\framework\lascano\core\AppConfig::getAppConfigProperty(\framework\lascano\core\AppConfig::CONF_AUTH__BASIC_HTTP_ENABLED))
            \framework\lascano\modules\http\BasicAuth::check();
            
        
        $this->registry = $registry;
        
        //seteo el tipo de encoding de la respuesta
        header('Content-Type: text/html; charset=utf-8');
        
        //lleno los argunmentos con los datos que me envio el cliente
        $this->processRequest();
    }

    /**
     * Descripcion: Hidrata el array $arguments con la informacion enviada desde el cliente dependiendo del
     * metodo que se trate.
     */
    protected function processRequest() {
        $this->httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        
        switch ($this->httpMethod) {            
            case Http::METHOD_GET:
                $this->arguments = $_GET;
                $this->processGet(); 
                break;
            case Http::METHOD_HEAD:
                $this->arguments = $_GET;                
                $this->processHead();                
                break;
            case Http::METHOD_POST:
                $json = file_get_contents('php://input');
                $this->arguments = json_decode($json, true);
                if( $this->arguments == null)
                {
                    $this->arguments = $_POST;
                }
                $this->processPost();
                break;
            case Http::METHOD_PUT:
                $this->processPut();
                break;
            case Http::METHOD_DELETE:
                parse_str(file_get_contents('php://input'), $this->arguments);
                $this->processDelete();
                break;
        }
    }

    /**
     * Function that is executed on GET HTTP Method
     */
    abstract function processGet();
    
    /**
     * Function that is executed on POST HTTP Method
     */
    abstract function processPost();
    
    /**
     * Function that is executed on DELETE HTTP Method
     */
    abstract function processDelete();
    
    /**
     * Function that is executed on PUT HTTP Method
     */
    abstract function processPut();
    
    /**
     * Function that is executed on HEAD HTTP Method
     */
    abstract function processHead();
    
}

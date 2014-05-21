<?php

namespace framework;

abstract class BaseController {
    
    /* constantes para metodos HTTP */
    
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_HEAD = 'HEAD';
    const METHOD_DELETE = 'DELETE';
    
    /*
     * @registry object
     */
    protected $registry;
    protected $arguments;

    function __construct($registry) {
        $this->registry = $registry;
        
        //seteo el tipo de encoding de la respuesta
        header('Content-Type: text/html; charset=utf-8');
        
        //lleno los argunmentos con los datos que me envio el cliente
        $this->fillArguments();
    }

    /**
     * Descripcion: Hidrata el array $arguments con la informacion enviada desde el cliente dependiendo del
     * metodo que se trate.
     */
    protected function fillArguments() {
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        switch ($method) {
            case BaseController::METHOD_GET:
            case BaseController::METHOD_HEAD:
                $this->arguments = $_GET;
                break;
            case BaseController::METHOD_POST:
                $json = file_get_contents('php://input');
                $this->arguments = json_decode($json, true);
                if( $this->arguments == null)
                {
                    $this->arguments = $_POST;
                }
                break;
            case BaseController::METHOD_PUT:
                break;
            case BaseController::METHOD_DELETE:
                parse_str(file_get_contents('php://input'), $this->arguments);
                break;
        }
    }

    /**
     * @all controllers must contain an index method
     */
    abstract function index();
}

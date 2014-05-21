<?php

namespace framework;

use app\models\business\util\Constantes;
use app\models\business\util\SessionUtil;

use framework\AppConfig;

class Router {
    
    const QUERY_ROUTE_PARAM = 'rt';
    
    /*
     * @the registry
     */

    private $registry;
    //private $servicesParams;
    /*
     * @the controller path
     */
    private $path;
    //private $args = array();

    public $file;
    public $controller;
    public $action;

    function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     *
     * @set controller directory path
     *
     * @param string $path
     *
     * @return void
     *
     */
    function setPath($path) {
        /* chequeo si el directorio efectivamente existe */
        if (is_dir($path) == false) {
            throw new Exception('Url a controladores invalida `' . $path . '`');
        }
        /* seteo la url a los controladores */
        $this->path = $path;
    }

    /**
     *
     * @get the controller
     *
     * @access private
     *
     * @return void
     *
     */
    private function getController() {

        /*
         * get the route from the url 
         */
        $route = (empty($_GET[Router::QUERY_ROUTE_PARAM])) ? '' : $_GET[Router::QUERY_ROUTE_PARAM];
        if (empty($route))
            $route = (empty($_POST[Router::QUERY_ROUTE_PARAM])) ? '' : $_POST[Router::QUERY_ROUTE_PARAM];
        if (empty($route)) {
            $route = 'Index';
        } else {
            /* Obtengo los parametros de la ruta */
            $parts = explode('/', $route);
            $this->controller = $parts[0];
            if (isset($parts[1])) {
                $this->action = $parts[1];
            }
        }

        /* controlador por defecto es el Index */
        if (empty($this->controller)) {
            $this->controller = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_DEFAULT_CONTROLLER);
        }

        /* accion por defecto es index */
        if (empty($this->action)) {
            $this->action = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_DEFAULT_ACTION);
        }

        /*         * * set the file path ** */
        $this->controller = strtoupper(substr($this->controller, 0, 1)) . substr($this->controller, 1);
        $this->file = join(DIRECTORY_SEPARATOR , array($this->path , $this->controller . 'Controller.php'));
    }

    /**
     *
     * @load the controller
     *
     * @access public
     *
     * @return void
     *
     */
    public function loader() {

        /** * check the route ** */
        $this->getController();

        /** * if the file is not there diaf ** */
        if (is_readable($this->file) == false) {
            echo $this->file;
            die('404 Not Found');
        }

        /** * include the controller ** */
        include $this->file;

        /** * a new controller class instance ** */
        $class = 'app\\controllers\\' . $this->controller . 'Controller';
        $controller = new $class($this->registry);

        /*         * * check if the action is callable ** */
        if (is_callable(array($controller, $this->action)) == false) 
        {
            $action = 'index';
        } 
        else 
        {
            $action = $this->action;
        }
        
        $enabled = AppConfig::getAppConfigProperty(AppConfig::CONF_AUTH_ENABLED);
        if ($enabled == 1)
        {
            $authRules = new \framework\security\AuthRules();
            $authRules->checkAuthorizationRules($this->controller, $action);
        }
        
        /** * run the action ** */
        $controller->$action();
    }

}

<?php

namespace app\controllers;

use framework\BaseController;
use app\models\business\BusinessFactory;
use app\models\business\util\JSonUtil;
use framework\http\HttpUtils;

class UsuarioController extends BaseController {

    private $negocioUsuario = null;
    private $httpUtil;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->httpUtil = new HttpUtils();
        $this->negocioUsuario = BusinessFactory::getUsuarioBusiness($this->registry);
    }

    public function index() {
        $this->registry->template->show('index');
    }

    public function obtenerTodosUsuarios() {

        $resp = $this->negocioUsuario->obtenerTodosUsuarios();
        echo JSonUtil::arrayToJSon($resp);
    }

    public function obtenerTodosRoles() {

        $resp = $this->negocioUsuario->obtenerTodosRoles();
        echo JSonUtil::arrayToJSon($resp);
    }
    
    public function login(){
        if ($this->httpUtil->isPostHttpContextMethod()){
            $algo = "";
        }
        $this->registry->template->show('usuario:login');
    }

}

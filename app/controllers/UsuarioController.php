<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\business\BusinessFactory as BusinessFactory;
use app\models\business\util\JSonUtil as JSonUtil;

class UsuarioController extends BaseController {

    private $negocioUsuario = null;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->negocioUsuario = BusinessFactory::getNegocioUsuario($this->registry);
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

}

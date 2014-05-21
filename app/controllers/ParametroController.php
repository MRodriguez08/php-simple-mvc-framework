<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\business\BusinessFactory as BusinessFactory;
use framework\http\Response;

class ParametroController extends BaseController {

    private $negocioParametro = null;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->negocioParametro = BusinessFactory::getParametroBusiness($this->registry);
    }

    public function index() {
        $this->registry->template->show('admin:configuracion:gestionParametros');
    }

}

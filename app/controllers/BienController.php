<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\business\BusinessFactory as BusinessFactory;
use framework\http\Response;

class BienController extends BaseController {

    private $negocioBien = null;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->negocioBien = BusinessFactory::getBienBusiness($this->registry);
        
    }

    public function index() {
        $this->registry->template->show('index');
    }
    
    public function obtenerTodosLosBienes(){
        Response::ok($this->negocioBien->getAllBien());
    }
    
    public function obtenerDatosDeBien(){
        Response::ok($this->negocioBien->viewBien($this->arguments));
    }

}

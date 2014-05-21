<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\business\BusinessFactory as BusinessFactory;
use framework\http\Response;

class <class-name> extends BaseController {

    private $negocio<entity-name> = null;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->negocio<entity-name> = BusinessFactory::get<entity-name>Business($this->registry);
    }

    public function index() {
        $this->registry->template->show('index');
    }

}

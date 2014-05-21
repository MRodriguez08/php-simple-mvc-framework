<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\business\BusinessFactory as BusinessFactory;
use framework\http\Response;

class AdminController extends BaseController {

    private $negocioAdmin = null;

    public function __construct($registry) {
        parent::__construct($registry);
        //$this->negocioAdmin = BusinessFactory::getAdminBusiness($this->registry);
    }

    public function index() {
        $this->registry->template->show('admin:index');
    }

}

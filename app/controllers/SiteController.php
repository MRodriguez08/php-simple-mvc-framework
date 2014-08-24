<?php

namespace app\controllers;

use framework\lascano\core\mvc\controller\BaseController;

class SiteController extends BaseController {

    public function __construct($registry) {
        parent::__construct($registry);
    }

    public function index() {
        
        $this->registry->template->show('site:index');
    }

}

<?php

namespace app\controllers;

use framework\lascano\core\mvc\controller\BaseController;

class Sbadmin2Controller extends BaseController {

    public function __construct($registry) {
        parent::__construct($registry);
    }

    public function index() {
        
        $this->registry->template->show('sbadmin2:index');
    }
    
    public function partial1() {
        $this->registry->template->show('sbadmin2:partial1');
    }
    
    public function partial2() {
        $this->registry->template->show('sbadmin2:partial2');
    }

}

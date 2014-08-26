<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use framework\lascano\core\mvc\controller\RwsController;
use framework\lascano\modules\http\Response;
/**
 * Description of MyRestController
 *
 * @author ubuntu
 */
class MyRestController extends RwsController {
    
    public function processDelete() {
        
        
        Response::send('This is MyRestController Delete response!!');
    }

    public function processGet() {
        
        
        Response::send('This is MyRestController Get response!!');
    }

    public function processHead() {
        
        
        Response::send('This is MyRestController Head response!!');
    }

    public function processPost() {
        
        
        Response::send('This is MyRestController Post response!!');
    }

    public function processPut() {
        
        
        Response::send('This is MyRestController Put response!!');
    }

}

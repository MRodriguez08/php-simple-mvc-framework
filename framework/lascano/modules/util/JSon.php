<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\lascano\modules\util;

/**
 * Description of JSon
 *
 * @author ubuntu
 */
class JSon {
    
    public static function convertToJson($data){
        
        if (is_array($data)){
            return json_encode($data);
        } else {
            throw new Exception('Not implemented yet');
        }
        
    }
    
    public static function jsonToArray($jsonData){
        
        if (is_array($data)){
            return json_decode($data);
        } else {
            throw new Exception('Not implemented yet');
        }
        
    }
    
}

<?php

namespace app\models\business; 

use framework\business\Business;

interface NegocioParametro extends Business {
    
    public function createParametro($data);
    
    public function deleteParametro($data);
    
    public function updateParametro($data);
    
    public function viewParametro($data);
    
    public function getAllParametro($data);
    
}

<?php

namespace app\models\business; 

use framework\business\Business;

interface IBienBusiness extends Business {
    
    public function createBien($data);
    
    public function deleteBien($data);
    
    public function updateBien($data);
    
    public function getAllBien($data);
    
}

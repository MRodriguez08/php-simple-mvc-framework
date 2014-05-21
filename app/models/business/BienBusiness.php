<?php

namespace app\models\business; 

use app\models\business\util\JSonUtil;
use framework\business\BusinessImpl;

class BienBusiness extends BusinessImpl implements IBienBusiness {
       
    public function __construct($globalRegistry) {
        parent::__construct($globalRegistry);
    }
    
    public function createBien($data){
        
        
    }
    
    public function deleteBien($data){
        
        
    }
    
    public function updateBien($data){
        
        
    }
    
    public function viewBien($data){
        $collection = $this->noSqlDb->bienes;
        $filter = array("_id" =>  new \MongoId($data["id"]));
        $cursor =   $collection->find($filter);
        return JSonUtil::mongoCursorToJson($cursor);
    }
    
    public function getAllBien($data = null){
        $collection = $this->noSqlDb->bienes;
        $cursor =   $collection->find();
        return JSonUtil::mongoCursorToJson($cursor);
    }
    
}
<?php

namespace app\models\business; 

use framework\business\Business;

interface <interface-name> extends Business {
    
    public function create<entity-name>($data);
    
    public function delete<entity-name>($data);
    
    public function update<entity-name>($data);
    
    public function view<entity-name>($data);
    
    public function getAll<entity-name>($data);
    
}

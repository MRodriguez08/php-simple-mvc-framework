<?php

namespace framework\business;
use framework\AppConfig;

class BusinessImpl implements Business {
    
    protected $noSqlDb = null;
    protected $registry;
    
    public function __construct($registry) {
        $this->registry = $registry;
        
        $dataSourceType = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_DB_SOURCE);
        if (strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_MIXED) == 0 || strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_NORELATIONAL) == 0){
            $defaultNoRelationalDb = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_NR_DEFAULT_DATABASE);
            $this->noSqlDb = $this->registry->noSqlDbClient->$defaultNoRelationalDb;
        }
    }
    
    
}
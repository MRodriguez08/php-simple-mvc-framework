<?php

use framework\AppConfig;

$dbtype = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_NR_DBTYPE);
$noSqlDbClient = null;
switch ($dbtype){
    case AppConfig::APP_CONST_NRDB_TYPE_MONGODB:
        $noSqlDbClient = getMongoClient();
        break;
    default:
        die("ERROR08 > No relational database type not supported");    
}

function getMongoClient(){
    $sources = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_NR_DBTYPE) . "://" . AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_NR_SOURCES)[0];
    return new MongoClient($sources);    
}
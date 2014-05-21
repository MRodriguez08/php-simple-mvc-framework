<?php

/*
 * This file loads the data sources configured in appConfig.ini. 
 * Depending on this configuration creates de relational and no relational database connections.
 */

use framework\AppConfig;

$dataSourceType = AppConfig::getAppConfigProperty(AppConfig::CONF_PARAM_DB_SOURCE);

if (strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_MIXED) == 0 || strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_RELATIONAL) == 0)
{
    include join (DIRECTORY_SEPARATOR , array(__BASE_PATH , 'framework','persistence','datasource','factory','relational.php'));
    $registry->entityManager = $entityManager;
}

if (strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_MIXED) == 0 || strcmp($dataSourceType, AppConfig::APP_CONST_DBSOURCE_TYPE_NORELATIONAL) == 0)
{
    include join (DIRECTORY_SEPARATOR , array(__BASE_PATH , 'framework','persistence','datasource','factory','norelational.php'));
    $registry->noSqlDbClient = $noSqlDbClient;
}



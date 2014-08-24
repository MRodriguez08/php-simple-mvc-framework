<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use framework\lascano\core\AppConfig as Config;


if (strcmp(Config::getAppConfigProperty(Config::CONF_PARAM_R_PROVIDER), Config::APP_CONST_RDB_PROVIDER_DOCTRINE) == 0) {
    require_once __BASE_PATH . '/vendor/autoload.php';

    $paths = array(__BASE_PATH . "/app/models/persistence/entities/");
    $connectionParams = array(
        'driver' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBDRIVER),
        'user' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBUSER),
        'password' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBPASSWORD),
        'dbname' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBNAME),
        'port' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBPORT)
    );
    $isDevMode = false;

    $config = Setup::createConfiguration($isDevMode);
    $driver = new AnnotationDriver(new AnnotationReader(), $paths);

    // registering noop annotation autoloader - allow all annotations by default
    AnnotationRegistry::registerLoader('class_exists');
    $config->setMetadataDriverImpl($driver);

    $dbClient = EntityManager::create($connectionParams, $config);
    
} else if (strcmp(Config::getAppConfigProperty(Config::CONF_PARAM_R_PROVIDER), Config::APP_CONST_RDB_PROVIDER_MYSQLI) == 0) {
    
    $dbClient = new mysqli(
        Config::getAppConfigProperty(Config::CONF_PARAM_R_DBHOST), 
        Config::getAppConfigProperty(Config::CONF_PARAM_R_DBUSER), 
        Config::getAppConfigProperty(Config::CONF_PARAM_R_DBPASSWORD), 
        Config::getAppConfigProperty(Config::CONF_PARAM_R_DBNAME)
    );

    if ($dbClient->connect_errno > 0) {
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    
}
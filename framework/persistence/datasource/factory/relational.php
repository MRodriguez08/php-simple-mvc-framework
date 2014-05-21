<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use framework\AppConfig as Config;

require_once __BASE_PATH . '/vendor/autoload.php';

$paths = array(__BASE_PATH . "/app/models/persistence/entities/");
$isDevMode = false;
$connectionParams = array(
    'driver' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBDRIVER),
    'user' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBUSER),
    'password' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBPASSWORD),
    'dbname' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBNAME),
    'port' => Config::getAppConfigProperty(Config::CONF_PARAM_R_DBPORT)
);

$config = Setup::createConfiguration($isDevMode);
$driver = new AnnotationDriver(new AnnotationReader(), $paths);

// registering noop annotation autoloader - allow all annotations by default
AnnotationRegistry::registerLoader('class_exists');
$config->setMetadataDriverImpl($driver);

$entityManager = EntityManager::create($connectionParams, $config);

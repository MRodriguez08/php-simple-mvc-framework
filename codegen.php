<?php

include_once join(DIRECTORY_SEPARATOR, array('conf','define.php'));
include_once join(DIRECTORY_SEPARATOR, array('framework','autoload.php'));

use framework\AppConfig as Conf;
use framework\util\RegExpUtil as RUtil;

// defined operations
const CREATE_PERSISTENCE_CLASSES = "gen-persistence";
const CREATE_BUSINESS_CLASSES = "gen-business";
const CREATE_VIEWS = "gen-views";


if (defined('STDIN')) {
    
    parse_str(implode('&', array_slice($argv, 1)), $_GET);

    if (count($_GET) == 0) {
        echo "missing arguments\n";
        printUsage();
        exit(-1);
    }
    $arguments = array_keys($_GET);
    $operation = $arguments[0];

    switch ($operation) {
        case CREATE_PERSISTENCE_CLASSES:
            echo "generating persistence classes...\n";
            generatePersistence($arguments);
            break;
        case CREATE_BUSINESS_CLASSES:
            echo "generating business classes...\n";
            generateBusiness($arguments);
            break;
        case CREATE_VIEWS:
            echo "generating views...\n";
            break;
        default:
            echo "\ninvalid operation\n";
            printUsage();
    }
}

function printUsage(){
    echo "\n\n############################################################################\n";
    echo "\ncode generator v1.0\n\n";
    echo "\nphp codegen.php [gen-persistence | gen-business | gen-views] arguments\n";
    echo "\n -> gen-persistence User\n";
    echo "\n -> gen-business User\n";
    echo "\n -> gen-views User crud\n";
    echo "\n############################################################################\n\n";
}

function generateBusiness($arguments) {
    
    //var_dump($arguments);
    if (count($arguments) < 2) {
        echo "\nmissing entity name\n";
        printUsage();
        exit(-1);
    }    
    
    $implPrefix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_BUSINESS_IMPLEMENTATION), "prefix");
    $implSuffix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_BUSINESS_IMPLEMENTATION), "suffix");
    
    $intPrefix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_BUSINESS_INTERFACE), "prefix");
    $intSuffix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_BUSINESS_INTERFACE), "suffix");

    $entityPrefix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_PERSISTENCE_ENTITY), "prefix");
    $entitySuffix = RUtil::getTextBetweenTags(Conf::getAppConfigProperty(Conf::CONF_NAMING_PERSISTENCE_ENTITY), "suffix");
        
    $businessImplementationName =  $implPrefix . $arguments[1] . $implSuffix;
    $businessInterfaceName =  $intPrefix . $arguments[1] . $intSuffix;
    $entityName =  $entityPrefix . $arguments[1] . $entitySuffix;
    
    $entityFile = join(DIRECTORY_SEPARATOR , array(__APP_PATH , "models" , "persistence" , "entities" , $entityName . ".php"));
    if (file_exists($entityFile) == false){
        echo "\nentity file not found ({$entityFile})";
        exit(-1);
    }
    
    $businessImplementationFile = join(DIRECTORY_SEPARATOR , array(__APP_PATH , "models" , "business" , $businessImplementationName . ".php"));
    if (file_exists($businessImplementationFile) == true){
        echo "\nbusiness class file already exists ({$businessImplementationFile})";
        exit(-1);
    }
    
    $businessInterfaceFile = join(DIRECTORY_SEPARATOR , array(__APP_PATH , "models" , "business" , $businessInterfaceName . ".php"));
    if (file_exists($businessInterfaceFile) == true){
        echo "\ninterface class file already exists ({$businessInterfaceFile})";
        exit(-1);
    }
    
    $templateImplementationFile =  join(DIRECTORY_SEPARATOR, array("framework" , "code-generator" , "templates" , "business" , "business.php"));
    if (!copy($templateImplementationFile, $businessImplementationFile)) {
        echo "Error cloning file from template {$businessImplementationFile}";
    }
    
    $templateInterfaceFile = join(DIRECTORY_SEPARATOR, array("framework" , "code-generator" , "templates" , "business" , "ibusiness.php"));
    if (!copy($templateInterfaceFile, $businessInterfaceFile)) {
        echo "Error cloning file from template {$businessInterfaceFile}";
    }
    
    $str=file_get_contents($businessInterfaceFile);
    $str=str_replace("<interface-name>", $businessInterfaceName ,$str);
    file_put_contents($businessInterfaceFile, $str);
    
    $str=file_get_contents($businessImplementationFile);
    $str=str_replace("<interface-name>", $businessInterfaceName ,$str);
    $str=str_replace("<class-name>", $businessImplementationName ,$str);
    file_put_contents($businessImplementationFile, $str);
    
}

function generatePersistence($arguments) {
    
}

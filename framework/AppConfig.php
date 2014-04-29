<?php

/**
 * Clase auxiliar para el manejo de los parametros de configuracion de la applicacion
 */

    namespace framework;

    class AppConfig {
        
        /* APPLICATION CONFIGURATION FILE */
        
        
        
        /* APPLICATION CONSTATS */
        const APP_CONST_NRDB_TYPE_MONGODB = "mongodb";
        const APP_CONST_NRDB_TYPE_COACHDB = "coachdb";
        
        /* parametros configurables de la applicacion */
        
        const CONF_PARAM_BASE_PATH = "base_path";
        
        const CONF_PARAM_R_DBDRIVER = "database.r.driver";
        const CONF_PARAM_R_DBHOST = "database.r.host";
        const CONF_PARAM_R_DBUSER = "database.r.user";
        const CONF_PARAM_R_DBPASSWORD = "database.r.password";
        const CONF_PARAM_R_DBNAME = "database.r.name";        
        const CONF_PARAM_R_DBPORT = "database.r.port";    
        
        const CONF_PARAM_NR_DBTYPE = "database.nr.dbtype";
        const CONF_PARAM_NR_SOURCES = "database.nr.sources";   
        
        const CONF_PARAM_DEFAULT_ACTION = 'routing.default_action';
        const CONF_PARAM_DEFAULT_CONTROLLER = 'routing.default_controller';
        
        const CONF_AUTH_ENABLED = 'auth.enabled';
        const CONF_AUTH_RULES_FILE = 'auth.rules_file'; 
        
        const CONF_NAMING_BUSINESS_IMPLEMENTATION = 'naming.business.implementation'; 
        const CONF_NAMING_BUSINESS_INTERFACE = 'naming.business.interface';
        const CONF_NAMING_PERSISTENCE_DAO_INTERFACE = 'naming.persistence.dao.interface';
        const CONF_NAMING_PERSISTENCE_DAO_IMPLEMENTATION = 'naming.persistence.dao.implementation';
        const CONF_NAMING_PERSISTENCE_ENTITY = 'naming.persistence.entity';        
        
        public static function getAppConfigProperty($prop){
            $APP_CONFIG_FILE = join(DIRECTORY_SEPARATOR , array(__BASE_PATH , 'conf' , 'appConfig.ini'));   
            $ev = parse_ini_file($APP_CONFIG_FILE);
            return $ev[$prop];
        }
        
    }
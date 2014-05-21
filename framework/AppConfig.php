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
        
        const APP_CONST_DBSOURCE_TYPE_NORELATIONAL = "nosql";
        const APP_CONST_DBSOURCE_TYPE_RELATIONAL = "sql";
        const APP_CONST_DBSOURCE_TYPE_MIXED = "mixed";
        
        const APP_CONST_AUTH_WNA_REDIRECT_TO_LOGIN = "redirect_to_login";
        const APP_CONST_AUTH_WNA_DIE = "die";
        
        /* parametros configurables de la applicacion */
        
        const CONF_PARAM_BASE_PATH = "base_path";
        
        const CONF_PARAM_DB_SOURCE = "database.general.source";
        const CONF_PARAM_R_DBDRIVER = "database.r.driver";
        const CONF_PARAM_R_DBHOST = "database.r.host";
        const CONF_PARAM_R_DBUSER = "database.r.user";
        const CONF_PARAM_R_DBPASSWORD = "database.r.password";
        const CONF_PARAM_R_DBNAME = "database.r.name";        
        const CONF_PARAM_R_DBPORT = "database.r.port";    
        
        const CONF_PARAM_NR_DBTYPE = "database.nr.dbtype";
        const CONF_PARAM_NR_SOURCES = "database.nr.sources";   
        const CONF_PARAM_NR_DEFAULT_DATABASE = "database.nr.defaultdatabase";   
        
        const CONF_PARAM_DEFAULT_ACTION = 'routing.default_action';
        const CONF_PARAM_DEFAULT_CONTROLLER = 'routing.default_controller';
        
        const CONF_AUTH_ENABLED = 'auth.enabled';
        const CONF_AUTH_RULES_FILE = 'auth.rules_file'; 
        const CONF_AUTH_WHEN_NOT_ALLOWED_ACTION = 'auth.when_not_allowed'; 
        const CONF_AUTH_LOGIN_PAGE = 'auth.login_page';       
        
        const CONF_NAMING_BUSINESS_IMPLEMENTATION = 'naming.business.implementation'; 
        const CONF_NAMING_BUSINESS_INTERFACE = 'naming.business.interface';
        const CONF_NAMING_PERSISTENCE_DAO_INTERFACE = 'naming.persistence.dao.interface';
        const CONF_NAMING_PERSISTENCE_DAO_IMPLEMENTATION = 'naming.persistence.dao.implementation';
        const CONF_NAMING_PERSISTENCE_ENTITY = 'naming.persistence.entity';        
        
        const CONF_NAMING_CONTROLLER_IMPLEMENTATION = 'naming.controller.implementation'; 
        
        public static function getAppConfigProperty($prop){
            $APP_CONFIG_FILE = join(DIRECTORY_SEPARATOR , array(__BASE_PATH , 'conf' , 'appConfig.ini'));   
            $ev = parse_ini_file($APP_CONFIG_FILE);
            return $ev[$prop];
        }
        
    }
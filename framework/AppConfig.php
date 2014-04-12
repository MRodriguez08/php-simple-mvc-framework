<?php

/**
 * Clase auxiliar para el manejo de los parametros de configuracion de la applicacion
 */

    namespace framework;

    class AppConfig {
        
        /* archivo de configuracion de la aplicacion */     
        
        /* parametros configurables de la applicacion */
        
        const CONF_PARAM_BASE_PATH = "base_path";
        
        const CONF_PARAM_DBDRIVER = "database.driver";
        const CONF_PARAM_DBHOST = "database.host";
        const CONF_PARAM_DBUSER = "database.user";
        const CONF_PARAM_DBPASSWORD = "database.password";
        const CONF_PARAM_DBNAME = "database.name";        
        
        const CONF_PARAM_DEFAULT_ACTION = 'routing.default_action';
        const CONF_PARAM_DEFAULT_CONTROLLER = 'routing.default_controller';
        
        const CONF_AUTH_ENABLED = 'auth.enabled';
        const CONF_AUTH_RULES_FILE = 'auth.rules_file';       
        
        public static function getAppConfigProperty($prop){
            $APP_CONFIG_FILE = join(DIRECTORY_SEPARATOR , array(__BASE_PATH , 'conf' , 'environmentVariables.ini'));   
            $ev = parse_ini_file($APP_CONFIG_FILE);
            return $ev[$prop];
        }
        
    }
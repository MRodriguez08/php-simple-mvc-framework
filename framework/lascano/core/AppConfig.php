<?php

/**
 * Clase auxiliar para el manejo de los parametros de configuracion de la applicacion
 */

namespace framework\lascano\core;

class AppConfig {
    /* APPLICATION CONFIGURATION FILE */

    const APP_CONST_RDB_PROVIDER_DOCTRINE = "doctrine";
    const APP_CONST_RDB_PROVIDER_MYSQLI = "mysqli";

    /* APPLICATION CONSTATS */
    const APP_CONST_NRDB_TYPE_MONGODB = "mongodb";
    const APP_CONST_NRDB_TYPE_COACHDB = "coachdb";
    const APP_CONST_DBSOURCE_TYPE_NORELATIONAL = "nosql";
    const APP_CONST_DBSOURCE_TYPE_RELATIONAL = "sql";
    const APP_CONST_DBSOURCE_TYPE_MIXED = "mixed";
    const APP_CONST_AUTH_WNA_REDIRECT_TO_LOGIN = "redirect_to_login";
    const APP_CONST_AUTH_WNA_DIE = "die";

    /* parametros configurables de la applicacion */
    const CONF_PARAM_BASE_PATH = "basePath";
    const CONF_PARAM_DB_SOURCE = "database.source";
    const CONF_PARAM_R_PROVIDER = "database.relational.provider";
    const CONF_PARAM_R_DBDRIVER = "database.relational.driver";
    const CONF_PARAM_R_DBHOST = "database.relational.dbHost";
    const CONF_PARAM_R_DBUSER = "database.relational.dbUser";
    const CONF_PARAM_R_DBPASSWORD = "database.relational.dbPassword";
    const CONF_PARAM_R_DBNAME = "database.relational.dbName";
    const CONF_PARAM_R_DBPORT = "database.relational.dbPort";
    const CONF_PARAM_NR_DBTYPE = "database.noRelational.dbtype";
    const CONF_PARAM_NR_SOURCES = "database.noRelational.sources";
    const CONF_PARAM_NR_DEFAULT_DATABASE = "database.noRelational.defaultDatabase";
    const CONF_PARAM_DEFAULT_ACTION = 'routing.defaultAction';
    const CONF_PARAM_DEFAULT_CONTROLLER = 'routing.defaultController';
    const CONF_AUTH_ENABLED = 'authentication.enabled';
    const CONF_AUTH__BASIC_HTTP_ENABLED = 'authentication.basicHttpEnabled';
    const CONF_AUTH_RULES_FILE = 'authentication.rulesFile';
    const CONF_AUTH_WHEN_NOT_ALLOWED_ACTION = 'authentication.onNotAllowed';
    const CONF_AUTH_LOGIN_PAGE = 'authentication.loginPage';
    const CONF_NAMING_BUSINESS_IMPLEMENTATION = 'codeGenerator.business.implementation';
    const CONF_NAMING_BUSINESS_INTERFACE = 'codeGenerator.business.interface';
    const CONF_NAMING_PERSISTENCE_DAO_INTERFACE = 'codeGenerator.persistence.dao.interface';
    const CONF_NAMING_PERSISTENCE_DAO_IMPLEMENTATION = 'codeGenerator.persistence.dao.implementation';
    const CONF_NAMING_PERSISTENCE_ENTITY = 'codeGenerator.persistence.entity';
    const CONF_NAMING_CONTROLLER_IMPLEMENTATION = 'codeGenerator.controller.implementation';

    public static function getAppConfigProperty($prop) {
        include join(DIRECTORY_SEPARATOR, array(__BASE_PATH, 'conf', 'appConfig.php'));
        $appConfig = $conf;
        $arrKeys = explode('.', $prop);
        $tmp = $appConfig;
        for ($i = 0; $i < count($arrKeys); $i++) {
            $tmp = $tmp[$arrKeys[$i]];
        }
        return $tmp;
    }

}

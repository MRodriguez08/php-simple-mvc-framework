<?php

$conf = array(
    'basePath' => '/opt/lampp/htdocs/lw-file-manager',
    'database' => array(
        /**
         * Defines which data sources will feed this applicacion
         * possibles values
         *      sql => relational database
         *      nosql => no relational database
         *      mixed => both
         */
        'source' => 'sql',
        'relational' => array(
            /**
             *  The persistence provider you will you in the application
             *  values
             *      doctrine
             *      mysqli
             */
            'provider' => 'mysqli',
            /**
             *  Values
             *      postgresql = pdo_pgsql
             *      mysql = pdo_mysql
             */
            'driver' => 'pdo_mysql',
            'dbUser' => 'root',
            'dbPassword' => 'ms_admin',
            'dbName' => 'lwfm_db',
            'dbHost' => 'localhost',
            /**
             *  Defaults 
             *      mysql = 3306
             *      postgresql = 5432
             */
            'dbPort' => '3306',
        ),
        'noRelational' => array(
            /**
             *  Possible values
             *      mongodb
             *      oachdb
             */
            'dbtype' => '',
            /**
             * Default database name for connection constructor
             */
            'defaultDatabase' => '',
            /**
             * The list of all database servers
             */
            'sources' => array(
            ),
        ),
    ),
    'routing' => array(
        'defaultController' => 'Site',
        'defaultAction' => 'index',
    ),
    'urlManager' => array(
        'routeParameter' => 'rt'
    ),
    'authentication' => array(
        /**
         * Specifies whether the rights restrictions should be excecuted or not
         * if true, you should specify the auth.rules_file parameter.
         */
        'enabled' => false,
        /**
         * Specifies whether the rights restrictions should be excecuted or not
         * if true, you should specify the auth.rules_file parameter.
         */
        'basicHttpEnabled' => false,
        /**
         * The file that defines authorizarion rules
         */
        'rulesFile' => 'authRules.php',
        /**
         * Action to be taken if the action requested IS NOT allowed
         * possibles values are [ redirect_to_login | die ]
         * if set to redirect_to_login, then you should specify the auth.login_page parameter
         */
        'onNotAllowed' => 'redirect_to_login',
        /**
         * Page to redirect in case the request the request is not allowed or other internal error happens.
         * it is relevant if auth.when_not_allowed=redirect_to_login
         */
        'loginPage' => 'usuario:login',
        'userRolesTable' => ''
    ),
    'webservices' => array(
        'port' => '80'
    ),
    /**
     * In this section you need to define the naming convention you will use for
     * classes in persistence, business and presentation layers. This will be used
     * when creating new classes with codegen
     * format: <prefix>prefix</prefix>entity-name<suffix>suffix</suffix>
     */
    'codeGenerator' => array(
        'persistence' => array(
            'implementation' => '',
            'interface' => '',
        ),
        'business' => array(
            'implementation' => '',
            'interface' => '',
        ),
        'controller' => array(
            'implementation' => '',
            'interface' => '',
        ),
    )
);


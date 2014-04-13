<?php

use framework\security\AuthRules;

/**
 * DEFINO LOS ROLES A USAR EN LA APLICACION
 * Los mismos deben coincidir con los roles definidos en la base de datos
 * (ver parametros auth.rules_file y auth.user_roles_table en archivo de configuracion)
 */

$userRoles = array(
    'administrador' => 1,
    'cliente' => 2
);

/** 
 * Sintaxis : MetodoHTTP->Controlador->Action->Permisos 
 * Si no hay permiso definido, se da como valido
 */

// formato [ autenticado(bool), [roles permitidos] ]
$getMethods = [
    "Usuario" => [
        "index" => [
            AuthRules::DENY_ALL
        ]
    ]
];

$postMethods = [
   
];

$putMethods = [
   
];

$deleteMethods = [
   
];
<?php

/** 
 * Sintaxis : MetodoHTTP->Controlador->Action->Permisos 
 * Si no hay permiso definido, se da como valido
 */

use app\models\business\util\Constantes;

// formato [ autenticado(bool), [roles permitidos] ]
$getMethods = [
    "Usuario" => [
        "obtenerTodosUsuarios" => [true, [
            Constantes::ID_ROL_ADMINISTRADOR
        ]],
        "obtenerDatosDeUsuarioLogueado" => [true, [
            Constantes::ID_ROL_ADMINISTRADOR_ESTUDIO
        ]],
    ]
];

$postMethods = [
   
];

$routerConditions = [
    Constantes::METHOD_GET => $getMethods,
    Constantes::METHOD_POST => $postMethods,
    "PermisoEspecial" => ["Index"]
];
<?php

namespace app\models\business\util;

class Constantes {

    
    /* ROLES DE USUARIOS */
    const ID_ROL_ADMINISTRADOR = 1;
    const ID_ROL_ADMINISTRADOR_ESTUDIO = 2;
    const ID_ROL_USUARIO_ESTUDIO = 3;
    
    /* VARIABLES DE SESION */
    const SESS_AUTENTICADO = "autenticado";
    const SESS_USUARIO = "usuario";
    const SESS_USUARIO_CEDULA = "cedula";
    const SESS_USUARIO_ROLES = "rolesUsuario";
    const SESS_USUARIO_NOMBRES = "nombres";
    
    const SESS_ORG = "org";
    const SESS_ORG_RUT = "rutOrg";
    const SESS_ORG_RAZON_SOCIAL = "razonSocial";
    
    const REGISTRY_ENTITY_MANAGER = "entityManager";
    const SEPARADOR_ARRAY = ";";
    
    /* CONSTANTES DE INVOCACION */
    const REQUEST_METHOD = "REQUEST_METHOD";
    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const METHOD_PUT = "PUT";
    const METHOD_HEAD = "HEAD";
    const METHOD_DELETE = "DELETE";
    
    /* RESULTADOS */
    const RESULTADO_EXITO = "OPERACION_EXITOSA";
    const RESULTADO_FALLA = "OPERACION_ABORTADA";
    
    /* CODIGOS DE ERROR */
    const ERR_COD_BADINVMETH = "BAD_INVOCATION_METHOD";
    const ERR_COD_USRNOTAUTH = "USER_NOT_AUTHENTICATED";
    const ERR_COD_USRNOTAUUTHORIZED = "USER_NOT_AUTHORIZED";
    const ERROR_PRIVILEGIOS_INSUFICIENTES = "NOT_ENOUGH_PRIVILEGES";
    
    /* ESTADOS DE CERTIFICADOS */
    const ID_ESTADO_CERTIFICADO_VIGENTE = 1;
    const ID_ESTADO_CERTIFICADO_VENCIDO = 2;
    const ID_ESTADO_CERTIFICADO_RENOVADO = 3;
    
}

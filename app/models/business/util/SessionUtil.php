<?php

namespace app\models\business\util;

class SessionUtil {

    public static function sessionUsuarioAdministrador() {
        return ($_SESSION[Constantes::SESS_AUTENTICADO] == true && in_array(Constantes::ID_ROL_ADMINISTRADOR, $_SESSION[Constantes::SESS_USUARIO][Constantes::SESS_USUARIO_ROLES]));
    }

    public static function sessionUsuarioAdministradorEstudio() {
        return ($_SESSION[Constantes::SESS_AUTENTICADO] == true && in_array(Constantes::ID_ROL_ADMINISTRADOR_ESTUDIO, $_SESSION[Constantes::SESS_USUARIO][Constantes::SESS_USUARIO_ROLES]));
    }

    public static function sessionUsuarioEstudio() {
        return ($_SESSION[Constantes::SESS_AUTENTICADO] == true && in_array(Constantes::ID_ROL_USUARIO_ESTUDIO, $_SESSION[Constantes::SESS_USUARIO][Constantes::SESS_USUARIO_ROLES]));
    }

    public static function getMaximoRolUsuario() {
        return min($_SESSION[Constantes::SESS_USUARIO][Constantes::SESS_USUARIO_ROLES]);
    }

}

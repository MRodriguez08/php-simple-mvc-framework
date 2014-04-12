<?php

namespace app\models\persistence;

use app\models\persistence\daos\UsuarioDaoImpl;

/**
 * Factory para la obtencion de instancias de los diferentes daos
 * del sistema.
 */
class PersistenceFactory {

    public static function getUsuarioDao($em) {
        return new UsuarioDaoImpl($em);
    }

}

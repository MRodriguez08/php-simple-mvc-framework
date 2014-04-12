<?php

namespace app\models\business;

use app\models\business\NegocioUsuario;
use app\models\persistence\PersistenceFactory;
use app\models\business\util\Constantes;

class NegocioUsuarioImpl implements NegocioUsuario {

    private $usuarioDao;
    private $registry;

    public function __construct($globalRegistry) {
        $this->registry = $globalRegistry;
        $this->usuarioDao = PersistenceFactory::getUsuarioDao($this->registry->__get(Constantes::REGISTRY_ENTITY_MANAGER));
    }

    function obtenerTodosUsuarios() {
        return $this->usuarioDao->findAll();
    }

    function obtenerTodosRoles() {
        return $this->usuarioDao->findAllRoles();
    }

    

}

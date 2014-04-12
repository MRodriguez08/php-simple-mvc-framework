<?php

namespace app\models\persistence\daos;

use app\models\persistence\daos\UsuarioDao;
use framework\persistence\DaoImpl;
use app\models\persistence\util\EnumEntities;

class UsuarioDaoImpl extends DaoImpl implements UsuarioDao {

    public function __construct($em) {
        parent::__construct($em);
    }

    public function findById($id) {
        return parent::findByPrimaryKey(EnumEntities::USUARIO_ENTITY, $id);
    }

    public function findAll() {
        $query = $this->entityManager->createQuery("SELECT u.cedula, u.email, u.nombres, u.apellidos"
                . " FROM " . EnumEntities::USUARIO_ENTITY . " u");
        return $query->getResult();
    }

    public function findAllRoles() {
        $rolesRepository = $this->entityManager->getRepository(EnumEntities::USUARIO_ROL_ENTITY);
        return $rolesRepository->findAll();
    }

    public function findRolById($id) {
        return $this->entityManager->find(EnumEntities::USUARIO_ROL_ENTITY, $id);
    }

}

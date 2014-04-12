<?php

namespace app\models\persistence\entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="roles_usuario")
 * */
class RolUsuarioEntity {

    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * */
    protected $id;

    /**
     * @ORM\Column(type="string",length=50,nullable=false) 
     * */
    protected $nombre;

    /**
     * @ORM\Column(type="string",length=1000,nullable=false) 
     * */
    protected $descripcion;

    /**
     * Inverse Side
     *
     * @ORM\ManyToMany(targetEntity="UsuarioEntity", mappedBy="roles")
     */
    private $usuarios;

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getUsuarios() {
        return $this->usuarios;
    }

    public function setUsuarios($usuarios) {
        $this->usuarios = $usuarios;
    }

    public function toArray() {
        return array(
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion
        );
    }

}

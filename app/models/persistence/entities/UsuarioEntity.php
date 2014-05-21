<?php

namespace app\models\persistence\entities;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use app\models\persistence\entities\RolUsuarioEntity as RolUsuarioEntity;

/**
 * @ORM\Entity 
 * @ORM\Table(name="usuarios")
 * */
class UsuarioEntity {

    /**
     * @ORM\Id 
     * @ORM\Column(type="string", name="email")
     * */
    protected $email;
    
    /**
     * @ORM\Column(type="string",length=100,nullable=false, name="password") 
     * */
    protected $password;

    /**
     * @ORM\Column(type="string",length=60,nullable=true, name="nombre") 
     * */
    protected $nombre;

    /**
     * @ORM\Column(type="string",length=100, nullable=true, name="apellido") 
     * */
    protected $apellido;

    /**
     * Owning Side
     *
     * @ORM\ManyToMany(targetEntity="RolUsuarioEntity", inversedBy="usuarios")
     * @ORM\JoinTable(name="usuarios_roles",
     *      joinColumns={@ORM\JoinColumn(name="email", referencedColumnName="email")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_rol", referencedColumnName="id")}
     * )
     */
    protected $roles;

    public function __construct() {
        $this->roles = new ArrayCollection();
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
        
    public function toArray() {
        return array(
            "email" => $this->email,
            "nombre" => $this->nombre,
            "apellido" => $this->apellido,
            "email" => $this->email
        );
    }

}

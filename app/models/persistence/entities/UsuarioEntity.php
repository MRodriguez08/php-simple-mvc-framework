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
     * @ORM\Column(type="string", name="cedula")
     * */
    protected $cedula;

    /**
     * @ORM\Column(type="string",length=100,nullable=false, name="email") 
     * */
    protected $email;

    /**
     * @ORM\Column(type="string",length=60,nullable=false, name="contrasenia") 
     * */
    protected $contrasenia;

    /**
     * @ORM\Column(type="string",length=100, nullable=true, name="nombres") 
     * */
    protected $nombres;

    /**
     * @ORM\Column(type="string",length=100, nullable=true, name="apellidos") 
     * */
    protected $apellidos;

    /**
     * Owning Side
     *
     * @ORM\ManyToMany(targetEntity="RolUsuarioEntity", inversedBy="usuarios")
     * @ORM\JoinTable(name="usuarios_roles",
     *      joinColumns={@ORM\JoinColumn(name="cedula", referencedColumnName="cedula")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_rol", referencedColumnName="id")}
     * )
     */
    protected $roles;

    public function __construct() {
        $this->roles = new ArrayCollection();
        $this->rol = new RolUsuarioEntity();
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasenia() {
        return $this->contrasenia;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($roles) {
        $this->roles->add($roles);
    }

    public function toArray() {
        $roles = array();

        foreach ($this->roles as $r) {
            array_push($roles, $r->toArray());
        }

        return array(
            "cedula" => $this->cedula,
            "nombres" => $this->nombres,
            "apellidos" => $this->apellidos,
            "email" => $this->email,
            "roles" => $roles
        );
    }

}

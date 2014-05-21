<?php

namespace app\models\persistence\entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="parametros_aplicacion")
 * */
class ParametroEntity {

    /**
     * @ORM\Id 
     * @ORM\Column(type="string", name="nombre")
     * */
    protected $nombre;
    
    /**
     * @ORM\Column(type="string",length=1024,nullable=false, name="descripcion") 
     * */
    protected $descripcion;

    /**
     * @ORM\Column(type="string",length=60,nullable=false, name="tipo") 
     * */
    protected $tipo;

    /**
     * @ORM\Column(type="string",length=100, nullable=true, name="valor") 
     * */
    protected $valor;

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
}

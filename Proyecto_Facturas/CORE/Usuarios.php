<?php


class Usuarios
{
    public $idusuario;
    public $nombre;
    public $clave;
    public $rol;
    public $persona;

    /**
     * Usuarios constructor.
     * @param $isusuario
     * @param $nombre
     * @param $clave
     * @param $rol
     * @param $persona
     */
    public function __construct($isusuario, $nombre, $clave, $rol, $persona)
    {
        $this->idusuario = $isusuario;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->rol = $rol;
        $this->persona = $persona;
    }

    /**
     * @return mixed
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $isusuario
     */
    public function setIdusuario($isusuario)
    {
        $this->idusuario = $isusuario;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    /**
     * @return mixed
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param mixed $persona
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;
    }



}
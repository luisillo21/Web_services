<?php


class Usuarios
{
    public $idusuarios;
    public $nombre;
    public $estado;
    public $clave;

    /**
     * Usuarios constructor.
     * @param $idusuarios
     * @param $nombre
     * @param $estado
     * @param $clave
     */
    public function __construct($idusuarios, $nombre, $estado, $clave)
    {
        $this->idusuarios = $idusuarios;
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->clave = $clave;
    }

    /**
     * @return mixed
     */
    public function getIdusuarios()
    {
        return $this->idusuarios;
    }

    /**
     * @param mixed $idusuarios
     */
    public function setIdusuarios($idusuarios)
    {
        $this->idusuarios = $idusuarios;
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
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
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



}
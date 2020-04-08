<?php


class Pago
{
    public $idpago;
    public $codigo;
    public $descripcion;
    public $monto;
    public $estado;
    public $idusuario;
    public $tipo;

    /**
     * Pago constructor.
     * @param $idpago
     * @param $codigo
     * @param $descripcion
     * @param $monto
     * @param $estado
     * @param $idusuario
     * @param $tipo
     */
    public function __construct($idpago, $codigo, $descripcion, $monto, $estado, $idusuario, $tipo)
    {
        $this->idpago = $idpago;
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->monto = $monto;
        $this->estado = $estado;
        $this->idusuario = $idusuario;
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getIdpago()
    {
        return $this->idpago;
    }

    /**
     * @param mixed $idpago
     */
    public function setIdpago($idpago)
    {
        $this->idpago = $idpago;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * @param mixed $monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
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
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }



}
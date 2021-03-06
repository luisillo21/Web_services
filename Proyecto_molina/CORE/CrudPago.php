<?php
include "BASE/BDD.php";

class CrudPago
{
    public static function Insertar($array){
        $id = BDD::INSERTAR_DESDE_ARRAY("pago",$array);
        if($id){
            return $array = array("id"=>$id);
        }else{
            return $array = array();
        }
    }
    public static function Actualizar($array,$id){
        if(BDD::ACTUALIZAR_DESDE_ARRAY("pago",$array,"idpago=$id")){
            return $array = array("id"=>$id);
        }else{
            return $array = array();
        }
    }
}
<?php

include "Persona.php";
include "Usuarios.php";
include "Rol.php";
include "BASE/BDD.php";
class CrudUsuario
{
    public static function Insertar($array){
       $id = BDD::INSERTAR_DESDE_ARRAY("usuarios",$array);
        if($id){
            return $array = array("id"=>$id);
        }else{
            return $array = array();
        }
    }
}
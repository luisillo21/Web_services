<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
include "CORE/Usuarios.php";

$id = isset($_POST['usuario'])?$_POST['usuario']:null;

if($id){
    $id = "where usuario='$id'";
}else{
    $id= "";
}
$data = BDD::QUERY("select * from usuario $id");

foreach ($data as $v)
{
    $usuario = new Usuarios($v['idusuario'],$v['usuario']
        ,$v['clave'],$v['nombre'],$v['apellido'],$v['cedula'],$v['correo'],$v['estado']);
    $array[] = $usuario;
}

if($array){
    $datas = array("usuario"=>$array);
    echo json_encode($datas, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
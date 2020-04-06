<?php

header('Content-type: application/json');
require 'BASE/BDD.php';
include "CORE/Persona.php";
include "CORE/Usuarios.php";
include "CORE/Rol.php";


$id = isset($_GET['usuario'])?$_GET['usuario']:false;
if($id){
    $id = "where usuario='$id'";
}else{
    $id = "";
}

$data = BDD::QUERY("select idusuarios,usuario,clave,r.idrol,r.nombre as rol,r.estado as estado_rol,p.idpersona,p.nombre,p.apellido
,p.cedula,p.telefono,p.correo,p.estado as estado_persona from usuarios as u
inner join persona as p on u.idpersona = p.idpersona
inner join rol	as r on r.idrol = u.idrol $id");

foreach ($data as $v)
{
    $class = new Rol();
    $class->setIdrol($v['idrol']);
    $class->setNombre($v['nombre']);
    $class->setEstado($v['estado_rol']);
    $class_persona = new Persona($v['idpersona']
        ,$v['nombre'],$v['apellido'],$v['cedula'],$v['telefono'],$v['correo'],$v['estado_persona']);

    $usario = new Usuarios($v['idusuarios'],$v['usuario']
        ,$v['clave'],$class,$class_persona);
    $array[] = $usario;
}



if ($array) {
    $datas = array("usuarios"=>$array);
    echo json_encode($datas, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
} else {
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
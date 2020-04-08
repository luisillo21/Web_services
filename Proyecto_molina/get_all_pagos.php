<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
include "CORE/Pago.php";

$id = isset($_POST['usuario'])?$_POST['usuario']:null;

if($id){
    $id = "where codigo='$id'";
}else{
    $id= "";
}
$data = BDD::QUERY("select * from pago $id");

foreach ($data as $v)
{
    $usuario = new Pago($v['idpago'],$v['codigo']
        ,$v['descripcion'],$v['monto'],$v['estado'],$v['idusuario'],$v['tipo']);
    $array[] = $usuario;
}

if($array){
    $datas = array("pago"=>$array);
    echo json_encode($datas, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
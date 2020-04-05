<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
$id = $_GET['usuario'];


$data = BDD::CONSULTAR("usuarios as u 
inner join persona as p on u.idpersona = p.idpersona
inner join rol	as r on r.idrol = u.idrol ","*"," u.usuario = $id");
if ($data) {
    $array = array("usuario" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}

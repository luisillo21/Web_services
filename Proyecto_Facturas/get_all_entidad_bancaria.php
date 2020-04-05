<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
$data = BDD::QUERY("select identidad_bancaria,descripcion,estado from entidad_bancaria");
if ($data) {
    $array = array("entidad_bancaria" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}

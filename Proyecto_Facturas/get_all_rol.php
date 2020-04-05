
<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
$data = BDD::QUERY("SELECT idrol,nombre,estado from rol;");
if ($data) {
    $array = array("detalle_equipo" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}

<?php
header('Content-type: application/json');
require 'BASE/BDD.php';
$data = BDD::QUERY("select idcomercio,asesor,vip,codigo,nombre_comercial,razon_social,estado,ruc,gerente,direccion,ciudad,giro_comercio,correo,contacto,telefono_contacto,idusuario from comercio;");
if ($data) {
    $array = array("ciudad" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
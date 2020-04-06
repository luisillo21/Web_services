<?php
include "CORE/CrudUsuario.php";
$json = isset($_POST['json'])?$_POST['json']:null;

if($json){
    $var = json_decode($json,true);
    $usuario = $var['usuarios'];
    foreach ($usuario as $e) {
        $array = array("usuario" => $e['nombre']
        , "clave" => $e['clave'], "idrol"=> $e['idrol']
        , "idpersona" => $e['idpersona']);
        $id = CrudUsuario::Insertar($array);
        echo json_encode($id,JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
    }
}else{
    echo "no hay datos";
}



<?php
include "CORE/CrudPago.php";
$json = isset($_POST['json'])?$_POST['json']:false;

if($json){
    $var = json_decode($json,true);
    foreach ($var as $e) {
        $array = array("codigo" => $e['codigo']
        , "descripcion" => $e['descripcion']
        , "monto"=> $e['monto']
        , "idusuario" => $e['idusuario']
        , "tipo" => $e['tipo']);
        $idbase = $e['idbase'];
        if($idbase == 0)
            $id = CrudPago::Insertar($array);
        else
            $id = CrudPago::Actualizar($array,$idbase);
        echo json_encode($id,JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
    }
}else{
    echo json_encode(json_encode($json),JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);;
}

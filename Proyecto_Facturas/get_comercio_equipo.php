<?php

header('Content-type: application/json');
require 'BASE/BDD.php';


BDD::QUERY("SELECT 
c.nombre,c.direccion,c.codigo,c.giro_comercio,c.idcomercio,c.ruc,
e.serie,e.idequipo,ent.descripcion as banco
,ent.identidad_bancaria,e.modelo
,es.descripcion as estatus,es.idestatus,
c.vip
FROM detalle_equipo as d
inner join comercio as c on d.idcomercio = c.idcomercio
inner join equipo as e on e.idequipo = d.idequipo
inner join entidad_bancaria as ent on ent.identidad_bancaria = e.idbanco
inner join estatus es on es.idestatus = e.idestatus
inner join ciudad as ciu on ciu.idciudad = c.ciudad
inner join provincia p on p.idprovincia = ciu.idprovincia
inner join usuarios usu on usu.idusuarios = c.idusuario");
if ($data) {
    $array = array("usuario" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}else{
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
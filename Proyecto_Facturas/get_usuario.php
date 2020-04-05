
header('Content-type: application/json');
require 'BASE/BDD.php';
$data = BDD::QUERY("select idusuarios,usuario,clave,r.idrol,r.nombre as rol,r.estado as estado_rol,p.idpersona,p.nombre,p.apellido
,p.cedula,p.telefono,p.correo,p.estado as estado_persona from usuarios as u
inner join persona as p on u.idpersona = p.idpersona
inner join rol	as r on r.idrol = u.idrol");
if ($data) {
    $array = array("usuario" => $data);
    echo json_encode($array, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
} else {
    echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
}
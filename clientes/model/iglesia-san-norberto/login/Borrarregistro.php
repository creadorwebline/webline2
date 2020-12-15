<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
session_start();

$usuarioSession = null;
$usuarioSessionVisitante=null;
$redireccion = null;
$tipDeCliente = $_GET["client"];
if(isset($_SESSION['user'])&&$tipDeCliente=="admin"){
    $usuarioSession = $_SESSION['user'];
    $redireccion = "../../../view/vew_iglesiaSanNorberto/login/reservasMisas";
    
}elseif(isset($_SESSION['userV'])&&$tipDeCliente=="visitor"){
    $usuarioSessionVisitante = $_SESSION['userV'];
    $redireccion = "../../../view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios";
}else if((!isset($_SESSION['userV']))&&$tipDeCliente=="visitor"){
    $redireccion = "/webline/clientes/view/vew_iglesiaSanNorberto/login/login?tipo=visitante";
}else if((!isset($_SESSION['user']))&&$tipDeCliente=="admin"){
    $redireccion = "/webline/clientes/view/vew_iglesiaSanNorberto/login/login?tipo=admin";
}
else{
    header($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/view/view_Servicios/servicios');
    die();
}

if (($usuarioSession=null)&&($usuarioSessionVisitante=null)) {
    header($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/view/view_Servicios/servicios');
    die();
} 

$id = $_GET["id"];
$tabla = $_GET["tabla"];
$consulta = "DELETE FROM $tabla WHERE id=" . $id;
$result = mysqli_query($conex, $consulta);
$mensajes = new EnvioDeMensaje();
if (($result) && ($tabla == "bloqueofechas")) {
    $mensajes->mensaje("Fecha de bloqueo borrada con exito", "../../../view/vew_iglesiaSanNorberto/login/Bloqueo.php");
} else {
    $mensajes->mensaje("Reserva borrada con exito", $redireccion);
}

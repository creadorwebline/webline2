<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/view/vew_iglesiaSanNorberto/login/login.php');
    die();
}
$cc = $_GET["cc"];
$consulta = new VisitanteLogica();
$mensajes = new EnvioDeMensaje();
if($consulta->eliminarUsuario($cc)){
    $mensajes->mensaje("Usuario borrado del registro con exito","/webline/clientes/view/vew_iglesiaSanNorberto/login/registroDeUsuarios.php");
}
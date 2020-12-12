<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/view/vew_iglesiaSanNorberto/login/login.php');
    die();
}
$cc = $_GET["cc"];
$consulta = "DELETE FROM dato WHERE CC=".$cc;
$result = mysqli_query($conex, $consulta);
$mensajes = new EnvioDeMensaje();
if($result){
    $mensajes->mensaje("Usuario borrado del registro con exito","/webline/clientes/view/vew_iglesiaSanNorberto/login/registroDeUsuarios.php");
}
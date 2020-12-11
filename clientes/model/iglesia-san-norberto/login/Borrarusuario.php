<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/view/vew_iglesiaSanNorberto/login/login.php');
    die();
}
$cc = $_GET["cc"];
$consulta = "DELETE FROM dato WHERE CC=".$cc;
$result = mysqli_query($conex, $consulta);
if($result){
    mensaje("Usuario borrado del registro con exito","/webline/clientes/view/vew_iglesiaSanNorberto/login/registroDeUsuarios.php");
}

function mensaje($mesaje,$pagina){
	header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mesaje');</script>";
}
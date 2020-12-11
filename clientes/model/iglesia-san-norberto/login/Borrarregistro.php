<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/view/vew_iglesiaSanNorberto/login/login.php');
    die();
}
$id = $_GET["id"];
$tabla= $_GET["tabla"];
$consulta = "DELETE FROM $tabla WHERE id=".$id;
$result = mysqli_query($conex, $consulta);
if(($result) && ($tabla=="bloqueofechas")){
    mensaje("Fecha de bloqueo borrada con exito","../../../view/vew_iglesiaSanNorberto/login/Bloqueo.php");

}else{
    mensaje("Reserva borrada con exito","../../../view/vew_iglesiaSanNorberto/login/reservasMisas.php");
    
}

function mensaje($mesaje,$pagina){
	header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mesaje');</script>";
}
<?php
include("../../db/con_db.php");
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header("Location: login.php");
    die();
}
$id = $_GET["id"];
$tabla= $_GET["tabla"];
$consulta = "DELETE FROM $tabla WHERE id=".$id;
$result = mysqli_query($conex, $consulta);
if(($result) && ($tabla=="bloqueofechas")){
    mensaje("Fecha de bloqueo borrada con exito","Bloqueo.php");
}else{
    mensaje("Reserva borrada con exito","tablasmisas.php");
}

function mensaje($mesaje,$pagina){
	header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mesaje');</script>";
}
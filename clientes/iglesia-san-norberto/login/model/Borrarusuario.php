<?php
include("../../db/con_db.php");
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header("Location: login.php");
    die();
}
$cc = $_GET["cc"];
$consulta = "DELETE FROM dato WHERE CC=".$cc;
$result = mysqli_query($conex, $consulta);
if($result){
    mensaje("Usuario borrado del registro con exito","HistorialDeUsuarios.php");
}

function mensaje($mesaje,$pagina){
	header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mesaje');</script>";
}
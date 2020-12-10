<?php
include("../../../db/con_db.php");

date_default_timezone_set("America/Bogota");
if(isset($_POST["enviar"])){
	if(strlen($_POST["nombre"])>=1&&strlen($_POST["apellido"])>=1&&strlen($_POST["cedula"])>=1&&
		strlen($_POST["telefono"])>=1){
		$nombreUsurio = trim($_POST["nombre"]);
		$apellUsuario = trim($_POST["apellido"]);
		$cedulaUsurio = trim($_POST["cedula"]);
		$telefonoUsurio = trim($_POST["telefono"]);
		$fechaDeIngreso = date("Y-m-d");
		if(existeUsuario($cedulaUsurio)){
			mensaje("Este Usuario ya existe","Registro.php");
		}else{
			ingresarUsuario($nombreUsurio,$apellUsuario,$cedulaUsurio,$telefonoUsurio,$fechaDeIngreso);
		}
	}
}

function existeUsuario($cedulaU){
	include("../../../db/con_db.php");
    $query = "SELECT * FROM dato WHERE CC = '$cedulaU'";
    $result = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($result);
    if($filas !=null){
    	return true;
    }else{
    	return false;
    }

}
function ingresarUsuario($uNombre, $uApellido,$uCedula,$uTelefono,$uFecha){
	include("../../../db/con_db.php");
	$query = "INSERT INTO dato(nombre,apellido,CC,tel,fecha) VALUES ('$uNombre','$uApellido','$uCedula','$uTelefono','$uFecha')";
	$result = mysqli_query($conex, $query);
	mensaje("Su ingreso fue exitoso","../FormularioMisas.php");
}
function mensaje($mensaje,$pagina)
{
    header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mensaje');</script>";
}
?>
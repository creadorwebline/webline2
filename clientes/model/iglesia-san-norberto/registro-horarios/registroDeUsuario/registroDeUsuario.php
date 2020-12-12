<?php
include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
date_default_timezone_set("America/Bogota");
if(isset($_POST["enviar"])){
	if(strlen($_POST["nombre"])>=1&&strlen($_POST["apellido"])>=1&&strlen($_POST["cedula"])>=1&&
		strlen($_POST["telefono"])>=1){
		$nombreUsurio = trim($_POST["nombre"]);
		$apellUsuario = trim($_POST["apellido"]);
		$cedulaUsurio = trim($_POST["cedula"]);
		$telefonoUsurio = trim($_POST["telefono"]);
		$fechaDeIngreso = date("Y-m-d");
		$mensajes = new EnvioDeMensaje();
		if(existeUsuario($cedulaUsurio)){
			$mensajes->mensaje("Este Usuario ya existe","/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva");
		}else{
			ingresarUsuario($nombreUsurio,$apellUsuario,$cedulaUsurio,$telefonoUsurio,$fechaDeIngreso);
		}
	}
}

function existeUsuario($cedulaU){
	include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
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
	include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
	include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
	$query = "INSERT INTO dato(nombre,apellido,CC,tel,fecha,contrasena) VALUES ('$uNombre','$uApellido','$uCedula','$uTelefono','$uFecha','$uCedula')";
	$result = mysqli_query($conex, $query);
	$mensajes = new EnvioDeMensaje();
	$mensajes->mensaje("Su ingreso fue exitoso","/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva");
}
?>
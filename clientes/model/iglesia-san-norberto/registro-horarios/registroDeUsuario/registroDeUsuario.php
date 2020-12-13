<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');
date_default_timezone_set("America/Bogota");
if(isset($_POST["enviar"])){
	if(strlen($_POST["nombre"])>=1&&strlen($_POST["apellido"])>=1&&strlen($_POST["cedula"])>=1&&
		strlen($_POST["telefono"])>=1){
		$nombreUsurio = trim($_POST["nombre"]);
		$apellUsuario = trim($_POST["apellido"]);
		$cedulaUsurio = trim($_POST["cedula"]);
		$telefonoUsurio = trim($_POST["telefono"]);
		$fechaDeIngreso = date("Y-m-d");
		$mensaje = new EnvioDeMensaje();
		$buscarUsuario = new VisitanteLogica();
		if($buscarUsuario->registroPrevio($cedulaUsurio)){
			$mensaje->mensaje("Este Usuario ya existe","/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva");
		}else{
			$buscarUsuario->ingresarUsuario($nombreUsurio,$apellUsuario,$cedulaUsurio,$telefonoUsurio,$fechaDeIngreso);
			$mensaje = new EnvioDeMensaje();
        	$mensaje->mensaje("Su ingreso fue exitoso","/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva");
		}
	}
}

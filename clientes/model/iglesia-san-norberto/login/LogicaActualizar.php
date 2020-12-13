<?php
if(isset($_POST["actualizar"])){

	if(strlen($_POST['temperature'])>=1&& strlen($_POST['id'])>=1 && strlen($_POST['nombre'])>=1){
		include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/ReservaLogicaHorarios.php');
		include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
		$id = trim($_POST['id']);
		$temperatura = trim($_POST['temperature']);
		$nombre = trim($_POST['nombre']);
		
		$actualizacion= new ReservaLogicaHorarios();
		$actualizacion->actualizarTemperatura($temperatura,$id,$nombre);
		$mensajes = new EnvioDeMensaje();
        $mensajes->mensaje("Su ingreso fue exitoso","/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva");
	}

}

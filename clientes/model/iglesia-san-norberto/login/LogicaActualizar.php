<?php
if(isset($_POST["actualizar"])){

	if(strlen($_POST['temperature'])>=1&& strlen($_POST['id'])>=1 && strlen($_POST['nombre'])>=1){
		$id = trim($_POST['id']);
		$temperatura = trim($_POST['temperature']);
		$nombre = trim($_POST['nombre']);
		actualizar($temperatura,$id,$nombre);
	}

}

function actualizar($tempe,$id,$nom){
	include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
	include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
	$mensajes = new EnvioDeMensaje();
	$mensajes->mensaje("La actualizacion de ".$nom." fue exitosa","../../../view/vew_iglesiaSanNorberto/login/reservasMisas.php");
	
	$actualizacion="UPDATE horarios SET temperatura ='$tempe' WHERE id ='$id'";
	$result = mysqli_query($conex,$actualizacion);
}
?>
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
	include("../../db/con_db.php");
	mensaje("La actualizacion de ".$nom." fue exitosa","tablasmisas.php");
	$actualizacion="UPDATE horarios SET temperatura ='$tempe' WHERE id ='$id'";
	$result = mysqli_query($conex,$actualizacion);
}

function mensaje($mesaje,$pagina){
	header("Refresh: 0; URL=".$pagina);
    echo "<script>alert('$mesaje');</script>";
}
?>
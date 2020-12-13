<?php 
class VisitanteLogica{
    //public include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
    //public $mensaje = new EnvioDeMensaje();
    function cambioDeContraseña($contraseñaNueva,$cedula){
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "UPDATE dato SET contrasena='$contraseñaNueva' WHERE CC='$cedula'";
        $result = mysqli_query($conex, $query);
        //$mensaje->mensaje("Actualizacion de contraseña Exitosa", "/webline/clientes/view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios")
    }
    function datosPersonales($nombre,$apellido,$cedula,$telefono,$cedula){
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "UPDATE dato SET nombre='$nombre', apellido='$apellido', CC='$cedula', tel='$cedula' WHERE CC='$cedula'";
        $result = mysqli_query($conex, $query);
        //$mensaje->mensaje("Actualizacion de datos personales con exitosa", "/webline/clientes/view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios")
    }
}
?>
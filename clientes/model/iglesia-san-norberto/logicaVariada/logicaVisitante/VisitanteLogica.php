<?php 
class VisitanteLogica{
    
    function cambioDeContraseña($contraseñaNueva,$cedula){
        include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "UPDATE dato SET contrasena='$contraseñaNueva' WHERE CC='$cedula'";
        $result = mysqli_query($conex, $query);
        $mensaje = new EnvioDeMensaje();
        $mensaje->mensaje("Actualizacion de contraseña Exitosa", "/webline/clientes/view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios");
    }
    function datosPersonales($nombre,$apellido,$cedula,$telefono){
        include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "UPDATE dato SET nombre='$nombre', apellido='$apellido', CC='$cedula', tel='$cedula' WHERE CC='$cedula'";
        $result = mysqli_query($conex, $query);
        $mensaje = new EnvioDeMensaje();
        $mensaje->mensaje("Actualizacion de datos personales con exitosa", "/webline/clientes/view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios");
    }
    function consulta($campo,$usuario){
        include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
        $query = "SELECT ".$campo." FROM dato WHERE CC='$usuario'";
        $result = mysqli_query($conex, $query);
        $fila = $result->fetch_assoc();
        return $fila[$campo];
    }
    function registroPrevio($_uCedula){
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "SELECT * FROM dato WHERE CC ='$_uCedula'";
        $result = mysqli_query($conex, $query);
        $filas = mysqli_num_rows($result);
        if ($filas != null) {
            return true;
        } else {
            return false;
        }
    }
}
?>
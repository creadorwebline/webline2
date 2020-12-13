<?php
class ReservaLogicaHorarios{
    function buscarPersonasCedula($fechaM, $horaM, $cedulaM)
    {
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "SELECT * FROM horarios WHERE fecha = '$fechaM' AND hora='$horaM'AND cedula='$cedulaM'";
        $result = mysqli_query($conex, $query);
        $filas = mysqli_num_rows($result);
        return $filas;
    }
    function cantidadDePersonas($fechaM, $horaM)
    {
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "SELECT * FROM horarios WHERE fecha = '$fechaM' AND hora='$horaM'";
        $result = mysqli_query($conex, $query);
        $filas = mysqli_num_rows($result);
        return $filas;
    }
    function insertaraLaMisa($nombreP, $apellidoP, $cedulaP, $telefonoP, $fechaP, $horaP)
    {
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
        $query = "INSERT INTO horarios(nombre,apellido,cedula,telefono,fecha,hora) VALUES ('$nombreP','$apellidoP', '$cedulaP','$telefonoP','$fechaP','$horaP')";
        $result = mysqli_query($conex, $query);
    }

}
?>
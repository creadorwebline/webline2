<?php
date_default_timezone_set("America/Bogota");
include("../../../db/con_db.php");
$diaActual = date("Y-m-d");
if (isset($_POST["Bloquear"])) {
    if (strlen($_POST["fecha"]) >= 1 && strlen($_POST["hora"]) >= 1) {
        $fecha = trim($_POST["fecha"]);
        $hora = trim($_POST["hora"]);
        include("../../../db/con_db.php");        
        $result = consultaFecha($fecha,$hora);        
        if (strtotime($diaActual) >= strtotime($fecha)) {
            mensaje("Esta fecha ya pasó o es hoy", "../view/Bloqueo.php");
        }else {
            if($result > 0){
                mensaje("Esta fecha ya esta bloqueada", "../view/Bloqueo.php");
            }
            else{
                $query = "INSERT INTO bloqueofechas(fechabloqueada,horabloqueada) VALUES ('$fecha','$hora')";
                $result = mysqli_query($conex, $query);
                if(!$result){
                    mensaje("Fallo en base de datos", "../view/Bloqueo.php");
                }else{
                    mensaje("Bloqueo exitoso", "../view/Bloqueo.php");
                    return;
                }
            }
        }
    }
}

function consultaFecha($fecha,$hora){
    include("../../../db/con_db.php");
    $query = "SELECT * FROM bloqueofechas WHERE fechabloqueada= '$fecha' AND horabloqueada= '$hora'";
    $busqueda = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($busqueda);
    return $filas;
}

function mensaje($mensaje, $pagina)
{
    header("Refresh: 0; URL=" . $pagina);
    echo "<script>alert('$mensaje');</script>";
}
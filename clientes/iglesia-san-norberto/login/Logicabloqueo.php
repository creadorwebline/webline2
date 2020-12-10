<?php
date_default_timezone_set("America/Bogota");
include("../../db/con_db.php");
$diaActual = date("Y-m-d");
if (isset($_POST["Bloquear"])) {
    if (strlen($_POST["fecha"]) >= 1) {
        $fecha = trim($_POST["fecha"]);

        include("../../db/con_db.php");
        $query = $fecha;
        $result = consultaFecha($query);

        if (strtotime($diaActual) >= strtotime($fecha)) {
            mensaje("Esta fecha ya pasó o es hoy", "Bloqueo.php");
        }else {
            if($result > 0){
                mensaje("Esta fecha ya esta bloqueada", "Bloqueo.php");
            }
            else{
                $query = "INSERT INTO bloqueofechas(fechabloqueada) VALUES ('$fecha')";
                $result = mysqli_query($conex, $query);
                if(!$result){
                    mensaje("Fallo en base de datos", "Bloqueo.php");
                }else{
                    mensaje("Bloqueo exitoso", "Bloqueo.php");
                    return;
                }
            }
        }
    }
}

function consultaFecha($fecha){
    include("../../db/con_db.php");
    $query = "SELECT * FROM bloqueofechas WHERE fechabloqueada= '$fecha'";
    echo $query;
    $busqueda = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($busqueda);
    return $filas;
}

function mensaje($mensaje, $pagina)
{
    header("Refresh: 0; URL=" . $pagina);
    echo "<script>alert('$mensaje');</script>";
}
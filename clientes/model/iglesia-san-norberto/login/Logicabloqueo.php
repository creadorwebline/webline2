<?php
date_default_timezone_set("America/Bogota");
include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');
$diaActual = date("Y-m-d");
if (isset($_POST["Bloquear"])) {
    if (strlen($_POST["fecha"]) >= 1 && strlen($_POST["hora"]) >= 1) {
        $fecha = trim($_POST["fecha"]);
        $hora = trim($_POST["hora"]);
        include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');       
        $result = consultaFecha($fecha,$hora);   
        $mensajes = new EnvioDeMensaje();     
        if (strtotime($diaActual) >= strtotime($fecha)) {
            $mensajes->mensaje("Esta fecha ya pasó o es hoy", "/webline/clientes/view/vew_iglesiaSanNorberto/login/Bloqueo.php");
            
        }else {
            if($result > 0){
                $mensajes->mensaje("Esta fecha ya esta bloqueada", "/webline/clientes/view/vew_iglesiaSanNorberto/login/Bloqueo.php");
            }
            else{
                $query = "INSERT INTO bloqueofechas(fechabloqueada,horabloqueada) VALUES ('$fecha','$hora')";
                $result = mysqli_query($conex, $query);
                if(!$result){
                    $mensajes->mensaje("Fallo en base de datos", "/webline/clientes/view/vew_iglesiaSanNorberto/login/Bloqueo.php");
                }else{
                    $mensajes->mensaje("Bloqueo exitoso", "/webline/clientes/view/vew_iglesiaSanNorberto/login/Bloqueo.php");;
                    return;
                }
            }
        }
    }
}

function consultaFecha($fecha,$hora){
    include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
    $query = "SELECT * FROM bloqueofechas WHERE fechabloqueada= '$fecha' AND horabloqueada= '$hora'";
    $busqueda = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($busqueda);
    return $filas;
}
?>
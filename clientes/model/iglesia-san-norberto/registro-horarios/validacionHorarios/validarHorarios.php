<?php

include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/EnvioDeMensaje.php');

date_default_timezone_set("America/Bogota");
$mensajes = new EnvioDeMensaje();
if (isset($_POST["enviarHorario"])) {
    if (
        strlen($_POST['cedula']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['hora'])
    ) {
        if (registroPrevio($_POST['cedula'])) {
            $completarRuta="/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/reservaMisa/formularioDeReserva";
            $horaActual = date("G:i");
            $hora = trim($_POST['hora']);
            $diaActual = date("Y-m-d");
            $fecha = strtotime(trim($_POST['fecha']));
            $fecha = date("Y-m-d", $fecha);
            
            $consulta = "SELECT * FROM bloqueofechas WHERE fechabloqueada='$fecha' AND horabloqueada = '$hora'";
            $result = mysqli_query($conex, $consulta);
            $row = mysqli_fetch_array($result);
            if ($row>=1) { 
                $mensajes->mensaje("Este dia no habrá misa a las ".$hora, $completarRuta);
            } else {
                if (((int)$horaActual > (int)$hora) && ($diaActual == $fecha)) {
                    $mensajes->mensaje("Esta misa ya ha pasado o esta en curso", $completarRuta);
                } else {
                    $nombre = trim($_POST['nombre']);
                    $apellido = trim($_POST['apellido']);
                    $cedula = trim($_POST['cedula']);
                    $telefono = trim($_POST['telefono']);
                    $hora = trim($_POST['hora']);
                    $dia = strtotime($fecha);
                    $dia = date("N", $dia);
                    $cantDPersonas = cantidadDePersonas($fecha, $hora);

                    if ($dia != 7 && ($fecha != "2020-12-08" && $fecha != "2020-12-25" && $fecha != "2021-01-01")) {
                        if(($fecha == "2020-12-31" || $fecha == "2020-12-24") && ($hora == "7:30" || $hora == "18:30" || $hora == "20:00")){
                            if ($cantDPersonas < 54) {
                                $cantRegistros = buscarPersonasCedula($fecha, $hora, $cedula);
                                if ($cantRegistros < 1) {
                                    insertaraLaMisa($nombre, $apellido, $cedula, $telefono, $fecha, $hora);
                                    $mensajes->mensaje("Su reserva fue exitosa", $completarRuta);
                                } else {
                                    $mensajes->mensaje("Ya estas registrado para la misa del: " . $fecha . " a las: " . $hora, $completarRuta);
                                }
                            } else {
                                $mensajes->mensaje("Lo sentimos no hay cupos para la hora " . $hora . " fecha: " . $fecha, $completarRuta);
                            }
                        }else{
                            if ($hora == "7:30" || $hora == "18:30") {
                                if ($cantDPersonas < 54) {
                                    $cantRegistros = buscarPersonasCedula($fecha, $hora, $cedula);
                                    if ($cantRegistros < 1) {
                                        insertaraLaMisa($nombre, $apellido, $cedula, $telefono, $fecha, $hora);
                                        $mensajes->mensaje("Su reserva fue exitosa", $completarRuta);
                                    } else {
                                        $mensajes->mensaje("Ya estas registrado para la misa del: " . $fecha . " a las: " . $hora, $completarRuta);
                                    }
                                } else {
                                    $mensajes->mensaje("Lo sentimos no hay cupos para la hora " . $hora . " fecha: " . $fecha, $completarRuta);
                                }
                            } else {
                                $mensajes->mensaje("Hora no establecida de lunes a sabado", $completarRuta);
                            }
                        }                       
                    } else {
                        if ($hora != "7:30") {
                            if ($cantDPersonas < 54) {
                                $cantRegistros = buscarPersonasCedula($fecha, $hora, $cedula);
                                if ($cantRegistros < 1) {
                                    insertaraLaMisa($nombre, $apellido, $cedula, $telefono, $fecha, $hora);
                                    $mensajes->mensaje("Su reserva fue exitosa", $completarRuta);
                                } else {
                                    $mensajes->mensaje("Ya estas registrado para la misa del: " . $fecha . " a las: " . $hora, $completarRuta);
                                }
                            } else {
                                $mensajes->mensaje("Lo sentimos no hay cupos para la hora " . $hora . " fecha: " . $fecha, $completarRuta);
                            }
                        } else {
                            $mensajes->mensaje("Hora no establecida para el domingo o festividades decembrinas", $completarRuta);
                        }
                    }
                }
            }
        } else {
            $mensajes->mensaje("Usted no se encuentra registrado, por favor registrese", "/webline/clientes/view/vew_iglesiaSanNorberto/registro-horarios/registroDeUsuario/Registro.php");
        }
    }
}
function registroPrevio($_uCedula)
{
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

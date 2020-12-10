<?php
include("../../db/con_db.php");
include("timephp/time.php");

date_default_timezone_set("America/Bogota");
if (isset($_POST["enviarHorario"])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['cedula']) >= 1 && strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['hora'])
    ) {
        if (registroPrevio($_POST['cedula'])) {
            $horaActual = date("G:i");
            $hora = trim($_POST['hora']);
            $diaActual = date("Y-m-d");
            $fecha = strtotime(trim($_POST['fecha']));
            $fecha = date("Y-m-d", $fecha);
            //verifica fecha
            $consulta = "SELECT * FROM bloqueofechas WHERE '$fecha' = fechabloqueada";
            $result = mysqli_query($conex, $consulta);
            $row = mysqli_fetch_array($result);
            if ($row>=1) { 
                //echo $row;
                mensaje("Este dia no habrá misa", "FormularioMisas.php");
            } else {
                if (((int)$horaActual > (int)$hora) && ($diaActual == $fecha)) {
                    mensaje("Esta misa ya ha pasado o esta en curso", "FormularioMisas.php");
                } else {
                    $nombre = trim($_POST['nombre']);
                    $apellido = trim($_POST['apellido']);
                    $cedula = trim($_POST['cedula']);
                    $telefono = trim($_POST['telefono']);
                    $hora = trim($_POST['hora']);
                    $dia = strtotime($fecha);
                    $dia = date("N", $dia);
                    $cantDPersonas = cantidadDePersonas($fecha, $hora);

                    if ($dia != 7) {
                        if ($hora == "7:30" || $hora == "18:30") {
                            if ($cantDPersonas < 54) {
                                $cantRegistros = buscarPersonasCedula($fecha, $hora, $cedula);
                                if ($cantRegistros < 1) {
                                    insertaraLaMisa($nombre, $apellido, $cedula, $telefono, $fecha, $hora);
                                    mensaje("Su reserva fue exitosa", "FormularioMisas.php");
                                } else {
                                    mensaje("Ya estas registrado para la misa del: " . $fecha . " a las: " . $hora, "FormularioMisas.php");
                                }
                            } else {
                                mensaje("Cupos reservados para la hora " . $hora . " fecha: " . $fecha, "FormularioMisas.php");
                            }
                        } else {
                            mensaje("Hora no establecida de lunes a sabado", "FormularioMisas.php");
                        }
                    } else {
                        if ($hora != "7:30") {
                            if ($cantDPersonas < 54) {
                                $cantRegistros = buscarPersonasCedula($fecha, $hora, $cedula);
                                if ($cantRegistros < 1) {
                                    insertaraLaMisa($nombre, $apellido, $cedula, $telefono, $fecha, $hora);
                                    mensaje("Su reserva fue exitosa", "FormularioMisas.php");
                                } else {
                                    mensaje("Ya estas registrado para la misa del: " . $fecha . " a las: " . $hora, "FormularioMisas.php");
                                }
                            } else {
                                mensaje("No hay cupos suficientes para la hora " . $hora . " fecha: " . $fecha, "FormularioMisas.php");
                            }
                        } else {
                            mensaje("Hora no establecida para el domingo", "FormularioMisas.php");
                        }
                    }
                }
            }
        } else {
            mensaje("Usted no se encuentra registrado, por favor registrese", "../registro-horarios/registros-san-norberto/Registro.php");
        }
    }
}
function registroPrevio($_uCedula)
{
    include("../../db/con_db.php");
    $query = "SELECT * FROM dato WHERE CC ='$_uCedula'";
    $result = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($result);
    if ($filas != null) {
        return true;
    } else {
        return false;
    }
}
function mensaje($mensaje, $pagina)
{
    header("Refresh: 0; URL=" . $pagina);
    echo "<script>alert('$mensaje');</script>";
}
function buscarPersonasCedula($fechaM, $horaM, $cedulaM)
{
    include("../../db/con_db.php");
    $query = "SELECT * FROM horarios WHERE fecha = '$fechaM' AND hora='$horaM'AND cedula='$cedulaM'";
    $result = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($result);
    return $filas;
}
function cantidadDePersonas($fechaM, $horaM)
{
    include("../../db/con_db.php");
    $query = "SELECT * FROM horarios WHERE fecha = '$fechaM' AND hora='$horaM'";
    $result = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($result);
    return $filas;
}
function insertaraLaMisa($nombreP, $apellidoP, $cedulaP, $telefonoP, $fechaP, $horaP)
{
    include("../../db/con_db.php");
    $query = "INSERT INTO horarios(nombre,apellido,cedula,telefono,fecha,hora) VALUES ('$nombreP','$apellidoP', '$cedulaP','$telefonoP','$fechaP','$horaP')";
    $result = mysqli_query($conex, $query);
}

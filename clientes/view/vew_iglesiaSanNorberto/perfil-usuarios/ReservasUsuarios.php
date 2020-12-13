<?php session_start();
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuariosession = $_SESSION['userV'];
if (!$usuariosession) {
    header("Location: ../login/login");
    die();
} else {
    date_default_timezone_set("America/Bogota");
    $fechahoy = date("Y-m-d");
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/Visitante.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');

    $usuario = $_SESSION['userV'];
    $query = "SELECT * FROM horarios WHERE fecha >= '$fechahoy' AND cedula='$usuario'";
    $result = mysqli_query($conex, $query);

    $visitante = new Visitante();
    $consultar = new VisitanteLogica();
    $visitante->setNombre($consultar->consulta("nombre", $usuario));
    $visitante->setApellido($consultar->consulta("apellido", $usuario));
    $visitante->setCedula($consultar->consulta("CC", $usuario));
    $visitante->setFecha(date("d-m-y", strtotime($consultar->consulta("fecha", $usuario))));
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/header.html');
    ?>
    <!--<link href="css/login.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<!--/head-->

<body>
    <?php
    include("../registro-horarios/navbarr.html");
    ?>
    <div class="container">
        <div class="cabecera">
            <div class="cerrarSesion">
                <p>Usuario: <?php printf($usuariosession) ?> </p>
                <p><a href="../../../model/iglesia-san-norberto/login/cerrarsesion.php">Cerrar sesión</a></p>

            </div>
            <div class="tituloPerfil">
                <h1>Perfil del Usuario</h1>
                <h1>registrado en la Parroquia San Norberto</h1>
            </div>
        </div>
        <div class="cuerpo">
            <div class="datosPersonales">
                <h3>Datos personales del usuario</h3>
                <p>Nombre: <?php printf($visitante->getNombre()) ?></p>
                </p>
                <p>Apellido: <?php printf($visitante->getApellido()) ?></p>
                <p>CC/ID: <?php printf($visitante->getCedula()) ?></p>
                <p>Cuenta creada el: <?php printf($visitante->getFecha()) ?></p>
                <p><a href="ActualizacionUsuario?update=pass">CAMBIAR CONTRASEÑA<a></p>
                <p><a href="ActualizacionUsuario?update=personal">ACTUALIZAR DATOS PERSONALES<a></p>
            </div>
            <div class="reporteReservas">
                <table>
                    <thead>
                        <tr>
                            <th id="date">Registro de reservas realizadas por el usuario:</th>
                        </tr>
                        <tr>
                            <th id="date">FECHA</th>
                            <th id="date">HORA</th>
                        </tr>
                    </thead>

                    <tbody>
                        <form id="temperatura">
                            <?php
                            $numeracion = 0;
                            date_default_timezone_set("America/Bogota");
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <input type="text" name="fecha" value=<?php echo $row['fecha'] ?> readonly>
                                    </td>
                                    <td>
                                        <input type="text" name="hora" value=<?php echo $row['hora'] ?> readonly>
                                        <a href="../../../model/iglesia-san-norberto/login/Borrarregistro.php?id=<?php echo $row['id']; ?>&tabla=horarios">cancelar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--/#login-->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/footer.html');
    ?>
</body>

</html>
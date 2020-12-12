<?php session_start();
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuariosession = $_SESSION['userV'];
if (!$usuariosession) {
    header("Location: ../login/login");
    die();
} else {
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
    $usuario = $_SESSION['userV'];
    $query = "SELECT * FROM horarios WHERE cedula='$usuario'";
    $result = mysqli_query($conex, $query);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/header.html');
    ?>
    <link href="css/login.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <p>Nombre: </p>
                <p>Apellido: </p>
                <p>CC/ID: </p>
                <p>Cuenta creada el: </p>
            </div>
            <div class="reporteReservas">
                <table>
                    <thead>
                        <tr>
                            <th id="date">Registro de reservas realizadas por el usuario:</th>
                        </tr>
                    </thead>

                    <tbody>
                        <form id="temperatura" method="POST" action="ActualizarTemperatura.php">
                            <?php
                            $numeracion = 0;
                            date_default_timezone_set("America/Bogota");
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td id="date">
                                        <input type="text" name="fecha" value=<?php echo $row['fecha'] ?> readonly>
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
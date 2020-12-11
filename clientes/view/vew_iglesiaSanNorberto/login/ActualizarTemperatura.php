<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');

session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header("Location: /webline/index.php");
    die();
}
$id = $_GET["id"];
$consulta = "SELECT * FROM horarios WHERE id=" . $id;
$Actualizar = mysqli_query($conex, $consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/header.html');
    ?>
    <link href="css/tablas.css" rel="stylesheet">
    <link href="css/Buscador.css" rel="stylesheet">
</head>

<body>
    <?php
    include("navbarr.html");
    ?>
    <!--/main-nav-->

    <div class="div_table">
        <p>Usuario: <?php printf($usuariosession) ?> <a href="/webline/clientes/model/iglesia-san-norberto/login/cerrarsesion.php">Cerrar sesión</a></p>
        
        <h1>Reservas Parroquia San Norberto</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th id="ln">Apellido</th>
                    <th>CC/identificacion</th>
                    <th id="date">Fecha-registro</th>
                    <th id="date">Hora-registro</th>
                    <th id="date">Temperatura</th>
                </tr>
            </thead>
            <tbody>
                <form id="temperatura" method="POST" action="../../../model/iglesia-san-norberto/login/LogicaActualizar.php">
                    <?php
                    date_default_timezone_set("America/Bogota");

                    while ($row = mysqli_fetch_array($Actualizar)) { ?>
                        <tr>
                            <input type="hidden" name="id" value=<?php echo $row['id'] ?>>
                            <td><input id="01" type="text" name="nombre" value=<?php echo $row['nombre'] ?> readonly></td>
                            <td id="ln"><input id="01" type="text" name="apellido" value=<?php echo $row['apellido'] ?> readonly></td>
                            <td><input type="text" name="CC" value=<?php echo $row['cedula'] ?> readonly></td>
                            <td id="date">
                                <p name="fecha"><?php echo $row['fecha'] ?></p>
                            </td>
                            <td id="hora"><input type="text" name="hour" value=<?php echo $row['hora'] ?> readonly></td>
                            <td id="temperature"><input type="text" name="temperature" value=<?php echo $row['temperatura'] ?> required></td>
                            <td><input type="submit" name="actualizar"></td>
                        </tr>
                    <?php } ?>
                </form>
            </tbody>
        </table>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/footer.html');
    ?>
</body>

</html>
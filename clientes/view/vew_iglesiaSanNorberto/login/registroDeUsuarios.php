<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/login/VerificacionDeSession.php');

$limit = 30;
$query = "SELECT * FROM dato ORDER BY apellido ASC LIMIT $limit";
$result = mysqli_query($conex, $query);
if (isset($_POST["buscar"])) {
    if (strlen($_POST["nombre"]) >= 1 || strlen($_POST["apellido"]) >= 1 || strlen($_POST["cedula"]) >= 1 || strlen($_POST["celular"]) >= 1 || strlen($_POST["fecha"]) >= 1) {
        $nombreP = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $cedula = trim($_POST["cedula"]);
        $celular = trim($_POST["celular"]);
        $fecha = trim($_POST["fecha"]);
        if ($nombreP != null) {
            $result = consultas("nombre='$nombreP'");
        } else if ($apellido != null) {
            $result = consultas("apellido='$apellido'");
        } else if ($cedula != null) {
            $result = consultas("CC='$cedula'");
        } else if ($celular != null) {
            $result = consultas("tel='$celular'");
        } else if ($fecha != null) {
            $result = consultas("fecha='$fecha'");
        } else {
            $result = consultas("SELECT * FROM dato");
        }
    } else {
        if (strlen($_POST["limitt"]) >= 1) {
            $limit = trim($_POST["limitt"]);
        } else {
            $limit = 30;
        }
        $sql = null;
        $consulta = $_SESSION['ultimaConsulta'];
        $result = consultasall("SELECT * FROM dato ORDER BY apellido ASC LIMIT $limit");
    }
} else if (isset($_POST["limitar"])) {
    if (strlen($_POST["limit"]) >= 1) {
        $limit = trim($_POST["limit"]);
    } else {
        $limit = 30;
    }
    $sql = null;
    $consulta = $_SESSION['ultimaConsulta'];
    $result = consultasall("SELECT * FROM dato ORDER BY apellido ASC LIMIT $limit");
}

function consultas($consulta)
{
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
    $consulta = "SELECT * From dato where " . $consulta;
    $busqueda = mysqli_query($conex, $consulta);
    return $busqueda;
}
function consultasall($consultaall)
{
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
    $busqueda = mysqli_query($conex, $consultaall);
    return $busqueda;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/header.html');
    ?>
    <link href="css/navcolor.css" rel="stylesheet">
    <link href="css/tablas.css" rel="stylesheet">
    <link href="css/Buscador.css" rel="stylesheet">

    <style>
        #pintar2 {
            background-color: rgba(0, 0, 0, .4);
        }
    </style>

</head>

<body>
    <?php
    include("navbarr.html");
    ?>
    <!--/main-nav-->

    <div class="div_table">
        <p>Usuario: <?php printf($usuariosession) ?> <a href="../../../model/iglesia-san-norberto/login/cerrarsesion.php">Cerrar sesión</a></p>
        <h1>Registros Parroquia San Norberto</h1>
        <table>
            <thead class="buscador">
                <tr>
                    <form method="POST">
                        <th><input type="text" placeholder="Nombre" name="nombre" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+"></th>
                        <th id="ln"><input type="text" placeholder="Apellido" name="apellido" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+"></th>
                        <th><input type="text" placeholder="CC/identificacion" name="cedula" pattern="[0-9]+"></th>
                        <th id="tel"><input type="text" placeholder="Num. telefono" name="celular" pattern="[0-9]+"></th>
                        <th id="date"><input type="date" placeholder="Fecha-registro" name="fecha"></th>
                        <th id="limit"><input type="text" placeholder="numero de filas" name="limitt" pattern="[0-9]+"></th>
                        <div id="btn" class="boton">
                            <input class="btn" type="submit" name="buscar" value="Buscar">
                        </div>
                    </form>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th id="ln">Apellido</th>
                    <th>CC/identificacion</th>
                    <th id="tel">Num. teléfono</th>
                    <th id="date">Fecha-registro</th>
                </tr>
            </thead>

            <tbody>

                <?php
                date_default_timezone_set("America/Bogota");

                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><input id="01" type="text" name="nombre" value=<?php echo $row['nombre'] ?> readonly></td>
                        <td id="ln"><input id="01" type="text" name="apellido" value=<?php echo $row['apellido'] ?> readonly></td>
                        <td><input type="text" name="CC" value=<?php echo $row['CC'] ?> readonly></td>
                        <td id="tel"><input type="text" name="tel" value=<?php echo $row['tel'] ?> readonly></td>
                        <td id="date">
                            <p name="fecha"><?php echo $row['fecha'] ?></p>
                        </td>
                        <td id="date">
                            <p name="fecha"><?php echo $row['fecha'] ?></p>
                        </td>
                        <td><a href="Borrarusuario.php?cc=<?php echo $row['CC']; ?>">borrar</a></td>
                    </tr>
                <?php } ?>
                <form method="POST">
                    <th id="tel"><input type="text" placeholder="numero de filas" name="limit" pattern="[0-9]+"></th>
                    <th id="btn">
                        <div id="btn" class="boton">
                            <input class="btn" type="submit" name="limitar" value="Limitar">
                        </div>
                    </th>
                </form>
            </tbody>

        </table>

    </div>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/footer.html');
    ?>
</body>

</html>
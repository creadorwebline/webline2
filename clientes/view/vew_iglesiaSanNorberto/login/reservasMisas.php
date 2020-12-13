<?php
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/login/VerificacionDeSession.php');

if ($_SESSION['ultimaConsulta']) {
    $consulta = $_SESSION['ultimaConsulta'];
    //echo $consulta;
    $result = mysqli_query($conex, "SELECT * From horarios where " . $consulta . "ORDER BY apellido ASC");
} else {
    $limit = 30;
    $query = "SELECT * FROM horarios ORDER BY apellido ASC LIMIT $limit";
    $result = mysqli_query($conex, $query);
}

if (isset($_POST["buscar"])) {
    if (strlen($_POST["nombre"]) >= 1 || strlen($_POST["apellido"]) >= 1 || strlen($_POST["cedula"]) >= 1 || strlen($_POST["celular"]) >= 1 || strlen($_POST["fecha"]) >= 1 || strlen($_POST["hora"]) >= 1  || strlen($_POST["temperatura"]) >= 1) {

        $nombreP = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $cedula = trim($_POST["cedula"]);
        $celular = trim($_POST["celular"]);
        $fecha = trim($_POST["fecha"]);
        $hora = trim($_POST["hora"]);
        $temperatura = trim($_POST["temperatura"]);

        if ($fecha != null && $hora != null && $cedula != null) {
            $sql = "fecha='$fecha' AND hora='$hora' AND cedula='$cedula'";
            $result = consultas($sql);
        } else if ($fecha != null && $cedula != null) {
            $sql = "fecha='$fecha' AND cedula='$cedula'";
            $result = consultas($sql);
        } else if ($fecha != null && $hora != null) {
            $sql = "fecha='$fecha' AND hora='$hora'";
            $result = consultas($sql);
        } else if ($nombreP != null) {
            $sql = "nombre='$nombreP'";
            $result = consultas("nombre='$nombreP'");
        } else if ($apellido != null) {
            $sql = "apellido='$apellido'";
            $result = consultas("apellido='$apellido'");
        } else if ($cedula != null) {
            $sql = "cedula='$cedula'";
            $result = consultas("cedula='$cedula'");
        } else if ($celular != null) {
            $sql = "telefono='$celular'";
            $result = consultas("telefono='$celular'");
        } else if ($fecha != null) {
            $sql = "fecha='$fecha'";
            $result = consultas("fecha='$fecha'");
        } else if ($hora != null) {
            $sql = "hora='$hora'";
            $result = consultas("hora='$hora'");
        } else if ($temperatura != null) {
            $sql = SQL_NULLABLE;
            $result = consultas("temperatura='$temperatura'");
        }
    } else {
        if (strlen($_POST["limitt"]) >= 1) {
            $limit = trim($_POST["limitt"]);
        } else {
            $limit = 30;
        }
        $sql = null;
        $consulta = $_SESSION['ultimaConsulta'];
        $result = consultasall("SELECT * FROM horarios ORDER BY apellido ASC LIMIT $limit");
    }
} else if (isset($_POST["limitar"])) {
    if (strlen($_POST["limit"]) >= 1) {
        $limit = trim($_POST["limit"]);
    } else {
        $limit = 30;
    }
    $sql = null;
    $consulta = $_SESSION['ultimaConsulta'];
    $result = consultasall("SELECT * FROM horarios ORDER BY apellido ASC LIMIT $limit");
}

function consultas($consulta)
{
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/db/con_db.php');
    $_SESSION['ultimaConsulta'] = $consulta;
    $consulta = "SELECT * From horarios where " . $consulta . "ORDER BY apellido ASC";
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
        #pintar1 {
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
        <h1>Reservas Parroquia San Norberto</h1>
        <table>
            <thead class="buscador">
                <tr>
                    <form method="POST">
                        <th id="name"><input type="text" placeholder="Nombre" name="nombre" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+"></th>
                        <th id="ln"><input type="text" placeholder="Apellido" name="apellido" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+"></th>
                        <th><input type="text" placeholder="CC/identificacion" name="cedula" pattern="[0-9]+"></th>
                        <th id="tel"><input type="text" placeholder="Num. telefono" name="celular" pattern="[0-9]+"></th>
                        <th id="date"><input type="date" placeholder="Fecha-registro" name="fecha"></th>
                        <th id="hora"><input type="time" name="hora"></th>
                        <th id="temperatura"><input type="text" placeholder="Temperatura" name="temperatura"></th>
                        <th id="limit"><input type="text" placeholder="numero de filas" name="limitt" pattern="[0-9]+"></th>
                        <div id="btn" class="boton">
                            <input class="btn" type="submit" name="buscar" value="Buscar">
                        </div>
                        <div id="btn" class="boton">
                            <a class="btn" target="_blank" href="ReporteUsuario.php?sql=<?php echo $sql; ?>" name="reporte">Reporte</a>
                        </div>

                    </form>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th id="name">Nombre</th>
                    <th id="ln">Apellido</th>
                    <th>CC/identificacion</th>
                    <th id="tel">Num. teléfono</th>
                    <th id="date">Fecha-reservada</th>
                    <th>Hora-reservada</th>
                    <th>Temperatura</th>
                </tr>
            </thead>

            <tbody>
                <form id="temperatura" method="POST" action="ActualizarTemperatura.php">
                    <?php
                    $numeracion = 0;
                    date_default_timezone_set("America/Bogota");
                    while ($row = mysqli_fetch_array($result)) {
                        $numeracion = $numeracion + 1; ?>
                        <tr>
                            <td id="name"><input id="01" type="text" name="nombreH" value=<?php echo $numeracion . "-" . $row['nombre'] ?> readonly></td>
                            <td id="ln"><input id="01" type="text" name="apellido" value="<?php echo $row['apellido'] ?>" readonly></td>
                            <td><input type="text" name="CC" value=<?php echo $row['cedula'] ?> readonly></td>
                            <td id="tel"><input type="text" name="tel" value=<?php echo $row['telefono'] ?> readonly></td>
                            <td id="date">
                                <input type="text" name="fecha" value=<?php echo $row['fecha'] ?> readonly>
                            </td>
                            <td id="hora"><input type="text" name="hour" value=<?php echo $row['hora'] ?> readonly></td>
                            <td id="temperature"><input type="text" name="temperature" value=<?php echo $row['temperatura'] ?> readonly pattern="[0.0-9.0]"></td>
                            <td> <a href="ActualizarTemperatura.php?id=<?php echo $row['id']; ?>">editar</a></td>
                            <td> <a href="../../../model/iglesia-san-norberto/login/Borrarregistro.php?id=<?php echo $row['id']; ?>&tabla=horarios&sesion=admin">borrar</a></td>
                            
                        </tr>
                    <?php } ?>
                </form>
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
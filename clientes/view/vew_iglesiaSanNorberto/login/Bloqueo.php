<?php

include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/model/iglesia-san-norberto/login/VerificacionDeSession.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>
    <link href="css/navcolor.css" rel="stylesheet">
    <link href="css/tablas.css" rel="stylesheet">
    <link href="css/Buscador.css" rel="stylesheet">
    <link href="css/bloqueo.css" rel="stylesheet">

    <style>
        #pintar3 {
            background-color: rgba(0, 0, 0, .4);
        }
    </style>

</head>

<body>
    <?php
    include("navbarr.html");
    ?>    
    <!--/main-nav-->

    <p>Usuario: <?php printf($usuariosession) ?> <a href="../../../model/iglesia-san-norberto/login/cerrarsesion.php">Cerrar sesión</a></p>
    <div id="bloqueo">
        <h1>Bienvenido aquí puede bloquear fechas</h1>

        <form method="post" action="../model/Logicabloqueo.php">
            <div id="bloqueobox">
                <p>seleccione la fecha que quiere bloquear</p>
                <input type="date" placeholder="Fecha-registro" name="fecha" required>
                <div class="horarios">
                    <div class="hora">
                        <div class="htittle">
                            <h3>Seleccione una hora</h3>
                        </div>
                        <table class="table table-responsive">
                            <td class="item">
                                <input type="radio" name="hora" value="7:30" required><span>7:30am</span>
                            </td>
                            <td class="item">
                                <input type="radio" name="hora" value="8:00" required><span>8:00am</span>
                            </td>
                            <td class="item">
                                <input type="radio" name="hora" value="9:30" required><span>9:30am</span>
                            </td>
                        </table>
                        <table class="table table-responsive">
                            <td class="item">
                                <input type="radio" name="hora" value="12:30" required><span>12:30pm</span>
                            </td>
                            <td class="item">
                                <input type="radio" name="hora" value="16:30" required><span>4:30pm</span>
                            </td>
                            <td class="item">
                                <input type="radio" name="hora" value="18:30" required><span>6:30pm</span>
                            </td>
                        </table>
                    </div>
                </div>
                <input class="btn" type="submit" name="Bloquear" value="Bloquear">
            </div>
        </form>

        <div class="div_table">
            <h1>Reservas Parroquia San Norberto</h1>
            <table>
                <thead>
                    <tr>
                        <th>Fecha bloqueada</th>
                        <th>Borrar fecha bloqueada</th>
                    </tr>
                </thead>

                <tbody>
                    <form id="temperatura" method="POST" action="../model/Borrarregistro.php">
                        <?php
                        date_default_timezone_set("America/Bogota");
                        $consulta = "SELECT * FROM bloqueofechas";
                        $busqueda = mysqli_query($conex, $consulta);
                        while ($row = mysqli_fetch_array($busqueda)) { ?>
                            <tr>
                                <td id="name"><input id="01" type="text" name="nombreH" value="<?php echo $row['fechabloqueada'] ?>" readonly></td>
                                <td id="name"><input id="01" type="text" name="nombreH" value="<?php echo $row['horabloqueada'] ?>" readonly></td>
                                <td id="borrar"><a href="../model/Borrarregistro.php?id=<?php echo $row['id']; ?>&tabla=bloqueofechas">eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>
</body>

</html>
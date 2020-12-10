<?php

include("../../db/con_db.php");
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Webline - San Norberto</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/animate.min.css" rel="stylesheet">
    <link href="../../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../css/lightbox.css" rel="stylesheet">
    <link href="../../../css/main.css" rel="stylesheet">
    <link id="../../../css-preset" href="../../../css/presets/preset1.css" rel="stylesheet">
    <link href="../../../css/responsive.css" rel="stylesheet">

    <link href="../../css/tablas.css" rel="stylesheet">
    <link href="../../css/bloqueo.css" rel="stylesheet">
    <link href="../../css/navcolor.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="../../../images">
</head>

<body>
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../index.php">
                    <h1><img class="img-responsive" src="../../../images/weblinenav.png" alt="logo"></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="../../../index.php#home">Inicio Webline</a></li>
                    <li class="scroll"><a href="tablasmisas.php">Reservas misas</a></li>
                    <li class="scroll"><a href="HistorialDeUsuarios.php">Usuarios registrados</a></li>
                    <li id="pintar" class="scroll"><a href="#">Bloquear fechas y horas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-nav-->
    <p>Usuario: <?php printf($usuariosession) ?> <a href="cerrarsesion.php">Cerrar sesión</a></p>
    <div id="bloqueo">
        <h1>Bienvenido aquí puede bloquear fechas</h1>

        <form method="post" action="Logicabloqueo.php">
            <div id="bloqueobox">
                <p>seleccione la fecha que quiere bloquear</p>
                <input type="date" placeholder="Fecha-registro" name="fecha" required>
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
                    <form id="temperatura" method="POST" action="Borrarregistro.php">
                        <?php
                        date_default_timezone_set("America/Bogota");
                        $consulta = "SELECT * FROM bloqueofechas";
                        $busqueda = mysqli_query($conex, $consulta);
                        while ($row = mysqli_fetch_array($busqueda)) {?>
                            <tr>
                                <td id="name"><input id="01" type="text" name="nombreH" value="<?php echo $row['fechabloqueada'] ?>" readonly></td>
                                <td id="borrar"><a href="Borrarregistro.php?id=<?php echo $row['id'];?>&tabla=bloqueofechas">eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>

    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="../../../index.php"><img class="img-responsive" src="../../../images/185.png" alt=""></a>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; 2020 Webline.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">www.creadorwebline.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../../../js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="../../../js/wow.min.js"></script>
    <script type="text/javascript" src="../../../js/mousescroll.js"></script>
    <script type="text/javascript" src="../../../js/smoothscroll.js"></script>
    <script type="text/javascript" src="../../../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../../../js/lightbox.min.js"></script>
    <script type="text/javascript" src="../../../js/main.js"></script>
</body>

</html>
<?php
include("../../db/con_db.php");
session_start();
$usuariosession = $_SESSION['user'];

if (!$usuariosession) {
    header("Location: login.php");
    die();
}
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
if($_SESSION['ultimaConsulta']){
    $consulta = $_SESSION['ultimaConsulta'];
    //echo $consulta;
    $result = mysqli_query($conex, "SELECT * From horarios where " . $consulta."ORDER BY apellido ASC");
}else{
    $query = "SELECT * FROM horarios ORDER BY apellido ASC";
    $result = mysqli_query($conex, $query);
}


if (isset($_POST["buscar"])) {
    if (strlen($_POST["nombre"]) >= 1 || strlen($_POST["apellido"]) >= 1 || strlen($_POST["cedula"]) >= 1 || strlen($_POST["celular"]) >= 1 || strlen($_POST["fecha"]) >= 1 || strlen($_POST["hora"]) >= 1  || strlen($_POST["temperatura"])) {
        $nombreP = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $cedula = trim($_POST["cedula"]);
        $celular = trim($_POST["celular"]);
        $fecha = trim($_POST["fecha"]);
        $hora = trim($_POST["hora"]);
        $temperatura = trim($_POST["temperatura"]);
        
        if($fecha != null && $hora != null && $cedula != null){
            $sql="fecha='$fecha' AND hora='$hora' AND cedula='$cedula'";
            $result = consultas($sql);
        } else if($fecha != null && $cedula != null){
            $sql="fecha='$fecha' AND cedula='$cedula'";
            $result = consultas($sql);
        } else if($fecha != null && $hora != null){
            $sql="fecha='$fecha' AND hora='$hora'";
            $result = consultas($sql);
        } else if($nombreP != null) {
            $sql="nombre='$nombreP'";
            $result = consultas("nombre='$nombreP'");
        } else if ($apellido != null) {
            $sql="apellido='$apellido'";
            $result = consultas("apellido='$apellido'");
        } else if ($cedula != null) {
            $sql="cedula='$cedula'";
            $result = consultas("cedula='$cedula'");
        } else if ($celular != null) {
            $sql="telefono='$celular'";
            $result = consultas("telefono='$celular'");
        } else if ($fecha != null) {
            $sql="fecha='$fecha'";
            $result = consultas("fecha='$fecha'");
        } else if ($hora != null) {
            $sql="hora='$hora'";
            $result = consultas("hora='$hora'");
        } else if ($temperatura != null) {
            $sql=SQL_NULLABLE;
            $result = consultas("temperatura='$temperatura'");
        } 
    }else {
        $sql=null;
        $consulta = $_SESSION['ultimaConsulta'];
        $result = consultasall("SELECT * FROM horarios ORDER BY apellido ASC");
    }
}

function consultas($consulta)
{
    include("../../db/con_db.php");
    $_SESSION['ultimaConsulta'] = $consulta;
    $consulta = "SELECT * From horarios where " .$consulta."ORDER BY apellido ASC";
    $busqueda = mysqli_query($conex, $consulta);
    return $busqueda;
}

function consultasall($consultaall)
{
    include("../../db/con_db.php"); 
    $busqueda = mysqli_query($conex, $consultaall);
    return $busqueda;
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

    <link href="../../css/navcolor.css" rel="stylesheet">

    <link href="../../css/tablas.css" rel="stylesheet">
    <link href="../../css/Buscador.css" rel="stylesheet">


    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
          <![endif]-->

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
                    <li id="despintar" class="scroll active"><a href="../../../index.php#home">Inicio Webline</a></li>
                    <li id="pintar" class="scroll"><a href="#">Reservas misas</a></li>
                    <li class="scroll"><a href="HistorialDeUsuarios.php">Usuarios registrados</a></li>
                    <li class="scroll"><a href="Bloqueo.php">Bloquear fechas y horas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-nav-->

    <div class="div_table">
        <p>Usuario: <?php printf($usuariosession) ?> <a href="cerrarsesion.php">Cerrar sesión</a></p>
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
                        <div id="btn" class="boton">
                            <input class="btn" type="submit" name="buscar" value="Buscar">
                        </div>
                        <div id="btn" class="boton">
                            <a class="btn" target="_blank" href="ReporteUsuario.php?sql=<?php echo $sql; ?>" name="reporte" >Reporte</a>
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
                    $numeracion=0;
                    date_default_timezone_set("America/Bogota");
                    while ($row = mysqli_fetch_array($result)) { 
                        $numeracion=$numeracion+1;?>
                        <tr>
                            <td id="name"><input id="01" type="text" name="nombreH" value=<?php echo $numeracion."-".$row['nombre'] ?> readonly></td>
                            <td id="ln"><input id="01" type="text" name="apellido" value="<?php echo $row['apellido'] ?>" readonly></td>
                            <td><input type="text" name="CC" value=<?php echo $row['cedula'] ?> readonly></td>
                            <td id="tel"><input type="text" name="tel" value=<?php echo $row['telefono'] ?> readonly></td>
                            <td id="date">
                                <input type="text" name="fecha" value=<?php echo $row['fecha'] ?> readonly>
                            </td>
                            <td id="hora"><input type="text" name="hour" value=<?php echo $row['hora'] ?> readonly></td>
                            <td id="temperature"><input type="text" name="temperature" value=<?php echo $row['temperatura'] ?> readonly pattern="[0.0-9.0]"></td>
                            <td> <a href="ActualizarTemperatura.php?id=<?php echo $row['id']; ?>">editar</a></td>
                            <td> <a href="Borrarregistro.php?id=<?php echo $row['id'];?>&tabla=horarios">borrar</a></td>
                        </tr>
                    <?php } ?>
                </form>
            </tbody>

        </table>

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
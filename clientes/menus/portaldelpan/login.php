<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Webline - Portal del pan</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/animate.min.css" rel="stylesheet">
    <link href="../../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../css/lightbox.css" rel="stylesheet">
    <link href="../../../css/main.css" rel="stylesheet">
    <link id="../../../css-preset" href="../../../css/presets/preset1.css" rel="stylesheet">
    <link href="../../../css/responsive.css" rel="stylesheet">

    <link href="../css/login.css" rel="stylesheet">

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
          <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="../../../images/weblineico.png">
</head>
<!--/head-->

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
                <a class="navbar-brand" href="../../index.html">
                    <h1><img class="img-responsive" src="../../../images/weblinenav.png" alt="logo"></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="../../../index.php#home">Inicio</a></li>
                    <li class="scroll"><a href="../../../index.php#services">Servicios</a></li>
                    <li class="scroll"><a href="../../../index.php#about-us">Sobre nosotros</a></li>
                    <li class="scroll"><a href="../../../index.php#portfolio">Portafolio</a></li>
                    <!--
                    <li class="scroll"><a href="#team">Team</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    -->
                    <li class="scroll"><a href="../index.php#contact">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container-login">
        <div class="space">
            <div class="login">

                <h1 class="tittlelogin">Bienvenido a El portal del pan</h1>
                <div class="inputs">
                    <form action="edicion.php" method="POST">
                        <input type="text" name="user" placeholder="Usuario" required pattern="[A-Za-z0-9 ]+">
                        <input type="password" name="password" placeholder="contraseña" required pattern="[A-Za-z0-9*#$&]+">
                        <input class="inputbtn" type="submit" name="entrar" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/#login-->


    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="index.html"><img class="img-responsive" src="../../../images/185.png" alt=""></a>
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
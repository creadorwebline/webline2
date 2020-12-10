<?php
include("../../db/con_db.php");

if (isset($_POST['entrar'])) {

    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['password']);
        $query = "SELECT id FROM loginpp WHERE user = '$user' AND passwordpp = '$pass'";
        $result = mysqli_query($conex, $query);
        $filas = mysqli_num_rows($result);

        if (($filas) >= 1) {
?>

            <!DOCTYPE html>
            <html lang="en">

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

                <!--Menu-->

                <link rel="stylesheet" href="css/main.css">

                <!--Menu-->


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
                            <a class="navbar-brand" href="../../../index.html">
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
                <!--/navmain-->



                <!--MENU-->

                <section class="menu">
                    <section id="bread">
                        <div class="tittle">
                            <h2><input type="text" value="Especialidades en pan"></h2>
                        </div>
                        <div class="items">
                            <div class=row>
                                <div class="imgn">
                                    <img src="images/bread/Pan-Frances.jpg" alt="">
                                </div>
                                <div class="paragraf">
                                    <h3>Pan francés</h3>
                                    <p>Una baguette​ o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.
                                    </p>
                                    <p><br><b>Ingredientes: </b></p>
                                    <ul>
                                        <li>Harina</li>
                                        <li>Huevo</li>
                                        <li>Levadura</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=row>
                                <div class="imgn">
                                    <img src="images/bread/Pan-Frances.jpg" alt="">
                                </div>
                                <div class="paragraf">
                                    <h3>Pan francés</h3>
                                    <p>Una baguette​ o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.
                                    </p>
                                    <p><br><b>Ingredientes: </b></p>
                                    <ul>
                                        <li>Harina</li>
                                        <li>Huevo</li>
                                        <li>Levadura</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=row>
                                <div class="imgn">
                                    <img src="images/bread/Pan-Frances.jpg" alt="">
                                </div>
                                <div class="paragraf">
                                    <h3>Pan francés</h3>
                                    <p>Una baguette​ o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.
                                    </p>
                                    <p><br><b>Ingredientes: </b></p>
                                    <ul>
                                        <li>Harina</li>
                                        <li>Huevo</li>
                                        <li>Levadura</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=row>
                                <div class="imgn">
                                    <img src="images/bread/Pan-Frances.jpg" alt="">
                                </div>
                                <div class="paragraf">
                                    <h3>Pan francés</h3>
                                    <p>Una baguette​ o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.
                                    </p>
                                    <p><br><b>Ingredientes: </b></p>
                                    <ul>
                                        <li>Harina</li>
                                        <li>Huevo</li>
                                        <li>Levadura</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=row>
                                <div class="imgn">
                                    <img src="images/bread/Pan-Frances.jpg" alt="">
                                </div>
                                <div class="paragraf">
                                    <h3>Pan francés</h3>
                                    <p>Una baguette​ o baguete​ es una variedad de pan que se caracteriza por emplear harina de trigo, por ser mucho más largo que ancho y por su corteza crujiente. Es ideal para la elaboración de bocadillos.
                                    </p>
                                    <p><br><b>Ingredientes: </b></p>
                                    <ul>
                                        <li>Harina</li>
                                        <li>Huevo</li>
                                        <li>Levadura</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="drinks">
                        <div class="tittle">
                            <h2>Bebidas</h2>
                        </div>
                        <div class="items">
                            <div class=row>
                                <div class="imgn"><img src="images/bread/cafe.png" alt=""></div>
                                <div id="one">
                                    <div class="paragraf">
                                        <h3>Café</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Agua purificada</li>
                                            <li>Café molido</li>
                                            <li>Azúcar al gusto</li>
                                        </ul>
                                    </div>
                                    <div class="paragraf">
                                        <h3>Café</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Agua purificada</li>
                                            <li>Café molido</li>
                                            <li>Azúcar al gusto</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="imgn"><img src="images/bread/cafe.png" alt=""></div>
                                <div id="two">
                                    <div class="paragraf">
                                        <h3>Café</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Agua purificada</li>
                                            <li>Café molido</li>
                                            <li>Azúcar al gusto</li>
                                        </ul>
                                    </div>

                                    <div class="paragraf">
                                        <h3>Café</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Agua purificada</li>
                                            <li>Café molido</li>
                                            <li>Azúcar al gusto</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section id="others">
                        <div class="tittle">
                            <h2>Postres</h2>
                        </div>
                        <div class="items">
                            <div class=row>
                                <div class="imgn"><img src="images/bread/galletas.jpg" alt=""></div>
                                <div id="one">
                                    <div class="paragraf">
                                        <h3>Galleta de avena</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Harina</li>
                                            <li>Azucar</li>
                                            <li>Avena</li>
                                        </ul>
                                    </div>
                                    <div class="paragraf">
                                        <h3>Galleta de avena</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Harina</li>
                                            <li>Azucar</li>
                                            <li>Avena</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="imgn"><img src="images/bread/galletas.jpg" alt=""></div>
                                <div id="two">
                                    <div class="paragraf">
                                        <h3>Galleta de avena</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Harina</li>
                                            <li>Azucar</li>
                                            <li>Avena</li>
                                        </ul>
                                    </div>

                                    <div class="paragraf">
                                        <h3>Galleta de avena</h3>
                                        <p>El protagonista de las mejores frases y citas sobre el café no es otro que el grano molido o sin moler. ¿Pero desde cuándo su aroma cautiva el paladar de quienes con su boca le regalan poesía?
                                        </p>
                                        <p><br><b>Ingredientes: </b></p>
                                        <ul>
                                            <li>Harina</li>
                                            <li>Azucar</li>
                                            <li>Avena</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </section>
                <!--MENU-->



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
<?php
        } else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }
} elseif (!isset($_POST['entrar'])) {
    header("Location: login.php");
}

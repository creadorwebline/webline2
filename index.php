<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include('header.html');
    include("sendemail.php");
    ?>
</head>
<!--/head-->

<body>

    <!--wp-->
    <a href="https://wa.me/5211234567890?text=Me%20gustaría%20tener%20mas%20información%20sobre%20sus%20productos" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <!--wp-->
    
    <!--.preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
    <!--/.preloader-->

    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/1.webp)">
                    <div class="caption">
                        <img class="principallogo" src="images/185.png" alt=""><br>
                        <h1 class="animated fadeInLeftBig">Bienvenidos a <span>Webline</span></h1>
                        <p class="animated fadeInRightBig">AQUí ENCONTRARÁS INCREIBLES DISEÑOS Y EXPERIENCIAS</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Explorar nuestros
                            servicios</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/2.webp)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Hacemos que las cosas <span>Pasen</span></h1>
                        <p class="animated fadeInRightBig">Aquí encontrarás increibles diseños y experiencias</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Explorar nuestros
                            servicios</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/3.webp)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Somos diseño y <span>Creatividad</span></h1>
                        <p class="animated fadeInRightBig">La creatividad es el poder de conectar lo aparentemente desconectado - William Plomer.</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Explorar nuestros
                            servicios</a>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

            <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

        </div>
        <!--/#home-slider-->
        <?php
        include('navbarr.html');
        ?>
        <!--/#main-nav-->
    </header>
    <!--/#home-->
    <section id="services">
        <div class="container">
            <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2>Servicios Webline</h2>
                        <p>En Webline ofrecemos los servicios con la mejor calidad y garantía posible, por eso le prometemos siempre a nuestros clientes una gran experiencia</p>
                    </div>
                </div>
            </div>
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-qrcode"></i>
                        </div>
                        <div class="service-info">
                            <h3>Creación y administración de códigos QR</h3>
                            <p>Creamos tus códigos QR con herramientas virtuales y además ofrecemos el servicio de mantenimiento y administración de tu sitio enlazado al código QR</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="service-info">
                            <h3>Diseños y creaciones originales</h3>
                            <p>Diseñamos y creamos lototipos, páginas web y mucho mas. Conforme a las necesidades de nuestros clientes <br>"Más información en nuestro portafolio"</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        <div class="service-info">
                            <h3>Muchos más servicios</h3>
                            <p>Prestamos servicios de senalización, bioseguridad y mucho más. Siempre teniendo en cuenta las necesidades y requerimientos del cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->


    <section id="team">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Conoce aquí nuestros servicios</h2>
                    <p>Estos son nuestros servicios principales, si deseas más información sobre un servicio en específico da clic a "Más información"</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-members">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="member-image">
                                <img class="img-responsive" src="images/team/1.jpg" alt="">
                            </div>
                            <div class="member-info">
                                <h3>Menú digital personalizable</h3>

                                <p>Evita el contacto e interacción con un menú totalmente digital</p>
                            </div>
                            <div class="learnmoremain">
                                <ul>
                                    <li><a class="learnmore" href="menus-webline/info/info-menus.php"><i>Más información</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <div class="member-image">
                                <img class="img-responsive" src="images/team/2.jpg" alt="">
                            </div>
                            <div class="member-info">
                                <h3>Registro ingreso de usuarios</h3>
                                <p>Registra en un clic los usuarios que ingresen a tu negocio</p>
                            </div>
                            <div class="learnmoremain">
                                <ul>
                                    <li><a class="learnmore" href="services/register/registro.php"><i>Más información</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <div class="member-image">
                                <img class="img-responsive" src="images/team/3.webp" alt="">
                            </div>
                            <div class="member-info">
                                <h3>Creación de diseños originales</h3>

                                <p>Webline se crea diseños totalmente personalizables</p>
                            </div>
                            <div class="learnmoremain">
                                <ul>
                                    <li><a class="learnmore" href="#"><i>Más información</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <div class="member-image">
                                <img class="img-responsive" src="images/team/4.jpg" alt="">
                            </div>
                            <div class="member-info">
                                <h3>Bioseguridad y señalización</h3>

                                <p>Prestamos servicios de señalización, bioseguridad y mucho más</p>
                            </div>
                            <div class="learnmoremain">
                                <ul>
                                    <li><a class="learnmore" href="#"><i>Más información</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/#servicescards-->

    <section id="about-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>Sobre nosotros</h2>
                        <p>Webline es una empresa dinámica dispuesta siempre a ayudar a sus clientes, nacimos para asesorar y ayudar, para inspirar a nuestros clientes en la elaboración de sus proyectos ofreciendo un servicio online de calidad.</p>
                        <p>Hoy somos un grupo inspirado en estudiantes; basados en unos pilares fundamentales en el progreso: las ideas, la creatividad, la experiencia y el ingenio.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p class="lead">Experiencias con usuarios</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="98">98%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <p class="lead">Experiencia en Diseños</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="98">98%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <p class="lead">Servicio al cliente</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="99">99%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <p class="lead">Calidad en servicios</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="99">99%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-us-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>Lee nuestro portafolio</h2>
                    <p>En el portafolio webline, nos inspiramos en las necesidades de nuestros clientes. Por ello aquí encontrarás todos nuestros servicios descritos con un gran detalle.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="tittle-container">
                <h1 class="tittle">Herramientas corrporativas Webline</h1>
            </div>
            <div class="row">
                <div id="portfolio-corporate">
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/creaciondemarca-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Creación de marca</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#"><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/identidadcorporativa-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Identidad corporativa</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#"><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/mailchimp-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Envios masivos</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#"><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/pancartas-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Elavoración de pancartas</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/afiches-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Elavoracion de afiches</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/personalizacion-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Personalizacion de datos</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/marketing-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Campañas de marketing</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/senalizacion-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Señalizacion corporativa</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/portfolio-corporate-->
            </div>
            <div class="row">
                <div class="tittle-container">
                    <h2 class="tittle">Diseños Webline</h2>
                </div>
                <div id="portfolio-design">
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/9.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Diseño de logos</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/creaciondemarca-pfs.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Diseño de etiquetas</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/11.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Creación y diseño de páginas web</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/12.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Diseño de campañas</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/13.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Diseño de catalogos</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/14.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Diseño de anuncios</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/15.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Posicionamiento y mantenimiento de páginas web</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="folio-image">
                                <img class="img-responsive-pf" src="images/portfolio/16.jpg" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>Videos corporativos</h3>
                                            <p>Webline</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="#" ><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/#portfolio-design-->
            </div>
        </div>
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" id="portfolio-single-wrap">
            <div id="portfolio-single">
                <h1 class="txt-download">Descarga aqui nuestro portafolio</h1>
                <div id="portafolio-button-download"><span class="downloadbutton"><a class="txt-download-button" href="clientes/files/Portafolio-Webline.pdf" download="clientes/files/">Descargar</a></span>
                </div>
                <!--/#portfolio-download-btn-->
            </div>
        </div>
        <!-- /#portfolio-single-wrap -->
    </section>
    <!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                    <h2>Tabla de precios Webline</h2>
                    <p>Webline te ofrece servicios de calidad, busca lo que necesitas y te ayudaremos a crecer en tus proyectos
                    </p>
                </div>
            </div>
            <div class="pricing-table">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h3>Diseños</h3>
                            <div class="price">
                                $x<span>/mes</span>
                            </div>
                            <ul>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <h3>Diseño logotipos</h3>
                            <div class="price">
                                $x<span>/mes</span>
                            </div>
                            <ul>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <h3>Codigos QR</h3>
                            <div class="price">
                                $x<span>/mes</span>
                            </div>
                            <ul>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                            <h3>Diseño web</h3>
                            <div class="price">
                                $x<span>/mes</span>
                            </div>
                            <ul>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                                <li>Caracteriasticas</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#pricing-->

    <section id="contact">
        <section id="twitter" class="parallax">
            <div>
                <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="twitter-icon text-center">
                                <i class="fa fa-twitter"></i>
                                <h4>Famosas citas sobre creatividad</h4>
                            </div>
                            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <p>Todo niño es un artista, el problema es seguir siendo un artista cuando creces <a href="#"><span>- Pablo Picasso</span></a></p>
                                    </div>
                                    <div class="item">
                                        <p>No tengas miedo de la perfeccion, nunca la vas a alcanzar <a href="#"><span>-
                                                    Salvador Dali</span></a></p>
                                    </div>
                                    <div class="item">
                                        <p>La creatividad viene de un conflicto de ideas <a href="#"><span>Donatella
                                                    Versace</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#phrases-->


        <div id="contact-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>Contáctanos</h2>
                        <p>Webline servicios ofrece un servicio de solicitud para los usuarios las 24 horas del día, si deseas realizar una pregunta o tiene algun comentario, este será contestado lo más pronto posible
                        </p>
                    </div>
                </div>
                <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Correo ectronico" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Tema" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Escribe el mensaje" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-submit" name='enviar'>Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p>Webline es una organización totalmente online, nuestros asesores se pondrán en contacto con usted si desea presentar alguna sugerencia o si tiene dudas sobre nuestro servicios.</p>
                                <ul class="address">
                                    <li><i class="fa fa-map-marker"></i> <span> Direccion:</span> Bogota </li>
                                    <li><i class="fa fa-phone"></i> <span> Telefono:</span>123</li>
                                    <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="mailto:servicioalcliente@creadorwebline.com">
                                            servicioalcliente@creadorwebline.com</a></li>
                                    <li><i class="fa fa-globe"></i> <span> Pagina web:</span> <a href="#">www.creadorwebline.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#contact-->
    <?php
    include('footer.html');
    ?>

</body>

</html>
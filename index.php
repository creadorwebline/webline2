<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include('header.html');
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
    <?php
    include('footer.html');
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - servicios</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>
    <link href="css/servicios.css" rel="stylesheet">
</head>
<!--/head-->

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/navbarr.html');
    ?>
    <!--/#main-nav-->

    <div class="seleccion">
        <div class="txt-seleccion">
            <h1>Gracias por contar con nosotros!</h1>
            <p>Aquí encontrará los apartados totalmente dedicados para ofrecele el mejor servicio y la mejor experiencia.
                <br> Si desea ingresar a un apartado en especifico no olvide confirmar su <b>usuario y contraseña</b> después de seleccionar el nombre de su empresa u organización.</p>
            <p><b>Para ingresar seleccione el nombre de su empresa u organización en los siguientes apartados.</b>
            </p>
        </div>
        <div class="iglesias">
            <h3 class="tittleservicios">Iglesias y Parroquias</h3>
            <div class="btn-selection">
                <a class="seleccionservicios" href="../vew_iglesiaSanNorberto/login/login">Parroquia San Norberto - Administrativos</a>
            </div>
            <div class="btn-selection">
                <a class="seleccionservicios" href="../vew_iglesiaSanNorberto/registro-horarios/registroDeUsuario/Registro">Parroquia San Norberto - Registro y reservas</a>
            </div>
            <div class="btn-selection">
                <a class="seleccionservicios" href="../vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios">Parroquia San Norberto - Visitantes</a>
            </div>
        </div>
    </div>
    <!--/#seleccion-->

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>
</body>

</html>
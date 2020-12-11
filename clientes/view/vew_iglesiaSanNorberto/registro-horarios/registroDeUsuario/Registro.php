<!DOCTYPE html>
<html>

<head>
    <title>Webline - San Norberto</title>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <?php
    include("../navbarr.html");
    ?>
    
    <section class="container-login">
        <a href="../reservaMisa/formularioDeReserva.php"><h3 class="btnToReservas">Si ya se registró y desea reservar cupo para una misa de clic <u><i>AQUí</i></u></h3></a>
        <h3>Si no está registrado en la Parroquia San Norberto, por favor regístrese aquí</h3>
        <div class="registro">
            <form action="IngresoMisasUsuarios.php" method="POST">
                <div class="container-registros">
                    <div class="container-registros-gray">
                        <p>REGISTRE SUS DATOS</p>
                        <div class="item">
                            <input placeholder="Ingrese solo nombre/s" type="text" name="nombre" required minlength="3" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
				        <div class=" item">
                            <input placeholder="Ingrese solo apellidos" type="text" name="apellido" required minlength="3" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
                        <div class="item">
                            <input placeholder="Ingrese su número de identificación" required minlength="6" required maxlength="11" min="999999" type="text" name="cedula" pattern="[0-9]+">
                        </div>
                        <div class="item">
                            <input placeholder="Ingrese su teléfono celular" type="text" name="telefono" required minlength="7" required maxlength="10" pattern="[0-9]+">
                        </div>
                        <input class="btn" type="submit" name="enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>

</body>

</html>
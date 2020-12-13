<?php session_start();
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuariosession = $_SESSION['userV'];
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');
//include($_SERVER['DOCUMENT_ROOT'] .'/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/Visitante.php');

$actualizaUser = new VisitanteLogica();
if (!$usuariosession) {
    header("Location: ../login/login");
    die();
} else {
    $actualiza = $_GET['update'];
    if($actualiza != "pass" && $actualiza !="personal"){
        header("Location: ReservasUsuarios");
    }
}
if(isset($_POST["personal"])){
    //include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');
}else if(isset($_POST["contrasena"])){
    $actualizaUser->cambioDeContraseña(trim($_POST["contrasenaN"]),$usuariosession);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Webline - San Norberto</title>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>

    <link href="../log/css/login.css" rel="stylesheet">
    <link href="../registro-horarios/registroDeUsuario/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        include("../registro-horarios/navbarr.html");
    ?>
    <?php if($actualiza=="personal"){ ?>
    <section class="container-login">
        <div class="registro">
            <form method="POST">
                <div class="container-registros">
                    <div class="container-registros-gray">
                        <p>Actualizar Datos Personales</p>
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
                        <input class="btn" type="submit" name="personal" value="Actualizar">;
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php } ?>
    
    <?php if($actualiza=="pass"){ ?>
    <section class="container-login">
        <div class="registro">
            <form method="POST">
                <div class="container-registros">
                    <div class="container-registros-gray">
                        <p>Cambiar Contraseña</p>
				        <div class=" item">
                            <input placeholder="Ingrese su contraseña nueva" type="password" name="contrasenaN" required minlength="3" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
                        <input class="btn" type="submit" name="contrasena" value="Actualizar">;
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php } ?>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>

</body>

</html>
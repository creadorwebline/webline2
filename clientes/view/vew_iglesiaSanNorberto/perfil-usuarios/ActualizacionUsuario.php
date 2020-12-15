<?php session_start();
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuariosession = $_SESSION['userV'];
include($_SERVER['DOCUMENT_ROOT'] .'/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/Visitante.php');
include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/logicaVariada/logicaVisitante/VisitanteLogica.php');
$actualizaUser = new VisitanteLogica();
if (!$usuariosession) {
    header("Location: ../login/login?tipo=visitante");
    die();
} else {
    $actualiza = $_GET['update'];
    if($actualiza != "pass" && $actualiza !="personal"){
        header("Location: ReservasUsuarios");
    }
}
if(isset($_POST["personal"])){
    $actualizaUser->datosPersonales(trim($_POST["nombre"]),trim($_POST["apellido"]),$usuariosession,trim($_POST["telefono"]));
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
    <?php if($actualiza=="personal"){ 
        $visitanteA = new Visitante();
        $visitanteA->setNombre($actualizaUser->consulta("nombre",$usuariosession));
        $visitanteA->setApellido($actualizaUser->consulta("apellido",$usuariosession));
        $visitanteA->setTelefono($actualizaUser->consulta("tel",$usuariosession));
        ?>
    <section class="container-login">
        <div class="registro">
            <form method="POST">
                <div class="container-registros">
                    <div class="container-registros-gray">
                        <p>Actualizar Datos Personales</p>
                        <div class="item">
                            <input placeholder="Ingrese solo nombre/s" type="text" name="nombre" required minlength="3" value=<?php echo $visitanteA->getNombre(); ?> pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
				        <div class=" item">
                            <input placeholder="Ingrese solo apellidos" type="text" name="apellido" required minlength="3" value=<?php echo $visitanteA->getApellido(); ?> pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
                        <div class="item">
                            <input placeholder="Ingrese su teléfono celular" type="text" name="telefono" required minlength="7" value = <?php echo $visitanteA->getTelefono(); ?> required maxlength="10" pattern="[0-9]+">
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
                            <input placeholder="Ingrese su contraseña nueva" type="password" name="contrasenaN" required minlength="3" pattern="[A-Za-zÁ-ý\ ]+">
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
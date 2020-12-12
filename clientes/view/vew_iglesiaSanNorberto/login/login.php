<?php session_start();
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuarioSessionAdmin = $_SESSION['user'];
$usuarioSessionVisitante = $_SESSION['userV'];
$tipo = $_GET["tipo"];
if (($usuarioSessionAdmin)&&($tipo == "admin")) {
    header("Location: registroDeUsuarios");
    die();
}elseif(($usuarioSessionVisitante)&&($tipo == "visitante")){
    header("Location: ../perfil-usuarios/ReservasUsuarios");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/header.html');
    ?>
    <link href="css/login.css" rel="stylesheet">
</head>
<!--/head-->

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/navbarr.html');
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/clientes/model/iglesia-san-norberto/login/verificarTipoDeUsuario.php');
    ?>
    <div class="container-login">
        <div class="titulotipodeusuario">
            <h2>USUARIO: <?php print $tipo ?></h2>
        </div>
        <div class="space">
            <div class="login">
                <h1 class="tittlelogin">Bienvenido a la Parroquia San Norberto</h1>
                <div class="inputs">
                    <form action="../../../model/iglesia-san-norberto/login/verificarLogin.php" method="POST">
                        <input type="text" name="user" placeholder=<?php if($tipo == "administrador"){echo "Usuario";}else{echo "Cedula";} ?> required pattern="[A-Za-z0-9 ]+">
                        <input type="password" name="password" placeholder="Contraseña" required pattern="[A-Za-z0-9*#$&]+">
                        <input id="nomostrar" type="text" name="tipo" value="<?php print $tipo ?>" readonly>
                        <input class="inputbtn" type="submit" name="entrar" value="Entrar">
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!--/#login-->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/webline/footer.html');
    ?>
</body>

</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>
    <link href="../login/css/login.css" rel="stylesheet">
</head>
<!--/head-->

<body>

<?php
    include("../registro-horarios/navbarr.html");
    ?>
    <div class="container-login">
        <div class="space">
            <div class="login">

                <h1 class="tittlelogin">Bienvenido a la Parroquia San Norberto</h1>
                <div class="inputs">        
                    <form action="../../../model/iglesia-san-norberto/login/verificarLogin.php?user=visitante" method="POST">
                    
                        <input type="text" name="user" placeholder="Cedula" required pattern="[A-Za-z0-9 ]+">
                        <input type="password" name="password" placeholder="contraseña" required pattern="[A-Za-z0-9*#$&]+">
                        <input class="inputbtn" type="submit" name="entrar" value="Entrar">
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!--/#login-->

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>
</body>

</html>
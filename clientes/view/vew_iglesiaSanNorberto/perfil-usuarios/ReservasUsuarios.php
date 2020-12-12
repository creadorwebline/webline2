<?php session_start(); 
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
$usuariosession = $_SESSION['userV'];
if (!$usuariosession) {
    header("Location: LoginUsuarios");
    die();
}else{
    include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
    $usuario = $_GET['usuario'];
    $query = "SELECT * FROM horarios WHERE cedula='$usuario'";
    $result = mysqli_query($conex, $query);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Webline - San Norberto</title>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>
    <link href="css/login.css" rel="stylesheet">
</head>
<!--/head-->

<body>
<?php
    include("../registro-horarios/navbarr.html");
    ?>
<div class="div_table">
        <p>Usuario: <?php printf($usuariosession) ?> <a href="../../../model/iglesia-san-norberto/login/cerrarsesion.php">Cerrar sesión</a></p>
        <h1>Reservas Parroquia San Norberto</h1>
        <table>
            <thead>
                <tr>
                    <th id="date">Fecha-reservada</th>
                </tr>
            </thead>

            <tbody>
                <form id="temperatura" method="POST" action="ActualizarTemperatura.php">
                    <?php
                    $numeracion = 0;
                    date_default_timezone_set("America/Bogota");
                    while ($row = mysqli_fetch_array($result)) {
                        $numeracion = $numeracion + 1; ?>
                        <tr>
                            <td id="date">
                                <input type="text" name="fecha" value=<?php echo $row['fecha'] ?> readonly>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </form>
            </tbody>

        </table>

    </div>
    <!--/#login-->

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>
</body>

</html>
<?php include("../../../../model/iglesia-san-norberto/registro-horarios/validacionHorarios/limiteCalendario/limite.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Webline - San Norberto</title>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/header.html');
    ?>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<!--/head-->

<body>

    <?php
    include("../navbarr.html");
    ?>

    <section class="container-login">
        <div class="head">
            <h1 class="tittle">Bienvenido a la Parroquia San Norberto</h1>
            <img src="img/horarios.jpeg">
            <h3>LOS DÍAS 31 Y 24 DE DICIEMBRE DE 2020 HABRÁ EUCARISTÍA A LAS 8:00 PM</h3>
        </div>

        <div class="space">
            <form action="/webline/clientes/model/iglesia-san-norberto/registro-horarios/validacionHorarios/validarHorarios.php" method="POST">
                <div class="container-datos">
                    <div class="containerone">
                        <div class="item">
                            <h3>Cedula</h3>
                            <input placeholder="Cedula" required minlength="6" required maxlength="11" min="999999" type="text" name="cedula" pattern="[0-9]+">
                        </div>
                        <div class="item">
                            <h3>Fecha a reservar</h3>
                            <input type="date" name="fecha" min="<?php printf($date) ?>" max=<?php printf($datef) ?> required>

                        </div>
                    </div>

                    <div class="horarios">
                        <div class="hora">
                            <div class="htittle">
                                <h3>Seleccione una hora</h3>
                            </div>
                            <table class="table table-responsive">
                                <td class="item">
                                    <input type="radio" name="hora" value="7:30" required><span>7:30am</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="8:00" required><span>8:00am</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="9:30" required><span>9:30am</span>
                                </td>
                            </table>
                            <table class="table table-responsive">
                                <td class="item">
                                    <input type="radio" name="hora" value="12:30" required><span>12:30pm</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="16:30" required><span>4:30pm</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="18:30" required><span>6:30pm</span>
                                </td>
                            </table>
                            <table class="table table-responsive">
                                <td class="item">
                                    <input type="radio" name="hora" value="20:00" required><span>8:00pm</span>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="boton">
                    <input class="btn" type="submit" name="enviarHorario">
                </div>
            </form>
            
        </div>
    </section>
    <!--/#login-->
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/webline/footer.html');
    ?>
</body>

</html>
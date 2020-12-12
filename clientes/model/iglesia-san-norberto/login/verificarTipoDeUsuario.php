<?php
$tipo = $_GET["tipo"];
if ($tipo == "admin") {
    $tipo = "administrador";
} elseif ($tipo == "visitante") {
    $tipo = "visitante";
} elseif (($tipo != "admin") || ($tipo != "visitante")) {
    header("Location: /webline/clientes/view/view_Servicios/servicios");
}

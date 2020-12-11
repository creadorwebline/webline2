<?php
//IMPORTANT!!!!!
error_reporting(0);
//IMPORTANT!!!!!
include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/view/vew_iglesiaSanNorberto/login/login.php');
    die();
}

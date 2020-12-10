<?php


include("../../db/con_db.php");
session_start();


if (isset($_POST['entrar'])) {

    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['password']);
        $query = "SELECT id FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
        $querypw = "SELECT passwordt FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
        $result = mysqli_query($conex, $query);
        $filas = mysqli_num_rows($result);

        if (($filas) >= 1) {
            $_SESSION['user']=$user;
            header("Location: HistorialDeUsuarios.php");
        } else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }
} elseif (!isset($_POST['entrar'])) {
    header("Location: login.php");
}
?>
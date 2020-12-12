<?php
include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
session_start();
if (isset($_POST['entrar'])) {

    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $tipUsuario = $_GET['user'];
        $user = trim($_POST['user']);
        $pass = trim($_POST['password']);
        switch ($tipUsuario){
            case "admin":
                $query = "SELECT id FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                //$querypw = "SELECT passwordt FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                $result = mysqli_query($conex, $query);
                $filas = mysqli_num_rows($result);
                if (($filas) >= 1) {
                    $_SESSION['user']=$user;
                    header("Location: ../../../view/vew_iglesiaSanNorberto/login/registroDeUsuarios.php");     
                } else {
                    header("Location: ../../../view/vew_iglesiaSanNorberto/login/login.php");
                }
                break;
            case "visitante":
                $query = "SELECT id FROM dato WHERE CC = '$user' AND contrasena = '$pass'";
                //$querypw = "SELECT passwordt FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                $result = mysqli_query($conex, $query);
                $filas = mysqli_num_rows($result);
                if (($filas) >= 1) {
                    $_SESSION['userV']=$user;
                    header("Location: ../../../view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios?usuario=".$user);     
                } else {
                    header("Location: ../../../view/vew_iglesiaSanNorberto/perfil-usuarios/LoginUsuarios");
                }
                break;
        }
    } else {
        header("Location: ../../../view/view_Servicios/servicios.php");
    }
} elseif (!isset($_POST['entrar'])) {
    header("Location: ../../../view/view_Servicios/servicios.php");
}
?>
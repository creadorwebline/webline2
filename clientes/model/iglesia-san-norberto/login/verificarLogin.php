<?php
include($_SERVER['DOCUMENT_ROOT'].'/webline/clientes/db/con_db.php');
session_start();
if (isset($_POST['entrar'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pass = trim($_POST['password']);
        $tipo = trim($_POST['tipo']);
        if(($tipo=="administrador")||($tipo=="visitante")){
            switch ($tipo){
                case "administrador":
                    $query = "SELECT id FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                    //$querypw = "SELECT passwordt FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                    $result = mysqli_query($conex, $query);
                    $filas = mysqli_num_rows($result);
                    if (($filas) >= 1) {
                        $_SESSION['user']=$user;
                        header("Location: ../../../view/vew_iglesiaSanNorberto/login/registroDeUsuarios");     
                    } else {
                        header("Location: ../../../view/vew_iglesiaSanNorberto/login/login");
                    }
                    break;
                case "visitante":
                    $query = "SELECT id FROM dato WHERE CC = '$user' AND contrasena = '$pass'";
                    //$querypw = "SELECT passwordt FROM logint WHERE usert = '$user' AND passwordt = '$pass'";
                    $result = mysqli_query($conex, $query);
                    $filas = mysqli_num_rows($result);
                    if (($filas) >= 1) {
                        $_SESSION['userV']=$user;
                        header("Location: ../../../view/vew_iglesiaSanNorberto/perfil-usuarios/ReservasUsuarios");     
                    } else {
                        header("Location: ../../../view/vew_iglesiaSanNorberto/login/login");
                    }
                    break;
            }
        }elseif(($tipo!="administrador")||($tipo!="visitante")){
            header("Location: ../../../view/view_Servicios/servicios.php");
        }
        
    } else {
        header("Location: ../../../view/view_Servicios/servicios.php");
    }
} elseif (!isset($_POST['entrar'])) {
    header("Location: ../../../view/view_Servicios/servicios.php");
}

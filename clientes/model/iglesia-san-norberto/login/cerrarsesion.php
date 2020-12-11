<?php

session_start();
session_destroy();
header("Location: ../../../view/vew_iglesiaSanNorberto/login/login.php");

exit();
?>
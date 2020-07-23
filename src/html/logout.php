<?php
session_start();

unset($_SESSION['check']);

session_destroy();

header('location:authentication-login1.php');


?>


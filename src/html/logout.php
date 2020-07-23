<?php
session_start();

unset($_SESSION['check']);
unset($_SESSION['name']);

session_destroy();

header('location:authentication-login1.php');


?>


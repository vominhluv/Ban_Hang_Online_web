<?php 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database  = "qlao";
    $conn = mysqli_connect($servername, $username, $password,$database) or die("lỗi");
    mysqli_set_charset($conn, 'UTF8');
?>
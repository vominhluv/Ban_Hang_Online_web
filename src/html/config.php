<?php
$severname = "127.0.0.1";
$username = "root";
$password = "";
$database = "website_mvc";
$conn = mysqli_connect ($severname , $username , $password, $database) or die ("loi");
mysqli_set_charset ($conn , 'UTF8');
?>

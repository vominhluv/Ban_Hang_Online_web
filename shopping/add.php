<?php
$connection = mysqli_connect("localhost", "root", "", "website_mvc");
$user=$_GET['txtuser'];

echo $user;

?>
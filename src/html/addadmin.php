<?php
// $connection = mysqli_connect("localhost", "root", "", "website_mvc");
include_once('connet.php');
$user=$_GET['txtuser'];
$pass = $_GET['txtpass'];
$repass = $_GET['txtrepass'];
$email = $_GET['txtemail'];
$name = $_GET['txtfullname'];
$sql="INSERT INTO tbl_admin (adminName, adminEmail, adminUser, adminPass) VALUES ('$name','$email', '$user', '$pass')";
mysqli_query($conn,$sql) or die (' nhập coi lại sql');
header('Location:Signup.php');
?>

<?php
// $connection = mysqli_connect("localhost", "root", "", "website_mvc");
include_once('connet.php');
$userho=$_GET['userho'];
$userten=$_GET['userten'];
$useremail=$_GET['useremail'];
$usertaikhoan=$_GET['usertaikhoan'];
$usermatkhau1=$_GET['usermatkhau1'];
$usermatkhau2=$_GET['usermatkhau2'];
$userdiachi=$_GET['userdiachi'];
$usersdt=$_GET['usersdt'];
$sql="INSERT INTO tbl_user  VALUES ('$usertaikhoan','$usermatkhau1','$userho','$userten','$usersdt','$useremail','$userdiachi')";
mysqli_query($conn,$sql) or die (' nhập coi lại sql');

header('Location:dang-nhap.php');
?>

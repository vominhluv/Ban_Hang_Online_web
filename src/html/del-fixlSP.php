<?php
// lỗi include_one();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database  = "qlao";
$conn = mysqli_connect($servername, $username, $password,$database) or die("lỗi");
mysqli_set_charset($conn, 'UTF8');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM tb_sp WHERE sp_id = '$id'";
    mysqli_query($conn,$sql) or die("xem lại truy vấn");
header('Location:ticket-list.php');
}
?>
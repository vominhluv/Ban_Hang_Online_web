<?php
    include_once('connet.php');
                $id=$_GET['id'];
                $name=$_GET['name'];
                $type=$_GET['type'];
                $prices=$_GET['prices'];
                $picture=$_GET['picture'];
//        if (mysqli_connect_errno($conn))
//        {
//            echo "Failed to connect to MySQL: " ;
//        }
                $sql="INSERT INTO tb_sp (sp_id,sp_hinhanh,sp_theloai,sp_tensanpham,sp_gia) VALUES
                ('$id','$picture','$type',' $name','$prices')";
                mysqli_query($conn,$sql)or die("xem lại isset");
                header('Location:ticket-list.php');
?>


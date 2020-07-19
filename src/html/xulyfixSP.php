<?php
        include_once('connet.php');
        $id=$_GET['id'];
        $name=$_GET['name'];
        $type=$_GET['type'];
        $prices=$_GET['prices'];
        $picture=$_GET['picture'];
                if (mysqli_connect_errno($conn))
                {
                    echo "lỗi conn" ;
                }
$sql = " UPDATE tb_sp SET sp_id='$id',sp_hinhanh='$picture',sp_theloai='$type',sp_tensanpham='$name',sp_gia='$prices'
            WHERE sp_id='$id'";
      mysqli_query($conn,$sql);
        header('Location:ticket-list.php');

?>
<?php
    global $conn;

    function connect_db(){
        global $conn;

        if(!$conn){
            $conn=mysqli_connect('localhost','root','','qlao') or die ('Can not connect to database');
            mysqli_set_charset($conn,'utf8');
        }
    }
    function disconnect_db(){
        global $conn;
        if($conn){
            mysqli_close($conn);
        }
    }
    function get_all_product(){
        global $conn;
        connect_db();
        $sql="select * from tb_sp";
        $query= mysqli_query($conn,$sql);
        $result = array();
        if ($query){
            while ($row = mysqli_fetch_assoc($query)){
                $result[]=$row;
            }
        }
        return $result;
    }
    $sp = get_all_product();
?>
<html>
    <body>
    <table width='90%' border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <td>ID</td>
                <td>Hình ảnh</td>
                <td>Thể Loại</td>
                <td>Tên sản phẩm</td>
                <td>Giá</td>
                
            </tr>
            

            <?php foreach ($sp as $item){?>
            <tr>
                <td><?php echo $item['sp_id']; ?></td>
                
                <td>
                    <?php
                     echo <img src=$item['sp_hinhanh'] >;
                     ?>
                </td>
               
                <td><?php echo $item['sp_theloai']; ?></td>
                <td><?php echo $item['sp_tensanpham']; ?></td>
                <td><?php echo $item['sp_gia']; ?></td>
            </tr>
            <?php } ?>

        </table>
    </body>
</html>

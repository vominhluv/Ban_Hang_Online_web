<?php
session_start();

include_once('connet.php');
$user=$_GET['txtuser'];
$pass=$_GET['txtpass'];
echo $user,$pass;
$sql="SELECT *  FROM tbl_admin  where adminUser='".$user."' and adminPass='".$pass."'";
$result = mysqli_query($conn, $sql);

if ($result) {
  
    // Hàm `mysql_fetch_row()` s? ch? fetch d? li?u m?t record m?i l?n du?c g?i
    // do dó c?n s? d?ng vòng l?p While d? l?p qua toàn b? d? li?u trên b?ng posts
    while ($row=mysqli_fetch_row($result)) {
      $name=$row[1];
      $gx=$row[3];
      $gv=$row[4];
      if (($user == $gx) && ($pass== $gv))
      {
        $_SESSION["name"]=$name;
        $_SESSION["check"]=$gx;
        header('Location:index.php?');
      }
      else 
      header('Location:authentication-login1.php');
      //printf ("adminUser: %s, adminPass: %s<br>",$row[3],$row[4]);
    }

    // Máy tính s? luu k?t qu? t? vi?c truy v?n d? li?u b?ng
    // Do dó chúng ta nên gi?i phóng b? nh? sau khi hoàn t?t d?c d? li?u
    mysqli_free_result($result);
}

// $sql="SELECT adminUser,adminPass  FROM tbl_admin where adminUser='".$user."' and adminPass='".$pass."'";
// $result=mysqli_query($connection,$sql);
// if (mysqli_num_rows($result)>0) {
  
//   // Hàm `mysql_fetch_row()` s? ch? fetch d? li?u m?t record m?i l?n du?c g?i
//   // do dó c?n s? d?ng vòng l?p While d? l?p qua toàn b? d? li?u trên b?ng posts
//   while ($row=mysqli_fetch_assoc($result)) {
    
//       $_SESSION["check"]=$gx;
//       header('Location:index.php?');
//     }
//   }
//     else  {
//     header('Location:authentication-login1.php');
//     //printf ("adminUser: %s, adminPass: %s<br>",$row[3],$row[4]);
//   }

?>
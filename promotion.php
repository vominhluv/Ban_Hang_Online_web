<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>77 Shop - Khuyến Mãi</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/promotion.css">

</head>

<body class="grey lighten-3" style="background-color: rgb(179, 179, 179);">
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="homepage.php" target="_blank">
            <strong class="blue-text">77</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link waves-effect" href="homepage.php">Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"  href="./tro-giup.php" target="_blank">Trợ giúp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="./promotion.php"
                       target="_blank">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="./chinh-sach-ban-hang.php" target="_blank">Chính sách bán hàng

                    </a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="./don-hang.php" class="nav-link waves-effect">
                        
                        <i class="fas fa-shopping-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block"> Giỏ hàng </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li> -->
                <?php
                                   
                    $name2 = $_SESSION["name1"];
                    // echo $tendangnhap;
                    if(($name2)!="" ){
                        echo $name2;
                        $li =<<<EOD
                        <li class="nav-item">
                    <a href="dang-nhap.php" class="nav-link border border-light rounded waves-effect"
                       >
                        Đăng xuất
                        </a>
EOD;
                    
                    echo $li;
                    }
                    
                    else{
                    
                        $li1 =<<<EOD
                        <li class="nav-item">
                    <a href="./dang-nhap.php" class="nav-link border border-light rounded waves-effect"
                       target="_blank">
                        Đăng nhập
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./dang-ky.php" class="nav-link border border-light rounded waves-effect"
                       target="_blank">
                        Đăng ký
                    </a>
                </li>

                    
EOD;
                    
                    echo $li1;
                    }

?>
                
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->
<div id="search">
    <?php
    include_once ("connet.php");

    ?>
<input type="text" name="" id="" placeholder="Tìm khuyến mãi ... "style="width:500px;">
</div>
 <div id="takem">
    Được mua nhiều nhất
    </div>
 <div class="salebox">
 <?php
 include_once('connet.php');
 $sql= "select sp_hinhanh,sp_theloai,sp_tensanpham from tb_sp";
 $result= mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0) {
     while ($row=mysqli_fetch_assoc($result)) {
         $sp_hinhanh=$row['sp_hinhanh'];
         $sp_theloai=$row['sp_theloai'];
         $sp_tensanpham=$row['sp_tensanpham'];
         $shirt = <<<EOD
     
       <div id="shirt">
        <div class="sp_hinhanh">
          <img src=$sp_hinhanh> 
        </div>
        <div class="infpic">
        <div>$sp_theloai</div>
          <img src="img/star.png" alt="">
        </div>
        </div>
      
EOD;
         echo $shirt;
     }
 }

 ?>
  <!-- last shirt -->
  </div>

 <div id="txtreview">
   Chi tiết :
  </div>
  <div id="review">
    <div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <img src="./img/aosomi1.jpg" class="img-fluid" alt="">

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!--Content-->
        <div class="p-4">

          <div class="mb-3">
            <a href="">
              <span class="badge purple mr-1">Độc</span>
            </a>
            <a href="">
              <span class="badge blue mr-1">Mới</span>
            </a>
            <a href="">
              <span class="badge red mr-1">Hot</span>
            </a>
          </div>

          <p class="lead">
            <span class="mr-1">
              <del>9.999.999.đ</del>
            </span>
            <span>4.999.999.đ</span>
          </p>

          <p class="lead font-weight-bold">Mô Tả</p>

          <p>Kiểu dáng hiện đại, gọn gàng với viền màn hình mỏng.
            Độ phân giải HD hiển thị hình ảnh chi tiết cùng màu sắc rực rỡ, sống động đến từ công nghệ Brilliantly Clear Enhancer.
            Âm thanh vòm lôi cuốn, hiệu ứng nổi bật với công nghệ Dolby Digital.
            Xem truyền hình kỹ thuật số chất lượng từ đầu thu DVB-T2.</p>

          <form class="d-flex justify-content-left">
            <!-- Default input -->
            <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px" min="1">
            <button class="btn btn-primary btn-md my-0 p waves-effect waves-light" type="submit"><a href="don-hang.html"></a>Thêm Vào Giở Hàng
              <i class="fas fa-shopping-cart ml-1"></i>
            </button>

          </form>

        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
  </div>
</body>
</html>
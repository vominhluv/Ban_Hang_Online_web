<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>77 Shop- Sản phẩm</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

   <!-- Navbar -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="home-page.html" target="_blank">
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
            <a class="nav-link waves-effect" href="home-page.html">Trang chủ
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="./tro-giup.html" target="_blank">Trợ giúp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="./khuyen-mai.html"
              target="_blank">Khuyến mãi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="./chinh-sach-ban-hang.html" target="_blank">Chính sách bán hàng
              
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="don-hang.html" class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
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
          <li class="nav-item">
            <a href="./dang-nhap.html" class="nav-link border border-light rounded waves-effect"
              target="_blank">
              Đăng nhập
            </a>
          </li>
          <li class="nav-item">
            <a href="./dang-ky.html" class="nav-link border border-light rounded waves-effect"
              target="_blank">
              Đăng ký
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <?php
       include_once ('connet.php');
       $id=$_GET['id'];
       $sql = "Select tb_chitiet.sp_tensanpham,tb_sp.sp_id,tb_sp.sp_hinhanh,tb_chitiet.sp_mota,tb_chitiet.sp_dongia from tb_sp,tb_chitiet Where tb_sp.sp_id=$id and tb_sp.sp_id=tb_chitiet.sp_id";
       $resut = mysqli_query($conn, $sql);
       if (mysqli_num_rows($resut) > 0) {
           while ($row = mysqli_fetch_assoc($resut)) {
            $prices = $row['sp_dongia'];
            $name = $row['sp_tensanpham'];
            $id=$row['sp_id'];
            $_SESSION['getid']=$id;
            $mota=$row['sp_mota'];
            $hinhanh=$row['sp_hinhanh'];
       //
      
       //     
      $cmm=<<<EOD
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src=$hinhanh class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
          <p class="lead font-weight-bold">$name</p>
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
              
              <span>$prices.đ</span>
            </p>

            <p class="lead font-weight-bold">Mô Tả</p>

            <p>$mota</p>


          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
EOD;
           }
           echo $cmm;
          }
          else echo "cmm";


     $getchuoi=<<<EOD
      
                  <a href="don-hang.php?id=$id"><button type="submit" class="btn btn-block btn-dark">
                    <i class="fas fa-shopping-cart ml-1">Thêm vào giỏ hàng</i>
                  </button></a>
EOD;
      echo $getchuoi;
    ?>
        <hr>

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="#" target="_blank"
        role="button">Liên hệ chủ 77-shop 
        <i class="fab fa-facebook-f mr-3"></i>
      </a>
      <a class="btn btn-outline-white" href="#" target="_blank" role="button">Các thiết bị liên quan
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      Luôn đồng hành cùng quý khách
      <a href="https://www.facebook.com/profile.php?id=100008410997317" target="_blank"> Admin </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>77 Shop - Đăng ký</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">
    
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
          <li class="nav-item">
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
            <a href="./don-hang.html" class="nav-link waves-effect">
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
          <li class="nav-item active">
            <a href="./dang-ky.html" class="nav-link border border-light rounded waves-effect"
              target="_blank">
              Đăng ký
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar --> <!-- Navbar -->
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">ĐĂNG KÝ</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <form class="card-body"action="adddk.php" method="GET">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--firstName-->
                                    <div class="md-form ">
                                        <input type="text" id="firstName"name="userho" class="form-control">
                                        <label for="firstName" class="">Họ</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--lastName-->
                                    <div class="md-form">
                                        <input type="text" id="lastName"name="userten" class="form-control">
                                        <label for="lastName" class="">Tên</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->


                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="text" id="email1"name="useremail" class="form-control" placeholder="">
                                <label for="email" class="">Email (optional)</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="email2"name="usertaikhoan" class="form-control" placeholder="">
                                <label for="email" class="">Tên Đăng Nhập</label>
                            </div>
                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="password" id="email3"name="usermatkhau1" class="form-control" placeholder="">
                                <label for="email3" class="">
                                    Mật khẩu
                                </label>
                            </div>
                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="password" id="email"name="usermatkhau2" class="form-control" placeholder="       ">
                                <label for="email" class="">Nhập lại mật khẩu</label>
                            </div>

                            <!--address-->
                            <div class="md-form mb-5">
                                <input type="text" id="address"name="userdiachi" class="form-control"
                                    placeholder="138/24a Nguyễn Trãi, phường">
                                <label for="address" class="">Địa chỉ</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="address"name="usersdt" class="form-control" placeholder="0393980325">
                                <label for="address" class="">Số điện thoại</label>
                            </div>





                            <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng ký </button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->




            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

   <!--Footer-->
   <footer class="page-footer text-center font-small mt-4 wow fadeIn">

   

    <hr class="my-4">
    <div>
      <h5>Thông tin liên lạc:</h5>
      <li>
        Địa chỉ: TRƯỜNG ĐẠI HỌC SƯ PHẠM THÀNH PHỐ HỒ CHÍ MINH
      </li>
    </div>

    <!-- Social icons -->
    <H5>Theo dõi chúng tôi trên</H5>
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

     

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      
      

     
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright: TEAM 77 BINH DINH
    </div>
    <!--/.Copyright-->

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
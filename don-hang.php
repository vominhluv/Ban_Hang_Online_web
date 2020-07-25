<?php
 session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>77 Shop - Phiếu mua hàng</title>
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
/*
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
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="homepage.php">Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"  href="./tro-giup.php" target="_blank">Trợ giúp</a>
                </li>
                <li class="nav-item">
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
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">PHIẾU MUA HÀNG</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control">
                    <label for="firstName" class="">Họ</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control">
                    <label for="lastName" class="">Tên</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->


              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                <label for="email" class="">Email (optional)</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="138/24a Nguyễn Trãi, phường.., ...">
                <label for="address" class="">Địa chỉ</label>
              </div>
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="0393980325">
                <label for="address" class="">Số điện thoại</label>
              </div>


              <div class="d-block my-2">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Ví ViettelPay</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Ví MoMo</label>
                </div>
               
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">ĐẶT HÀNG </button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">SẢN PHẨM ĐÃ CHỌN</span>
            <span class="badge badge-secondary badge-pill">


            </span>
          </h4>

          <ul class="list-group mb-3 z-depth-1">
              <?php
              include_once('connet.php');

              if(isset($_GET['id'])) {
                  $id=$_GET['id'];
                  $_SESSION['cart'];
                  $sql = "select sp_tensanpham, sp_gia from tb_sp where sp_id='$id'";
                  $result = mysqli_query($conn, $sql);
                  $data = mysqli_fetch_assoc($result);
                  $name = $data['sp_tensanpham'];
                  $prices = $data['sp_gia'];
                  if (isset( $_SESSION['cart'])){
                      if (array_key_exists($id, $_SESSION['cart'])) {
                                        $array=[
                              "sl" => (int) $_SESSION['cart'][$id]['sl'] + 1,
                              "name" => $name,
                              "prices" => $prices
                          ];
                      } else {
                          $array=[
                              "sl" => 1,
                              "name" => $name,
                              "prices" => $prices
                          ];
                      }
                  } else {
                      $array=[
                          "sl" => 1,
                          "name" => $name,
                          "prices" => $prices
                      ];
                  }
            $_SESSION['cart'][$id]=$array;
            
              }else{
                 header('Location:homepage.php'); 
              }
//              echo '<pre>',
//              print_r($_SESSION['cart']);'</pre>';
//              if(isset($id)){
//                  $_SESSION['cart']=array();
//              }
//              array_push($_SESSION['cart'], $id);

            ?>
              <?php
                $tien=0;
                $dem=1;
              $cart= isset($_SESSION['cart'])?$_SESSION['cart']:[];
              foreach ($cart as $value) :  ?>

              <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                      <h6 class="my-0"><?php echo $value['name']; ?></h6>
                      <small class="text-muted">số lượng:<?php echo $value['sl']; ?></small>
                  </div>
                  <span class="text-muted"><?php $thanhtien=$value['sl']*$value['prices']; echo number_format($thanhtien);?> đ</span>
              </li>
                  <?php $tien+=$thanhtien;
                  $dem+=$value['sl'];
                   $_SESSION['dem']=$dem;
                   ?>
              <?php  endforeach;?>
              <li class="list-group-item d-flex justify-content-between">
                      <span>TỔNG CỘNG</span>
                      <strong><?php echo number_format($tien); ?> đ</strong>
              </li>
            </ul>

<?php
// unset($_SESSION['cart']);
?>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">ÁP DỤNG</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

        </div>

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

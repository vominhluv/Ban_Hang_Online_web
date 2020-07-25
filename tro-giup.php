<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>77 Shop- Áo sơ mi</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/help.css">
</head>

<body>

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
                <li class="nav-item active">
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
    <div class="body">
     <div class="content">
         <h1>Xin Chào Tôi Có Thể Giúp Gì Cho bạn?</h1>
         <div>
        <input type="text" name="" id="search" placeholder="Đặt câu hỏi" ><img src="img/search.png" alt="" style="width: 25px;height: 25px; border: 1px solid black;border-radius: 5px;"></div>
     </div>
     <div class="contenttxt">
         <div class="c-l">
         <h2>Danh mục</h2>
         <div id="text">Tài khoản <br><br><br>
            Đơn Hàng <br><br><br><br>
            Trả Hàng <br><br><br><br>
            Bán Hàng <br><br><br><br>
            Vận Chuyển <br><br><br><br>
            77 Mail</div></div>
         <div class="c-r">
             <h1>Câu Hỏi Thường Gặp?</h1> <hr>
             <p>Tại Sao Tôi Không Nhận Được Mã Xác Minh (OTP) ?</p><hr>
             <p>Các Câu Hỏi Thường Gặp Về 77 card</p><hr>
             <p>Thời Gian Tối Đa Tôi Phải Chờ</p><hr>
             <p>Hướng Dẫn Mua Hàng / Đặt Hàng Trên  77 web </p><hr>
                Hướng Dẫn Bắt Đầu Bán Hàng Trên 77 web</p><hr>
                Chính Sách Trả Hàng/ Hoàn Tiền Chung Của 77 web</p><hr>
                Shop Yêu Thích Là Gì?</p><hr>
                Các Câu Hỏi Liên Quan Đến Trả Hàng/ Hoàn Tiền</p><hr>
             <p></p>
             <h3>Bạn có câu hỏi nào khác không</h3>
             <div id="boxmail"> 
                 <img src="img/mail.png" alt="">       Hãy liên hệ với chúng tôi qua @gmail.com
             </div>
             <div id="boxphone">
                 <img src="img/Phone.png" alt=""> Hãy liên hệ qua 090900909
             </div>
         </div>
     </div>
     <br><br>
     <div class="footer">
         <br><br>
         <div class="logoweb">
             <ul>
                 <li><a href="#"><img src="img/faceicon.png" alt=""></a></li>
                 <li><a href="#"><img src="img/ggicon.png" alt=""></a></li>
                 <li><a href="#"><img src="img/instagramicon.png" alt=""></a></li>
             </ul>
             <strong>Bản quyền thuộc team 77</strong>
         </div>
         <div class="private">
         <div id="a">Chính Sách Riêng Tư</div>
         <div id="ab">Điều Khoản Dịch Vụ</div>
         <div id="ac">Điều Khoảng 77 </div></div>
     </div>
     </div>
 </body>
 </html>
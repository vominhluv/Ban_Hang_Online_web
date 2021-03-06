<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>77 Shop - Chính sách bán hàng</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <script>
    function product(this){
      var a=document.getSelection('this');
       // var a=location.assign("product-page.html");
        a.setAttribute("a href", "product-page.html");
        console.log('a');
    }
</script>
  <style type="text/css">
  button{
    border: none;
    z-index:1 ;
  }
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
  <link rel="stylesheet" href="css/style1.css">

</head>

<body class="hinhnen">

  <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="index.php" target="_blank">
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
                    <a class="nav-link waves-effect" href="index.php">Trang chủ
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
                <li class="nav-item active">
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
  <nav>
      <div class="banhangcs">
          <h2>
            
            <p>77 SHOP - MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</p>
            <br>
            <br>
            Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì 77 SHOP.vn là một sự lựa chọn hiệu quả dành cho bạn. Bản chất của 77 SHOP là một social ecommerce platform - nền tảng trang web thương mại điện tử tích hợp mạng xã hội. Điều này cho phép người mua và người bán hàng dễ dàng tương tác, trao đổi thông tin về sản phẩm và chương trình khuyến mãi của shop. Nhờ nền tảng đó, việc mua bán trên 77 SHOP trở nên nhanh chóng và đơn giản hơn. Bạn có thể trò chuyện trực tiếp với nhà bán hàng để hỏi trực tiếp về mặt hàng cần mua. Còn nếu bạn muốn tìm mua những dòng sản phẩm chính hãng, uy tín, 77 SHOP Mall chính là sự lựa chọn lí tưởng dành cho bạn. Đến với 77 SHOP, cơ hội để trở thành một nhà bán hàng dễ dàng hơn bao giờ hết. Chỉ với vài thao tác trên ứng dụng, bạn đã có thể đăng bán ngay những sản phẩm của mình. Không những thế, các nhà bán hàng có thể tùy chọn các tính năng “Shop tạm nghỉ” hoặc tự tạo riêng cho mình một chương trình khuyến mãi để thu hút người mua với những sản phẩm có mức giá hấp dẫn. Khi đăng nhập tại 77 SHOP Kênh người bán, bạn có thể dễ dàng phân loại sản phẩm, theo dõi đơn hàng, chăm sóc khách hàng và cập nhập ngay các hoạt động của shop.
            <br>
            <br>
            <p>TẢI ỨNG DỤNG 77 SHOP NGAY ĐỂ MUA BÁN ONLINE MỌI LÚC, MỌI NƠI</p>
            
            <br>
            <br>
            Ưu điểm của ứng dụng 77 SHOP là cho phép bạn mua và bán hàng mọi lúc, mọi nơi. Bạn có thể tải ứng dụng 77 SHOP cũng như đăng sản phẩm bán hàng miễn phí mà không phải chịu bất kỳ một khoản phí hoa hồng nào. Ngoài ra, ứng dụng 77 SHOP còn có những ưu điểm sau: - Giao diện thân thiện, đơn giản, dễ sử dụng. Bạn sẽ dễ dàng thấy được ngay những sản phẩm nổi bật cũng như dễ dàng tìm đến các ô tìm kiếm, giỏ hàng hoặc tính năng chat liền tay. - Ứng dụng tích hợp công nghệ quản lý đơn mua và bán hàng tiện lợi trên cùng một tài khoản. Bạn sẽ vừa là người mua hàng, vừa là người bán hàng rất linh hoạt, dễ dàng. - Cập nhập thông tin khuyến mãi, 77 SHOP flash sale nhanh chóng và liên tục. Tại 77 SHOP, bạn có thể lấy các mã khuyến mãi, mã giảm giá 77 SHOP và mã miễn phí vận chuyển toàn quốc. Bên cạnh đó, 77 SHOP cũng sẽ có những chiến dịch khuyến mãi lớn hằng năm như 77 SHOP 9.9 sale, 77 SHOP 10.10 sale, 77 SHOP 11.11 sale, 77 SHOP 12.12 sale, 77 SHOP Tết Sale. Đây là thời điểm để người mua hàng có thể nhanh tay chọn ngay cho mình những mặt hàng ưa thích với mức giá giảm kỉ lục.
            <br>
            <br>
            <p> MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI 77 SHOP</p>
        
            <br>
            <br>
            Mua hàng trên 77 SHOP luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng thời trang nam, thời trang nữ, đồng hồ, điện thoại, nước rửa tay khô hay khẩu trang N95 thì 77 SHOP cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, 77 SHOP cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có cửa hàng chính thức trên 77 SHOP Mall với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, 77 SHOP luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy. Mọi thông tin về người bán và người mua đều được bảo mật tuyệt đối. Các hoạt động giao dịch thanh toán tại 77 SHOP luôn được đảm bảo diễn ra nhanh chóng, an toàn. Một vấn đề nữa khiến cho các khách hàng luôn quan tâm đó chính là mua hàng trên 77 SHOP có đảm bảo không. 77 SHOP luôn cam kết mọi sản phẩm trên 77 SHOP, đặc biệt là 77 SHOP Mall đều là những sản phẩm chính hãng, đầy đủ tem nhãn, bảo hành từ nhà bán hàng. Ngoài ra, 77 SHOP bảo vệ người mua và người bán bằng cách giữ số tiền giao dịch đến khi người mua xác nhận đồng ý với đơn hàng và không có yêu cầu khiếu nại, trả hàng hay hoàn tiền nào. Thanh toán sau đó sẽ được chuyển đến cho người bán. Đến với 77 SHOP ngay hôm nay để mua hàng online giá rẻ và trải nghiệm dịch vụ chăm sóc khách hàng tuyệt vời tại đây. Đặc biệt khi mua sắm trên 77 SHOP Mall, bạn sẽ được miễn phí vận chuyển, giao hàng tận nơi và 7 ngày miễn phí trả hàng. Ngoài ra, khách hàng có thể sử dụng 77 SHOP Xu để đổi lấy mã giảm giá có giá trị cao và voucher dịch vụ hấp dẫn. Tiếp đến là 77 SHOP Mum's Club với các ưu đãi độc quyền từ các thương hiệu lớn như Enfa; Friso; Pampers...cho các mẹ bỉm sữa đăng ký làm thành viên. Hãy truy cập ngay 77 SHOP.vn hoặc tải ngay ứng dụng 77 SHOP về điện thoại ngay hôm nay!
          </h2>
      </div>
  </nav>
  <!-- Navbar -->
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
</body>
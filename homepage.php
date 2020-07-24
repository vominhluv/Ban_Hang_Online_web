<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>77 Shop - Trang chủ</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <!--    <script src="homepage.js"/>-->
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
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="homepage.php">Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="tro-giup.html" target="_blank">Trợ giúp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="./promotion.html"
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
                <?php
                    $tendangnhap = $_COOKIE['id_tentaikhoan'];
                    // echo $tendangnhap;
                    if(isset($tendangnhap)){
                        echo $tendangnhap;
                        $li =<<<EOD
                        <li class="nav-item">
                    <a href="home-page.php" class="nav-link border border-light rounded waves-effect"
                       target="_blank">
                        Đăng xuất
                        </a>
EOD;
                    
                    echo $li;
                    }
                    
                    else{
                        $li =<<<EOD
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
                    
                    echo $li;
                    }

?>
                
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>KHUYẾN MÃI THÁNG 6</strong>
                        </h1>

                        <p>
                            <strong>SALE 20% TRONG 3 NGÀY ĐẦU</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>06 - 07 -08 / 06 / 2020</strong>
                        </p>

                        <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Mua ngay

                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>ĐẠI TIỆC THƯƠNG HIỆU</strong>
                        </h1>

                        <p>
                            <strong>GIẢM ĐẾN 50% </strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>NHẬP MÃ: MA06062020</strong>
                        </p>

                        <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Mua ngay

                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>NĂNG ĐỘNG ĐÓN HÈ</strong>
                        </h1>

                        <p>
                            <strong>THỜI TRANG ĐƯỜNG PHỐ</strong>
                        </p>


                        <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Mua ngay

                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

            <!-- Navbar brand -->
            <span class="navbar-brand">Danh mục:</span>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links --><?php
                include_once ('connet.php');
                $somi="Áo sơ mi";
                $thun="Áo thun";
                $khac="khác";
                $link=<<<EOD
               
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Tất cả
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="homepageselect.php?select=$somi">Áo sơ mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepageselect.php?select=$thun">Áo thun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepageselect.php?select=$khac">Khác</a>
                    </li>

                </ul>
EOD;
                echo $link;
                ?>
                <!-- Links -->

                <form class="form-inline" action="search.php">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button type="submit">Tìm</button>
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4"><div class="row wow fadeIn">
                <?php
                include_once ('connet.php');
                $result = mysqli_query($conn, 'select count(sp_id) as total from tb_sp');
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];

                // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 8;

                // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                // tổng số trang
                $total_page = ceil($total_records / $limit);

                // Giới hạn current_page trong khoảng 1 đến total_page
                if ($current_page > $total_page){
                    $current_page = $total_page;
                }
                else if ($current_page < 1){
                    $current_page = 1;
                }

                // Tìm Start
                $start = ($current_page - 1) * $limit;
                $sql = "select sp_id,sp_hinhanh, sp_gia ,sp_theloai,sp_tensanpham from tb_sp LIMIT $start, $limit";
                $resut = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resut) > 0) {
                    while ($row = mysqli_fetch_assoc($resut)) {
                        $pic = $row['sp_hinhanh'];
                        $prices = $row['sp_gia'];
                        $kind = $row['sp_theloai'];
                         $id=$row['sp_id'];
                        $name = $row['sp_tensanpham'];
                        $kq = <<<EOD
            <!--Grid row-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <a href="product-page.html">
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <a href="./product-page (1).php?id=$id">
                                    <img src=$pic class="card-img-top"
                                         alt="">

                                    <div class="mask rgba-white-slight"></div>
                                </a>



                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Category & Title-->
                                <a href="./product-page (1).html" class="grey-text">
                                    <h5>$kind</h5>
                                </a>
                                <h5>
                                    <strong>
                                        <a href="./product-page (1).php?id=$id" class="dark-grey-text">$name
                                            <span class="badge badge-pill danger-color">NEW</span>
                                        </a>
                                    </strong>
                                </h5>

                                <h4 class="font-weight-bold blue-text">
                                    <strong>$prices VNĐ</strong>
                                </h4>

                            </div>
                            <!--Card content-->

                        </div></a>
                    <!--Card-->

                </div>
                <!--Grid column-->

           
            <!--Grid row-->
EOD;
                        echo $kq;
                    }
                }
                ?>
            </div>

        </section> <!--Section: Products v.3-->

        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">

            <?php
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="homepage.php?page='.($current_page-1).'">Prev</a> | ';
            }

            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="homepage.php?page='.$i.'">'.$i.'</a> | ';
                }
            }

            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="homepage.php?page='.($current_page+1).'">Next</a> | ';
            }
            ?>
        </nav>
        <!--Pagination-->

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

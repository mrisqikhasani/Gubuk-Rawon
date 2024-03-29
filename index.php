<?php
@include('koneksi.php');


$db= new database();  

$resultMakanan = $db->get_menu_by_category('makanan')->fetch_all(MYSQLI_ASSOC);
$resultPaket = $db->get_menu_by_category('paket')->fetch_all(MYSQLI_ASSOC);
$resultMinuman = $db->get_menu_by_category('minuman')->fetch_all(MYSQLI_ASSOC);
$resultOthers = $db->get_menu_by_category('lain-lain')->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GUBUK RAWON</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/about-us/logo 3.png" type="image/x-icon">

  <!-- Font awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="style.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Pre Loader -->
  <!-- <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/video.gif" alt=" loader img">
    </div>
  </div> -->
  <!--START SCROLL TOP BUTTON -->
  <!-- <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
    <span>Top</span>
  </a> -->
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="index.html"><img src="assets/img/about-us/LOGO.png" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">BERANDA</a></li>
            <li><a href="#mu-about-us">TENTANG KAMI</a></li>
            <!-- <li><a href="#mu-reservation">RESERVASI</a></li> -->
            <li><a href="#mu-restaurant-menu">MENU</a></li>
            <li><a href="#mu-contact">KONTAK</a></li>
            <li><a href="login.php" class="btn btn-primary">LOGIN</a></li>
            <li class="dropdown">
          </ul>
          </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
  <!-- End header section -->

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area">
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slide satu.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Selamat Datang</span>
            <h2 class="mu-slider-title">GUBUK RAWON</h2>
            <p>Rumah makan dengan masakan khas Jawa Timur..</p>
            <a href="#mu-restaurant-menu" class="mu-readmore-btn">PESAN SEKARANG</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slide1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Selamat Menikmati</span>
            <h2 class="mu-slider-title">SAJIAN ISTIMEWA</h2>
            <p>Rasakan setiap sentuhan cita rasa autentik yang memikat lidah. Setiap hidangan adalah undangan untuk merayakan keanekaragaman sensasi rasa bersama kami.</p>
            <a href="#mu-restaurant-menu" class="mu-readmore-btn">PESAN SEKARANG</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/menu2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Selamat Mencoba</span>
            <h2 class="mu-slider-title">JELAJAHI KELEZATAN</h2>
            <p>Undang lidahmu untuk menari dalam harmoni cita rasa dan sambut alunan kenikmatan cita rasa yang tak terlupakan bersama kami.</p>
            <a href="#mu-restaurant-menu" class="mu-readmore-btn">PESAN SEKARANG</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <h2>TENTANG KAMI</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                <p style="font-size: 18px; line-height: 2.0; text-align:center;">
                Selamat datang di Gubuk Rawon, tempat lezat dengan cita rasa khas Jawa Timur di Depok, Jawa Barat. Berdiri sejak 2020, kami membawa kelezatan hidangan khas Jawa Timur, terutama rawon.
                Nikmati pengalaman kuliner autentik di tempat atau pesan hidangan favorit Anda dalam jumlah besar melalui layanan pemesanan online di halaman website kami. Kami siap memberikan kelezatan Gubuk Rawon tanpa harus meninggalkan kenyamanan rumah Anda. Segera pesan dan nikmati hidangan istimewa kami. Selamat menikmati!
                </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                
                  <!-- <ul class="mu-abtus-slider">
                    <li><img src="assets/img/about-us/abtus-img-1.png" alt="img"></li>
                    <li><img src="assets/img/about-us/abtus-img-2.png" alt="img"></li>
                    <li><img src="assets/img/about-us/abtus-img-6.png" alt="img"></li>
                    <li><img src="assets/img/about-us/abtus-img-4.png" alt="img"></li>
                    <li><img src="assets/img/about-us/abtus-img-5.png" alt="img"></li>
                    <li style="border-radius: 50%;"><img src="assets/img/about-us/abtus-img-5.png" alt="img"></li>
                  </ul> -->
                  <img src="assets/img/about-us/image_about us.jpg" alt="image" style="border-radius: 40%;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <?php include('layout/restaurantMenu.php')?>


  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1748929560717!2d106.79802027499163!3d-6.371407993618793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efd75e1aa60b%3A0x752e44e226e8fdbc!2sGubuk%20Rawon!5e0!3m2!1sid!2sid!4v1690985448472!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer Contact --->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="footer-box pad-top-70">
          <div class="footer-in-main">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-box-b">
              <h3>Pesan Online</h3>
              <ul>
                <li><a href="https://gofood.co.id/jakarta/restaurant/gubuk-rawon-8e4b791e-2e11-4263-b9e7-3325c20c074c">GOFOOD</a></li>
                <li><a href="https://food.grab.com/id/id/restaurant/gubuk-rawon-tanah-baru-delivery/6-C2E1KB4HKEV2BE?">GRABFOOD</a></li>
              </ul>
            </div>
            <!-- end footer-box-b -->
          </div>
          <!-- end col -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-box-c">
              <h3>Kontak Kami</h3>
              <p>
                <i class="fa fa-map-signs" aria-hidden="true"></i>
                <span>Ruko Berlian 9, Jl. R. Sanim, Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat 16426</span>
              </p>
              <p>
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <span> 0857-7627-3796</span>
              </p>
              <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span><a href="">gubukrawon@gmail.com</a></span>
              </p>
            </div>
            <!-- end footer-box-c -->
          </div>
          <!-- end col -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-box-d">
              <h3>Jam Buka - Tutup</h3>

              <ul>
                <li>
                  <p>Selasa - Jumat </p>
                  <span> 10:30 - 21:00</span>
                </li>
                <li>
                  <p>Saturday - Sunday </p>
                  <span> 11:00 - 21:00 </span>
                </li>
              </ul>
            </div>
            <!-- end footer-box-d -->
          </div>
          <!-- end col -->
        </div>
        <!-- end footer-in-main -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
    <div id="copyright" class="copyright-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h6 class="copy-title"> Copyright &copy; 2024 Gubuk Rawon </h6>
            <!-- develop by risqi khasani -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->
    </div>
    <!-- end footer-main -->
    <!-- Main javascript -->
    <script src="assets/js/script.js"></script>
    <!-- jQuery library -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="assets/js/waypoints.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
    <!-- Date Picker -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>

    <script src="script.js"></script>

</body>

</html>
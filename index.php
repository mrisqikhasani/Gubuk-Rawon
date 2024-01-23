<?php 
// @include('koneksi.php');


// $db= new database();  
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
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/video.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
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
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVASI</a></li>                       
            <li><a href="#mu-contact">KONTAK</a></li> 
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
            <a href="#mu-reservation" class="mu-readmore-btn">PESAN RESERVASI</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slide1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">The Real</span>
            <h2 class="mu-slider-title">GREEN FOODS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#" class="mu-readmore-btn">READ MORE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/menu2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicious</span>
            <h2 class="mu-slider-title">SPICY MASALAS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#" class="mu-readmore-btn">READ MORE</a>
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
                 <p>Gubuk Rawon merupakan rumah makan khas Jawa Timur yang lokasinya berada di Provinsi Jawa Barat yang tepatnya di daerah Depok. 
                  Rumah makan ini buka dari tahun 2020, dimana pemilik dari rumah makan ini adalah orang asli dari Jawa Timur yaitu Malang. 
                 </p>                              
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam. Ex.</p>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 
                   <li><img src="assets/img/about-us/abtus-img-1.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-2.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-6.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-4.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-5.png" alt="img"></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <h2>MENU GUBUK RAWON</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#makanan" data-toggle="tab">Makanan</a></li>
                <li><a href="#paket" data-toggle="tab">Paket</a></li>
                <li><a href="#minuman" data-toggle="tab">Minuman</a></li>
                <li><a href="#lain-lain" data-toggle="tab">Lain-lain</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="makanan">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Rawon Daging.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Rawon Daging</a></h4>
                                  <span class="mu-menu-price">Rp24.000</span>
                                  <p>Sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Tahu Campur.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">tahu Campur</a></h4>
                                  <span class="mu-menu-price">Rp23.000</span>
                                  <p>Tahu campur terdiri dari Lontong, selada air, tauge, daging, dan mie/bihun. 
                                    Bahan tambahan yang membuat makanan ini lebih dahsyat berasal dari petis udang sebagai bumbunya dan gorengan yang terbuat dari singkong</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Tahu Telor.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tahu Telor</a></h4>
                                  <span class="mu-menu-price">Rp18.000</span>
                                  <p>Tahu telur adalah hidangan yang terdiri dari tahu berbalut telur kocok yang digoreng 
                                    dilengkapi dengan tauge lalu disiram bumbu kacang yang diberi petis.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Rujak Cingur.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Rujak Cingur</a></h4>
                                  <span class="mu-menu-price">Rp22.000</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Soto Ayam.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Soto Ayam Kampung</a></h4>
                                  <span class="mu-menu-price">Rp15.000</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Soto Daging.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Soto Daging</a></h4>
                                  <span class="mu-menu-price">Rp24.000</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="paket">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Ayam Goreng Rempah Komplit1.jpeg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ayam Goreng Rempah + Nasi</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Ayam Goreng Rempah Komplit.jpeg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ayam Goreng Rempah Komplit</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Ayam goreng rempah nasi trancam (1).jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ayam Goreng Rempah Nasi Trancam</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Paket komplit rawon tanpa nasi.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Paket Rawon Komplit Tanpa Nasi</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Paket Rawon + Nasi.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Paket Rawon + Nasi</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Paket Soto Ayam + Nasi (1).jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Paket Soto Ayam Kampung + Nasi</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="minuman">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Es Abang Branang.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Es Abang Branang</a></h4>
                                  <span class="mu-menu-price">Rp20.000</span>
                                  <p>IMinuman ice dengan air soda dan perasan lemon serta sirup spesial rasa pisang ambon.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/es mentimun.JPG" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Es Mentimun</a></h4>
                                  <span class="mu-menu-price">Rp17.000</span>
                                  <p>Minuman ice dan serut mentimun dengan campuran jeruk nipis.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/es kloewoeng.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Es Kloewoeng</a></h4>
                                  <span class="mu-menu-price">Rp20.000</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/es jeruk.JPG" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Es Jeruk</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Minuman ice dengan perasan jeruk yang manis dan segar.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Jus Mangga.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Jus Mangga</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Jus Alpukat.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Jus Alpukat</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="lain-lain">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/telor asin.jpeg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Telor Asin</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/bakwan.jpeg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ote-ote</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/Sate satean.jpeg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Sate-satean</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/tempe dan tahu goreng.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tahu dan tempe Goreng</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <h2>RESERVASI</h2>
              <form action="formproses.php" method="post">
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <p>Silahkan buat reservasi seminggu sebelum hari kedatangan</p>
              <form class="mu-reservation-form">
                <div class="row">
                  <!-- <div class="col-md-6"> -->
                    <div class="mb-3 row">
                    <label for="name" class="form-label">Nama anda</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Anda">
                  </div>
                  <div class="mb-3 row">
                    <label for="phone" class="form-label">Nomor WhatsApp</label>
                    <input type="tel" class="form-control" name='phone' id="phone" pattern="[0-9]{10,14}" placeholder="Nomor WhatsApp">
                  </div>
                  <div class="mb-3 row">
                    <label for="guests" class="form-label">Jumlah Tamu:</label>
                    <input type="number" class="form-control" name="tamu" id="guests" min="1" max="10" placeholder="Jumlah tamu">
                  </div>
                    <div class="mb-3 row">
                    <label for="datetime" class="form-label">Tanggal dan Waktu Reservasi:</label>
                  <input  type="datetime-local"
                          name="tanggal_waktu"
                          id="tanggal_waktu"
                          class="form-control mb-3"
                          >
                  </div>
                  <div class="mb-3 row">
                    <br>
                    <input type="submit" class="btn btn-primary p-5" value="Pesan Reservasi" target="_blank">
                  </div>
                </div>
              <!-- </div> -->
              </form>
              
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Album Kami</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar1.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar2.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar3.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar4.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar5.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/5.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>   
                  </div>
                </div>               
                <!-- End single gallery image -->               
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar6.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar7.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar8.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dessert">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/gambar9.jpeg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->                         
              </div>
            </div>
  </section>
  <!-- End Gallery -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1748929560717!2d106.79802027499163!3d-6.371407993618793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efd75e1aa60b%3A0x752e44e226e8fdbc!2sGubuk%20Rawon!5e0!3m2!1sid!2sid!4v1690985448472!5m2!1sid!2sid" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer Contact --->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
            <div class="footer-box pad-top-70">
              <div class="footer-in-main">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-a">
                        <h3>About Us</h3>
                        <p>.
                        </p>
                        <ul class="socials-box footer-socials pull-left">
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- end footer-box-a -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-d">
                        <h3>Jam Buka - Tutup</h3>

                        <ul>
                            <li>
                                <p>Selasa - Jumat </p>
                                <span> 10:30 - 21:00</span>
                            </li>
                            <li>
                                <p>Saturday - Sunday </p>
                                <span>  11:00 - 21:00 </span>
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
                    <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#" target="_blank"></a> </h6>
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

  </body>
</html>
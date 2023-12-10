<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Coffee House</title>
<!-- 
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Preloader -->
    <!-- <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="assets/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Coffee House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="/beranda" class="active">Beranda</a></li>
                <li><a href="/promo">Promo</a></li>
                <li><a href="/menu">Menu</a></li>
                <li><a href="/kontak">Kontak</a></li>
              </ul>
              <div class="container-fluid">
              <form action="{{ route('logout') }}" method="POST" class="d-flex"
                role="search">
                @csrf
                @method('DELETE')
                  <button class="btn btn-danger" type="submit">Logout</button>
              </form>
              </div>
            </nav>   
          </div>           
        </div>    
      </div>
    </div> 
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="assets/img/light.png" alt="Light" class="light light-1">
          <img src="assets/img/light.png" alt="Light" class="light light-2">
          <img src="assets/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="assets/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Selamat Datang&nbsp;&nbsp;<img src="assets/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Coffee House</h2>
          <p class="gray-text tm-welcome-description">Coofee House adalah sebuah caffe yang berada di<span class="gold-text"> Trenggalek. </span>Detra Rosiana Sebagai Owner<span class="gold-text"> Coffee House</span>. Coffee House berdiri pada tanggal 12 Oktober 1971 di Trenggalek,tepatnya di Kecamatan Trenggalek barat Alun - Alun Kabupaten Trenggalek.</p>
          <a href="/detail1" class="tm-more-button tm-more-button-welcome">Selengkapnya</a>      
        </div>
        <img src="assets/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Cooffe Terbaik Untuk Anda</h2>
            <h2>Coffee House</h2>
            <p class="tm-welcome-description">Ini adalah website Resmi daei Coffee House <span class="blue-text">Coffee </span><span class="green-text">House</span>. Sejak tahun 1971, selalu dan akan selalu mengutamakan kualitas. Kami bersemangat untuk hanya mengambil biji kopi Arabika terbaik secara etis dan memanggangnya dengan sangat hati-hati. Semangat kami terhadap kopi hanya dapat disaingi oleh kecintaan kami untuk berbagi.</p>
            <a href="/detail2" class="tm-more-button margin-top-30">Selengkapnya</a> 
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="assets/img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              <img src="assets/img/popular-1.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a </span>Cup Cake</h3><hr class="tm-popular-item-hr">
                <p>Cup cake Dark Chocho adalah Dessert asal Amerika Serikat.Yang sekarang telah populer di kalangan remaja milenial. Dan cupcake sendiri telah ada di seluruh negara.</p>
                <div class="order-now-container">
                  <a href="/produk1" class="order-now-link tm-handwriting-font">Detail Produk</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/popular-2.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a </span>Tteokbokki</h3><hr class="tm-popular-item-hr">
                <p>Tteokbokki adalah makanan asal Korea yang terbuat dari tepung beras. Tteokbokki sudah ada di Indonsia karena viral karena rsanya yang enak.</p>
                <div class="order-now-container">
                  <a href="/produk2" class="order-now-link tm-handwriting-font">Detail Produk</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/popular-3.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a </span>Moccachino</h3><hr class="tm-popular-item-hr">
                <p>Moca adalah minuman kopi yang terbuat dari campuran espresso dengan coklat dan susu.Saat ini campuran Moka-Jawa biasa dicampur dengan varietas lainnya.</p>
                <div class="order-now-container">
                  <a href="/produk3" class="order-now-link tm-handwriting-font">Detail Produk</a>
                </div>
              </div>              
            </div>
          </div>          
        </section>
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/img/logo.png" alt="Logo" class="tm-site-logo"> Promo Hari ini</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="assets/img/special-1.jpg" alt="Special" class="tm-special-img img-responsive">  
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">Cappuccino</h3>
                      <p>Minuman kopi khas Italia yang dibuat dari espreso dan susu.</p>  
                    </div>            
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="assets/img/special-2.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">Chiken Katsu</h3>
                        <p>dikenal sebagai ayam panko, atau tori katsu adalah masakan Jepang berupa ayam goreng yang dibuat dengan remah roti panko.</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="assets/img/special-3.jpg" style="width :180px; height: 180px;" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Lemon Green Tea</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="assets/img/special-4.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Pasta</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>              
            </div>
          </div>
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/img/logo.png" alt="Logo" class="tm-site-logo">Menu Hari Ini</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="assets/img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8">
                <p>Kami memiliki banyak menu yang menjadi Best Seller seperti yang di bawah ini. </p>
                <ol class="margin-top-30">
                  <li>Moccachino</li> 
                  <li>Matcha Latte</li>
                  <li>Tteokbokki</li> 
                  <li>Chiken katshu</li> 
                  <li>Ramen</li> 
                  <li>Pasta</li> 
                </ol>
                <a href="/menu" class="tm-more-button margin-top-30">Selengkapnya</a>    
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div> 
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Menu Utama</h3>
              <ul>
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/detail1">Tentang Kami</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">Tentang Kami</h3>
              <p class="margin-top-15">Dua kata ini adalah moto dan pondasi kami dalam menjalankan usaha. Kami selalu berkomitmen memakai bahan baku biji kopi yang berasal dari tempat penghasil kopi terbaik dari berbagai penjuru daerah di Indonesia.</p>
              <p class="margin-top-15"></p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Sosial Media</h3>
              <p>Anda bisa menghubungi layanan sosial media kami yang ada di bawah ini.</p>
              <div class="tm-social-icons-container">
                <a href="https://www.facebook.com/profile.php?id=100089487947136" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="https://x.com/ZeyraaSukaTidur?t=-E3Xm2AF7E7ofI-YTL9Vkw&s=08" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="https://instagram.com/amryllslily?igshid=MzRlODBiNWFlZA==" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="https://youtu.be/HImk0OVCuaE?si=arVvBENDb_PPETvy" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2023 Coffee House</p>
         </div>  
       </div>
     </div>
   </footer> 
    <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="assets/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

 </body>
 </html>
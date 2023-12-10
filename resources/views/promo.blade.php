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
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/promo" class="active">Promo</a></li>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="assets/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Promo Hari Ini&nbsp;&nbsp;<img src="assets/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Coffee House</h2>
          <p class="gray-text tm-welcome-description">Coffee House setiap weekend memiliki <span class="gold-text">Promo</span><span class="gold-text"></span>. Jika Anda datang pada weekend bersama keluarga Anda maka akan mendapatkan potongan harga</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Selengkapnya</a>      
        </div>
        <img src="assets/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
    <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/img/logo.png" alt="Logo" class="tm-site-logo"> Promo Hari ini</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              <img src="assets/img/promo-1.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">Family </span>Happy</h3><hr class="tm-popular-item-hr">
                <p>Teruntuk Kalian yang datang pada waktu weekend bersama keluarga,yang terdiri dari Ayah Ibu Kakak dan Adek.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 28%</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/promo-2.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">Free </span>Anak Baik</h3><hr class="tm-popular-item-hr">
                <p>Teruntuk Anak-anak umur di bawah 16 tahun yang hafal 5 ayat dari surat Al-Khafi bisa makan 1 porsi gratis.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 95%</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/promo-3.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">Promo </span>Fakir Miskin</h3><hr class="tm-popular-item-hr">
                <p>Teruntuk Fakir,Miskin,Yatim atau piatu dan Yatim Piatu bisa membayar dengan uang seikhlasnya.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 99%</a>
                </div>
              </div>              
            </div>
          </div>          
        </section>
        <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              <img src="assets/img/promo-4.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>Jumat Berkah</h3><hr class="tm-popular-item-hr">
                <p>Setiap hari Jumat kami memberikan harga spesial untuk Anda.</p> 
                  <p>Terkhusus untuk anak yatim bisa makan gratis di Coffee House.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 50%</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/promo-5.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>Tahun Baru</h3><hr class="tm-popular-item-hr">
                <p> Setiap tahun baru, Jika Anda datang dengan 5 teman kalian atau keluarga kalian maka akan mendapatkan diskon 50%. Setiap pembelian diatas 200k.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 50%</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="assets/img/promo-6.jpg" alt="Popular" class="tm-popular-item-img" style="width:286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>Akhir Bulan</h3><hr class="tm-popular-item-hr">
                <p> Setiap akhir bulan khusus anak kos yang merantau minimal luar kota,akan mendapatkan diskon sebesar 30% untuk setiap hari jumat.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Diskon 30%</a>
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
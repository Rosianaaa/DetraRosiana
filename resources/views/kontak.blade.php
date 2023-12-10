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
                <li><a href="/promo">Promo</a></li>
                <li><a href="/menu">Menu</a></li>
                <li><a href="/kontak" class="active">Kontak</a></li>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="assets/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Kontak Kami&nbsp;&nbsp;<img src="assets/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Coffee House</h2>
          <p class="gray-text tm-welcome-description">Silahkan hubungi<span class="gold-text"> Coffee House </span> kami memberikan layanan 24 jam <span class="gold-text">untuk kritik dan saran</span>. Terima Kasih atas saran dan kritikan yang Anda berikan kepada Kami</p>      
        </div>
        <img src="assets/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Kirim Masukkan</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
              </div>
              <div class="form-group">
                <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
              </div>
              <div class="form-group">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
              </div>
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Send message</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <div id="google-map"></div>
            </div> 
          </form>
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
   <script type="text/javascript" src="assets/js/templatemo-script.js">
   <script>
      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(13.758468,100.567481),
          scrollwheel: false
        };
        
        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
          calculateCenter();
        });
        
        google.maps.event.addDomListener(window, 'resize', function() {
          map.setCenter(center);
        });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
      }
      $(document).ready(function(){                
        loadGoogleMap();                
      });
      </script>
    </body>
    </html>
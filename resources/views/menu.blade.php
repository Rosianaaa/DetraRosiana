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
                <li><a href="/menu" class="active">Menu</a></li>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="assets/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Menu Kami&nbsp;&nbsp;<img src="assets/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Coffee House</h2>
          <p class="gray-text tm-welcome-description"> Espresso, cappuccino, latte,<span class="gold-text">dan jenis minuman kopi lainnya yang luar biasa.</span> Dan <span class="gold-text"> memberikan pengalaman terbaik</span> bagi pecinta kopi. Rumah grup La Marzocco Linea PB 3 pertama di Surabaya di kedai kopi dan penggiling Mazzer. Kami sangat teliti dalam menyeduh kopi kami untuk memastikan setiap cangkir disajikan dengan kualitas terbaik. Kami dengan bangga di sini untuk berbagi hasrat kami terhadap kopi.</p>     
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
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/img/logo.png" alt="Logo" class="tm-site-logo"> Menu Kami</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu">
                  <ul>
                    <li><a href="#">Creamy Latte</a></li>
                    <li><a href="#">Americano</a></li>
                    <li><a href="#">Thai Tea</a></li>
                    <li><a href="#">Milk Shake</a></li>
                    <li><a href="#">Lemon Tea</a></li>
                    <li><a href="#">Cappuccino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Tteokbokki</a></li>
                    <li><a href="#">Cup cake Dark Chocho</a></li>
                    <li><a href="#">Pasta</a></li>
                    <li><a href="#">Chiken Katsu</a></li>
                  </ul>              
                </nav>    
                <img src="assets/img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
              </div>  
            </div>            
            <div class="tm-menu-product-content col-lg-9 col-md-9">
               <!-- menu content -->
               @forelse ($posts as $post)
              <div class="tm-product">
              <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                <div class="tm-product-text">
                <h3 class="tm-product-title">{{ $post->title }}</h3>
                <p class="tm-product-description">{!! $post->content !!}</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency"></span>nice</a>
                </div>
             </div>
              </div>
              @empty
              @endforelse
              {{ $posts->links() }}

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
              <p class="margin-top-15"> Semua biji kopi diproses menggunakan mesin – mesin terbaik di kelasnya. Dikerjakan oleh SDM putra dan putri Indonesia yang berpengalaman dan profesional. Dengan harapan semua orang bisa menikmati kopi Indonesia dengan kualitas yang terbaik. Semoga kopi kami cocok dengan selera Anda.</p>
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
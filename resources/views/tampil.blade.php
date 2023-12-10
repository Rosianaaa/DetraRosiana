<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/templatemo-style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
</head>
  <body>
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
                <li><a href="/kontak">Kontak</a></li>
            </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div> 
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">HALAMAN USER</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                         
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    
                                </tr>
                            </thead>
                        <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ 
                                            asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{!! $post->content !!}</td>
                                <td class="text-center">
                                    
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $posts->links() }}
                    </div>
                </div>
            </div>
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
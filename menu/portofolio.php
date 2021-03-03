<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    
   <!-- Font CSS From Google Font -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
   
   <!-- Boostrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

   <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" media="all">
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

   <!-- Hover Effect CSS -->
   <link rel="stylesheet" href="../css/hover-min.css">

   <!-- Animate on Scroll CSS -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   <!-- Costum CSS -->
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/responsive.css">
   <link rel="stylesheet" href="../css/portofolio.css">
</head>
<body>
    <!-- Header -->
    <header>
      <div class="container">  
        <div class="d-flex justify-content-between row">
          <!-- Kontak Bar -->
          <div class="contact col-md-9 col-sm-12">
            <div class="telepon">
              <img src="../img/header/chat-icon.png" alt="">
              <div class="text">
                <p class="judul">Hubungi Kami</p>
                <a href="tel:+6281252200089" class="isi">081252200089</a>
              </div>
            </div>

            <div class="email">
              <img src="../img/header/email-icon.png" alt="">
              <div class="text">
                <p class="judul">Email Kami</p>
                <a href="mailto:info@codepanstudio.com" target="_blank" class="isi">info@codepanstudio.com</a>
              </div>
            </div>
          </div> 

          <!-- Icon Karir, Blog, Kontak -->
          <ul class="d-flex justify-content-md-end col-md-3 col-sm-12">
            <li>
              <a href="./karir.php">
                <img src="../img/header/karir-icon.png" alt="">
                <p>Karir</p>
              </a>
            </li>
            <li>
              <a href="./blog.php">
                <img src="../img/header/blog-icon.png" alt="">
                <p>Blog</p>
              </a>
            </li>
            <li>
              <a href="./kontak.php">
                <img src="../img/header/contact-icon.png" alt="">
                <p>Kontak</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!--  Bar Navigasi -->
    <nav id="navbar" class="mt-4 mb-0 navbar navbar-expand-lg navbar-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-5">
            <li class="nav-item">
              <a class="nav-link" href="../index.php" onclick="moveMenuNav(this)">BERANDA <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="moveMenuNav(this)">TENTANG KAMI <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" onclick="moveMenuNav(this)">PORTOFOLIO <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown menu-area">
              <a class="nav-link dropdown-toggle" href="#" onclick="moveMenuNav(this)" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LAYANAN IT
              </a>
              <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                <div class="row">
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="*">
                      <img src="../img/navbar/dropdown/laptop.png" alt="">
                      <h5>Sistem Informasi</h5>
                    </a>
                  </div>
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="#">
                      <img src="../img/navbar/dropdown/smartphone.png" alt="">
                      <h5>Aplikasi Mobile</h5>
                    </a>
                  </div>
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="#">
                      <img src="../img/navbar/dropdown/bar-chart.png" alt="">
                      <h5>Aplikasi E-Gov</h5>
                    </a>
                  </div>
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="#">
                      <img src="../img/navbar/dropdown/sync.png" alt="">
                      <h5>Aplikasi E-Gov</h5>
                    </a>
                  </div>
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="#">
                      <img src="../img/navbar/dropdown/google-docs.png" alt="">
                      <h5>Pengadaan IT</h5>
                    </a>
                  </div>
                  <div class="col-sm-6 col-lg-2 dropdown-item">
                    <a href="./layanan_it.php">
                      <img src="../img/navbar/dropdown/plus.png" alt="">
                      <h5>Semua layanan</h5>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
  
          <a href="#" class="d-flex justify-content-center"><img class="logo mr-auto" src="../img/navbar/logo-codepan.png" alt="" class=""></a>
  
          <ul class="d-flex justify-content-md-end justify-content-sm-center ml-auto">
            <li>
              <a href="">
                <img class="btn-sosmed" src="../img/navbar/fb.png" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img class="btn-sosmed" src="../img/navbar/ig.png" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img class="btn-sosmed" src="../img/navbar/linkind.png" alt="">
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Bar Navigasi -->
    </header>
    <!-- End of Header -->

    <!-- Fixed Button WA -->
    <a href="" class="wa-button hvr-icon-pop">
      <i class="fab fa-whatsapp hvr-icon"></i>
      <p>Silahkan Konsultasi di Nomor Whatsapp Kami</p>
    </a>
    <!-- End Fixed Button WA -->

    <!-- Portofolio Page -->
    <div id="mt" class="portofolio-page">
      <div class="container">
        <!-- Container Judul Portofolio -->
        <div class="container-judul text-center">
          <h1>PORTOFOLIO</h1>
          <p>Berikut kami sajikan portofolio yang telah kami berikan kepada mitra sebagai bukti pengalaman layanan kami</p>
        </div>
        <!-- End of Container Judul Portofolio -->

        <div class="container-portofolio">
           <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all"><span>All</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pengadaan-it"><span>Pengadaan IT</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#aplikasi-mobile"><span>Aplikasi Mobile</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sistem-informasi"><span>Sistem Informasi</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#integrasi-sistem"><span>Integrasi Sistem</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#aplikasi-egov"><span>Aplikasi E-Gov</span></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div id="all" class="container tab-pane active"><br>
                <div class="row">
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="pengadaan-it" class="container tab-pane fade"><br>
                <div class="row">
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="aplikasi-mobile" class="container tab-pane fade"><br>
                <div class="row">
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="sistem-informasi" class="container tab-pane fade"><br>
                <div class="row">
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/twin-robo.png" class="card-img-top" alt="...">
                        <div class="logo position">
                          <img src="../img/portofolio/joss.png" alt="">
                          <img src="../img/portofolio/txtTwinsRobo.png" alt="">
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Aplikasi Mobile</p>
                        <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>
                        <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara multiplayer</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV. Arindra Production adalah sebuah production house di bidang Videography video Company Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic,Video Iklan, dan Live Streaming. CV. Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography. </p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100">
                      <div class="img-card-container">
                        <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                        <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                      </div>
                      <div class="card-body text-left">
                        <p class="mini-judul">Sistem Informasi</p>
                        <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                        <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="integrasi-sistem" class="container tab-pane fade"><br>
                <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                  <div class="card h-100">
                    <div class="img-card-container">
                      <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                      <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                    </div>
                    <div class="card-body text-left">
                      <p class="mini-judul">Sistem Informasi</p>
                      <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                      <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                      <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="aplikasi-egov" class="container tab-pane fade"><br>
                <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up" data-aos-delay="400">
                  <div class="card h-100">
                    <div class="img-card-container">
                      <img src="../img/portofolio/ap.png" class="card-img-top" alt="...">
                      <img src="../img/portofolio/Logo-Arindra.png" class="logo" alt="">
                    </div>
                    <div class="card-body text-left">
                      <p class="mini-judul">Sistem Informasi</p>
                      <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production</h5>
                      <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage, Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang Videography.</p>
                      <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </div>
    <!-- End of Portofolio Page -->

    <!-- Footer --> 
    <footer>
      <div class="container">
         <!-- Page Mari Bermitra -->
          <div class="mari-bermitra" data-aos="fade-up" data-aos-delay="200">
            <div class="background text-center">
              <h1>Mari Bermitra</h1>
              <p>
                Ketika berkaitan dengan teknologi IT untuk perusahaan, Anda membutuhkan seseorang yang ahli. Izinkan kami menunjukkan kepada Anda sebuah layanan IT yang responsif, amanah, dan dapat diandalkan.
              </p>
              <a href="">MULAI KONSULTASI GRATIS</a>
            </div>
          </div>
        <!-- End of Page Mari Bermitra -->
        
        <!-- Menu Footer -->
        <div class="menu">
          <div class="row">
            <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right">
              <ul>
                <li><h5>Produk</h5></li>
                <li>Twins Robo Apps</li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="200">
              <ul>
                <li><h5>Layanan IT</h5></li>
                <li>Sistem Informasi</li>
                <li>Aplikasi Mobile</li>
                <li>Aplikasi E-Gov</li>
                <li>Intergrasi Sistem</li>
                <li>Pengadaan IT</li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="400">
              <ul>
                <li><h5>Perusahaan</h5></li>
                <li>Tentang Kami</li>
                <li>Pakta Integritas</li>
                <li>Aturan Layanan</li>
                <li>Kontak Kami</li>
                <li>Karir</li>
                <li>Blog</li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="600">
              <ul>
                <li><h5>Akun Kami</h5></li>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Linkedin</li>
                <li>Youtube</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Of Menu Footer -->

        <!-- Contact -->
        <div class="contact" data-aos="fade-left">
          <p>Alamat : Jl. Sidosermo VI No.7, Sidosermo, Kec. Wonocolo, Kota SBY, Jawa Timur 60285 </p>
          <p>Telepon: <a href="tel:+620318437588" class="hvr-underline-from-left">(031) 8437588</a> | Email: <a href="mailto:info@codepanstudio.com" class="hvr-underline-from-left" target="_blank">info@codepanstudio.com</a> | GMAPS : <a href="https://bit.ly/GMAPSCodepanStudio" class="hvr-underline-from-left" target="_blank">https://bit.ly/GMAPSCodepanStudio</a> </p>
        </div>
        <!-- End of Contact -->

        <!-- Copyright -->
        <div class="copyright text-center">
          <p>Copyright © 2021 CV. Arindra Production</p>
        </div>
      </div>
    </footer>

    <!-- Boostrap Bundle CSS include JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Header Effect .js -->
    <script src="../js/headerEffect/main.js"></script>
    <script src="../js/headerEffect/modernizr.js"></script>

    <!-- Animate on Scroll .js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Pagination -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js"></script>

    <!-- Costum Main.js -->
    <script src="../js/main.js"></script>

    <script>
      topNavBar();
      $(function() {
          AOS.init({
            duration: 600,
            anchorPlacement:'top-bottom',
            once:false,
          });
          window.addEventListener("load", AOS.refresh);
     });
    </script>
</body>
</html>
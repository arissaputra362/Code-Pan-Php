<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>

    <!-- Font CSS From Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

     <!-- Header Effect CSS -->
     <link rel="stylesheet" href="../css/headerEffect/style.css">
     <link rel="stylesheet" href="../css/headerEffect/reset.css">
 
     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
     
     <!-- Hover Effect CSS -->
     <link rel="stylesheet" href="../css/hover-min.css">
 
     <!-- Animate on Scroll CSS -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
     <!-- Costum CSS -->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/kontak.css">
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
            <a href="#">
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
            <a class="nav-link" href="./portofolio.php" onclick="moveMenuNav(this)">PORTOFOLIO <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown menu-area">
            <a class="nav-link dropdown-toggle" href="#" onclick="moveMenuNav(this)" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              LAYANAN IT
            </a>
            <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
              <div class="row">
                <div class="col-sm-6 col-lg-2 dropdown-item">
                  <a href="#">
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

  <!-- Kontak Kami -->
  <div id="mt" class="kontak-kami">
        <div class="container">
            <div class="container-judul text-center">
                <h2>KONTAK KAMI</h2>
                <p class="text-under-judul">Tertarik dengan layanan IT kami? Atau ingin konsultasi dengan kami? Silakan hubungi kami dan dengan senang hati kami akan membantu.</p>
            </div>
            <div class="container-icon row">
                <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up">
                    <img src="../img/kontak-kami/envelope.png" alt="envelope.png">
                    <h5>Hubungi kami</h5>
                    <p>Perusahaan Software <br>
                        Whatsapp : 081252200899 <br>
                        Telp : (031) 99687829 <br>
                        Jam Kerja: 08.00 – 16.00 <br>
                        (Senin – Jum’at) <br>
                        Email : info@codepanstudio.com</p>
                </div>

                <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up" data-aos-delay="200">
                    <img src="../img/kontak-kami/map.png" alt="map.png">
                    <h5>Selalu Siap</h5>
                    <p>Kami akan siap datang ke lokasi, jika Anda membutuhkan.</p>
                </div>

                <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up" data-aos-delay="400">
                    <img src="../img/kontak-kami/chat.png" alt="chat.png">
                    <h5>Ada pertanyaaan?</h5>
                    <p>Ketika berkaitan dengan teknologi IT, Anda akan membutuhkan seseorang yang ahli. Disitulah kami hadir untuk Anda.</p>
                </div>
            </div>
            <div class="container-map text-center" data-aos="zoom-in-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.404007820487!2d112.75189885710515!3d-7.3084275033266515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb601bc3383b%3A0x6d776c16d3379950!2sCodepan%20Studio!5e0!3m2!1sid!2sid!4v1614067946426!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="solusi">
                <!-- Container Mitra -->
                <div class="row container-mitra" data-aos="fade-up">
                    <div class="col-md-5 text-center keterangan">
                    <p class="sub-judul">SELANGKAH KAMI LEBIH DEKAT</p>
                    <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                    <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia.</p>
                    
                    <ul class="row items">
                        <li class="col-md-12 item">
                        <div class="text-img">
                            <img src="../img/solusi/we-chat.png" alt="">
                        </div> 
                        <div class="text text-left">
                            <h3>Mari Berdiskusi</h3>
                            <p>Kami akan menghubungi dan
                            berdiskusi tentang bisnis Anda,
                            bagaimana Anda menggunakan teknologi, dan apa saja yang Anda butuhkan.</p>
                        </div>
                        </li>
                        <li class="col-md-12 item">
                        <div class="text-img">
                            <img src="../img/solusi/service.png" alt="">
                        </div> 
                        <div class="text text-left">
                            <h3>Pilih Layanan</h3>
                            <p>Anda bisa pilih paket layanan IT yang sesuai dengan kebutuhan perusahaan Anda.</p>
                        </div>
                        </li>
                        <li class="col-md-12 item">
                        <div class="text-img">
                            <img src="../img/solusi/goal.png" alt="">
                        </div> 
                        <div class="text text-left">
                            <h3>Mulai Pengerjaan</h3>
                            <p>Tim ahli kami akan mulai pengerjaan sesuai target dan kesepakatan bersama. Hingga kemudian solusi jitu kami tersedia pada bisnis Anda.
                            </p>
                        </div>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-7 form">
                        <!-- Container Form -->
                        <div class="container-form">
                            <form>
                            <div class="row">
                                <!-- Input Nama -->
                                <div class="col-md-6 margin-text">
                                <input type="text" class="form-control" placeholder="Nama Anda*" required>
                                </div>
            
                                <!-- Input Email -->
                                <div class="col-md-6 margin-text">
                                <input type="email" class="form-control" placeholder="Email Anda*" required>
                                </div>
            
                                <!-- Input No. HP -->
                                <div class="col-md-6 margin-text">
                                <input type="tel" class="form-control" placeholder="No HP*" required>
                                </div>
            
                                <!-- Input Nama Perusahaan -->
                                <div class="col-md-6 margin-text">
                                <input type="text" class="form-control" placeholder="Nama Perusahaan*" required>
                                </div>
            
                                <!-- Select Layanan IT -->
                                <div class="col-md-12 margin-select">
                                <select class="form-control">
                                    <option>Layanan IT apa yang Anda butuhkan ?*</option>
                                </select>
                                </div>
                                <!-- End of Select Layanan IT -->
            
                                <!-- Radio Button -->
                                <!-- Radio Button Question -->
                                <div class="col-md-12">
                                <h5 for="jumlahKaryawan">Berapa banyak orang yang bekerja pada perusahaan Anda? </label>
                                </div>
                                
            
                                <!-- Radio Button Value -->
                                <!-- Value 1-5 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="1-5">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                    <h3>1 - 5</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                                </label>
                                <!-- End of Value 1-5 -->
                            
                                <!-- Value 5-15 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="5-15">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                    <h3>5 - 15</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                                </label>
                                <!-- End Value 5-15 -->
            
                                <!-- Value 15-25 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="15-25">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                    <h3>15 - 25</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                                </label>
                                <!-- End of Value 15-25 -->
            
                                <!-- Value 20+ -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="20+">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                    <h3>20+</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                                </label>
                                <!-- End of Value 20+ -->
            
                                <!-- Select Bidang Perusahaan -->
                                <div class="col-md-12 margin-select">                  
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="holder">
                                    <!-- Value of Select Bidang Perusahaan -->
                                    <option>Pilih bidang perusahaan Anda</option>
                                    <option>Pariwisata</option>
                                    <option>Keuangan</option>
                                    <option>Hukum</option>
                                    <option>Manajemen</option>
                                </select>
                                </div>
                                <!-- End of Select Bidang Perusahaan -->
            
                                <!-- Verification Input -->
                                <div class="col-md-7 margin-end">
                                <input type="text" class="form-control" placeholder="Verification *" required>
                                </div>
            
                                <!-- Verification Code Place -->
                                <div class="col-md-5 margin-end">
                                <img src="" alt="">
                                </div>
            
                                <!-- Agreement -->
                                <div class="col-lg-7 box-setuju">
                                  <input type="checkbox" id="setuju" name="setuju">
                                  <!-- Agreement Text -->
                                  <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah benar</label>
                                </div>
                                <!-- End of Agreement -->
            
                                <!-- Submit Button -->
                                <div class="col-md-5 d-flex text-center">
                                  <button type="submit"  class="btn-submit" id="kirim_btn" disabled="disabled">Kirim </button>
                                </div>
            
                            </div>
                            </form>
                        </div>
                        <!-- End of Container Form -->
                    </div>
                </div>
                <!-- End of Container Mitra -->
            </div>
            <p class="text-under-form text-center" data-aos="fade-up">Anda juga bisa mengirim email di <a href="mailto:info@codepanstudio.com" class="hvr-underline-from-left">info@codepanstudio.com</a></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </div>    
  <!-- End of Kontak Kami -->

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

    $(document).on('click','#setuju',function() {
      $('.btn-submit').attr({disabled:!$(this).is(':checked')}) 
    });
  </script>
</body>
</html>
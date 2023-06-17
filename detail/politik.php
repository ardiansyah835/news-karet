<?php
session_start();
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="keywords"
      content="Bootstrap, Landing page, Template, Business, Service"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="author" content="Grayrids" />
    <title>News karet</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/img/2.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/LineIcons.css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="../assets/css/owl.theme.css" />
    <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/css/nivo-lightbox.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
      .page{
        letter-spacing: 10px;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>

  <body>
    <!-- Header Section Start -->
    <header id="home" class="hero-area">
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav
        class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar"
      >
        <div class="container">
          <a href="" class="navbar-brand"
            ><span style="font-size: 30px; color: #fff"
              ><b>News Karet</b></span
            ></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Berita</a>
              </li>
              <!-- <li class="nav-item">
                <a
                  class="btn btn-singin"
                  href="<?php $_SERVER['SERVER_NAME'] ?>/news-karet/masuk/"
                
                  >Masuk</a
                >
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div data-aos="fade-right" class="contents">
              <h2 class="head-title">Kamu berada di <text style="color: #3ECF8E;;">Menu ekonomi</text></h2>
              <p>
                Di menu <text style="color: #3ECF8E;;">Ekonomi</text> ini kalian akan menemukan berita tentang <text style="color: #3ECF8E;;">Ekonomi</text> untuk wilayah Kp. karet
              </p>
              <!-- <div class="header-button">
                <a
                  href="<?php $_SERVER['SERVER_NAME'] ?>/news-karet/masuk/"
                  rel="nofollow"
                
                  class="btn btn-border-filled"
                  >Masuk</a
                >
                <a
                  href="<?php $_SERVER['SERVER_NAME'] ?>/news-karet/daftar/"
                  rel="nofollow"
                
                  class="btn btn-border page-scroll"
                  >Daftar</a
                >
              </div> -->
            </div>
          </div>
          <div data-aos="fade-left" class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <lottie-player
                src="https://assets5.lottiefiles.com/packages/lf20_e8zkfmos.json"
                background="transparent"
                speed="1"
                style="width: 350px; height: 350px; margin-left: 120px"
                loop
                autoplay
              ></lottie-player>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-text section-header text-center">
              <div>
                <h2 class="section-title">Kategori ekonomi</h2>
                <div class="desc-text">
                  <p>Berikut adalah berita dengan kategori <text style="color: #3ECF8E;;">Ekonomi</text></p>
                </div>
              </div>
              <!-- Kategori -->
              <!-- <div class="row" style="margin-top: 15px;">
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Kategori</a>
                </div>
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Berita</a>
                </div>
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Berita</a>
                </div>
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Berita</a>
                </div>
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Berita</a>
                </div>
                <div class="col-sm-2">
                  <a href="" class="btn btn-danger">Berita</a>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <?php
            $perPage = 3;
            if(isset($_GET['Halaman'])){
              $page = $_GET['Halaman'];
            } else {
              $page = 1;
            }

            if($page > 1){
              $start = ($page * $perPage) - $perPage;
            } else {
              $start = 0;
            }

            $sql = "SELECT * FROM `politik` order by id desc LIMIT $start, $perPage";
            $hasil = mysqli_query($con, $sql);

            $d = mysqli_num_rows($hasil);
            if ($d > 0){
              while ($row = mysqli_fetch_array($hasil)){
          ?>
          <div class="col-lg-4 col-md-6 mb-3 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="">
                  <?php 
                    if ($row['gambar'] == ''){
                      echo '<img style="max-height:100px" class="img img-thumbnail" src="../gambar-berita/no-img.jpg">';
                    } else {
                      echo '<img style="width: 500px; height: 250px;" class="img img-thumbnail" src="../gambar-berita/' . $row['gambar'] . '">';
                    }
                  ?>
                </a>
              </div>
              <div class="blog-item-text">
                <h3>
                  <a href=""
                    ><?= $row['judul'] ?></a
                  >
                </h3>
                <p>
                  <?= $row['sub_judul'] ?>
                </p>
                <!-- <a href="" class="read-more">5 Min read</a> -->
              </div>
              <div class="author">
                <span class="name"
                  ><i class="lni-user"></i><a href="">Posted by <?= $row['nama_penulis'] ?></a></span
                >
                <span class="date float-right"
                  ><i class="lni-calendar"></i
                  ><a href="#"><?= $row['tgl_berita'] ?></a></span
                >
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          <?php 
              }
            }
          ?>

          <?php 
            $data = mysqli_query($con, "SELECT * FROM `politik`");
            $jmlBaris = mysqli_num_rows($data);
            $halaman = ceil($jmlBaris/$perPage); 
            for($i = 1; $i<=$halaman; $i++){
              echo "<a href='?Halaman=$i' class='page' style=''>$i </a>";
            }
          ?>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="footer-logo">
                <span style="font-size: 30px; color: #fff; padding-top: 70px"
                  ><b>News Karet</b></span
                >
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Company</h3>
                <ul class="menu">
                  <li><a class="page-scroll" href="#home">- Home</a></li>
                  <li><a class="page-scroll" href="#blog">- News</a></li>
                  <li><a class="page-scroll" href="#contact">- Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Other</h3>
                <ul class="menu">
                  <li><a href="https://www.privacypolicyonline.com/live.php?token=F5wZ03WVbTCAs8jaPyfwdPjCVoVo5yWf">- Privacy policy</a></li>
                  <li><a href="https://www.termsofusegenerator.net/live.php?token=u0C7q0P7bZkPHPCCmsvgCAJvcG0N5WE6">- Terms of use</a></li>
                  <li><a href="https://www.termsfeed.com/live/8293b5fb-f6ca-47f2-a1a3-36e7637ce6c6">- Cookie</a></li>
                  <li><a href="https://www.termsfeed.com/live/782c18dc-ce8f-4994-a22d-458009761b40">- Disclaimer</a></li>
                  <li><a href="https://www.termsfeed.com/live/42afb888-0158-4dea-865a-56b8cd1820f5">- Terms & condition</a></li>
                </ul>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Kategori</h3>
                <ul class="menu">
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/agama.php">- Agama</a></li>
                  <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/ekonomi.php">- Ekonomi</a></li>
                  <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/hiburan.php">- Hiburan</a></li>
                  <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/politik.php">- Politik</a></li>
                  <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/teknologi.php">- Teknologi</a></li>
                </ul>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">News Karet</h3>
                <p>
                  Terima kasih telah menggunakan News Karet untuk mencari berita
                  terkini di daerah Kp. karet
                </p>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>
                    Designed by
                    <a href="https://github.com/ardiansyah835" rel="nofollow" target="_blank"
                      >Ardi team</a
                    >
                  </p>
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- Copyright End -->
      </section>
      <!-- Footer area End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="../assets/js/jquery-min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="../assets/js/jquery.nav.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/nivo-lightbox.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

  </body>
</html>

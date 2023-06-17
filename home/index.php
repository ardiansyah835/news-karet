<?php
session_start();
include('../config/koneksi.php');
if(isset($_POST['kritik'])){
  $nama_depan = $_POST['nama_depan'];
  $nama_belakang = $_POST['nama_belakang'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $pesan = $_POST['pesan'];
  $q = mysqli_query ($con, "INSERT INTO `kritik` (nama_depan, nama_belakang, email, subject, pesan) VALUES ('$nama_depan', '$nama_belakang', '$email', '$subject', '$pesan')");
  if($q){
    echo "<script>alert('Berita berhasil diposting'); 
          document.location='index.php';</script>";
    
  }
}

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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
              ><b>Portal berita Kp. Karet</b></span
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
                <a class="nav-link page-scroll" href="#home">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Kontak kami</a>
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
              <h2 class="head-title">Selamat datang di News Karet</h2>
              <p>
                Disini, kalian dapat menemukan berita-berita daerah <span style="color: #3ECF8E;">Kp. karet</span>. Selamat menikmati beritanya.
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
                <h2 class="section-title">Pilih kategori</h2>
                <div class="desc-text">
                  <p>Berikut adalah Kategori berita yang ada di <text style="color: #3ECF8E;">Kp. karet</text></p>
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

          <div class="col-lg-4 mb-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text">
                <h3 class="text-center">
                  <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/agama.php" style="color: #3ECF8E;"
                    >Agama</a
                  >
                </h3><hr>
                <p>
                  Semua kumpulan berita <text style="color: #3ECF8E;">Agama</text> tentang Kp.karet ada disini
                </p>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/agama.php" class="read-more">Klik disini</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          
          <div class="col-lg-4 mb-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text">
                <h3 class="text-center">
                  <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/ekonomi.php" style="color: #3ECF8E;"
                    >Ekonomi</a
                  >
                </h3><hr>
                <p>
                  Semua kumpulan berita <text style="color: #3ECF8E;">Ekonomi</text> tentang Kp.karet ada disini
                </p>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/ekonomi.php" class="read-more">Klik disini</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 mb-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text">
                <h3 class="text-center">
                  <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/hiburan.php" style="color: #3ECF8E;"
                    >Hiburan</a
                  >
                </h3><hr>
                <p>
                  Semua kumpulan berita <text style="color: #3ECF8E;">Hiburan</text> tentang Kp.karet ada disini
                </p>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/hiburan.php" class="read-more">Klik disini</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 mb-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text">
                <h3 class="text-center">
                  <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/politik.php" style="color: #3ECF8E;"
                    >Politik</a
                  >
                </h3><hr>
                <p>
                  Semua kumpulan berita <text style="color: #3ECF8E;">Politik</text> tentang Kp.karet ada disini
                </p>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/politik.php" class="read-more">Klik disini</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 mb-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-text">
                <h3 class="text-center">
                  <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/teknologi.php" style="color: #3ECF8E;"
                    >Teknologi</a
                  >
                </h3><hr>
                <p>
                  Semua kumpulan berita <text style="color: #3ECF8E;">Teknologi</text> tentang Kp.karet ada disini
                </p>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita-tentang/teknologi.php" class="read-more">Klik disini</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Contact Us Section -->
    <section id="contact" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">
              <div>
                <h2 class="section-title">Kritik atau saran</h2>
                <div class="desc-text">
                  <p>Silahkan masukan pesan jika ada yang ingin disampaikan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <!-- action="https://formspree.io/f/myyabawq" -->
          <div data-aos="fade-right" class="col-lg-6 col-md-12">
            <form
              method="POST"
              id="contactForm"
              autocomplete="off"
            >
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="nama_depan"
                      placeholder="Nama depan"
                      required
                      data-error="Please enter your name"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      placeholder="Nama belakang"
                      id="msg_subject"
                      class="form-control"
                      name="nama_belakang"
                      required
                      data-error="Please enter your subject"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Email"
                      required
                      data-error="Please enter your Email"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      placeholder="Subject"
                      id="budget"
                      class="form-control"
                      name="subject"
                      required
                      data-error="Please enter your Budget"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      id="message"
                      name="pesan"
                      placeholder="Tulis pesan"
                      rows="4"
                      data-error="Write your message"
                      required
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="submit-button">
                    <button class="btn btn-common" name="kritik" id="submit" type="submit">
                      Submit
                    </button>
                    <div id="msgSubmit" class="h3 hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1"></div>
          <!-- End Col -->
          <!-- Start Col -->
          <div data-aos="fade-left" class="col-lg-4 col-md-12">
            <div class="contact-img">
              <img src="../assets/img/contact/01.png" class="img-fluid" alt="" />
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1"></div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Contact Us Section End -->

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

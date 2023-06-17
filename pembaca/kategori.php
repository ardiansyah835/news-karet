<?php
include '../config/koneksi.php';
session_start();
if (empty($_SESSION['username'])){
  @header('location:../masuk/');
} else {
    $nama_lengkap = $_SESSION['nama_lengkap'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>News Karet</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/2.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/boxicons/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link
      href="../assets/vendor/simple-datatables/style.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="../assets/img/2.png" alt="" />
          <span class="d-none d-lg-block">News Karet</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <!-- Search input start -->
      <!-- <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div> -->
      <!-- Search input end -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item pe-3">
            <span class="d-none d-md-block ps-2">
              <?= $_SESSION['username'] ?>
            </span>
          </li>
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a
            class="nav-link"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/pembaca/"
          >
            <i class="bi bi-house"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/pembaca/kategori.php"
          >
            <i class="bi bi-search"></i>
            <span>Pilih kategori</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/logout/"
          >
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Home</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              Anda berada di menu <span style="color: red">Kategori</span>
            </li>
          </ol>
        </nav>
      </div>

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <!-- Content  -->
              <div class="card" style="margin-left: 11px">
                <div class="card-body" style="padding-top: 20px">
                  Silahkan pilih kategori untuk berita anda.
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Ekonomi</h5>
                      <p class="card-text">
                        Berita tentang <span style="color: red;">Ekonomi</span> ada disini
                      </p>
                      <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/berita/ekonomi.php" class="btn btn-danger"><i class="nav-icon bi bi-box-arrow-right"></i> Klik disini</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Hiburan</h5>
                      <p class="card-text">
                        Berita tentang <span style="color: red;">Hiburan</span> ada disini
                      </p>
                      <a href="" class="btn btn-danger"><i class="nav-icon bi bi-box-arrow-right"></i> Klik disini</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Teknologi</h5>
                      <p class="card-text">
                        Berita tentang <span style="color: red;">Teknologi</span> ada disini
                      </p>
                      <a href="" class="btn btn-danger"><i class="nav-icon bi bi-box-arrow-right"></i> Klik disini</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Page Title -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>News Karet</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">
        Designed by
        <a href="https://github.com/ardiansyah835" target="_blank">Ardi team</a>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main/main.js"></script>
  </body>
</html>

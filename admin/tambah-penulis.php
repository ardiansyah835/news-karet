<?php
include '../config/koneksi.php';
session_start();
if (empty($_SESSION['username'])){
  @header('location:../masuk/');
} else {
    $username = $_SESSION['username'];
    $_SESSION['level'] = 'penulis';
}

if(isset($_POST['tambah'])){
  $nama_penulis = $_POST['nama_penulis'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $q = mysqli_query($con, "INSERT INTO `penulis` (nama_penulis, username, password) VALUES ('$nama_penulis', '$username', '$password')");
  if($q){
    echo '<script>alert("Pendaftaran berhasil")</script>';
  }
  
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
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/"
          >
            <i class="bi bi-house"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/kategori.php"
          >
            <i class="bi bi-search"></i>
            <span>Kategori</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/buat-berita.php"
          >
            <i class="bi bi-file-plus"></i>
            <span>Buat berita</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/lihat-berita.php"
          >
            <i class="bi bi-eye-fill"></i>
            <span>Lihat berita</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->

         <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/laporan.php"
          >
            <i class="bi bi-info-circle"></i>
            <span>Laporan</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/tambah-penulis.php"
          >
            <i class="bi bi-person-add"></i>
            <span>Tambah penulis</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/admin/penulis.php"
          >
            <i class="bi bi-person"></i>
            <span>Penulis</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->

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
        <h1>Tambah penulis</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              Anda berada di menu <span style="color: red">Tambah penulis</span>
            </li>
          </ol>
        </nav>
      </div>

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <!-- Content  -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <form style="padding-top: 15px;" class="row g-4" enctype="multipart/form-data" method="POST" autocomplete="off">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Nama penulis</label>
                          <input
                            type="text"
                            class="form-control"
                            id="inputEmail4"
                            name="nama_penulis"
                            placeholder="Masukan judul"
                            required
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="" style="margin-bottom: 8px"
                            >Username</label
                          >
                          <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="Masukan (Nama anda)"
                            required
                            id=""
                          />
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label"
                            >Password</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="inputAddress"
                            name="password"
                            required
                            placeholder="Masukan sub judul"
                          />
                        </div>
                  
                        <div class="d-grid gap-2">
                          <button type="submit" name="tambah" class="btn btn-outline-primary">
                            Tambah
                          </button>
                        </div>
                      </form>
                    </div> <!-- card-body -->
                  </div> <!-- card -->
                </div> <!-- col-lg-12 -->
              </div> <!-- row (2) -->
          </div> <!-- col-lg-12 -->
        </div> <!-- row -->
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

<?php
include '../config/koneksi.php';
session_start();
if (empty($_SESSION['username'])){
  @header('location:../masuk/');
} else{
  $username = $_SESSION['username'];
  $nama_petugas = $_SESSION['nama_petugas'];
  $_SESSION['level'] = 'admin';
}

if(isset($_POST['edit'])){
  $status = $_POST['status'];
  $id = $_POST['id'];
  $q = mysqli_query($con, "UPDATE `pembaca` SET verifikasi = '$status' WHERE id = '$id'");
}

if(isset($_POST['hapus'])){
  $id = $_POST['id'];
  $q = mysqli_query($con, "DELETE FROM `politik` WHERE id = '$id'");
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
    <link rel="shortcut icon" href="../assets/img/2.png" type="image/x-icon">
    <link href="../assets/img/2.png" rel="apple-touch-icon" />

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
        <!-- End Blank Page Nav -->

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
        <h1>Kategori berita</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              Anda berada di menu <span style="color: red">Ekonomi</span>
            </li>
          </ol>
        </nav>
      </div>

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <!-- Content  -->
              <div class="card" style="margin-left: 11px;">
                <div class="card-body" style="padding-top: 20px;">
                  Selamat datang <span style="color: red;"><?= $_SESSION['username'] ?></span> di News Karet. Anda login sebagai <span style="color: red;"><?= $_SESSION['level'] ?></span>
                </div>
              </div>
              <div class="card" style="margin-left: 12px;">
                <!-- datatables  -->
                <div class="card-body">
                  <h5 class="card-title">Ekonomi</h5>
                  <p>Berikut ini adalah berita tentang ekonomi</p>

                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Nama penulis</th>
                        <th scope="col">Tanggal berita</th>
                        <th scope="col">Sub judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $tampil = mysqli_query($con, "SELECT * FROM `politik` order by id desc");
                      while ($d = mysqli_fetch_object($tampil)){
                      
                      ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d->judul?></td>
                        <td><?= $d->nama_penulis?></td>
                        <td><?= $d->tgl_berita?></td>
                        <td><?= $d->sub_judul?></td>
                        <td><?= $d->isi_berita?></td>
                        <td>
                          <form action="" method="post"><input type="hidden" name="id" value="<?= $d->id ?>"><button name="hapus" class="btn btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi bi-trash-fill"></i></button></form>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->

                </div>
                </div>
              <!-- Akhir content -->
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

<?php
include '../config/koneksi.php';
session_start();
if (empty($_SESSION['username'])){
  @header('location:../masuk/');
} else {
    $username = $_SESSION['username'];
    $_SESSION['level'] = 'penulis';
}

if(isset($_POST['posting'])){
  $pilihan = $_POST['pilihan'];
  $judul = $_POST['judul'];
  $nama_penulis = $_POST['nama_penulis'];
  $tgl_berita = $_POST['tgl_berita'];
  $sub_judul = $_POST['sub_judul'];
  $isi_berita = $_POST['isi_berita'];
  // upload 
  $ekstensi_diperbolehkan = array('jpg', 'png');
  $gambar = $_FILES['gambar']['name'];
  print_r($gambar);
  $x = explode(".", $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  if($pilihan == 'ekonomi'){
  if(!empty($gambar)){
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      $q = "INSERT INTO `ekonomi`(judul, nama_penulis, tgl_berita, sub_judul, isi_berita, gambar) VALUES ('$judul', '$nama_penulis', '$tgl_berita', '$sub_judul', '$isi_berita', '$gambar')";
      $r = mysqli_query($con, $q);
      if($r){
        move_uploaded_file($file_tmp, '../gambar-berita/' .$gambar);
          echo "<script>alert('Berita berhasil diposting'); 
          document.location='buat-berita.php';</script>";
      }
    }
  }
} else if($pilihan == 'hiburan'){
  if(!empty($gambar)){
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      $q = "INSERT INTO `hiburan`(judul, nama_penulis, tgl_berita, sub_judul, isi_berita, gambar) VALUES ('$judul', '$nama_penulis', '$tgl_berita', '$sub_judul', '$isi_berita', '$gambar')";
      $r = mysqli_query($con, $q);
      if($r){
        move_uploaded_file($file_tmp, '../gambar-berita/' .$gambar);
        echo "<script>alert('Berita berhasil diposting'); document.location='buat-berita.php';</script>";
      }
    }
  }
} else if($pilihan == 'teknologi'){
  if(!empty($gambar)){
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      $q = "INSERT INTO `teknologi`(judul, nama_penulis, tgl_berita, sub_judul, isi_berita, gambar) VALUES ('$judul', '$nama_penulis', '$tgl_berita', '$sub_judul', '$isi_berita', '$gambar')";
      $r = mysqli_query($con, $q);
      if($r){
        move_uploaded_file($file_tmp, '../gambar-berita/' .$gambar);
        echo "<script>alert('Berita berhasil diposting'); document.location='buat-berita.php';</script>";
      }
    }
  }
} else if($pilihan == 'agama'){
  if(!empty($gambar)){
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      $q = "INSERT INTO `agama`(judul, nama_penulis, tgl_berita, sub_judul, isi_berita, gambar) VALUES ('$judul', '$nama_penulis', '$tgl_berita', '$sub_judul', '$isi_berita', '$gambar')";
      $r = mysqli_query($con, $q);
      if($r){
        move_uploaded_file($file_tmp, '../gambar-berita/' .$gambar);
        echo "<script>alert('Berita berhasil diposting'); document.location='buat-berita.php';</script>";
      }
    }
  }
} else if($pilihan == 'politik'){
  if(!empty($gambar)){
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      $q = "INSERT INTO `politik`(judul, nama_penulis, tgl_berita, sub_judul, isi_berita, gambar) VALUES ('$judul', '$nama_penulis', '$tgl_berita', '$sub_judul', '$isi_berita', '$gambar')";
      $r = mysqli_query($con, $q);
      if($r){
        move_uploaded_file($file_tmp, '../gambar-berita/' .$gambar);
        echo "<script>alert('Berita berhasil diposting'); document.location='buat-berita.php';</script>";
      }
    }
  }
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
        <h1>Buat berita</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              Anda berada di menu <span style="color: red">Buat berita</span>
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
                          <label for="inputEmail4" class="form-label">Judul</label>
                          <input
                            type="text"
                            class="form-control"
                            id="inputEmail4"
                            name="judul"
                            placeholder="Masukan judul"
                            required
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="" style="margin-bottom: 8px"
                            >Nama penulis</label
                          >
                          <input
                            type="text"
                            name="nama_penulis"
                            class="form-control"
                            placeholder="Masukan (Nama anda)"
                            required
                            id=""
                          />
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label"
                            >Sub judul</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="inputAddress"
                            name="sub_judul"
                            required
                            placeholder="Masukan sub judul"
                          />
                        </div>

                        <div class="col-12">
                          <label for="inputAddress" class="form-label"
                            >Masukan tanggal</label
                          >
                          <input
                            type="date"
                            class="form-control"
                            id="inputAddress"
                            name="tgl_berita"
                            required
                            placeholder="Masukan sub judul"
                          />
                        </div>
                        <label for="">Masukan pilihan</label>
                        <div class="form-group" style="margin-top: 3px;">
                          <select class="form-select" name="pilihan" aria-label="Default select example">
                            <option value="agama">Agama</option>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="hiburan">Hiburan</option>
                            <option value="politik">Politik</option>
                            <option value="teknologi">Teknologi</option>
                          </select>
                          </div>                    
                          <div class="col-12">
                          <label for="inputAddress2" class="form-label"
                            >Masukan berita</label
                          >
                          <div class="form-group">
                            <textarea
                              class="form-control"
                              name="isi_berita"
                              placeholder="Masukan berita"
                              id=""
                              required
                              cols="30"
                              rows="10"
                            ></textarea>
                          </div>
                        </div>

                        <label for="">Masukan gambar berita</label>
                        <div class="input-group">
                          <input
                            type="file"
                            name="gambar"
                            required
                            class="form-control"
                            id="inputGroupFile04"
                            style="margin-top: -20px;"
                            aria-describedby="inputGroupFileAddon04"
                            aria-label="Upload"
                          />
                        </div>
                        <span style="margin-top: 2px; font-size: 13px;">*Gambar harus berupa <span style="color: red;">JPG</span> atau <span style="color: red;">PNG</span></span>
                        <div class="d-grid gap-2">
                          <button type="submit" name="posting" class="btn btn-outline-primary">
                            Posting
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

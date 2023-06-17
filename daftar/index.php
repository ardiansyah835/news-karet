<?php
include('../config/koneksi.php');
if (isset($_POST['simpan'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $q = mysqli_query($con, "INSERT INTO `pembaca` (nama_lengkap, username, password, telp, verifikasi) VALUES ('$nama_lengkap', '$username', '$password', $telp, 0)");
    if($q){
        echo '<div class="alert alert-success" role="alert">Pendaftaran berhasil!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Pendaftaran gagal!</div>';
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/form.css" />
    <link rel="shortcut icon" href="../assets/img/2.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>daftar</title>
  </head>
  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid"
              alt="Phone image"
            />
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" autocomplete="off">
              <div class="row">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="card-header form-control-lg text-center bg-primary mt-3"
                    >
                      <label for="" style="color: #fff"
                        ><i class="fa fa-user text-white"></i> Daftar</label
                      >
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-3 mt-3">
                      <label class="form-label" for="form1Example13"
                        >Nama lengkap</label
                      >
                      <input
                        type="text"
                        id="nama_lengkap"
                        name="nama_lengkap"
                        class="form-control form-control-lg"
                        placeholder="Masukan nama lengkap"
                        required
                      />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <label class="form-label" for="form1Example23"
                        >Username</label
                      >
                      <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control form-control-lg"
                        placeholder="Masukan username"
                        required
                      />
                    </div>

                    <div class="form-outline mb-3">
                      <label class="form-label" for="form1Example23"
                        >Password</label
                      >
                      <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control form-control-lg"
                        placeholder="Masukan password"
                        required
                      />
                    </div>

                    <div class="form-outline mb-3">
                      <label class="form-label" for="form1Example23"
                        >No telepon</label
                      >
                      <input
                        type="number"
                        id="telp"
                        name="telp"
                        class="form-control form-control-lg"
                        placeholder="Masukan no telepon"
                        required
                      />
                    </div>
                    
                    <!-- Submit button -->
                    <button
                      type="submit"
                      name="simpan"
                      class="btn btn-login form-control btn-outline-primary"
                      
                    >
                      Daftar
                    </button>

                    <div
                      class="text-center form-group mb-4"
                      style="margin-top: 15px"
                    >
                      Sudah punya akun?
                      <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/news-karet/masuk/" style="color: black"
                        >Silahkan masuk</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

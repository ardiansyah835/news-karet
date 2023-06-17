<?php
include('../config/koneksi.php');
if (isset($_POST['cek'])) {
    $pilihan = $_POST['pilihan']; 
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($pilihan == 'admin'){
      $q = mysqli_query($con, "SELECT * FROM `petugas` WHERE username = '$username' AND password = '$password'");
      $r = mysqli_num_rows($q);
      if ($r == 1){
        $d = mysqli_fetch_object($q);
        @session_start();
        $_SESSION['username'] = $d->username;
        $_SESSION['nama_petugas'] = $d->nama_petugas;
        $_SESSION['level'] = $d->level;
        $_SESSION['id_petugas'] = $d->id_petugas;
        @header('location:../admin/');
      } else {
        echo '<div class="alert alert-danger" role="alert">Periksa kembali data anda</div>';
      }
    } else if ($pilihan == 'penulis'){
      $q = mysqli_query($con, "SELECT * FROM `penulis` WHERE username = '$username' AND password = '$password'");
      $r = mysqli_num_rows($q);
      if ($r == 1){
        $d = mysqli_fetch_object($q);
        @session_start();
        $_SESSION['username'] = $d->username;
        $_SESSION['level'] = $d->level;
        $_SESSION['id_penulis'] = $d->id_penulis;
        @header('location:../penulis/');
      } else {
        echo '<div class="alert alert-danger" role="alert">Periksa kembali data anda</div>';
      }
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
    <title>Masuk</title>
  </head>
  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
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
                        ><i class="fa fa-user text-white"></i> Masuk</label
                      >
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-3 mt-3">
                      <label class="form-label" for="form1Example13"
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

                    <!-- Password input -->
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
                        >Masuk sebagai</label
                      >
                      <select
                        class="form-select mb-3"
                        aria-label="Default select example"
                        name="pilihan"
                      >
                        <option value="penulis">Penulis</option>
                        <option value="admin">Admin</option>
                      </select>
                    </div>

                    <!-- Submit button -->
                    <button
                      type="submit"
                      class="btn btn-login form-control btn-outline-primary"
                      name="cek"
                    >
                      Masuk
                    </button>
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

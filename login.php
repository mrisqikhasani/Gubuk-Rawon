<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/about-us/logo 3.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container my-auto pt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg mt-5">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to Gubuk Rawon 👋</h1>
                    <p class="mb-5">
                      <?php
                      if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == 'gagal') {
                          echo '<i class="text-danger">Login Gagal Username atau Password tidak ditemukan</i>';
                        } else if ($_GET['pesan'] == 'empty') {
                          echo '<i class="text-danger">Username dan Password tidak boleh kosong </i>';
                        } else if ($_GET['pesan'] == 'notfound') {
                          echo '<i class="text-danger">username tidak tersedia! </i>';
                        } else if ($_GET['pesan'] == 'notlogin') {
                          echo '<i class="text-danger">Anda harus login untuk mengakses halaman admin! </i>';
                        } else if ($_GET['pesan'] == 'logout') {
                          echo '<i class="text-danger">Anda telah berhasil logout </i>';
                        }
                      }
                      ?>
                    </p>
                  </div>
                  <form class="user" action="cek_login.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index.php">Kembali ke Beranda</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/template/vendor/jquery/jquery.min.js"></script>
  <script src="assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/template/js/sb-admin-2.min.js"></script>

</body>

</html>
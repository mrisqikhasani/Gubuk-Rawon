<?php
// $pass = password_hash("admin", PASSWORD_DEFAULT);

// var_dump($pass);
// die;

include("../koneksi.php");

$db = new database();

// inisialisasi sessions
session_start();

if (isset($_SESSION['$username']) || isset($_SESSION['userId'])) {
  header("location: admin/index.php");
} else {
  if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username di database
    if (!empty(trim($username)) && !empty(trim($password))) {

      $query = $db->get_data_user($username);

      if ($query) {
        $rows = mysqli_num_rows($query);
      } else {
        $rows = 0;
      }

      // cek ketersedian username 
      if ($rows != 0) {
        $getData = $query->fetch_assoc();
        // cek apakah password sama dengan yang inputkan atau tidak 
        if (password_verify($password, $getData['password'])) {

          $_SESSION['username'] = $username;
          $_SESSION['userId'] = $getData['userId'];
          header('location:../admin/index.php');
        } else {
          header("location:login.php?pesan=gagal");
        }
      } else {
        header("location:login.php?pesan=notfound");
      }
    } else {
      header("location:login.php?pesan=empty");
    }
  } else {
    header("location:login.php?pesan=empty");
  }
}

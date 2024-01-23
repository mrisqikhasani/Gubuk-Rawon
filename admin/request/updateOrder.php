<?php
// Pastikan Anda memiliki koneksi ke database di sini


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $phoneNumber = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $statusPemesanan = $_POST['statusPemesanan'];
  $quantity = $_POST['quantity'];
  $subtotal = $_POST['subtotal'];
  $paymentMethod = $_POST['paymentMethod'];
  $statuspayment = $_POST['statusPayment'];
  
  var_dump($_POST);
  die;




  // var_dump($modalCounter, $statusPemesanan, $statusPemesananSelect, $paymentMethodSelect, $statusPaymentSelect);

  // Tanggapi berhasil
  echo json_encode(["status" => "success", "message" => "Update berhasil"]);
} else {
  // Tanggapi jika bukan metode POST
  echo json_encode(["status" => "error", "message" => "Metode request tidak valid"]);
}

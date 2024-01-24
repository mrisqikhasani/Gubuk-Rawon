<?php
@include('../../koneksi.php');

$db = new database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $orderId = $_GET['orderId'];
  $name = $_POST['name'];
  $phoneNumber = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $menuId = $_POST['menuId'];
  $statusPemesanan = $_POST['statusPemesanan'];
  $quantity = $_POST['quantity'];
  $subtotal = $_POST['subtotal'];
  $paymentMethod = $_POST['paymentMethod'];
  $statuspayment = $_POST['statusPayment'];
  
  // $query = $db->update_orders_by_id($orderId, $)
  // melakukan update pada database 
  var_dump($orderId);
  die;




  // var_dump($modalCounter, $statusPemesanan, $statusPemesananSelect, $paymentMethodSelect, $statusPaymentSelect);

  // Tanggapi berhasil
  echo json_encode(["status" => "success", "message" => "Update berhasil"]);
} else {
  // Tanggapi jika bukan metode POST
  echo json_encode(["status" => "error", "message" => "Metode request tidak valid"]);
}

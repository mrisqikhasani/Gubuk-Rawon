<?php
@include('../../koneksi.php');

$db = new database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $orderId = $_GET['orderId'];
  $name = $_POST['name'];
  $phoneNumber = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $menuId = $_POST['items-id'];
  $statusPemesanan = $_POST['statusPemesanan'];
  $quantity = $_POST['quantity-items'];
  $subtotal = $_POST['subtotal-items'];
  $paymentMethod = $_POST['paymentMethod'];
  $statuspayment = $_POST['statusPayment'];
  $totalHarga = $_POST['totalHargaEdit'];

  $query = $db->update_orders_by_id($orderId, $totalHarga, $statusPemesanan, $statuspayment, $paymentMethod, $quantity, $subtotal, $menuId);
  // melakukan update pada _POSTbase 

  header('location:../index.php?message=Successfully');

  // var_dump($modalCounter, $statusPemesanan, $statusPemesananSelect, $paymentMethodSelect, $statusPaymentSelect);

  // Tanggapi berhasil
  echo json_encode(["status" => "success", "message" => "Update berhasil"]);
} else {
  // Tanggapi jika bukan metode POST
  echo json_encode(["status" => "error", "message" => "Metode request tidak valid"]);
}

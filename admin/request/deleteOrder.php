<?php 
@include('../../koneksi.php');

$db = new database();

$orderId = $_GET['orderId'];
$customerId = $_GET['customerId'];

$result = $db->deleteOrder($orderId, $customerId);
// echo "<p>Ini adalah halaman delete controller></p>";

if ($result == 'success'){
  header("location:../index.php?message=DeleteSuccessfully");
} else {
  // header("location:..index.php?message=");
  echo $result;
}
?>
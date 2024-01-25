<?php 
@include('../../koneksi.php');

$db = new database();

$orderId = $_GET['orderId'];
$customerId = $_GET['customerId'];

$db->deleteOrder($orderId, $customerId);
// echo "<p>Ini adalah halaman delete controller></p>";



?>
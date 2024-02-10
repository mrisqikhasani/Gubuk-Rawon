<?php
include('../../koneksi.php');

$db = new database();


$alamat = $_POST['catatan'];
$alamat .= ", Kelurahan ". $_POST['kelurahan']. ", ";
$alamat .= "Kecamatan ".$_POST['kecamatan']. ", ";
$alamat .= "Kota ". $_POST['kota']. ', ';
$alamat .= "Jawa Barat";

$postedData = $_POST;

$customerData = [
  'name' => $postedData['name'],
  'phoneNumber' => $postedData['phoneNumber'],
  'email' => $postedData['email'],
  'address' => $alamat,
  'total' => $postedData['total'],
  'metodePembayaran' => $postedData['metodePembayaran'],
  'orderType' => 'Online',
];

$products = [];

foreach ($postedData as $key => $value) {
  if (strpos($key, "productName_") === 0) {
    $productID = substr($key, strlen("productName_"));

    $products["product_$productID"] = [
      'productID' => $productID,
      'productName' => $value,
      'productPrice' => $postedData["productPrice_$productID"],
      'productQuantity' => $postedData["productQuantity_$productID"],
      'subTotal' => $postedData["subTotal_$productID"],
    ];
  }
}

// print_r($products);
// print_r($customerData);
// die;
$result = $db->post_order($customerData, $products);
$message = $result;

if ($message == 'Success') {
  header("location:../index.php?message=insertSuccessfully");
} else {
  header('location:..index.php');
}
?>;
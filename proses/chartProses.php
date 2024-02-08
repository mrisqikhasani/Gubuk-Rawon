<?php
include('../koneksi.php');

$db = new database();

// $address = $_POST['kelurahan']. ','.$_POST['kecamatan'] .','. $_POST['kota'];

$alamat = $_POST['catatan'];
$alamat .= ", Kelurahan ". $_POST['kelurahan']. ", ";
$alamat .= "Kecamatan ".$_POST['kecamatan']. ", ";
$alamat .= "Kota ". $_POST['kota']. ', ';
$alamat .= "Jawa Barat";

// var_dump($alamat);

// var_dump($_POST);
// die;
$postedData = $_POST;
// aray to save customer data and total
$customerData = [
  'name' => $postedData['name'],
  'phoneNumber' => $postedData['phoneNumber'],
  'email' => $postedData['email'],
  'address' => $alamat,
  'total' => $postedData['total'],
  'metodePembayaran'=> $postedData['metodePembayaran'],
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

$result = $db->post_order($customerData, $products);
$message = $result;

if($message == 'Success'){
  header("location:../notification.php?message=$message");
}



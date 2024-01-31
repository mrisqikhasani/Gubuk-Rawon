<?php
include('koneksi.php');

$db = new database();


// var_dump($_POST);

$postedData = $_POST;
// aray to save customer data and total
$customerData = [
  'name' => $postedData['name'],
  'phoneNumber' => $postedData['phoneNumber'],
  'email' => $postedData['email'],
  'address' => $postedData['address'],
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
  header("location:layout/notification.php?message=$message");
}



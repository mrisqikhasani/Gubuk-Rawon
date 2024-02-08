<?php 
include('../../koneksi.php');

$db = new database();

// var_dump($_POST);
// die;

$postedData = $_POST;

$totalData = [
  'total' => $postedData['total'],
  'customerID'=> 1,
  'orderType' => 'Offline',
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
// print_r($totalData);

$result = $db->post_order_without_customer($totalData, $products);
$message = $result;

if($message == 'Success'){
  header("location:../kasir.php?message=insertSuccessfully");
} else {
  header('location:..kasir.php');
}
?>;
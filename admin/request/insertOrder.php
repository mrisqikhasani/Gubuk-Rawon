<?php 
include('../../koneksi.php');

$db = new database();


$postedData = $_POST;

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

print_r($products);
print_r($customerData);

$result = $db->post_order($customerData, $products);
$message = $result;

if($message == 'Success'){
  header("location:../index.php?message=insertSuccessfully");
} else {
  header('location:..index.php');
}
?>;
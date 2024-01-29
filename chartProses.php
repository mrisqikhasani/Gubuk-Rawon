<?php

var_dump($_POST);

foreach ($_POST as $key => $value) {
  // Check if the key starts with "productName_" to identify product data
  if (strpos($key, "productName_") === 0) {
      // Extract product ID from the key
      $productId = substr($key, strlen("productName_"));

      // Retrieve other product-related data
      $productName = $value;
      $productPrice = $_POST["productPrice_" . $productId];
      $productQuantity = $_POST["productQuantity_" . $productId];
      $subTotal = $_POST["subTotal_" . $productId];

      
  }
}

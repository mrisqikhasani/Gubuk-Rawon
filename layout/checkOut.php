<?php
$postCart = $_POST;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GUBUK RAWON</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/img/about-us/logo 3.png" type="image/x-icon">

  <!-- Font awesome -->
  <link href="../assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datepicker.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="../assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="../style.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

</head>

<body>
  <!-- Start Reservation section -->
  <!-- <section id="mu-reservation"> -->
  <div class="container">
    <div class="row">
      <form method="post" action="confirmation.php" class="mu-reservation-form">
        <div class="col-md-5 p-3">
          <div class="myCart">
            <div class="mu-title">
              <h2>Keranjang Saya</h2>
            </div>
            <table class="cart-show table table-bordered">
              <thead>
                <th>Menu</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub Total</th>
              </thead>
              <tbody>
                <?php
                foreach ($_POST as $key => $value) {
                  if (strpos($key, "productName_") === 0) {
                    // Extract product ID from the key
                    $productId = substr($key, strlen("productName_"));

                    // Retrieve other product-related data
                    $productName = $value;
                    $productPrice = $_POST["productPrice_" . $productId];
                    $productQuantity = $_POST["productQuantity_" . $productId];
                    $subTotal = $_POST["subTotal_" . $productId];
                ?>
                    <tr>
                      <td>
                        <?= $_POST["productName_" . $productId] ?>
                        <input type="hidden" name="productName_<?= $productId ?>" value="<?= $productName ?>">
                      </td>
                      <td>
                        <?= $_POST["productPrice_" . $productId] ?>
                        <input type="hidden" name="productPrice_<?= $productId ?>" value="<?= $productPrice ?>">
                      </td>
                      <td>
                        <?= $_POST["productQuantity_" . $productId] ?>
                        <input type="hidden" name="productQuantity_<?= $productId ?>" value="<?= $productQuantity ?>">
                      </td>
                      <td>
                        <?= $_POST["subTotal_" . $productId] ?>
                        <input type="hidden" name="subTotal_<?= $productId ?>" value="<?= $subTotal ?>">
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
              <div>
                <p>Total : <?= $_POST['total'] ?></p>
                <input type="hidden" name="total" value="<?= $_POST['total'] ?>">
              </div>
            </table>
          </div>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-6">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <h2>RESERVASI</h2>
            </div>
            <div class="mu-reservation-content">
              <p>Silahkan isi data anda</p>
              <div class="row">
                <!-- <div class="col-md-6"> -->
                <div class="mb-3 row">
                  <label for="name" class="form-label">Nama anda</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nama Anda">
                </div>
                <div class="mb-3 row">
                  <label for="phoneNumber" class="form-label">Nomor Phone</label>
                  <input type="tel" class="form-control" name='phoneNumber' id="phoneNumber" placeholder="Nomor WhatsApp">
                </div>
                <div class="mb-3 row">
                  <label for="email" class="form-label">Email anda </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email anda">
                </div>
                <div class="mb-3 row">
                  <label for="address" class="form-label">Isikan alamat anda</label>
                  <textarea name="address" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3 row">
                  <label for="address" class="form-label">Isikan alamat anda</label>
                  <select name="metodePembayaran" id="userPaymentMethod" class="form-control">
                    <option value="COD">COD (Cash on Delivery)</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                  </select>
                </div>
                <div class="mb-3 row">
                  <br>
                  <input type="submit" class="btn btn-primary p-5" value="Confirm" target="_blank">
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
        <div class="buttonback">
          <a href="../index.php" class="btn btn-light">Kembali</a>
        </div>
      </form>
    </div>
  </div>
  <!-- </section> -->
  <!-- End Reservation section -->

</body>

</html>
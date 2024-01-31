<?php
include('header.php');
?>
<style>
  body{
    background-color: #e4e4e4;
  }

  .mu-reservation-form {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Tambahkan gaya untuk table dan kerangkanya */
  .myCart {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .mu-title {
    text-align: center;
    margin-bottom: 20px;
  }

  .cart-show {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  /* Beri gaya pada header kolom tabel */
  .cart-show th {
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
  }

  /* Beri gaya pada baris isi tabel */
  .cart-show td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  /* Beri warna latar belakang untuk setiap baris genap */
  .cart-show tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  /* Gaya untuk total */
  .cart-show tfoot {
    margin-top: 20px;
  }

  .cart-show tfoot p {
    text-align: right;
    font-weight: bold;
    font-size: 18px;
  }

  .container {
    padding-top: 50px;
  }

  /* another form  */

  /* Tambahkan gaya untuk formulir reservasi */
  .mu-reservation-area {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .mu-title {
    text-align: center;
    margin-bottom: 20px;
  }

  .mu-reservation-content {
    text-align: center;
  }

  .mu-reservation-content p {
    margin-bottom: 20px;
  }

  /* Atur lebar formulir */
  .mu-reservation-content .row {
    max-width: 400px;
    margin: 0 auto;
  }

  /* Gaya untuk label dan input */
  .mu-reservation-content .row label {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .mu-reservation-content .row input,
  .mu-reservation-content .row textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }

  /* Gaya untuk radio button */
  .mu-reservation-content .row input[type="radio"] {
    display: none;
  }

  .label-radioButton {
    display: inline-block;
    padding: 10px;
    margin: 0 5px 10px 0;
    border-radius: 5px;
    cursor: pointer;
    background-color: #ddd;
    transition: background-color 0.3s ease;
  }

  .mu-reservation-content .row input[type="radio"]+label {
    position: relative;
  }

  .mu-reservation-content .row input[type="radio"]:checked+label {
    background-color: #007bff;
    color: #fff;
  }

  /* Gaya khusus untuk radio button dengan kelas 'button-shape' */
  .mu-reservation-content .row input[type="radio"].button-shape+label {
    border-radius: 25px;
    background-color: #ddd;
  }

  .mu-reservation-content .row input[type="radio"].button-shape:checked+label {
    background-color: #28a745;
    /* Warna latar belakang saat button khusus dipilih */
    color: #fff;
  }


  /* Gaya untuk tombol konfirmasi */
  #buttonConfirmationCustomer {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }

  #buttonConfirmationCustomer:hover {
    background-color: #0056b3;
  }

  /* Gaya untuk modal konfirmasi */
  .modal {
    text-align: center;
  }

  .modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
  }

  .modal-content {
    border-radius: 8px;
  }

  .modal-header {
    background-color: #007bff;
    color: #fff;
    border-radius: 8px 8px 0 0;
  }

  .modal-body,
  .modal-footer {
    padding: 20px;
  }

  /* Gaya untuk tombol modal */
  .btn-secondary {
    background-color: #6c757d;
    color: #fff;
  }

  .btn-secondary:hover {
    background-color: #5a6268;
  }

  .btn-primary {
    background-color: #007bff;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }
</style>


<body>
  <!-- Start Reservation section -->
  <!-- <section id="mu-reservation"> -->
  <form method="post" action="../chartProses.php" class="mu-reservation-form">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-5 p-3">
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
        </div> -->

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
              <tfoot>
                <tr>
                  <td colspan="4">
                    <p>Total : <?= $_POST['total'] ?></p>
                    <input type="hidden" name="total" value="<?= $_POST['total'] ?>">
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="col-md-1">

        </div>
        <div class="col-md-6">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <h2>Silahkan Isi data Anda</h2>
            </div>
            <div class="mu-reservation-content">
              <div class="row">
                <!-- <div class="col-md-6"> -->
                <div class="mb-3 row">
                  <label for="name" class="form-label">Nama anda</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3 row">
                  <label for="phoneNumber" class="form-label">Nomor Phone</label>
                  <input type="tel" class="form-control" name='phoneNumber' id="phoneNumber" placeholder="Nomor WhatsApp" required>
                </div>
                <div class="mb-3 row">
                  <label for="email" class="form-label">Email anda </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" requried>
                </div>
                <div class="mb-3 row">
                  <label for="address" class="form-label">Isikan alamat anda</label>
                  <textarea name="address" class="form-control" cols="10" required></textarea>
                </div>
                <div class="mb-3 row">
                  <label for="address" class="form-label">Metode Pembayaran</label>
                  <br>
                  <input type="radio" id="COD" name="metodePembayaran" value="COD" class="button-shape" checked>
                  <label class="label-radioButton" for="COD">COD</label>

                  <input type="radio" id="Bank Transfer" name="metodePembayaran" value="Bank Transfer" class="button-shape">
                  <label class="label-radioButton" for="Bank Transfer">Bank Transfer</label>
                </div>
                <div class="mb-3 row">
                  <br>
                  <div class="buttonInCustomer" style="display: inline;">
                    <a href="../index.php" class="btn btn-light">Kembali</a>
                  <button type="button" class="btn btn-primary" id="buttonConfirmationCustomer" data-toggle="modal" data-target="#confirmation">Confirm</button>
                  </div>
                </div>
              </div>
              <!-- </div> -->

              <!-- section modal confitmation -->
              <div class="modal fade" id="confirmation" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                    <div class="modal-body">
                      <p>Apakah data yang anda sudah isi sudah benar?</p>
                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Yes </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end section modal confirmation -->

            </div>
          </div>
        </div>

        <!-- </form> -->
      </div>
    </div>
    <!-- </section> -->
    <!-- End Reservation section -->
  </form>

  <?php
  include('footer.php');
  ?>
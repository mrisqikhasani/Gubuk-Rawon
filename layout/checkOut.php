<?php
include('header.php');
?>

<body>
  <!-- Start Reservation section -->
  <!-- <section id="mu-reservation"> -->
  <form method="post" action="../chartProses.php" class="mu-reservation-form">
    <div class="container">
      <div class="row">
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
                  <!-- <select name="metodePembayaran" id="userPaymentMethod" class="form-control">
                    <option value="COD">COD (Cash on Delivery)</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                  </select> -->
                  <br>
                  <input type="radio" id="COD" name="metodePembayaran" value="COD" checked>
                  <label for="COD">COD</label>
                  <br>
                  <input type="radio" id="Bank Transfer" name="metodePembayaran" value="Bank Transfer">
                  <label for="Bank Transfer">Bank Transfer</label>
                </div>
                <div class="mb-3 row">
                  <br>
                  <!-- <input type="submit" class="btn btn-primary p-5" value="Confirm" target="_blank"> -->
                  <button type="button" class="btn btn-primary" id="buttonConfirmationCustomer" data-toggle="modal" data-target="#confirmation">Confirm</button>
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
        <div class="buttonback">
          <a href="../index.php" class="btn btn-light">Kembali</a>
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
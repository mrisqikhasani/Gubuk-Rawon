<?php
include("layout/navbar.php");

@include('../koneksi.php');

$db = new database();

$resultMenu = $db->get_all_menu();

?>
<style>
  .label-radioButton {
    display: inline-block;
    padding: 10px;
    margin: 0 5px 10px 0;
    border-radius: 5px;
    cursor: pointer;
    background-color: #ddd;
    transition: background-color 0.3s ease;
  }

  input[type="radio"] {
    display: none;
  }

  input[type="radio"]+label {
    position: relative;
  }

  input[type="radio"]:checked+label {
    background-color: #007bff;
    color: #fff;
  }

  input[type="radio"].button-shape+label {
    border-radius: 25px;
    background-color: #ddd;
  }

  input[type="radio"].button-shape:checked+label {
    background-color: #28a745;
    color: #fff;
  }
</style>

<!-- container -->
<div class="container-fluid">
  <a href="index.php" class="btn btn-primary float-right">Kembali</a>
  <form action="request/insertOrder.php" method="post" id="insertForm">
    <h1 class="h3 m-5 text-gray-800">Tambah Pemesanan</h1>
    <div class="card shadow mb-4">
      <div class="card-body">

        <!-- Customer Details -->
        <div class="align-item-center row">
          <div class="col-8">
            <h4 class="mb-1">Customer</h4>
          </div>
        </div>

        <!-- Customer Content -->
        <div class="container">
          <div class="align-item-center row">
            <div class="col-lg-8 m-2">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Nama...">
            </div>
            <div class="col-lg-8 m-2">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number...">
            </div>
            <div class="col-lg-8 m-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" placeholder="email...">
            </div>
            <div class="col-lg-8 m-2">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" placeholder="alamat...">
            </div>
            <div class="col-lg-8 m-2">
              <label for="address" class="form-label">Metode Pembayaran</label>
              <br>
              <input type="radio" id="COD" name="metodePembayaran" value="COD" class="button-shape" checked>
              <label class="label-radioButton" for="COD">COD</label>

              <input type="radio" id="Bank Transfer" name="metodePembayaran" value="Bank Transfer" class="button-shape">
              <label class="label-radioButton" for="Bank Transfer">Bank Transfer</label>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="align-item-center row pt-5">
            <h1>Menu</h1>
          </div>

          <div class="row">
            <?php
            foreach ($resultMenu as $row) {
            ?>
              <div class='col-md-4'>
                <div class='card' id='menu-list' onclick='addToCart(event)'>
                  <div class='menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row[' price'] ?>'>
                    <div class='menu'>
                      <img src="../assets/img/menu/<?= $row['imageName'] ?>" class="card-img-top" alt="Menu Image" style="max-height: 200px; object-fit: cover;">
                      <div class='card-body menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                        <h4 class='card-title'><?= $row['menuName'] ?></h4>
                        <p class="card-text"><?= $row['description'] ?></p>
                        <p class="card-text mu-menu-price"> Rp <?= $row['price'] ?></p>
                        <button type="button" class='btn btn-primary btn-sm'>Add To Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>

            <div class="cart-admin pt-5">
              <h5><i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang</h5>
              <table class="cart-show table table-bordered" width="100%">
                <thead>
                  <th>Menu</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Sub Total</th>
                  <th>Action</th>
                </thead>
                <tbody id="cart-items">

                </tbody>
              </table>
              <div id="cart-footer">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="cartAdminSure" role="dialog">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">Konfirmasi Pemesanan</h4>
          </div>
          <div class="modal-body">
            Apakah kamu yakin ingin memesan?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Checkout</button>
          </div>
        </div>
      </div>
    </div>


  </form>
</div>

<?php
include('layout/footer.php');
?>
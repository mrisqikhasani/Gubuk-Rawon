<?php
session_start();
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
  <!-- Konten Anda -->
  <h1 class="h3 m-5 text-gray-800">Halaman Tambah pesanan secara offline</h1>
  <form action="request/insertOrderOffline.php" method="post" id="insertForm">

    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="container">
          <!-- Cart Admin Anda -->
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
              <div class="modal fade" id="cartAdminSure" role="dialog">
                <div class="modal-dialog ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h5 class="modal-title">Konfirmasi Pemesanan</h5>
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
            </div>
          </div>

          <div class="align-item-center row pt-5">
            <h1>Menu</h1>
            <div class="input-group ml-auto mb-5">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" id="searchInput" class="form-control" placeholder="Cari menu...">
            </div>
          </div>

          <div class="row" id="menuList">
            <?php foreach ($resultMenu as $row) { ?>
              <div class="col-md-4 menu-item" data-name="<?= $row['menuName'] ?>">
                <div class="card" id="menu-list" onclick="addToCart(event)">
                  <div class="menu" data-id="<?= $row['menuID'] ?>" data-name="<?= $row['menuName'] ?>" data-price="<?= $row['price'] ?>">
                    <img src="../assets/img/menu/<?= $row['imageName'] ?>" class="card-img-top" alt="Menu Image" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body menu" data-id="<?= $row['menuID'] ?>" data-name="<?= $row['menuName'] ?>" data-price="<?= $row['price'] ?>">
                      <h4 class="card-title"><?= $row['menuName'] ?></h4>
                      <p class="card-text"><?= $row['description'] ?></p>
                      <p class="card-text mu-menu-price"> Rp <?= $row['price'] ?></p>
                      <button type="button" class="btn btn-primary btn-sm">Add To Cart</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
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
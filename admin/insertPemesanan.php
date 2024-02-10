<?php
if (!isset($_SESSION)) {
  session_start();
}

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

  /* styke for listbox */

  select {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    margin-bottom: 10px;
  }

  select option {
    padding: 8px 12px;
  }

  /* textarea {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    margin-bottom: 10px;
  } */
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
              <!-- <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" placeholder="alamat..."> -->
              <?php
              ?>

              <label class="form-label">Alamat</label>
              <!-- <p>Hanya menerima pesanan sekitar kota Depok</p> -->

              <label for="kota">Kota:</label>
              <select name="kota" id="kota" class="form-control" onchange="populateKecamatan()">
                <option value="">Pilih Kota</option>
                <option value="Depok">Depok</option>
                <!-- Tambahkan pilihan kota lainnya di sini -->
              </select>
              <br>

              <label for="kecamatan">Kecamatan:</label>
              <select name="kecamatan" id="kecamatan" class="form-control" onchange="populateKelurahan()">
                <option value="">Pilih Kecamatan</option>
                <!-- Opsi akan diisi dengan JavaScript -->
              </select>
              <br>

              <label for="kelurahan">Kelurahan: </label>
              <select name="kelurahan" id="kelurahan" class="form-control" onchange="enableRT()">
                <option value="">Pilih Kelurahan</option>
              </select>
              <br>

              <!-- <label for="rt">RT:</label>
                  <input type="text" id="rt" disabled>
                  <br>
                  <label for="rw">RW:</label>
                  <input type="text" id="rw" disabled> -->

              <label for="catatan">Catatan Alamat:</label>
              <textarea id="catatan" class="form-control" name="catatan" rows="4" cols="50" placeholder="Contoh Jln. Cempaka No 1 RT 01 RW 08..."></textarea>
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
            <div class="input-group ml-auto mb-5">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" id="searchInput" class="form-control" placeholder="Cari menu...">
            </div>
          </div>

          <div class="cart-admin pb-5">
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
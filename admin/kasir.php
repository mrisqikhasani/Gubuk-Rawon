<?php
session_start();
include('layout/navbar.php');

include('../koneksi.php');

$db = new database();

$query = $db->get_orders_by_customer_offline();
$result = $query->fetch_all(MYSQLI_ASSOC);

?>

<div class="container-fluid">
  <?php
  if (isset($_GET['message'])) {
    if ($_GET['message'] == 'insertSuccessfully') {
      echo "<p class='alert alert-success'>Pesanan berhasil ditambahkan</p> <br>";
    }
  }
  ?>
  <h1 class="h3 mb-2 text-gray-800">Kasir</h1>
  <p class='text-gray-500'>Diperuntukan untuk pesan makanan yang secara offline</p>
  <div class="card shadow">
    <div class="card-header">
      <a href="insertPesananOffline.php" class="btn btn-primary float-right">Tambah Pesanan</a>
      <h5>Data Pesanan Secara Offline</h5>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Item</th>
              <th>Tanggal Waktu Pemesanan</th>
              <th>Status Pemesanan</th>
              <!-- <th>Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($result as $value) {
            ?>
              <tr>
                <td><?= $value['orderID'] ?></td>
                <td>
                  <?php
                  $menuArray = explode(', ', $value['menuNames']);
                  $quantityArray = explode(', ', $value['quantities']);
                  for ($i = 0; $i < count($menuArray); $i++) {
                    echo "<p> {$quantityArray[$i]}x {$menuArray[$i]}</p>";
                  }
                  ?>
                </td>
                <td><?=$value['orderDate']?></td>
                <td><?=$value['orderStatus']?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
include('layout/footer.php');
?>
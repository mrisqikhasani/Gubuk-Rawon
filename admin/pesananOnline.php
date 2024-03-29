<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

include("layout/navbar.php");

include("../koneksi.php");

$db = new database();

$query = $db->get_orders_by_customer_online();
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

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Pesanan Online</h1>
  <p class="text-gray-500">Diperuntukan untuk pesan makanan yang secara online</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="insertPemesanan.php" class="btn btn-primary float-right">Tambah Pesanan</a>
      <h5 class="m-0 font-weight-bold text-primary">Data Pesanan Online</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>User</th>
              <th>Item</th>
              <th>Status Pemesanan</th>
              <th>Status Payment</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $counter = 1;
            foreach ($result as $value) :
            ?>
              <tr>
                <td><?= $value['orderID'] ?></td>
                <td>
                  <p><?= $value['name'] ?></p>
                  <p><?= $value['email'] ?></p>
                  <p><?= $value['phoneNumber'] ?></p>
                </td>
                <td>
                  <?php
                  $menuArray = explode(', ', $value['menuNames']);
                  $quantityArray = explode(', ', $value['quantities']);
                  for ($i = 0; $i < count($menuArray); $i++) {
                    echo "<p> {$quantityArray[$i]}x {$menuArray[$i]}</p>";
                  }
                  ?>
                </td>
                <td>
                  <h5>
                    <?php
                    $orderStatus = $value['orderStatus'];
                    switch ($orderStatus) {
                      case 'Pending':
                        echo '<span class="badge badge-warning">' . $orderStatus . '</span>';
                        break;
                      case 'Proses':
                        echo '<span class="badge badge-info">' . $orderStatus . '</span>';
                        break;
                      case 'Selesai':
                        echo '<span class="badge badge-success">' . $orderStatus . '</span>';
                        break;
                      case 'Diantar':
                        echo '<span class="badge badge-primary">' . $orderStatus . '</span>';
                        break;
                      case 'Cancelled':
                        echo '<span class="badge badge-danger">' . $orderStatus . '</span>';
                        break;
                      default:
                        echo $orderStatus;
                    }
                    ?>
                  </h5>
                </td>
                <td>
                  <h5>
                    <?php
                    $paymentStatus = $value['paymentStatus'];

                    if ($paymentStatus == 'Pending') {
                      echo '<span class="badge badge-warning">' . $paymentStatus . '</span>';
                    } elseif ($paymentStatus == 'Paid') {
                      echo '<span class="badge badge-success">' . $paymentStatus . '</span>';
                    } elseif ($paymentStatus == 'Failed') {
                      echo '<span class="badge badge-danger">' . $paymentStatus . '</span>';
                    } else {
                      echo $paymentStatus;
                    }
                    ?>
                  </h5>
                </td>
                <td>
                  <?= $value['address'] ?>
                </td>
                <td>
                  <a href="#viewDetail<?= $counter ?>" class="btn btn-info" data-toggle="modal" data-target="#viewDetail<?= $counter ?>">
                    View
                  </a>
                  <a href="updatePemesanan.php?orderId=<?= $value['orderID'] ?>" class="btn btn-warning">
                    Edit
                  </a>
                </td>
              </tr>
              <?php @include('layout/modalDetail.php') ?>

            <?php
              $counter++;
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>

<?php
include("layout/footer.php");

?>
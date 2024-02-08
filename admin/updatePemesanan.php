<?php
@include('../koneksi.php');
include("layout/navbar.php");

$db = new database();

// Check if orderId is set
if (isset($_GET['orderId'])) {
  $orderId = $_GET['orderId'];
  $result = $db->get_orders_customer_by_id($orderId);
} else {
  header("location:index.php");
}

// var_dump($result);
// die;

?>

<!-- container -->
<div class="container-fluid">
  <a href="index.php" class="btn btn-primary btn-lg float-right">Kembali</a>
  <form action="request/updateOrder.php?orderId=<?= $orderId ?>" method="post" id="updateForm" onSubmit="return confirmUpdateForm()">
    <h1 class="h3 m-5 text-gray-800">Update</h1>
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
              <input type="text" class="form-control" name="name" value="<?= $result['name'] ?>" placeholder="name" readonly>
              <input type="hidden" class="form-control" name="customerID" value="<?= $result['customerID'] ?>" placeholder="name" readonly>
            </div>
            <div class="col-lg-8 m-2">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" name="phoneNumber" value="<?= $result['phoneNumber'] ?>" readonly>
            </div>
            <div class="col-lg-8 m-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?= $result['email'] ?>" readonly>
            </div>
            <div class="col-lg-8 m-2">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" value="<?= $result['address'] ?>" readonly>
            </div>
          </div>
        </div>

        <!-- Order Details -->
        <div class="align-item-center row pt-5">
          <div class="col-8">
            <h4 class="mb-1">Order Details</h4>
          </div>
        </div>

        <div class="container">
          <div class="col-lg-8 m-2">
            <label for="statusPemesanan">Status Pemesanan</label>
            <!-- <select name="statusPemesanan" id="selectStatusPemesanan<?= $orderId ?>" class="form-control mb-3">
            <option value="Pending">Pending</option>
              <option value="Proses">Proses</option>
              <option value="Selesai">Selesai</option>
              <option value="Diantar">Diantar</option>
              <option value="Cancelled">Cancelled</option>
            </select> -->

            <?php
              $statusPemesanan = $result['orderStatus']; 
              // Buat array berisi opsi status pemesanan
              $statusOptions = [
                "Pending" => "Pending",
                "Proses" => "Proses",
                "Selesai" => "Selesai",
                "Diantar" => "Diantar",
                "Cancelled" => "Cancelled"
              ];

            if ($result['paymentStatus'] == 'Paid') {
              // Buat tag select dan opsi status pemesanan
              echo '<select name="statusPemesanan" id="selectStatusPemesanan' . $orderId . '" class="form-control mb-3">';
              foreach ($statusOptions as $value => $label) {                
                // Tampilkan opsi
                $selected = ($value == $statusPemesanan) ? 'selected' : '';
                echo '<option value="' . $value . '" ' . $selected . ' ' . $disabled . '>' . $label . '</option>';
              }
              echo '</select>';
            } else {
              echo '<select name="statusPemesanan" id="selectStatusPemesanan' . $orderId . '" class="form-control mb-3">';
              foreach ($statusOptions as $value => $label) {
                // Tentukan apakah opsi harus dipilih (selected) atau dinonaktifkan (disabled)
                $selected = ($value == $statusPemesanan) ? 'selected' : '';
                $disabled = ($value != $statusPemesanan) ? 'disabled' : '';
                
                // Tampilkan opsi
                echo '<option value="' . $value . '" ' . $selected . ' ' . $disabled . '>' . $label . '</option>';
              }
              echo '</select>';
            }
            ?>
          </div>

          <div class="col-lg-8">
            <label for="listItem">List Items</label>
            <ul class="list-group">
              <?php
              $menuArray = explode(', ', $result['menuNames']);
              $menuIdArray = explode(',', $result['menuID']);
              $quantityArray = explode(', ', $result['quantities']);
              $priceArray = explode(', ', $result['prices']);
              $totalEdit = 0;

              for ($i = 0; $i < count($menuArray); $i++) :
                $subTotalItem = $quantityArray[$i] * $priceArray[$i];
                $totalEdit += $subTotalItem;

              ?>
                <li class="justify-content-between list-group-item" style="display:inline;" data-itemindex="<?= $i ?>">
                  <div class="items-orders">
                  </div>
                  <div class="row">
                    <div class="col-2 ">
                      <label for="quantity-items">Quantity</label>
                      <input type="number" class="form-control form-control-sm" name="quantity-items[]" value="<?= $quantityArray[$i] ?>" readonly>
                      <input type="hidden" class="form-control form-control-sm" name="items-id[]" value="<?= $menuIdArray[$i] ?>">
                    </div>
                    <div class="col-6">
                      <label for="menu">Menu</label><br>
                      <label for="menu"><?= $menuArray[$i] ?></label>
                      <input type="hidden" class="form-control" name="priceMenu[]" value="<?= $priceArray[$i] ?>">
                    </div>
                    <div class="col-2">
                      <label for="subtotal">Sub Total</label>
                      <input type="text" class="form-control" name="subtotal-items[]" value="<?= number_format($subTotalItem, 3, '.', ""); ?>" readonly>
                    </div>
                  </div>
                </li>
              <?php
              endfor;
              ?>
            </ul>
          </div>
          <div class="col-lg-8 mt-4">
            <p class="biaya">Biaya</p>
            <ul class="list-group container">
              <li class="justify-content-between list-group-item">
                <div class="row">
                  <div class="col-lg-9">
                    Total Harga
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="totalHargaEdit" style="float:right" value="<?= number_format($totalEdit, 3, '.', "") ?>" readonly>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-8 mt-4">
            <label for="paymentMethod">Payment Method</label>
            <br>
            <input type="radio" name="paymentMethod" value="COD" <?= ($result['paymentMethod'] == 'COD') ? 'checked' : '' ?>> COD <br>
            <input type="radio" name="paymentMethod" value="Bank Transfer" <?= ($result['paymentMethod'] == 'Bank Transfer') ? 'checked' : '' ?>> Bank Transfer <br>
          </div>
          <div class="col-lg-8 mt-4">
            <label for="statusPayment">Payment Status</label>

            <?php 

            $statusPayment = $result['paymentStatus'];

            $statusPaymentOptions = [
              "Pending" => "Pending",
              "Paid" => "Paid",
              "Failed" => "Failed"
            ];

            echo '<select class="form-control" name="statusPayment" id="selectStatusPayment" required>';

            foreach($statusPaymentOptions as $value => $label) {
              $selected = ($value == $statusPayment) ? 'selected' : '';
              // tampilkan option
              echo '<option value="'.$value.'" '.$selected.'>'.$label.'</option>';
            }

            echo "</select>";

            ?>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>

<?php
include("layout/footer.php");
?>
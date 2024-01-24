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

?>

<!-- container -->
<div class="container-fluid">
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
              <input type="text" class="form-control" name="name" value="<?= $result['name'] ?>" placeholder="name">
            </div>
            <div class="col-lg-8 m-2">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" name="phoneNumber" value="<?= $result['phoneNumber'] ?>">
            </div>
            <div class="col-lg-8 m-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?= $result['email'] ?>">
            </div>
            <div class="col-lg-8 m-2">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" value="<?= $result['address'] ?>">
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
            <select name="statusPemesanan" id="selectStatusPemesanan<?= $orderId ?>" class="form-control mb-3">
              <option value="Pending">Pending</option>
              <option value="Proses">Proses</option>
              <option value="Selesai">Selesai</option>
              <option value="Diantar">Diantar</option>
              <option value="Cancelled">Cancelled</option>
            </select>
          </div>

          <div class="col-lg-8">
            <label for="listItem">List Items</label>
            <ul class="list-group">
              <?php
              $menuArray = explode(', ', $result['menuNames']);
              $menuIdArray = explode(',', $result['menuID']);
              $quantityArray = explode(', ', $result['quantities']);
              $priceArray = explode(', ', $result['prices']);
              $subtotalEdit = 0;

              for ($i = 0; $i < count($menuArray); $i++) :
                $subTotalItem = $quantityArray[$i] * $priceArray[$i];
                $subtotalEdit += $subTotalItem;
              ?>
                <li class="justify-content-between list-group-item" style="display:inline;" data-itemindex="<?=$i?>">
                  <div class="items-orders">
                    <span class="quantity-order" id='<?=$menuIdArray[$i]?>'><?= $quantityArray[$i] ?></span>
                    <?= $menuArray[$i] ?>
                    <input type="hidden" name="menuId[]" value=<?=$menuIdArray[$i]?>>
                    <input type="hidden" name="menuArray[]" value="<?= $menuArray[$i] ?>">
                    <input type="hidden" name="quantity[]" id="quantity-order-hidden" value="<?=$quantityArray[$i]?>">
                    <input type="hidden" name="prices[]" value="<?= $priceArray[$i] ?>">
                    <button type="button" class="btn btn-light btn-sm m-1" style="float:right" onclick="removeItem(<?= $i ?>, <?=$menuIdArray[$i]?>)">X</button>
                    <button type="button" class="btn btn-light btn-sm m-1" style="float:right" onclick="changeQuantity(<?= $i ?>, 'decrease')">-</button>
                    <button type="button" class="btn btn-light btn-sm m-1" style="float:right" onclick="changeQuantity(<?= $i ?>, 'increase')">+</button>
                    <input type="hidden" name='itemRemove[]' class="itemRemove" value="">

                    <span class="badge badge-secondary badge-pill mr-4x"  style="float:right">
                      <?= $subTotalItem ?>
                    </span>
                    <input type="hidden" name="subtotal[]" value="<?=$subTotalItem?>">
                  </div>
                </li>

              <?php
              endfor;
              ?>
            </ul>
          </div>
          <div class="col-lg-8 mt-4">
            <p class="biaya">biaya</p>
            <ul class="list-group">
              <li class="justify-content-between list-group-item">
                Total
                <span style="float: right;">Rp <?= $subtotalEdit ?></span>
              </li>
            </ul>
          </div>
          <div class="col-lg-8 mt-4">
            <label for="paymentMethod">Payment Method</label>
            <select class="form-control" name="paymentMethod" id="selectPaymentMethod" required>
              <option value="notvalue" disabled selected>---</option>
              <option value="COD">COD</option>
              <option value="Bank Transfer">Bank Transfer</option>
            </select>
          </div>
          <div class="col-lg-8 mt-4">
            <label for="statusPayment">Payment Status</label>
            <select class="form-control" name="statusPayment" id="selectStatusPayment" required>
              <option value="notvalue" disabled selected>---</option>
              <option value="pending">Pending</option>
              <option value="failed">Failed</option>
              <option value="paid">Paid</option>
            </select>
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
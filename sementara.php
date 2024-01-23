<div class="card-body">
    <!-- modal edit body  -->
    <div class="pl-lg-4">
      <!-- customer modal  -->
      <div class="align-item-center row">
        <div class="col-8">
          <h5 class="mb-1">Customer</h5>
        </div>
        <div class="col-4">
          <a class="btn btn-primary mb-3" data-toggle="collapse" href="#collapseEditCustomer" role="button" aria-expanded="false" aria-controls="collapseEditCustomer">
            Show / Hide
          </a>
        </div>
      </div>
      <!-- collapse customer -->
      <div class="collapse" id="collapseEditCustomer">
        <div class="row">
          <div class="col-lg-4 m-2">
            <label for="" class="form-control-label">Name</label>
            <input type="text" class="form-control form-control-alternative" name="name" value="<?= $value['name'] ?>">
          </div>
          <div class="col-lg-4 m-2">
            <label for="" class="form-control-label">Phone</label>
            <input type="text" class="form-control form-control-alternative" name="phoneNumber" value="<?= $value['phoneNumber'] ?>">
          </div>
          <div class="col-lg-4 m-2">
            <label for="" class="form-control-label">Email</label>
            <input type="text" class="form-control form-control-alternative" name="email" value="<?= $value['email'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 m-2">
            <label for="" class="form-control-label">Alamat</label>
            <input id="edit-addressDetail" type="text" class="form-control-alternative form-control" name="address" value="<?= $value['address'] ?>">
          </div>
        </div>
      </div>
      <!-- Orders Details modal  -->
      <div class="align-item-center row">
        <div class="col-8">
          <h5 class="mb-1">Order Details</h5>
        </div>
        <div class="col-4">
          <a class="btn btn-primary mb-3" data-toggle="collapse" href="#collapseViewOrderDetails" role="button" aria-expanded="false" aria-controls="collapseViewOrderDetails">
            Show / Hide
          </a>
        </div>
      </div>
      <!-- collapse Orders Details -->
      <div class="collapse" id="collapseViewOrderDetails">
        <div class="row">
          <div class="col-lg-12">
            <label for="">Status Pemesanan</label>
            <div class="justify-content-between col-lg-12">
              <div class="input-group">
                <select name="statusPemesanan" id="selectStatusPemesanan<?= $counter ?>" class="form-control mb-3">
                  <option value="Pending">Pending</option>
                  <option value="Proses">Proses</option>
                  <option value="Selesai">Selesai</option>
                  <option value="Diantar">Diantar</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
                <button class="btn btn-primary ml-2" onclick="updateStatusPemesanan(<?= $counter ?>)">Assign</button>
              </div>
            </div>
            <label for="">Status Pemesanan : </label>
            <span class="badge badge-success" id="badgeStatusPemesanan<?= $counter ?>">
              <?= $value['orderStatus'] ?>
            </span>
          </div>
          <div class="col-lg-12 py-3">
            <label for="">Items</label>
            <ul class="list-group" id='edit-items-list-<?= $counter ?>'>
              <?php
              $menuArray = explode(', ', $value['menuNames']);
              $quantityArray = explode(', ', $value['quantities']);
              $priceArray = explode(', ', $value['prices']);
              $subtotalEdit = 0;

              for ($i = 0; $i < count($menuArray); $i++) :
                $subTotalItem = $quantityArray[$i] * $priceArray[$i];
                $subtotalEdit += $subTotalItem;

              ?>
                <li class="justify-content-between list-group-item list-order" data-itemindex="<?= $i ?>" data-price="<?= $priceArray[$i] ?>">
                  <p class="items-orders">
                    <span class="quantity-order"><?= $quantityArray[$i] ?></span>
                    <span class="itemsMenu-orders"> <?= $menuArray[$i] ?> </span>
                    Rp <span class="subTotalOrders"><?= $priceArray[$i] ?> </span>
                  <div class="actionEdit" style="float: right;">
                    <button onclick="changeQuantity(<?= $counter ?>, <?= $i ?>, 'increase')">+</button>
                    <button onclick="changeQuantity(<?= $counter ?>, <?= $i ?>, 'decrease')">-</button>
                    <button onclick="removeItem(<?= $counter ?>, <?= $i ?>)">X</button>
                  </div>
                  <span class="badge badge-secondary badge-pill" style="float:right">
                    <?= $subTotalItem ?>
                  </span>
                  </p>
                </li>
              <?php
              endfor;
              ?>
            </ul>
          </div>
          <div class="col-lg-12">
            <label for="">Harga</label>
            <ul class="list-group">
              <li class="justify-content-between list-group-item">
                Total
                <span id='total-price' style="float:right">
                  Rp <?= $subtotalEdit ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="col-lg-12 py-3">
            <label for="">Payment</label>
            <ul class="list-group">
              <li class="justify-content-between list-group-item">
                <div class="edit-paymentMethod">
                  <label for="">Payment Method</label>
                  <select name="selectPaymentMethod" id="selectPaymentMethod<?= $counter ?>" class='form-control'>
                    <option value="COD">COD</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                  </select>
                </div>
              </li>
              <li class="justify-content-between list-group-item">
                <div class="edit-statusPayment">
                  <label for="">Payment Status</label>
                  <select name="selectStatusPayment" id="selectStatusPayment<?= $counter ?>" class='form-control'>
                    <option value="failed">Failed</option>
                    <option value="pending">Pending</option>
                    <option value="paid">Paid</option>
                  </select>
                </div>
              </li>
            </ul>

            <p>Payment Method :
              <span class="badge badge-success" id="badgePaymentMethod<? $counter ?>">
                <?= $value['paymentMethod'] ?>
              </span>
            </p>

            <p>Status Payment :
              <span class="badge badge-success" id="badgePaymentStatus<? $counter ?>">
                <?= $value['paymentStatus'] ?>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
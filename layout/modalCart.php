<div class="modal fade" id="Cart" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Keranjang</h4>
      </div>
      <div class="modal-body">
        <form action="layout/checkOut.php" method="post">

          <table class="cart-show table table-bordered" width="100%">
            <thead>
              <th>Menu</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Sub Total</th>
              <th>Action</th>
            </thead>
            <tbody id="cart-items">
              <p>Tidak Ada Item Di Keranjang, tolong tambahkan item ke cart </p>

            </tbody>
          </table>
          <div id="cart-footer">
          </div>


          <div class="modal fade" id="cartSure" role="dialog">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Konfirmasi Pemesanan</h4>
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
    </div>
  </div>
</div>


<!-- <div class="buttonChart"> -->
<!-- <button type="button" class="btn btn-danger btn-lg" id="buttonCart" data-toggle="modal" data-target="#Cart" style=" position: fixed; bottom: 20px; right: 20px; display: block;">
    Cart
  </button> -->
<!-- </div> -->
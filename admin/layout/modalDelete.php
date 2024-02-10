<?php
// 
?>

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah ada yakin ingin menghapus?</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
        <a href="request/deleteOrder.php?orderId=<?= $value['orderID'] ?>&customerId=<?= $value['customerID'] ?>" type="button" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
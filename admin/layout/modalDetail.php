 <!-- Modal Detail Order -->
 <!-- modal view  -->
 <div class="modal fade " id="viewDetail<?= $counter ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelDetail" aria-hidden="true">
     <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalLabelDetail">Detail Order for OR <?= $value['orderID'] ?> </h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>

             <div class="card-body">
                 <!-- modal view body  -->
                 <div class="pl-lg-4">
                     <!-- customer modal  -->
                     <div class="align-item-center row">
                         <div class="col-8">
                             <h5 class="mb-1">Customer</h5>
                         </div>
                         <div class="col-4">
                             <a class="btn btn-primary mb-3" data-toggle="collapse" href="#collapseViewCustomer" role="button" aria-expanded="false" aria-controls="collapseViewCustomer">
                                 Show / Hide
                             </a>
                         </div>
                     </div>
                     <!-- collapse customer -->
                     <div class="collapse" id="collapseViewCustomer">
                         <div class="row">
                             <div class="col-lg-4 m-2">
                                 <label for="" class="form-control-label"></label>
                                 <input type="text" class="form-control form-control-alternative" value="<?= $value['name'] ?>" disabled>
                             </div>
                             <div class="col-lg-4 m-2">
                                 <label for="" class="form-control-label">Phone</label>
                                 <input type="text" class="form-control form-control-alternative" value="<?= $value['phoneNumber'] ?>" disabled>
                             </div>
                             <div class="col-lg-4 m-2">
                                 <label for="" class="form-control-label">Email</label>
                                 <input type="text" class="form-control form-control-alternative" value="<?= $value['email'] ?>" disabled>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-12 m-2">
                                 <label for="" class="form-control-label">Alamat</label>
                                 <input id="input-address" disabled="" type="text" class="form-control-alternative form-control" value="<?= $value['address'] ?>">
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
                             <h3>Status Order: <?= $value['orderStatus'] ?></h3>
                             <div class="col-lg-12">
                                 <label for="">Items</label>
                                 <ul class="list-group">
                                     <?php
                                        $menuArray = explode(', ', $value['menuNames']);
                                        $quantityArray = explode(', ', $value['quantities']);
                                        $priceArray = explode(', ', $value['prices']);
                                        $subtotal = 0;

                                        for ($i = 0; $i < count($menuArray); $i++) {
                                            $subTotalItem = $quantityArray[$i] * $priceArray[$i];
                                            $subtotal += $subTotalItem;
                                            echo "<li class='justify-content-between list-group-item'>
                                                <p> 
                                                    {$quantityArray[$i]}x {$menuArray[$i]}
                                                    {$priceArray[$i]}
                                                    <span style='float:right'>
                                                    Sub Total :
                                                    {$subTotalItem}
                                                    </span>
                                                </p>
                                                </li>";
                                        }
                                        ?>
                                 </ul>
                             </div>
                             <div class="col-lg-12">
                                 <label for="">Harga</label>
                                 <ul class="list-group">
                                     <li class="justify-content-between list-group-item">
                                         Total
                                         <span style="float:right">
                                             Rp <?= $subtotal ?>
                                         </span>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-lg-12">
                                 <label for="">Payment</label>
                                 <ul class="list-group">
                                     <li class="justify-content-between list-group-item">
                                         Payment Method
                                         <span class="badge badge-info" style="font-size: 15px; float:right;">
                                             <?= $value['paymentMethod'] ?>
                                         </span>
                                     </li>
                                     <li class="justify-content-between list-group-item">
                                         Status Payment
                                         <span class="badge badge-success" style="font-size: 15px; background-color: green; float: right;">
                                             <?= $value['paymentStatus'] ?>
                                         </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
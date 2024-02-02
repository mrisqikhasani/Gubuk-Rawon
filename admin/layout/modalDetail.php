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
							<h4>
								<?php
								$orderStatus = $value['orderStatus'];
								switch ($orderStatus) {
									case 'Pending':
										echo 'Status Order : <span class="badge badge-warning">' . $orderStatus . '</span>';
										break;
									case 'Proses':
										echo 'Status Order : <span class="badge badge-info">' . $orderStatus . '</span>';
										break;
									case 'Selesai':
										echo 'Status Order : <span class="badge badge-success">' . $orderStatus . '</span>';
										break;
									case 'Diantar':
										echo 'Status Order : <span class="badge badge-primary">' . $orderStatus . '</span>';
										break;
									case 'Cancelled':
										echo 'Status Order : <span class="badge badge-danger">' . $orderStatus . '</span>';
										break;
									default:
										echo $orderStatus;
								}
								?>
							</h4>
							<div class="col-lg-12">
								<br>
								<p>Order Date: <?= $value['orderDate'] ?></p>
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
                                                    ".number_format($priceArray[$i], 3, '.',"")."
                                                    <span style='float:right'>
                                                    Sub Total :
                                                    ".number_format($subTotalItem, 3, '.', "")
                                                    ."</span>
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
											Rp <?= number_format($subtotal, 3, '.', "") ?>
										</span>
									</li>
								</ul>
							</div>
							<div class="col-lg-12">
								<label for="">Payment</label>
								<ul class="list-group">
									<li class="justify-content-between list-group-item">
										Payment Method
										<?php 
											$paymentMethod = $value['paymentMethod'];

											if($paymentMethod == 'COD') {
												echo '<span class="badge badge-info" style="float: right;">' . $paymentMethod . '</span>';
											} elseif($paymentMethod == 'Bank Transfer'){
											echo '<span class="badge badge-secondary" style="float: right;">' . $paymentMethod . '</span>';
											} else {
												echo $paymentMethod;
											}
										?>
									</li>
									<li class="justify-content-between list-group-item">
										Status Payment

										<?php
										$paymentStatus = $value['paymentStatus'];

										if ($paymentStatus == 'Pending') {
											echo '<span class="badge badge-warning" style="float: right;">' . $paymentStatus . '</span>';
										} elseif ($paymentStatus == 'Paid') {
											echo '<span class="badge badge-success" style="float: right;">' . $paymentStatus . '</span>';
										} elseif ($paymentStatus == 'Failed') {
											echo '<span class="badge badge-danger" style="float: right;">' . $paymentStatus . '</span>';
										} else {
											echo $paymentStatus;
										}
										?>

										<!-- <span class="badge badge-success" style="font-size: 15px; background-color: green; float: right;">
											<?= $value['paymentStatus'] ?>
										</span> -->
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
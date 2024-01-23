<?php
@include("layout/navbar.php");

@include("../koneksi.php");

$db = new database();

$query = $db->get_orders_by_customer();
$result = $query->fetch_all(MYSQLI_ASSOC);



?>

<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Orderan</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Order</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Order ID</th>
							<th>User</th>
							<th>Item</th>
							<th>Payment</th>
							<th>Status</th>
							<th>Datetime</th>
							<th>Alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 1;
						foreach ($result as $value) : ?>
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
									<?= $value['paymentStatus'] ?>
								</td>
								<td><?= $value['orderStatus'] ?></td>
								<td>
									<?= $value['orderDate'] ?>
								</td>
								<td>
									<?= $value['address'] ?>
								</td>
								<td>
									<a href="#viewDetail<?= $counter ?>" class="btn btn-info" data-toggle="modal" data-target="#viewDetail<?= $counter ?>">
										View
									</a>
									<a href="updatePemesanan.php?orderId=<?= $counter ?>" class="btn btn-warning">
										Edit
									</a>
									<a href="" class="btn btn-danger">
										Delete
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
@include('layout/footer.php');

?>
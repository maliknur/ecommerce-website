<!DOCTYPE html>
<html lang="en">
<head>
<?php include("partials/header.php"); ?>
<link rel="stylesheet" href="assets/style.css">
	<title></title>

</head>
<body>
	<?php include("partials/navbar.php"); ?>

	<div class="container">
		<div class="section"></div>
		<div class="row">
			<div class="col s12 m7 l7">
				<div class="card-panel red lighten-2">
					<h5 class="white-text">Shipping Information</h5>

					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input id="first_name" type="text" class="validate">
									<label for="first_name">First Name</label>
								</div>
								<div class="input-field col s6">
									<input id="last_name" type="text" class="validate">
									<label for="last_name">Last Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="address" type="text" class="validate">
									<label for="address">Address</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input id="city" type="text" class="validate">
									<label for="city">City</label>
								</div>
								<div class="input-field col s3">
									<input id="state" type="text" class="validate">
									<label for="state">State</label>
								</div>
								<div class="input-field col s3">
									<input id="zipcode" type="text" class="validate">
									<label for="zipcode">Zipcode</label>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
			<div class="col s12 m5 l5">
				<div class="card-panel red lighten-2">

				<table class="hoverable responsive-table striped bordered">
					<h5 class="white-text">Order Summary</h5>
					<thead>
						<tr>
							<th data-field="item">Item</th>
							<th data-field="price">Price</th>
							<th data-field="quantity">Quantity</th>
							<th data-field="total">Total</th>
						</tr>
					</thead>
					<tbody>			
						<tr>
							<td>T-shirt</td>
							<td>$20.00</td>
							<td>2</td>
							<td>$40.00</td>
						</tr>
						<tr>
							<td>Sweater</td>
							<td>$60.00</td>
							<td>3</td>
							<td>$180.00</td>
						</tr>
					</tbody>
				</table>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
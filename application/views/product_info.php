<html>
<head>
	<title>Catalog Page</title>
	<?php include("partials/header.php"); ?>
	<link rel="stylesheet" type="text/css" href="/assets/product_info.css">
	<script type="text/javascript">
		$(document).ready(function(){
				  
		   $('.dropdown-button').dropdown({
		      inDuration: 300,
		      outDuration: 225,
		      constrain_width: false, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on hover
		      gutter: 0, // Spacing from edge
		      belowOrigin: false // Displays dropdown below the button
		    });

		   $('select').material_select();

		});
	</script>
</head>
<body>

<?php include("partials/navbar.php");?>

	<div class="container">

		<div class="card-panel">
			<div class="row">
				<div class="col s12 m5 l5">
					<div class="row no_margin">
						<div class="col s12 m12 l12">
							<div class="card like_icons">
								<h5 class="center">
									<i class="material-icons">bookmark_border</i>
									<i class="material-icons">favorite_border</i>
									<i class="material-icons">star_outline</i>
								</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s8 m8 l8">
							<div class="card">
								<div class="card-image">
									<img src=<?= '"'.$filename.'"';?>>
								</div>
							</div>
						</div>
						<div class="col s4 m4 l4">
							<div class="card">
								<div class="card-image">
									<a href=""><img src=<?= '"'.$filename.'"';?>></a>
								</div>
							</div>
							<div class="card">
								<div class="card-image">
									<a href=""><img src=<?= '"'.$filename.'"';?>></a>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="card-panel"></div> -->
				</div>
				<div class="col s12 m7 l7">

					<div class="row">
						<div class="card">
							<div class="col s12 m12 l12 lightblue">
								<div class="card">
									<div class="card-content">
										<h5><?= $name ?></h5>
										<p id="price">$<?= $price ?></p>
										<div class="row">
											<form action="/catalogs/add_to_cart" method="post">
												<input type="hidden" name="id" value="<?= $id ?>">
												<input type="hidden" name="price" value="<?= $price ?>">
												<div class="input-field col s3 m3 l3">
													<select name="quantity" class="browser-default">
														<option disabled selected>Quantity</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
												</div>
										</div>
										<ul>
											<li><i class="material-icons description">blur_circular</i>  Handmade</li>
											<li><i class="material-icons description">blur_circular</i>  Materials: cotton, ink, shirt</li>
											<li><i class="material-icons description">blur_circular</i>  Ships worldwide</li>
										</ul>
									</div>
									<button class="btn col s12 m12 l12 waves-effect waves-light" type="submit">Add to Cart <i class="material-icons valignbottom">send</i></button>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>

		<!-- <div class="row"> -->
			<!-- <div class="col l12 back"><a href="/">Go Back</a></div> -->
		<!-- </div> -->

		<div class="card-panel">
			<div class="row">
				<div class="col l12 product_info">
					<div class="row">
						<div class="col l12">
							<h3><?php echo $name;?></h3>
						</div>
					</div>
					<div class="row center-align">
						<div class="col l4 product_images">
							<a href=""><img src=<?php echo '"'.$filename.'"';?> width="230px"></a>
							<div class="section"></div>
							<div class="row">
								<div class="col l12">
									<a href=""><img src=<?php echo '"'.$filename.'"';?> width="50px"></a>
									<a href=""><img src=<?php echo '"'.$filename.'"';?> width="50px"></a>
									<a href=""><img src=<?php echo '"'.$filename.'"';?> width="50px"></a>
									<a href=""><img src=<?php echo '"'.$filename.'"';?> width="50px"></a>
								</div>
							</div>
						</div>
						<div class="col l7 product_description left-align">
							<p><?php echo $description;?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="card-panel">
			<div class="row">
				<div class="col l12">
					<h5>Similiar products</h5>
				</div>
			</div>
			<div class="section"></div>
			<div class="row similiar_products center-align">
				<div class="col l12">
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
					<a href=""><img src=<?php echo '"'.$filename.'"';?> width="100px"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
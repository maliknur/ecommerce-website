<html>
<head>
	<meta charset="UTF-8">
	<title>Catalog Page</title>
	<link rel="stylesheet" type="text/css" href="assets/catalog.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/assets/materialize-v0.97.0/materialize/css/materialize.min.css"  media="screen,projection"/>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/assets/materialize-v0.97.0/materialize/js/materialize.min.js"></script>
	<style type="text/css">
		*{
			/*outline: 1px solid black;*/
			/*color: white;*/
		}
		.similiar_products a{
			margin: 0px 20px;
		}
		.product_info, .card-panel{
			background-color: #D0E4F2
		}
		.back{
			vertical-align: bottom;
		}
	</style>
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

		});
	</script>
</head>
<body>

<?php include("partials/navbar.php");?>

	<div class="container">
		<div class="row">
			<div class="col l12 back"><a href="/">Go Back</a></div>
		</div>
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
							<a href=""	><img src=<?php echo '"'.$filename.'"';?> width="230px"></a>
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
					<div class="row price_buy">
						<div class="input-field col l11">
							<form action="/">
								<a class="waves-effect waves-light btn right"><i class="material-icons right"></i>Buy</a>
								<!-- Dropdown Trigger -->
								<a class='dropdown-button btn right' name="price" href='#' data-activates='dropdown1'>Price</a>
								<!-- Dropdown Structure -->
								<ul id='dropdown1' name="price" class='dropdown-content'>
									<li><a href="#!">1 ($<?php echo $price;?>)</a></li>
								</ul>
							</form>
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
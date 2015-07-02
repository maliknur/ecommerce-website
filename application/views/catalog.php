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
	<script type="text/javascript">
		$(document).ready(function(){
				 
		   //auto-load
		   $.get("/catalogs/catalog_page", function(res){
		   		$("#catalog").html(res);
		   });

		   //ajax 

		});
	</script>
</head>
<body>

<?php include("partials/navbar.php");?>

	<div class="container">
<!-- 		<div id="header"></div> -->
		<div class="row">
			<div class="section"></div>
			<div id="sidebar" class="col s12 m4 l2">
				<div class="card-panel categories">
					<div class="row">
						<div class="col s12">
							<h5>Category</h5>
						</div>
						<div class="col s10 offset-s1">
							<ul>
								<li><a href="">Tshirts(23)</a></li>
								<li><a href="">shorts(15)</a></li>
								<li><a href="">shoes(25)</a></li>
								<li><a href="">hats(8)</a></li>
								<li><a href="">pants(11)</a></li>
								<li><a href="">Show All</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-panel refined-sorts">
					<div class="row">
						<div class="col s12">
							<h6>Refine Search</h6>
						</div>
						<div class="col s10 offset-s1">
							<ul>
								<li><a href="">Prices</a></li>
								<li><a href="">Colors</a></li>
								<li><a href="">Sizes</a></li>
								<li><a href="">Brands</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="catalog" class="col s12 m8 l10">
				<!-- "partials/catalog_products.php" -->
			</div>
		</div>
	</div>
</body>
</html>
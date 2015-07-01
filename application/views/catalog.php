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
				  
		   $('.dropdown-button').dropdown({
		      inDuration: 300,
		      outDuration: 225,
		      constrain_width: true, // Does not change width of dropdown to that of the activator
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
<!-- 		<div id="header"></div> -->
		<div class="row">
			<div id="sidebar" class="col s12 m4 l2">
				<div class="card-panel red lighten-2">
					<div class="row">
						<div class="input-field col s10">
							<form action='/main/product_info'>
								<i class="small material-icons prefix">search</i>
								<input placeholder='Search' id="search" name ="search" type="text" class="validate">
								<label for="search"></label>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<h4>Category</h4>
						</div>
						<div class="col s10 offset-s2">
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
			</div>
			<div id="catalog" class="col s12 m8 l10">
				<div class="card-panel red lighten-2">
					<div class="row">
						<div class="col s6">
							<h3>Tshirts (page2)</h3>
						</div>
						<div class="col s5 pages">
							<ul class="right">
								<li><a href="">first</a></li>
								<li><a href="">prev</a></li>
								<li>2</li>
								<li><a href="">next</a></li>
							</ul>
						</div>
						<div class="col s5">
							<!-- Dropdown Trigger -->
							<a class='dropdown-button btn right' href='#' data-activates='dropdown1'>Filter</a>
							<!-- Dropdown Structure -->
							<ul id='dropdown1' class='dropdown-content'>
							<li><a href="#!">Price</a></li>
							<li><a href="#!">Most Popular</a></li>
							</ul>
							<span class="filter-text right">Sorted by</span>
						</div>
					</div>
					<div class="row">
						<div class="col s12	center-align">
							<div class="products">
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
								<a href="/main/product_info"><img src="assets/dress-shirt.png" width="150px"></a>
							</div>
						</div>
					</div>
					<div class="section"></div>
					<div class="row">
						<div class="col s12 offset-l3">
						  <ul class="pagination">
						    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
						    <li class="waves-effect"><a href="#!">1</a></li>
						    <li class="active"><a href="#!">2</a></li>
						    <li class="waves-effect"><a href="#!">3</a></li>
						    <li class="waves-effect"><a href="#!">4</a></li>
						    <li class="waves-effect"><a href="#!">5</a></li>
						    <li class="waves-effect"><a href="#!">6</a></li>
						    <li class="waves-effect"><a href="#!">7</a></li>
						    <li class="waves-effect"><a href="#!">8</a></li>
						    <li class="waves-effect"><a href="#!">9</a></li>
						    <li class="waves-effect"><a href="#!">10</a></li>
						    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
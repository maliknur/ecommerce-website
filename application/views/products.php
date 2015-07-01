<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('partials/header.php'); ?>
	<link type="text/css" rel="stylesheet" href="assets/style_dashboard.css">
	<title>Dashboard Products</title>
</head>
<body>

<?php include('partials/navbar.php'); ?>

	<div class="container"> 	
		
		<div class="row">
		  
		   <!-- search button --> 
		   <div class="col s6">	
			    <form class="col s12" action="orders/search" method="post">
			     
			        <div class="input-field col s8 red-text darken-4">
						<!-- <i class="material-icons"></i> -->
						<i class="material-icons prefix">search</i> 
			          <input id="icon_prefix" type="text" class="validate">
			          <label for="icon_prefix">Search</label>
			        </div>
			    
			    </form>
		    </div>

		    <!-- Sort button --> 
		   <div class="col s6">	
			   
			     	<div class="input-field col s6 right">
						<a class="waves-effect waves-light btn blue darken-2"><i class="material-icons left">add_circle_outline</i>Add product</a>
			        </div>
			   
		    </div>

		  </div>

		  		

	<!-- producs list table -->
	
	<div class="row">
		

			<table class="responsive-table bordered striped">
			<tr>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th colspan="2">Action</th>

			
			</tr>
			

				<tr>
					<td><img src="assets/img/tshirt1.png" alt=""></td>
					<td>1</td>
					<td>T-Shirt</td>
					<td>123</td>
					<td>500</td>
					<td>
						<a href="#">
							<i class="material-icons left">edit</i>
						</a>
						
					</td>
					<td>
						<a href="#">
							<i class="material-icons left">delete</i>
						</a>

					</td>
					
					
				</tr>

				<tr>
					<td><img src="assets/img/tshirt1.png" alt=""></td>
					<td>1</td>
					<td>T-Shirt</td>
					<td>123</td>
					<td>500</td>
					<td>
						<a href="#">
							<i class="material-icons left">edit</i>
						</a>
						
					</td>
					<td>
						<a href="#">
							<i class="material-icons left">delete</i>
						</a>

					</td>
					
					
				</tr>
				<tr>
					<td><img src="assets/img/tshirt1.png" alt=""></td>
					<td>1</td>
					<td>T-Shirt</td>
					<td>123</td>
					<td>500</td>
					<td>
						<a href="#">
							<i class="material-icons left">edit</i>
						</a>
						
					</td>
					<td>
						<a href="#">
							<i class="material-icons left">delete</i>
						</a>

					</td>
					
					
				</tr>
				<tr>
					<td><img src="assets/img/tshirt1.png" alt=""></td>
					<td>1</td>
					<td>T-Shirt</td>
					<td>123</td>
					<td>500</td>
					<td>
						<a href="#">
							<i class="material-icons left">edit</i>
						</a>
						
					</td>
					<td>
						<a href="#">
							<i class="material-icons left">delete</i>
						</a>

					</td>
					
					
				</tr>
				
			
			</table>
	
			
	</div>

	<div class="row ">
		<div class="col s6 offset-s4">
			
			<ul class="pagination">
			    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			    <li class="active"><a href="#!">1</a></li>
			    <li class="waves-effect"><a href="#!">2</a></li>
			    <li class="waves-effect"><a href="#!">3</a></li>
			    <li class="waves-effect"><a href="#!">4</a></li>
			    <li class="waves-effect"><a href="#!">5</a></li>
			    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		  </ul>
		
		</div>	
	

	</div>
</div><!--  end of container -->
	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('partials/header.php'); ?>
	<script src="/assets/javascript.js"></script>
	<link type="text/css" rel="stylesheet" href="/assets/style_dashboard.css">
	<title>Dashboard Orders</title>
</head>
<body>

<?php include('partials/navbar.php'); ?>


	<div class="container"> 	
		
		<div class="row">
		  
		   <!-- search button --> 
		   <div class="col s6">	
			    <form class="col s12" action="orders/search" method="post">
			     
			        <div class="input-field col s6 red-text darken-4">
						<!-- <i class="material-icons"></i> -->
						<i class="material-icons prefix">search</i> 
			          <input id="icon_prefix" type="text" class="validate">
			          <label for="icon_prefix">Search</label>
			        </div>
			    
			    </form>
		    </div>

		    <!-- Sort button --> 
		   <div class="col s6">	
			    <form class="col s12" action="orders/sort" method="post">
			     	<div class="input-field col s6 right blue-text darken-2">
						<select name="" id="" class="right-align">
							<option value="Show All">SHOW ALL STATUS</option>
							<option value="In process">In process</option>
							<option value="Shipped">Shipped</option>
							<option value="Cancelled">Cancelled</option>
						</select>
			        </div>
			    </form>
		    </div>

		  </div>

		  		

	<!-- orders list table -->

	<div class="row">
		<table class="responsive-table bordered striped">
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>Billing Address</th>
				<th>Total</th>
				<th>Status</th>

			
			</tr>
			

	<!-- display of all orders -->
	<?php 
	if(!empty($orders))
	{

	foreach ($orders as $value) {
	 	
		

	 ?>
		<tr>
			<td><?= $value['id'] ?></td>
			<td><?= $value['first_name'] ." ". $value['last_name'] ?></td>
			<td><?= $value['created_at'] ?></td>
			<td><?= $value['address'] . " ". $value['city'] ." ". $value['state']." ".$value['zipcode']  ?></td>
			<td><?= $value['total'] ?></td>
			<td> 
				<select>



					<?php switch ($value['status'] ) { 
				    case 'in process': 
				    	 echo "<option value=". $value['status']. " selected >". $value['status']. "</option>";
				    	 echo "<option value='shipped'>shipped</option>";
				    	 echo "<option value='cancelled'>cancelled</option>";
				    break; 

				    case 'shipped': 
				    	 echo "<option value=". $value['status']. " selected >". $value['status']. "</option>";
				    	 echo "<option value='in process'>in process</option>";
				    	 echo "<option value='cancelled'>cancelled</option>";
				    break;

				    case 'cancelled': 
				    	 echo "<option value=". $value['status']. " selected >". $value['status']. "</option>";
				    	 echo "<option value='in process'>in process</option>";
				    	 echo "<option value='shipped'>shipped</option>";
				    break; 
					}
					?>



			    </select>

			</td>
			
		</tr>

		
				
	<?php 		}

			  

		} 
	else { ?>

		<tr><td colspan='6'><p>No orders found...</p></td></tr>";

	<?php }
	?>

			
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
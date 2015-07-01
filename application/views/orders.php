<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('partials/header.php'); ?>
	<title>Dashboard Orders</title>
</head>
<body>
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
			

				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
					<td>123 dojo way Bellevue WA 98005</td>
					<td>$ 124.99</td>
					<td> 
						<select>
					      <option value="in_process">In process</option>
					      <option value="shipped">Shipped</option>
					      <option value="cancelled">Cancelled</option>
					    </select>

					</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
					<td>123 dojo way Bellevue WA 98005</td>
					<td>$ 124.99</td>
					<td> 
						<select>
					      <option value="in_process">In process</option>
					      <option value="shipped">Shipped</option>
					      <option value="cancelled">Cancelled</option>
					    </select>

					</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
					<td>123 dojo way Bellevue WA 98005</td>
					<td>$ 124.99</td>
					<td> 
						<select>
					      <option value="in_process">In process</option>
					      <option value="shipped">Shipped</option>
					      <option value="cancelled">Cancelled</option>
					    </select>

					</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
					<td>123 dojo way Bellevue WA 98005</td>
					<td>$ 124.99</td>
					<td> 
						<select>
					      <option value="in_process">In process</option>
					      <option value="shipped">Shipped</option>
					      <option value="cancelled">Cancelled</option>
					    </select>

					</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
					<td>123 dojo way Bellevue WA 98005</td>
					<td>$ 124.99</td>
					<td> 
						<select>
					      <option value="in_process">In process</option>
					      <option value="shipped">Shipped</option>
					      <option value="cancelled">Cancelled</option>
					    </select>

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
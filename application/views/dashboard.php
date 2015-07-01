<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('partials/header.php'); ?>
	<title>Dashboard</title>
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

		  </div>

		  		


	<div class="row">
		



		<!-- new orders table -->
		<div class="col s6">
			<div class="card-panel">
				<h5 class="blue-text darken-2">New orders</h5>
			
			
				<table class="responsive-table bordered striped">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Date</th>
						<th>Total</th>
						<th>Status</th>

					
					</tr>
					

				<tr>
					<td>1</td>
					<td>Steve Jobs</td>
					<td>9/6/2014</td>
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

			<span class="right">
				<a href="" > see all..</a>
			</span>
				



			</div>
		</div>

		<!-- shipping table -->
		<div class="col s6">
			<div class="card-panel">
				<h5 class="blue-text darken-2">Due to shipping</h5>

				<table class="responsive-table bordered striped">
					<tr>
						<th>ID</th>
						<th>Ordered</th>
						<th>Delivery</th>
						<th>Days left</th>
						<th>Status</th>

					
					</tr>
					<tr>
						<td>1</td>
						<td>9/6/2014</td>
						<td>9/7/2014</td>
						<td>1 day left</td>
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
						<td>9/6/2014</td>
						<td>9/7/2014</td>
						<td>1 day left</td>
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
						<td>9/6/2014</td>
						<td>9/7/2014</td>
						<td>1 day left</td>
						<td>
							<select>
						      <option value="in_process">In process</option>
						      <option value="shipped">Shipped</option>
						      <option value="cancelled">Cancelled</option>
						    </select>
					    </td>
					</tr>

				</table>
				

			<span class="right">
				<a href="" > see all..</a>
			</span>


			</div>
		</div>

	<div class="row">
		

		<!-- inventory table -->
		<div class="col s6">
			<div class="card-panel">
				<h5 class="blue-text darken-2">Invetory status</h5>
			
			
				<table class="responsive-table bordered striped">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Inventory</th>
						<th>Supplier</th>
					
					</tr>

					<tr>
						<td>1</td>
						<td>T-shirt</td>
						<td>0</td>
						<td>Armani</td>
					</tr>
					<tr>
						<td>1</td>
						<td>T-shirt</td>
						<td>2</td>
						<td>Guess</td>
					</tr>
					<tr>
						<td>1</td>
						<td>T-shirt</td>
						<td>10</td>
						<td>Polo</td>
					</tr>
					<tr>
						<td>1</td>
						<td>T-shirt</td>
						<td>10</td>
						<td>Polo</td>
					</tr>
					<tr>
						<td>1</td>
						<td>T-shirt</td>
						<td>10</td>
						<td>Polo</td>
					</tr>
				</table>

			<span class="right">
				<a href="" > see all..</a>
			</span>
				



			</div>
		</div>

		<!-- statistics table -->
		<div class="col s6">
			<div class="card-panel statistics">
				<h5 class="blue-text darken-2">Statistic</h5>
				
				<div class="chart">
				   <div class="percentage" data-percent="55"><span>55</span>%</div>
				    <div class="label">New orders</div>
				</div>

				<div class="chart">
				   <div class="percentage" data-percent="68"><span>68</span>%</div>
				    <div class="label">Sales</div>
				</div>

				<div class="chart">
				   <div class="percentage" data-percent="18"><span>18</span>%</div>
				    <div class="label">New customers</div>
				</div>

				  


			</div>
		</div>	

			
</div>





	
</div><!--  end of container -->
	
</body>
</html>
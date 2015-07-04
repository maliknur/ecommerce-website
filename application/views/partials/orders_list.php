<script>
	// $('select').material_select();
	
</script>

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
			<td style="text-align:center;"><?= $value['id'] ?></td>
			<td><?= $value['first_name'] ." ". $value['last_name'] ?></td>
			<td><?= $value['created_at'] ?></td>
			<td><?= $value['address'] . " ". $value['city'] ." ". $value['state']." ".$value['zipcode']  ?></td>
			<td><?= $value['total'] ?></td>
			<td> 

			<form action="" class="order_status">
				<input name="order_id" type="hidden" value="<?= $value['id']?>">
				<select name="order_status" class="browser-default" >



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
		    </form>

			</td>
			
		</tr>

		
				
	<?php 		}

			  

		} 
	else { ?>

		<tr><td colspan='6'><p>No orders found...</p></td></tr>";

	<?php }
	?>

			
			</table>
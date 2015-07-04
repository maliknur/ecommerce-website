<!DOCTYPE html>
<html lang="en">
<head>
<!-- <script src="/assets/javascript.js"></script> -->
	<?php include('partials/header.php'); ?>
	
	<link type="text/css" rel="stylesheet" href="/assets/style_dashboard.css">
	<link rel="stylesheet" href="/assets/style.css">
	<script>
	$(document).ready(function(){
		
		//load orders list at initial load
       $.get('/dashboards/orders_sort', function(res) {
         
          $('#order_list').html(res);
              
        });
        		
      

		
		// all orders status sort function 
		$(document).on('change', '#orders_sort', function(){
         		

        		 $.post('/dashboards/orders_sort', $(this).serialize(), function(res) {
			        
					
				     $('#order_list').html(res);
				    
				
			          });
					
					          
			          return false;
			 });

		// single order status change function 
		$(document).on('change', '.order_status', function(){
			
				// var id = $(this).children('input:first').val();
				// console.log(id); 

			$.post('orders_status_update', $(this).serialize(), function(res) {});

			Materialize.toast('Order status updated', 1000);
				
		     return false;
			 });


		//search orders by name function 
		$(document).on('keyup', '#icon_prefix', function(){
			
			
		
			$.post('search_by_name', $(this).serialize(), function(res) {

			$('#order_list').html(res);
				  
				});
		     

		     return false;
			 });


	});

	</script>

	<title>Dashboard Orders</title>


</head>
<body>

<?php include('partials/navbar_admin.php'); ?>


	<div class="container"> 	
		
		<div class="row">
		  
		   <!-- search button --> 
		   <div class="col s6">	
			    <form class="col s12" action="#" class="search_by_name">
			     
			        <div class="input-field col s6 pink-text darken-4">
						<i class="material-icons prefix">search</i> 
			          <input id="icon_prefix" type="text" name="search_by_name" class="validate">
			          <label for="icon_prefix">Search by name</label>
			        </div>
			    
			    </form>
					
		    </div>

		    <!-- Sort button --> 
		   <div class="col s6">	
			    <form class="col s12" action="#">
			     	<div class="input-field col s6 right pink-text darken-4">
						<select name="orders_sort" id="orders_sort" class="browser-default right-align">
							<option value="all">Show all</option>
							<option value="in process">Show in process</option>
							<option value="shipped">Show shipped</option>
							<option value="cancelled">Show cancelled</option>
						</select>
			        </div>
			    </form>
		    </div>
		</div>


		  		

	<!-- orders list table -->

	<div class="row" id="order_list">
		
	
			
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
<!-- catalog -->
<div class"section"></div>
<div class="card-panel">
	<div class="row">
		<div class="col s12 m6">
			<h3>Tshirts (page2)</h3>
		</div>

		<!-- Top page turner
		<div class="col s5 pages">
			<ul class="right">
				<li><a href="">first</a></li>
				<li><a href="">prev</a></li>
				<li>2</li>
				<li><a href="">next</a></li>
			</ul>
		</div> -->

		<div class="section"></div>
		<div class="col s12 m5">
			<!-- Dropdown Trigger -->
			<a class='dropdown-button btn right' href='#' data-activates='dropdown1'>Filter</a>
			<!-- Dropdown Structure -->
			<ul id='dropdown1' class='dropdown-content'>
			<li><a href="#!">Price</a></li>
			<li><a href="#!">Most Popular</a></li>
			</ul>
			<span class="filter-text right">Sorted by</span>
		</div>
		<script type="text/javascript">
			$('.dropdown-button').dropdown({
		      inDuration: 300,
		      outDuration: 225,
		      constrain_width: true, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on hover
		      gutter: 0, // Spacing from edge
		      belowOrigin: false // Displays dropdown below the button
		    });
		</script>
	</div>
	<div class="row">
		<div class="col s12	center-align">
<?php
foreach($products as $product)
{
?>
				<a href=<?php echo "product_info/". $product['id'];?>><img src=<?php echo '"'.$product['filename'].'"'?> width ="110px" height="150px"></a>

<?php
}
?>
		</div>
	</div>
	<!-- pagination -->
	<div class="row">
		<div class="col s12 offset-s4">
		  <ul class="pagination">
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php
for($i=1; $i<=ceil(count($all)/$limit) ;$i++)
{
?>
		    <li class="waves-effect"><a href=""><?php echo $i?></a></li>
<?php
}
?>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		  </ul>
		</div>
	</div>
</div>
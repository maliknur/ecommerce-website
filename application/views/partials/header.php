<meta charset="UTF-8">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	

	<script type="text/javascript" src="assets/js/jquery.easy-pie-chart.js"></script>
	 <script src="assets/js/scale.fix.js"></script>
	<link rel="stylesheet"type="text/css" href="assets/jquery.easy-pie-chart.css">
	<link rel="stylesheet" href="assets/styles_pie.css">
    <link rel="stylesheet" href="assets/pygment_trac.css">
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/style.css">

	<script>
		$(document).ready(function() {
		    $('select').material_select();
		    
		    $('.tooltipped').tooltip({delay: 30});


		    

		    var initCharts = function() {
		      var charts = $('.percentage');
		      charts.easyPieChart({
		        animate: 1000,
		        onStep: function(value) {
		          this.$el.find('span').text(~~value);
		        }
		      });
		      $('.updatePieCharts').on('click', function(e) {
		        e.preventDefault();
		        charts.each(function() {
		          $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
		        });
		      });
		    }

		    initCharts();	




		  });
	</script>
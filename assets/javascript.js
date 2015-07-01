// <script type="text/javascript">

	$(document).ready(function(){
	
	// Activate the side menu 
		$(".button-collapse").sideNav({
			menuWidth: 300
		});



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

// </script>
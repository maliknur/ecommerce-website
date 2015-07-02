$(document).ready(function(){
	
	// Activate the side menu 
	$(".button-collapse").sideNav({
		menuWidth: 300
	})


	$('select').material_select();
		    
    $('.tooltipped').tooltip({delay: 30});

	$('.datepicker').pickadate({
		selectMonths: true,
		selectYears: true
	})

})
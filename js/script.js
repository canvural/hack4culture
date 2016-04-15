$(document).ready(function() {
	
	//preset screens
	
	
	// behaviour on click
	$('#performer').click(function() {
		$(this).toggle('slide', {direction: 'right'}, 1000);
	});

	// behaviour on click
	$('#lurker').click(function() {
		$(this).toggle('slide', {direction: 'left'}, 1000);
	});

});
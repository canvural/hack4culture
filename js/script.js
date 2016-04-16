$(document).ready(function() {

	// preset main page
	$('#lurkerCover').css({visibility: 'visible'});
	$('#performerCover').css({visibility: 'visible'});
	$('#performer').css({visibility: 'hidden'});
	$('#lurker').css({visibility: 'hidden'});

	// on click events
	$('#lurkerCover').click(function() {
		$(this).hide();
		$('#lurker').css({visibility: 'visible'});
	});

	$('#performerCover').click(function() {
		$(this).hide();
		$('#performer').css({visibility: 'visible'});
	});
});

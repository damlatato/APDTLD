$(document).on('click', '.add-to-wishlist', function(){
	$eventID = $(this).attr("eventid");
	$userMail = $(this).attr("usermail");
	$.ajax({
	  type: "POST",
	  url: "controller/wishlistHandler.php",
	  data: {
		functionname: 'addToWishlist',
		eventID: $eventID,
		userMail: $userMail
	  },
	  dataType: "text"
	}).done(function( msg ) {
		$('#successfulwhislist').css("display", "inherit");
		
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});
	

});
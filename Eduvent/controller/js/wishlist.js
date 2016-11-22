$('.add-to-wishlist').click(function() {
	alert( "we are here" );
	$eventID = $(this).attr("eventid");
	$userMail = $(this).attr("usermail");
	alert("in wishlist js"+$eventID + '   '+ $userMail);
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
		alert( "done: " + msg );
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});
	

});
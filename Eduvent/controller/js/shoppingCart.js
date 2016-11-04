$('.insert-to-shopping-cart').click(function() {
	
	var $eventID = $(this).attr("eventid");
	var $quantity = $('#eventquentity'+$eventID+ ' option:selected').attr("value");

	$.ajax({
	  type: "POST",
	  url: "controller/shoppingCart/shoppingCartHandler.php",
	  data: {
		functionname: 'addToShoppingCart',
		eventID: $eventID,
		quantity: $quantity
	  },
	  dataType: "text"
	}).done(function( msg ) {
	  alert( "Data Saved: " + msg );
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});

});
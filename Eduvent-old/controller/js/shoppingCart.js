$('.insert-to-shopping-cart').click(function() {
	var $eventID = $(this).attr("eventid");
	var $quantity = $('#eventquentity'+$eventID+ ' option:selected').attr("value");
	
	if (typeof $quantity == 'undefined'){
		//only in detail view the quantity can be choosed, not in event market 
		$quantity = 1; 
	}
	
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
		$('#shoppingcartmenu').load('index.php'+' #shoppingcartmenu');
		
		$('#successfulbuyed').css("display", "inherit");
		
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});
	

});

$('.delete-from-shopping-cart').click(function() {
	var $eventID = $(this).attr("eventid");
	$.ajax({
	  type: "POST",
	  url: "controller/shoppingCart/shoppingCartHandler.php",
	  data: {
		functionname: 'removeEvent',
		eventID: $eventID
	  },
	  dataType: "text"
	}).done(function( msg ) {
		window.location.reload();
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});

});

$("#alert-target").click(function () {
    toastr["info"]("I was launched via jQuery!");
});

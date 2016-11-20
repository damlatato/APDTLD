$('.insert-to-shopping-cart').click(function() {
	$eventID = $(this).attr("eventid");
	$quantity = $('#eventquantity').attr("value");
	$amountGift = $('#eventamountgift'+$eventID+ ' option:selected').attr("value");
	
	if (typeof $quantity == 'undefined'){
		//only in detail view the quantity can be choosed, not in event market 
		$quantity = 1; 
	}
	
	if (typeof $amountGift == 'undefined'){
		//only in detail view the quantity can be choosed, not in event market 
		$amountGift = 0;
	}
	
	$.ajax({
	  type: "POST",
	  url: "controller/shoppingCart/shoppingCartHandler.php",
	  data: {
		functionname: 'addToShoppingCart',
		eventID: $eventID,
		quantity: $quantity,
		amountGift: $amountGift
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
	$eventID = $(this).attr("eventid");
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


$('.count-amount-up').click(function() {
	$quantity = $('#eventquantity').attr("value");
	$quantity++; 
	 $('#eventquantity').attr("value", $quantity);
});

$('.count-amount-down').click(function() {
	$quantity = $('#eventquantity').attr("value");
	$quantity--; 
	 $('#eventquantity').attr("value", $quantity);
});


$('.subscribe-event').click(function() {
	$eventID = $(this).attr("eventid");
	$('#modalEventID').attr("value", $eventID);
});


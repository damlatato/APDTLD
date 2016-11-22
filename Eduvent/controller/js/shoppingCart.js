$(document).on('click', '.insert-to-shopping-cart', function() {
	$eventID = $(this).attr("eventid");
	console.log("ev-id="+$eventID);
	$quantity = $('#eventquantity').attr("value");
	
	if($(this).attr("id") == "gift"){
		$amountGift = $quantity;
	}
	
	
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
	  console.log( "Request failed: " + msg );
	});
	

});

$(document).on('click', '.delete-from-shopping-cart', function() {
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
	  console.log( "Request failed: " + msg );
	});

});

$(document).on('click', '#alert-target', function() {
    toastr["info"]("I was launched via jQuery!");
});

$(document).on('click', '.count-amount-up', function() {
	$quantity = $('#eventquantity').attr("value");
	$quantity++; 
	 $('#eventquantity').attr("value", $quantity);
});

$(document).on('click', '.count-amount-down', function() {
	$quantity = $('#eventquantity').attr("value");
	$quantity--; 
	 $('#eventquantity').attr("value", $quantity);
});

$(document).on('click', '.subscribe-event', function() {
	$eventID = $(this).attr("eventid");
	$('#modalEventID').attr("value", $eventID);
});


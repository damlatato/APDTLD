$('.insert-to-shopping-cart').click(function() {
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
	alert("set value for subscribe");
	$eventID = $(this).attr("eventid");
	$('#modalEventID').attr("value", $eventID);
});


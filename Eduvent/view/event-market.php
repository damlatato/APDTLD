<?php
if (isset($_POST['sendsubscribeconfirmation'])) {
	include('view/subscription-success.php');
}
else {
	require_once ROOT_PATH . 'view/subscribeform.php';

	if (isset($_SESSION['usermail'])) {
		$email = $_SESSION['usermail'];
	}
	else {
		$email = '';
	}

	if (isset($_POST['filter'])) {
		$homeFilter = explode(",",$_POST['filter']);
		$v = $homeFilter[1];
		switch ($homeFilter[0]) {
			case "status":
				$f = '"' . $homeFilter[1] . '","All","All","All","All","All"';
				break;
			case "type":
				$f = '"Published","' . $homeFilter[1] . '","All","All","All","All"';
				break;
			case "topic":
				$f = '"Published","All","' . $homeFilter[1] . '","All","All","All"';
				break;
			case "priceCategory":
				$f = '"Published","All","All","' . $homeFilter[1] . '","All","All"';
				break;
			case "startDate":
				$f = '"Published","All","All","All","' . $homeFilter[1] . '","All"';
				break;
			case "endDate":
				$f = '"Published","All","All","All","All","' . $homeFilter[1] . '"';
				break;
			default:
				$f = '"Published","All","All","All","All","All"';
		}
	}
	else {
		$f = '"Published","All","All","All","All","All"';
	}
?>

<div class="alert alert-info text-xs-center" role="alert" id="successfulbuyed" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Event added to shopping cart!</strong> Go to <a href="index.php?page=shoppingCart" class="alert-link">Shopping cart </a>to see the content.
</div>

<div class="container">
	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php include("sidebar.php"); ?>
	</div>
	<!--/.Sidebar (Topics)-->
	
	<!--Content-->
	<div class="col-md-10">
	
		<!--Row 1 (Popular search tags) -->
		<div class="row">
			<div class="col-md-12">
				<?php include("search-tags.php"); ?>
			</div>
		</div>
		<!--/.Row 1-->

		<!--Row 2: Navbar (Event market search bar) -->
		<div class="row">
			<div class="col-md-12">
				<?php include("search-bar.php"); ?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Event market) -->
		<div class="row" id="event-market-area">
			<div class="col-md-12 event-market-area" id="event-market-items">
				<?php //include( "../Eduvent/controller/event-market-controller.php"); ?>
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->

</div>

<!-- Modal Contact -->
<div class="modal fade modal-ext" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:black">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Newsletter subscription</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>Subscribe to this newsletter to get more informations about the events offered by this company.</p>
                <form action="index.php?page=event-market" method="post">
					<input id="modalEventID" style="display:none;" name="eventID" value="">			
					<div class="md-form">
	                    <input name="subemail" type="email" id="subemail" class="form-control validate">
	                    <label for="subemail" data-error="wrong" data-success="right">Your email</label>
	                </div>
	                <!--<div class="text-xs-center">
	                    <button name="sendsubscribeconfirmation" class="btn btn-blue-yellow">Subscribe</button>
	                </div>-->
	        	</form>
            </div>
            <!--Footer-->
            <div class="modal-footer text-xs-center">
				<button name="sendsubscribeconfirmation" class="btn btn-blue-yellow">Subscribe</button>
                <button type="button" class="btn btn-dark-grey-yellow" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<?php
}
?>

<script type="text/javascript" src="../Eduvent/controller/js/shoppingCart.js"></script>
<script type="text/javascript" src="../Eduvent/controller/js/wishlist.js"></script>

<script>
$( document ).ready(function() {
	filterEvents(<?php echo $f ?>);

	<?php
		if (isset($_POST['filter'])) {
			echo 'v="' . $homeFilter[1] .  '";
			if (v!=="") {
				console.log("v="+v);
				$( ".sb-item:contains(" + v + ")" ).addClass("sb-item-selected");
			}';
		}
		else {
			echo '$( ".sb-item:contains(All)" ).addClass("sb-item-selected");';
		}
	?>

	$('.sb-item').click(function(){
		$('.sb-item').removeClass('sb-item-selected');
		$(this).addClass('sb-item-selected');
	});
	$('#clear-date-from').click(function(){
		$('#datepicker-from-sidebar').val('');
	});
	$('#clear-date-to').click(function(){
		$('#datepicker-to-sidebar').val('');
	});
});

var filter = {
		status: "Published",
		type: "All",
		topic: "All",
		priceCategory: "All",
		startDate: "All",
		endDate: "All",
		'root-path': <?php echo '\'' . ROOT_PATH . '\''; ?>
};

function filterEvents(status, type, topic, priceCategory, startDate, endDate) {
	console.log(
		"status="+status+", "+
		"type="+type+", "+
		"topic="+topic+", "+
		"priceCategory="+priceCategory+", "+
		"startDate="+startDate+", "+
		"endDate="+endDate
	);

	//--------------------------------------
	if (status!=="") {
		filter["status"] = status;
	}

	if (type!=="") {
		filter["type"] = type;
	}

	if (topic!=="") {
		filter["topic"] = topic;
	}

	if (priceCategory!=="") {
		filter["priceCategory"] = priceCategory;
	}

	if (startDate!=="") {
		filter["startDate"] = startDate;
	}

	if (endDate!=="") {
		filter["endDate"] = endDate;
	}	
	//--------------------------------------
	
	console.log("current filter: " + JSON.stringify(filter));

	$.get('controller/event-market-controller.php', filter)
	.done(function( data ) {
		data= "[" + data + "]"
		var jsonData = jQuery.parseJSON( data );

		var eventCounter=0;
		var result;
		$('#event-market-items').html( "" );
		
		$.each(jsonData, function() {
			$.each(this, function(objIndex, event) {
				console.log(objIndex + ") eventid: " + event.id);
				
				//----------------------------------------------
				result='';
				var email = "<?php echo $email; ?>";

				result = result +
					'<div class="col-md-4 event-market-col">'+
					'<div class="event-card card hoverable">'+
					'<div class="event-image view overlay">' +
					'<img src="';
							
				if (event.imgHref=='') {
					result = result + '../Eduvent/view/images/event-img.png';
				}
				else {
					result = result + event.imgHref;
				}
				
				result = result +
					'" class="em-event-img img-fluid" alt="" height="195px">' +
					'<a href="../Eduvent/index.php?page=event-description&eventId=' + event.id + '">' + 
					'<div class="mask"></div></a></div>';

				result = result +
					'<div class="event-body card-block text-xs-center">' + 
					'<div class="event-title">' +
					'<h5>' + event.topic + '</h5>' +
					'<h4 class="card-title"><strong>' +
					'<a href="../Eduvent/index.php?page=event-description&eventId=' + event.id + '">' +
					event.title + '</a></strong></h4></div>';
					
				result = result +
					'<div class="event-text card-text text-xs-left"><p>' + event.description + '</p></div>' +
					'<div class="card-footer">' +
					'<div class="ticket-price">Ticket price:' + event.price + '</div>' +
					'<div class="event-buttons flex-center">' +
					'<a href="../Eduvent/index.php?page=event-description&eventId=' + event.id + '">' +
					'<button class="btn btn-blue-yellow-small" type="button">Show details</button></a>' +
					'<div class="event-menu"><button class="btn btn-grey-small" type="button">More</button>';
					
				result = result +
					'<ul class="event-dropdown-menu">' +
					'<li class="text-xs-left"><a class="event-dropdown-item insert-to-shopping-cart" eventid="' + event.id + '" href="#">' +
					'<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>';
					
				if (email!=='') {
					result = result + 
						'<li class="text-xs-left">' +
						'<button class="btn btn-blue-yellow add-to-wishlist" eventid=' + event.id + ' usermail=' + email + '>' +
						'<strong><i class="fa fa-bookmark"></i> Add to wishlist</strong></button><br>' +
						'<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Add to wishlist</a></li>';
				}
				
				result = result +				
					'<li class="text-xs-left"><a class="event-dropdown-item" href="#">' +
					'<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>' +
					'<li class="text-xs-left">' +
					'<a class="event-dropdown-item subscribe-event" eventid=' + event.id + ' href="#" data-toggle="modal" data-target="#modal-subscribe">' +
					'<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter' +
					'</a></li></ul></div></div></div></div></div></div>';

				//----------------------------------------------
				$('#event-market-items').append( result );
			});
		});

	});
}
</script>
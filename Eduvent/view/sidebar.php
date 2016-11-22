<?php
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

<script>
$( document ).ready(function() {
	//filterEvents("Published","All","All","All","All","All");
	filterEvents(<?php echo $f ?>);
	//console.log('test: <?php //echo (implode(",",$homeFilter)); ?>');

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

<div class="sidebar-nav list-group">

	<!--Group 'Filters'-->
	<div class="list-group-item sidebar-head white-text">
		<span>Event filters</span>
	</div>

	<?php
		include ("../Eduvent/controller/sidebar-controller.php");
	?>

	<!--Group 'Date'-->
	<div class="list-group-item sidebar-group-head" data-toggle="collapse" href="#collapseDate" aria-expanded="false" aria-controls="collapseDate">
		<a>Date<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
	</div>
	<div class="collapse" id="collapseDate"><!--add class 'in' to expand-->

		<div class="form-group" id="collapsedate-form">
			<div class='md-form input-group date' id='datepicker-sidebar'>
				<div class="md-form date-group pull-left">
					<span class="input-group-addon" id="datepicker-addon1" hidden></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-from-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon1">
					<label for="datepicker-from-sidebar">From</label>
				</div>
				<div class="pull-right clear-date" id="clear-date-from"><i class="fa fa-remove" aria-hidden="true"></i></div>

				<div class="md-form date-group pull-left">
					<span class="input-group-addon" id="datepicker-addon2" hidden></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-to-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon1">
					<label for="datepicker-to-sidebar">To</label>
				</div>
				<div class="pull-right clear-date" id="clear-date-to"><i class="fa fa-remove" aria-hidden="true"></i></div>

				<div class="text-xs-center">
					<button type="button" class="btn btn-grey-small" style="margin:0;" onclick="filterEvents('Published','','','',$('#datepicker-from-sidebar','').val(),$('#datepicker-to-sidebar').val())">Filter</button>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(function () {
				$('#datepicker-sidebar .datepicker-sidebar').datepicker({
					format: "dd.mm.yyyy"
				});
			});
		</script>

	</div>

</div>
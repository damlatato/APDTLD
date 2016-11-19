<?php
/*if (isset($_POST['sb-filter'])) {
	$filter=$_POST['sb-filter'];
}
if (isset($_POST['sb-value'])) {
	$value=$_POST['sb-value'];
}
if (isset($_POST['sb-value2'])) {
	$value2=$_POST['sb-value2'];
}*/
?>

<script>
var filter = {
		status: "Published",
		type: "All",
		topic: "All",
		priceCategory: "All",
		startDate: "All",
		endDate: "All",
		'root-path': <?php echo '\'' . ROOT_PATH . '\''; ?>
	};

$( document ).ready(function() {
	
	filterEvents("Published","All","All","All","All","All");
/*	filter=<?php echo '"' . $filter . '"'; ?>;
	value =<?php echo '"' . $value  . '"'; ?>;
	value2=<?php echo '"' . $value2 . '"'; ?>;
	<?php $_POST = array(); ?>

	console.log("received POST filter: filter="+filter+", value="+value+", value2="+value2);

	if (filter!=='') {
		filterEvents(filter, value, value2);
		if (filter!=='date') {
			$('.sb-item').removeClass('sb-item-selected');
			$( '.sb-item:contains("' + value + '")' ).addClass('sb-item-selected');
		}
	}*/

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

	$.post('controller/event-market-controller.php', filter)
	.done(function( data ) {
		$('#event-market-items').html(data);
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
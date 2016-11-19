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
			/*$(function () {
				$('#datepicker-sidebar .datepicker-sidebar').datepicker({
					format: "dd.mm.yyyy"
				});
			});*/
		</script>

	</div>

</div>

<script type="text/javascript">
$( document ).ready(function() {
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
	console.log("home:");
	console.log(
		" status="+status+", "+
		" type="+type+", "+
		" topic="+topic+", "+
		" priceCategory="+priceCategory+", "+
		" startDate="+startDate+", "+
		" endDate="+endDate
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
	
	console.log("current filter (home): " + JSON.stringify(filter));
	
	var url = '../Eduvent/index.php?page=event-market';
	var form = $(
		'<form action="' + url + '" method="post">' +
		'<input type="text" name="filter" value="' + JSON.stringify(filter) + '" />' +
		'</form>');
	$('body').append(form);
	form.submit();
}
</script>
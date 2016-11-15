<?php
if (isset($_GET['page'])) {
	$page=$_GET['page'];
	if ($page=='event-market') {
		$eventMarket=true;
	}
	else {
		$eventMarket=false;
	}
}
else {
	$eventMarket=false;
}
?>

<script>
$( document ).ready(function() {
	eventMarket=<?php echo '\'' . $eventMarket . '\''; ?>;
	console.log("eventMarket="+eventMarket);
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
</script>

<div class="sidebar-nav list-group">

	<!--Group 'Filters'-->
	<div class="list-group-item sidebar-head white-text">
		<span class="font-weight-bold">Event filters</span>
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
				<div><span><small>From</small></span></div>
				<div class="input-group pull-left date-group">
					<span class="input-group-addon" id="datepicker-addon1">
						<i class="fa fa-calendar" aria-hidden="true"></i></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-from-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon1">
				</div>
				<div class="pull-right clear-date" id="clear-date-from"><i class="fa fa-remove" aria-hidden="true"></i></div>

				<div><span><small>To</small></span></div>
				<div class="input-group pull-left date-group">
					<span class="input-group-addon" id="datepicker-addon2">
						<i class="fa fa-calendar" aria-hidden="true"></i></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-to-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon2">
				</div>
				<div class="pull-right clear-date" id="clear-date-to"><i class="fa fa-remove" aria-hidden="true"></i></div>

				<div class="text-xs-center">
					<button type="button" class="btn btn-grey" onclick="filterEvents('date',$('#datepicker-from-sidebar').val(),$('#datepicker-to-sidebar').val())">Filter</button>
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
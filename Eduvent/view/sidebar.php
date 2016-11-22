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
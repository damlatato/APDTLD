<script>
$( document ).ready(function() {
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
	<div class="list-group-item proposal-sidebar-head white-text">
		<span class="font-weight-bold">Proposal filters</span>
	</div>
	<!--Group 'Event types'-->
	<div class="list-group-item proposal-sidebar-group-head" data-toggle="collapse" href="#collapseTypes" aria-expanded="false" aria-controls="collapseTypes">
		<a>Event types<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
	</div>
	<div class="collapse" id="collapseTypes"><!--add class 'in' to expand-->
		<div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">Conference</a></li>
				<li class="list-group-item"><a href="#">Course</a></li>
				<li class="list-group-item"><a href="#">Forum</a></li>
				<li class="list-group-item"><a href="#">Hackathon</a></li>
				<li class="list-group-item"><a href="#">Meeting</a></li>
				<li class="list-group-item"><a href="#">Online-course</a></li>
				<li class="list-group-item"><a href="#">Meeting</a></li>
				<li class="list-group-item"><a href="#">Presentation</a></li>
				<li class="list-group-item"><a href="#">Seminar</a></li>
				<li class="list-group-item"><a href="#">Tutorial</a></li>
				<li class="list-group-item"><a href="#">Workshop</a></li>
			</ul>
		</div>
	</div>
	<!--Group 'Topics'-->
	<div class="list-group-item proposal-sidebar-group-head" data-toggle="collapse" href="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
		<a>Topics<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
	</div>
	<div class="collapse" id="collapseCategories"><!--add class 'in' to expand-->
		<div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">Art</a></li>
				<li class="list-group-item"><a href="#">Business</a></li>
				<li class="list-group-item"><a href="#">Cooking</a></li>
				<li class="list-group-item"><a href="#">Design</a></li>
				<li class="list-group-item"><a href="#">Entrepreneurship</a></li>
				<li class="list-group-item"><a href="#">Finance</a></li>
				<li class="list-group-item"><a href="#">Health</a></li>
				<li class="list-group-item"><a href="#">HR</a></li>
				<li class="list-group-item"><a href="#">Science</a></li>
				<li class="list-group-item"><a href="#">Sports</a></li>
				<li class="list-group-item"><a href="#">Technology</a></li>
				<li class="list-group-item font-weight-bold"><a href="#"><b><i>More ...</i></b></a></li>
			</ul>
		</div>
	</div>
	<!--Group 'Pricing'-->
	<div class="list-group-item proposal-sidebar-group-head" data-toggle="collapse" href="#collapsePricing" aria-expanded="false" aria-controls="collapsePricing">
		<a>Pricing<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
	</div>
	<div class="collapse" id="collapsePricing"><!--add class 'in' to expand-->
		<div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">All</a></li>
				<li class="list-group-item"><a href="#">Free</a></li>
				<li class="list-group-item"><a href="#">Paid</a></li>
			</ul>
		</div>
	</div>
	<!--Group 'Date'-->
	<div class="list-group-item proposal-sidebar-group-head" data-toggle="collapse" href="#collapseDate" aria-expanded="false" aria-controls="collapseDate">
		<a>Date<span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
	</div>
	<div class="collapse" id="collapseDate"><!--add class 'in' to expand-->

		<div class="form-group" id="collapsedate-form">
			<div class='md-form input-group date' id='datepicker-sidebar'>

				<div><span>From</span></div>
				<div class="input-group pull-left date-group">
					<span class="input-group-addon" id="datepicker-addon1">
						<i class="fa fa-calendar" aria-hidden="true"></i></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-from-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon1">
				</div>
				<div class="pull-right clear-date" id="clear-date-from"><i class="fa fa-remove" aria-hidden="true"></i></div>

				<div><span>To</span></div>
				<div class="input-group pull-left date-group">
					<span class="input-group-addon" id="datepicker-addon2">
						<i class="fa fa-calendar" aria-hidden="true"></i></span>
					<input type="text" class="form-control datepicker-sidebar" id="datepicker-to-sidebar" placeholder="dd.mm.yyyy" aria-describedby="datepicker-addon2">
				</div>
				<div class="pull-right clear-date" id="clear-date-to"><i class="fa fa-remove" aria-hidden="true"></i></div>

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
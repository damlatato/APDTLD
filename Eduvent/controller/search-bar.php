<script>
$(document).ready(function() {
	$('.location-radius-menu > li').click(function() {
		$('#btn-set-radius').text($(this).text());
		$(this).prop('hidden', true);
		$(this).siblings().prop('hidden', false);
	}); 
});
</script>

<h5 class="font-weight-bold">Event search</h5>
<nav class="navbar navbar-light grey lighten-5">
	<div class="collapse navbar-toggleable-xs">
		<div class="pull-xs-left">

			<form class="form-inline" id="search-form" onsubmit="runSearch()">
				<i class="fa fa-search" aria-hidden="true"></i><input class="form-control" id="search-input" type="text" placeholder="Search">
				<span>within

					<div class="location-radius">
						<button class="btn btn-info-outline waves-effect dropdown-toggle" id="btn-set-radius" type="button">5 km</button>
						<ul class="location-radius-menu">
							<li class="dropdown-item" hidden>5 km</li>
							<li class="dropdown-item">10 km</li>
							<li class="dropdown-item">25 km</li>
							<li class="dropdown-item">50 km</li>
							<li class="dropdown-item">No limit</li>
						</ul>
					</div>

					from
					<div class="location-search">
						<button class="btn-location-search btn btn-info-outline waves-effect dropdown-toggle" type="button">Mannheim, DE</button>
						<div class="location-search-menu">
							<input type="text" class="form-control" placeholder="Location ..." aria-describedby="location-addon1">
						</div>
					</div>

				</span>
			</form>

		</div>
	</div>
</nav>
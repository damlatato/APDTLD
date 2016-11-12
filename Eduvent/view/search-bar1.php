<script>
$(document).ready(function() {
	$('.custom-dropdown-menu > li').click(function() {
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
				<i class="fa fa-search" aria-hidden="true"></i><input class="form-control" id="search-input" type="input" placeholder="Search">
				<span>within

					<div class="custom-dropdown-btn">
						<div class="btn btn-info-outline waves-effect" id="btn-set-radius">5 km</div>
						<ul class="custom-dropdown-menu">
							<li hidden>5 km</li>
							<li>10 km</li>
							<li>25 km</li>
							<li>50 km</li>
							<li>No limit</li>
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
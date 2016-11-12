<script>
$(document).ready(function() {
	$('.custom-dropdown-menu > li').click(function() {
		$('#btn-proposal-filter').text($(this).text());
		$(this).prop('hidden', true);
		$(this).siblings().prop('hidden', false);
	}); 
});
</script>

<h5 class="font-weight-bold">Event search</h5>
<nav class="navbar navbar-light grey lighten-5">
	<input class="search-input" id="search-input" type="search-md" placeholder="Search" style="width:20%;">
	within
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
	<div class="custom-dropdown-btn">
		<button class="btn-location-search btn btn-info-outline waves-effect" type="button">Mannheim, DE</button>
		<div class="custom-dropdown-menu">
			<input type="text" class="form-control" placeholder="Location ..." aria-describedby="location-addon1">
		</div>
	</div>
	<div class="custom-dropdown-btn">
		Sort by
		<button class="btn btn-info-outline waves-effect" id="btn-proposal-filter" type="button">Topic</button>
		<ul class="custom-dropdown-menu">
			<li hidden>Topic</li>
			<li>Location</li>
			<li>Newest</li>
			<li>Most voted</li>
		</ul>
	</div>
</nav>
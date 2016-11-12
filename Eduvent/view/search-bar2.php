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
	<div class="row" id="search-form" style="display:inline;">
		<div class="col-md-4">
			<i class="fa fa-search" aria-hidden="true"></i>
			<input class="form-control" id="search-input" type="search" placeholder="Search" style="display:inline;">
		</div>
		<div class="col-md-8">
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
		</div>
</nav>
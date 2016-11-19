<script>
$(document).ready(function() {
	$("#carousel-overlay-text").hide();
	overlay=$("#carousel-item-overlay");
	overlay.hide();
	$("#carousel-overlay-text").removeClass("hidden");
	overlay.removeClass("hidden");
	overlay.delay(700).show("slide", { direction: "left" }, 1500);
	$("#carousel-overlay-text").delay(1600).show("slide", { direction: "left" }, 1400);
});
</script>

<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-1" data-slide-to="1"></li>
		<li data-target="#carousel-example-1" data-slide-to="2"></li>
		<li data-target="#carousel-example-1" data-slide-to="3"></li>
		<li data-target="#carousel-example-1" data-slide-to="4"></li>
	</ol>
	<!--/.Indicators-->

	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div id="carousel-item-overlay" class="carousel-item-overlay hidden">
				<div id="carousel-overlay-text">
					<br/><br/>
					<span id="text-carousel-1">Finding educational events.</span>
					<span id="text-carousel-2">Easily.</span><br><br/><br/><br/><br/><br/><br/>
					<a href="../Eduvent/index.php?page=signup">
						<button class="btn" id="btn-signup-carousel" type="button">Sign up</button>
					</a>
				</div>
			</div>
			<img src="../Eduvent/view/images/c1.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c2.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c3.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c4.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c5.jpg" class="img-fluid img-repsonsive">
		</div>
	</div>
	<!--/.Slides-->

	<!--Controls-->
	<a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
		<span class="icon-prev" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
		<span class="icon-next" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container">
	<div class="row">

		<!--Sidebar (Topics)-->
		<div class="col-md-2">
			<?php
				include("sidebar-home.php");
			?>
		</div>
		<!--/.Sidebar (Topics)-->
		
		<!--Content-->
		<div class="col-md-10">
			<!--Row 1 (Popular searches) -->
			<div class="row">
				<div class="col-md-12">
					<?php
						include("search-tags.php");
					?>
				</div>
			</div>
			<!--/.Row 1-->

			<!--Navbar (Event market filter bar) -->
			<?php
				include("search-bar.php");
			?>
			<!--/.Navbar-->

			<?php
				include("controller/home-controller.php");
			?>

		<!--/.Content-->
		</div>
	</div>
</div>
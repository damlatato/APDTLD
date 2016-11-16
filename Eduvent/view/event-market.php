<div class="container">
<?php
	if(isset($_POST['sendsubscribeconfirmation'])) {
		include('view/subscription-success.php');
	} else {
?>
	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php
			include("sidebar.php");
		?>
	</div>
	<!--/.Sidebar (Topics)-->

	<!--Content-->
	<div class="col-md-10">

		<!--Row 1 (Popular search tags) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("search-tags.php");
				?>
			</div>
		</div>
		<!--/.Row 1-->

		<!--Row 2: Navbar (Event market search bar) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("search-bar.php");
				?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Event market) -->
		<div class="row" id="event-market-area">
			<div class="col-md-12 event-market-area grey lighten-5" id="event-market-items">
				<?php
					include( "../Eduvent/controller/event-market-controller.php");
				?>
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->
	
<?php } ?>
</div>
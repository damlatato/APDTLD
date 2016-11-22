<?php
/*
if(isset($_POST['sendsubscribeconfirmation'])) {
	include('view/subscription-success.php');
}
else {*/
?>

<script type="text/javascript" src="../Eduvent/controller/js/shoppingCart.js"></script>
<script type="text/javascript" src="../Eduvent/controller/js/wishlist.js"></script>

<div class="alert alert-info" role="alert" id="successfulbuyed" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Event added to shopping cart!</strong> Go to <a href="index.php?page=shoppingCart" class="alert-link">Shopping cart </a>to see the content.
</div>

<div class="container">
	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php include("sidebar.php"); ?>
	</div>
	<!--/.Sidebar (Topics)-->
	
	<!--Content-->
	<div class="col-md-10">
	
		<!--Row 1 (Popular search tags) -->
		<div class="row">
			<div class="col-md-12">
				<?php include("search-tags.php"); ?>
			</div>
		</div>
		<!--/.Row 1-->

		<!--Row 2: Navbar (Event market search bar) -->
		<div class="row">
			<div class="col-md-12">
				<?php include("search-bar.php"); ?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Event market) -->
		<div class="row" id="event-market-area">
			<div class="col-md-12 event-market-area" id="event-market-items">
				<?php //include( "../Eduvent/controller/event-market-controller.php"); ?>
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->

</div>

<?php
//}
?>
<?php
$eventId = $_GET['eventId'];
?>

<div class="alert alert-info" role="alert" id="successfulbuyed" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Event added to shopping cart!</strong> Go to <a href="index.php?page=shoppingCart" class="alert-link">Shopping cart </a>to see the content.
</div>

<div class="alert alert-info" role="alert" id="successfulwhislist" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
<strong>Event added to wishlist!</strong> Go to your <a href="index.php?page=profile" class="alert-link">User Profile </a>to see the content.
</div>

<div class="container">
	<div class="row">
		<?php
		include 'controller/event-description-controller.php';	
		?>
	</div>
</div>

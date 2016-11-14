<?php
	$proposalId=$_GET['proposalId'];
?>

<script>
function offerEvent(proposalId, offerId) {
	console.log("pid=" + proposalId + " / oid=" + offerId);
	$.post( "../Eduvent/controller/offer-event-controller.php", {
		'peid': proposalId,
		'oeid': offerId,
		'root-path': <?php echo '\'' . ROOT_PATH . '\''; ?>
	})
	.done(function( data ) {
		console.log( "offer submitted: " + data );
	});
}
</script>

<div class="container">

	<!--Row 1: Page heading-->
	<div class="row">
		<div class="col-md-9">
			<h1 class="h1-responsive">Offer Event</h1>
			<h3 class="h3-responsive"><small class="text-muted">Choose the event which you want to offer for the selected event proposal.</small></h3>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
	<!--/.Row 1-->
	<hr>

	<!--Row 2: Events-->
	<div class="row">	
		<div class="col-md-12">
			<div class="row" id="event-market-area">
				<div class="col-md-12 event-market-area grey lighten-5">
					<?php
						include("../Eduvent/controller/offer-event-controller.php");
					?>
				</div>
			</div>
		</div>
	</div>
	<!--/.Row 2-->
</div>
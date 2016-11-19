<div class="container">

	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php
			include("sidebar-proposals.php");
		?>
	</div>
	<!--/.Sidebar (Topics)-->

	<!--Content-->
	<div class="col-md-10">

		<!--Row 1: Page heading-->
		<div class="row">
			<div class="col-md-9">
				<h1 class="h1-responsive">Find interesting event proposals</h1>
				<h3 class="h3-responsive"><small class="text-muted">Vote for event proposals you would like to attend if a company organizes them.</small></h3>
			</div>
			<div class="col-md-3">
				<br><a href="../Eduvent/index.php?page=create-proposal" class="btn btn-propose"><strong>Propose event!</strong></a>
			</div>
		</div>
		<!--/.Page heading-->
		<hr>

		<!--Row 2: Navbar (Filter bar) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("search-bar.php");
				?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Proposal list) -->
		<div class="row">
			<div class="col-md-12" id="event-proposals-items">
				<?php
					//include("../Eduvent/controller/event-proposals-controller.php");
				?>

				<br>
				<hr>

				<!--Pagination
				<nav class="row text-xs-center page-items">
					<ul class="pagination">
						<li class="page-item disabled">
							<a class="page-link" href="#!" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#!">1 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#!">2</a></li>
						<li class="page-item"><a class="page-link" href="#!">3</a></li>
						<li class="page-item"><a class="page-link" href="#!">4</a></li>
						<li class="page-item"><a class="page-link" href="#!">5</a></li>
						<li class="page-item">
							<a class="page-link" href="#!" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>-->
				<!--/.Pagination
				<hr>-->
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->
</div>

<script>
function voteForEvent(eventId) {
	$.post( "../Eduvent/controller/vote-for-event.php",
	{
		'proposalId': eventId,
		'root-path' : <?php echo '\'' . ROOT_PATH . '\''; ?>
	})
	.done(function( data ) {
		data = JSON.parse(data);
		console.log(
			"proposalId: " + data.proposalId +
			", votes1: "   + data.votes1 +
			", votes2: "   + data.votes2 +
			", userId: "   + data.userId +
			", userName: " + data.userName
		);

		elId = "#ev-" + data.proposalId;
		console.log( "elId=" + elId);
		$(elId).text(data.votes2);
	});
}
</script>
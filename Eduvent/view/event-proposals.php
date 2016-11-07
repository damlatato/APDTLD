<div class="container">

	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php
			include("proposals-sidebar.php");
		?>
	</div>
	<!--/.Sidebar (Topics)-->

	<!--Content-->
	<div class="col-md-10">

		<!--Row 1: Page heading-->
		<div class="row">
			<div class="col-md-9">
				<h1 class="h1-responsive">Page heading</h1>
				<h3 class="h3-responsive"><small class="text-muted">Secondary text</small></h3>
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
					include("proposal-filter-bar.php");
				?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Proposal list) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("../Eduvent/controller/event-proposals-controller.php");
				?>

				<br>
				<hr>

				<!--Pagination-->
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
				</nav>
				<!--/.Pagination-->
				<hr>
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->
</div>
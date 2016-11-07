<div class="container">

	<!--Content-->
	<div class="col-md-12">

		<!--Row 1: Page heading-->
		<div class="row">
			<div class="col-md-9">
				<h1 class="h1-responsive">Page heading</h1>
				<h3 class="h3-responsive"><small class="text-muted">Secondary text</small></h3>
			</div>
			<div class="col-md-3">
				<br><a href="../Eduvent/index.php?page=event-proposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
			</div>
		</div>
		<!--/.Page heading-->
		<hr>

		<!--Row 2-->
		<div class="row">
			<div class="col-md-12">
				<form action="../Eduvent/controller/create-proposal-controller.php" method="post">
					<div class="form-group row cp-form-group">
						<label for="cp-topic" class="col-xs-2 col-form-label">Topic</label>
						<div class="col-xs-3">
							<select class="form-control" id="cp-topic" name="cp-topic">
								<option>Topic 1</option>
								<option>Topic 2</option>
								<option>Topic 3</option>
							</select>
						</div>
					</div>

					<div class="form-group row cp-form-group">
						<label for="cp-title" class="col-xs-2 col-form-label">Title</label>
						<div class="col-xs-3">
							<input class="form-control" type="search" id="cp-title" name="cp-title" placeholder="Title">
						</div>
					</div>

					<div class="form-group row cp-form-group">
						<label for="cp-description" class="col-xs-2 col-form-label">
							Description &nbsp;
							<i class="fa fa-pencil prefix" style="font-size:1.45em;"></i>
						</label>
						<div class="col-xs-6 md-form">
							
							<textarea type="text" class="form-control md-textarea" id="cp-description" name="cp-description" placeholder="Description"></textarea>
						</div>
					</div>

					<div class="form-group row cp-form-group">
						<p class="col-xs-3 col-form-label">Acceptable time period</p>
					</div>

					<div class="form-group row cp-form-group">
						<div class="col-xs-2"></div>
						<label for="cp-from" class="col-xs-1 col-form-label">From</label><!--text-xs-right-->
						<div class="col-xs-2">
							<input type="date" class="form-control" id="cp-from" name="cp-from" placeholder="yyyy-mm-dd">
						</div>

						<label for="cp-to" class="col-xs-1 col-form-label">To</label>
						<div class="col-xs-2">
							<input type="date" class="form-control" id="cp-to" name="cp-to" placeholder="yyyy-mm-dd">
						</div>
					</div>

					<div class="form-group row cp-form-group">
						<label for="cp-location" class="col-xs-2 col-form-label">Acceptable location</label>
						<div class="col-xs-6">
							<input type="search" class="form-control" id="cp-location" name="cp-location" placeholder="Acceptable location">
						</div>
					</div>

					<hr>

					<div class="form-group row cp-form-group">
						<div class="col-xs-8 flex-center">
							<button type="submit" class="btn btn-post-proposal pull-right">Post proposal</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--/.Row 2-->

		<hr>
	</div>
	<!--/.Content-->
</div>
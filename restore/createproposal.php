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
				<br><a href="../Eduvent/index.php?page=eventproposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
			</div>
		</div>
		<!--/.Page heading-->
		<hr>

		<!--Row 2-->
		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="form-group row">
						<label for="topic-select" class="col-xs-2 col-form-label">Topic</label>
						<div class="col-xs-3">
							<select class="form-control" id="topic-select">
								<option>Topic</option>
								<option>Topic</option>
								<option>Topic</option>
								<option>Topic</option>
								<option>Topic</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="title-input" class="col-xs-2 col-form-label">Title</label>
						<div class="col-xs-3">
							<input class="form-control" type="search" value="Title" id="title-input">
						</div>
					</div>

					<div class="form-group row">
						<label for="description-textarea" class="col-xs-2 col-form-label">Description</label>
						<div class="col-xs-6">
							<i class="fa fa-pencil prefix"></i>
							<textarea type="text" id="description-textarea" class="form-control md-textarea" placeholder="Description"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<p class="col-xs-3 col-form-label">Acceptable time period</p>
					</div>

					<div class="form-group row">
						<label for="end-date" class="col-xs-2 col-form-label">From</label>
						<div class="col-xs-3">
							<input class="form-control" type="date" value="2016-10-20" id="start-date">
						</div>
					</div>

					<div class="form-group row">
						<label for="end-date" class="col-xs-2 col-form-label">To</label>
						<div class="col-xs-3">
							<input class="form-control" type="date" value="2016-12-20" id="end-date">
						</div>
					</div>

					<div class="form-group row">
						<label for="location-input" class="col-xs-2 col-form-label">Acceptable location</label>
						<div class="col-xs-3">
							<input class="form-control" type="search" value="Acceptable location" id="location-input">
						</div>
					</div>

					<hr>

					<div class="form-group row">
						<div class="col-xs-8 flex-center">
							<a href="#" class="btn btn-post-proposal pull-right">Post proposal</a>
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
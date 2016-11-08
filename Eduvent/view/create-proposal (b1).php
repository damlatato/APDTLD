<div class="container">

	<!--Content-->
	<div class="col-md-12">

		<!--Row 1: Page heading-->
		<div class="row">
			<div class="col-md-9">
				<h1 class="h1-responsive">Propose your desirable event</h1>
				<h3 class="h3-responsive"><small class="text-muted">You can propose your desirable event, and a company might offer it for you.</small></h3>
			</div>
			<div class="col-md-3">
				<br><a href="../Eduvent/index.php?page=event-proposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
			</div>
		</div>
		<!--/.Page heading-->
		<hr>

		<!--Row 2-->
		<div class="row">
			<div class="col-md-12" id="form-container">
				<?php
				if (isset($_POST['cp-submit']))
				{
					// The Code to be executed after the form has been submitted.
					echo('<div><h3>Thank you for your event proposal!</h3><br><br>
							You posted the following event proposal.<br><br></div>');
					include('../Eduvent/controller/create-proposal-controller.php');					
				}
				else               
				{
					// Display the form and the submit button.
					echo ('
						<!--CP Form-->
							<form action="" method="post" id="cp-form">
								<div class="form-group row cp-form-group">
									<label for="cp-topic" class="col-xs-2 col-form-label">Topic</label>
									<div class="col-xs-3">
										<select class="form-control" id="cp-topic" name="cp-topic">
											<option>Sport</option>
											<option>Topic 2</option>
											<option>Topic 3</option>
										</select>
									</div>
								</div>

								<div class="form-group row cp-form-group">
									<label for="cp-title" class="col-xs-2 col-form-label">Title</label>
									<div class="col-xs-3">
										<input class="form-control" type="search" id="cp-title" name="cp-title" placeholder="Title" required>
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
									<p class="col-xs-3 col-form-label">Acceptable location</p>
								</div>

								<div class="form-group row cp-form-group">
									<div class="col-xs-2"></div>
									<label for="cp-locname" class="col-xs-1 col-form-label">Name</label>
									<div class="col-xs-3">
										<input type="search" class="form-control" id="cp-locname" name="cp-locname" placeholder="Name">
									</div>
								</div>
								<div class="form-group row cp-form-group">
									<div class="col-xs-2"></div>
									<label for="cp-street" class="col-xs-1 col-form-label">Street</label>
									<div class="col-xs-3">
										<input type="search" class="form-control" id="cp-street" name="cp-street" placeholder="Street">
									</div>
									<label for="cp-house" class="col-xs-1 col-form-label">House no.</label>
									<div class="col-xs-2">
										<input type="search" class="form-control" id="cp-house" name="cp-house" placeholder="House no.">
									</div>
								</div>
								<div class="form-group row cp-form-group">
									<div class="col-xs-2"></div>
									<label for="cp-city" class="col-xs-1 col-form-label">City</label>
									<div class="col-xs-3">
										<input type="search" class="form-control" id="cp-city" name="cp-city" placeholder="City">
									</div>
									<label for="cp-postcode" class="col-xs-1 col-form-label">Postcode</label>
									<div class="col-xs-2">
										<input type="search" class="form-control" id="cp-postcode" name="cp-postcode" placeholder="Postcode">
									</div>
								</div>
								<div class="form-group row cp-form-group">
									<div class="col-xs-2"></div>
									<label for="cp-country" class="col-xs-1 col-form-label">Country</label>
									<div class="col-xs-3">
										<input type="search" class="form-control" id="cp-country" name="cp-country" placeholder="Country">
									</div>
								</div>

								<hr>

								<div class="form-group row cp-form-group">
									<div class="col-xs-8 flex-center">
										<button type="submit" class="btn btn-post-proposal pull-right" name="cp-submit">Post proposal</button>
									</div>
								</div>
							</form>
							<!--/.CP Form-->');
				}
				?>
			</div>
		</div>
		<!--/.Row 2-->

		<hr>
	</div>
	<!--/.Content-->
</div>
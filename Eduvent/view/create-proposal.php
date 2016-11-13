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
					echo '<div><h3>Thank you for your event proposal!</h3><br><br>
							You posted the following event proposal.<br><br></div>';
					include('../Eduvent/controller/create-proposal-controller.php');
				}
				else               
				{
					// Display the form and the submit button.
					echo '
						<!--CP Form-->
							<form action="" method="post" id="cp-form">
								<div class="form-group row cp-form-group">
									<label for="cp-topic" class="col-xs-2 col-form-label">Topic</label>
									<div class="col-xs-3">
										<select class="form-control" id="cp-topic" name="cp-topic">';

									foreach ($topics as $key=>$value) {
										echo '<option>' . $key . '</option>';
									}

					echo '
										</select>
									</div>
								</div>

								<div class="form-group row cp-form-group">
									<label for="cp-title" class="col-xs-2 col-form-label">Title</label>
									<div class="col-xs-3">
										<input class="form-control" type="input" id="cp-title" name="cp-title" placeholder=" Title" required>
									</div>
								</div>

								<div class="form-group row cp-form-group">
									<label for="cp-description" class="col-xs-2 col-form-label">
										Description &nbsp;
										<i class="fa fa-pencil prefix" style="font-size:1.45em;"></i>
									</label>
									<div class="col-xs-6 md-form">
										<textarea type="text" class="form-control md-textarea" id="cp-description" name="cp-description" placeholder=" Description" required></textarea>
									</div>
								</div>

								<div class="form-group row cp-form-group">
									<label for="cp-city" class="col-xs-2 col-form-label">Preferable location (city)</label>
									<div class="col-xs-3">
										<input type="input" class="form-control" id="cp-city" name="cp-city" placeholder=" City" required>
									</div>
								</div>

								<hr>

								<div class="form-group row cp-form-group">
									<div class="col-xs-8 flex-center">
										<button type="submit" class="btn btn-blue-yellow" name="cp-submit">Post proposal</button>
									</div>
								</div>
							</form>
							<!--/.CP Form-->';
				}
				?>
			</div>
		</div>
		<!--/.Row 2-->

		<hr>
	</div>
	<!--/.Content-->
</div>
<div>
	<div class="row">
		<div class="col-xs-2">Topic:</div>
		<div class="col-xs-3"><?php echo $_POST["cp-topic"]; ?></div>
	</div>

	<div class="row">
		<div class="col-xs-2">Title:</div>
		<div class="col-xs-3"><?php echo $_POST["cp-title"]; ?></div>
	</div>

	<div class="row">
		<div class="col-xs-2">Description:</div>
		<div class="col-xs-3"><?php echo $_POST["cp-description"]; ?></div><br>
	</div>

	<div class="row">
		<div class="col-xs-3">Acceptable time period</div>
	</div>

	<div class="row">
		<div class="col-xs-2">From:</div>
		<div class="col-xs-2"><?php echo $_POST["cp-from"]; ?></div>
		<div class="col-xs-2">To:</div>
		<div class="col-xs-2"><?php echo $_POST["cp-to"]; ?></div><br>
	</div>

	<div class="row">
		<div class="col-xs-2">Acceptable location:</div>
		<div class="col-xs-3"><?php echo $_POST["cp-location"]; ?></div><br>
	</div>

	<hr>
	<a href="../Eduvent/index.php?page=event-proposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
	<a href="../Eduvent/index.php?page=create-proposal" class="btn btn-propose"><strong>Propose another event</strong></a>
</div>
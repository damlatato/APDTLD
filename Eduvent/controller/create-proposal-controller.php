<?php
//include_once("../Eduvent/model/Event.php");
//include_once("../Eduvent/model/YaasConnector.php");
//include_once("../Eduvent/model/Address.php");
//include_once("../Eduvent/model/User.php");

$cp_topic      =$_POST["cp-topic"];
$cp_title      =$_POST["cp-title"];
$cp_description=$_POST["cp-description"];
$cp_from       =$_POST["cp-from"];
$cp_to         =$_POST["cp-to"];
$cp_location   =$_POST["cp-location"];

$event=new Event(99, '', $cp_title, $cp_description, "26.12.2016 14:56", $cp_location, $cp_topic, 0, '', '');
$user=new User(9999,"Leon Lourie","leonlourie@yahoo.de", 12345, '', '', '', '', '');
$user->proposeEvent($event);
?>

<div>
	<div class="row">
		<div class="col-xs-2">Topic:</div>
		<div class="col-xs-3"><?php echo $cp_topic; ?></div>
	</div>

	<div class="row">
		<div class="col-xs-2">Title:</div>
		<div class="col-xs-3"><?php echo $cp_title; ?></div>
	</div>

	<div class="row">
		<div class="col-xs-2">Description:</div>
		<div class="col-xs-3"><?php echo $cp_description ?></div><br>
	</div>

	<div class="row">
		<div class="col-xs-3">Acceptable time period</div>
	</div>

	<div class="row">
		<div class="col-xs-2">From:</div>
		<div class="col-xs-2"><?php echo $cp_from; ?></div>
		<div class="col-xs-2">To:</div>
		<div class="col-xs-2"><?php echo $cp_to; ?></div><br>
	</div>

	<div class="row">
		<div class="col-xs-2">Acceptable location:</div>
		<div class="col-xs-3"><?php echo $cp_location; ?></div><br>
	</div>

	<hr>
	<a href="../Eduvent/index.php?page=event-proposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
	<a href="../Eduvent/index.php?page=create-proposal" class="btn btn-propose"><strong>Propose another event</strong></a>
</div>
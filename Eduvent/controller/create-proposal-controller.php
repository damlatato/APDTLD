<?php
$cp_topic      =$_POST["cp-topic"];
$cp_title      =$_POST["cp-title"];
$cp_description=$_POST["cp-description"];
$cp_city       =$_POST["cp-city"];

$address=new Address(null, null, null, $cp_city, null, null);
$event=new Event(uniqid(), null, $cp_title, $cp_description, null, $address, $cp_topic, null, null, null); //alternative:md5($str)
$event->deleteEvent();

$user=new User(uniqid(),"Leon Lourie","leonlourie@yahoo.de","12345", $address, "m", "18.01.1990", null, null);
$user->deleteUser();
$user->postUser();

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
		<div class="col-xs-2">Acceptable location:</div>
		<div class="col-xs-3"><?php echo $cp_city; ?></div><br>
	</div>

	<hr>
	<a href="../Eduvent/index.php?page=event-proposals" class="btn btn-list-proposals"><strong>Show posted proposals</strong></a>
	<a href="../Eduvent/index.php?page=create-proposal" class="btn btn-propose"><strong>Propose another event</strong></a>
</div>
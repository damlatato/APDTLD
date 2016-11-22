<?php
if (isset($_GET['root-path'])) {
	$rootPath = $_GET['root-path'];
	define ('ROOT_PATH', $rootPath);
}

include_once(ROOT_PATH . 'model/YaasConnector.php');
spl_autoload_register(function ($class) {
	$file = ROOT_PATH . 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

//require_once ROOT_PATH . 'view/subscribeform.php';

//------------------------------------------

if (isset($_GET['status'])) {
	$f_status = $_GET['status'];
}
else {
	$f_status = "Published";
}

if (isset($_GET['type'])) {
	$f_type = $_GET['type'];
}
else {
	$f_type = "All";
}

if (isset($_GET['topic'])) {
	$f_topic = $_GET['topic'];
}
else {
	$f_topic = "All";
}

if (isset($_GET['priceCategory'])) {
	$f_pricing = $_GET['priceCategory'];
}
else {
	$f_pricing = "All";
}

if (isset($_GET['startDate'])) {
	$f_startDate = $_GET['startDate'];
}
else {
	$f_startDate = "All";
}

if (isset($_GET['endDate'])) {
	$f_endDate = $_GET['endDate'];
}
else {
	$f_endDate = "All";
}

$events=Event::filterEvents($f_status, $f_type, $f_topic, $f_pricing, $f_startDate, $f_endDate);
//echo json_encode($events);
echo $events;
/*
$eventCounter=0;

foreach ($events as $event) {
	if ($eventCounter%3==0) {
		if ($eventCounter>0) {
			echo '</div>';
		}
		echo '<div class="row">';
	}
?>
		<div class="col-md-4 event-market-col">

			<div class="event-card card hoverable">
				<div class="event-image view overlay">
					<img src="
						<?php
							if ($event->getimgHref()!=='') {
								echo $event->getimgHref();
							}
							else {
								echo 'view/images/event-img.png';
							}
						?>" class="em-event-img img-fluid" alt="" height="195px">
					<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
						<div class="mask"></div>
					</a>
				</div>

				<div class="event-body card-block text-xs-center">
					<div class="event-title">
						<h5><?php echo $event->getTopic() ?></h5>
						<h4 class="card-title">
							<strong>
								<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>"><?php echo $event->getTitle() ?></a>
							</strong>
						</h4>
					</div>
					
					<div class="event-text card-text text-xs-left">
						<p><?php echo $event->getDescription() ?></p>
					</div>

					<div class="card-footer">
						<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
						<div class="event-buttons flex-center">
							<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
								<button class="btn btn-blue-yellow-small" type="button">Show details</button>
							</a>

							<div class="event-menu">
											<button class="btn btn-grey-small" type="button">More</button>
											<ul class="event-dropdown-menu">
												<li class="text-xs-left"><a class="event-dropdown-item insert-to-shopping-cart" eventid=<?php echo $event->getId()?> href="#">
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
												<button class="btn btn-blue-yellow add-to-wishlist" eventid=<?php echo $event->getId()?> usermail=<?php $email = $_SESSION['usermail']; $user = User::getUserByEmail($email); echo $user->getEmail();?> ><strong><i class="fa fa-bookmark"></i> Add to wishlist</strong></button><br>
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Add to wishlist</a></li>
												<li class="text-xs-left"><a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
												<li class="text-xs-left">
													<a class="event-dropdown-item subscribe-event" eventid=<?php echo $event->getId()?> href="#"  data-toggle="modal" data-target="#modal-subscribe">
														<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter
													</a>
												</li>
											</ul>
										</div>
						</div>
					</div>

				</div>
			</div>
			<!--/.Card-->
		</div>
<?php 	
	$eventCounter++;
}

if ($eventCounter>0) {
	echo '</div>';
}*/
?>
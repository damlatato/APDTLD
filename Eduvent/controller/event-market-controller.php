<?php
if (isset($_POST['root-path'])) {
	$rootPath = $_POST['root-path'];
	define ('ROOT_PATH', $rootPath);
}

include_once(ROOT_PATH . 'model/YaasConnector.php');
spl_autoload_register(function ($class) {
	$file = ROOT_PATH . 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

require_once ROOT_PATH . 'view/subscribeform.php';

//------------------------------------------

if (isset($_POST['status'])) {
	$f_status = $_POST['status'];
}
else {
	$f_status = "Published";
}

if (isset($_POST['type'])) {
	$f_type = $_POST['type'];
}
else {
	$f_type = "All";
}

if (isset($_POST['topic'])) {
	$f_topic = $_POST['topic'];
}
else {
	$f_topic = "All";
}

if (isset($_POST['priceCategory'])) {
	$f_pricing = $_POST['priceCategory'];
}
else {
	$f_pricing = "All";
}

if (isset($_POST['startDate'])) {
	$f_startDate = $_POST['startDate'];
}
else {
	$f_startDate = "All";
}

if (isset($_POST['endDate'])) {
	$f_endDate = $_POST['endDate'];
}
else {
	$f_endDate = "All";
}

//print_r ("php filter: " . $f_status . ", " . $f_type . ", " . $f_topic . ", " . $f_pricing . ", " . $f_startDate . ", " . $f_endDate);
$events=Event::filterEvents($f_status, $f_type, $f_topic, $f_pricing, $f_startDate, $f_endDate);

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
			<!--Card-->
			<div class="event-card card hoverable">

				<!--Card image-->
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
				<!--/.Card image-->

				<!--Card content-->
				<div class="event-body card-block text-xs-center">
					<!--Category & Title-->
					<div class="event-title">
						<h5><?php echo $event->getTopic() ?></h5>
						<h4 class="card-title">
							<strong>
								<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>"><?php echo $event->getTitle() ?></a>
							</strong>
						</h4>
					</div>
					
					<!--Description-->
					<div class="event-text card-text text-xs-left">
						<p><?php echo $event->getDescription() ?></p>
					</div>

					<!--Card footer-->
					<div class="card-footer">
						<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
						<div class="event-buttons flex-center">
							<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
								<button class="btn btn-blue-yellow-small" type="button">Show details</button>
							</a>

							<div class="event-menu">
								<button class="btn btn-grey-small" type="button">More</button>

								<ul class="event-dropdown-menu">
									<li class="text-xs-left">
										<a class="event-dropdown-item insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a>
									</li>
									<li class="text-xs-left">
										<a class="event-dropdown-item" href="#">
										<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
									</li>
									<li class="text-xs-left">
										<a class="event-dropdown-item" href="#">
										<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
									</li>
									<li class="text-xs-left">
										<a eventid="<?php echo $event->getId() ?>" class="event-dropdown-item subscribe-event" href="#" data-toggle="modal" data-target="#modal-subscribe">
											<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--/.Card footer-->

				</div>
				<!--/.Card content-->

			</div>
			<!--/.Card-->
		</div>
<?php 	
	$eventCounter++;
}

if ($eventCounter>0) {
	echo '</div>';
}
?>
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

if (isset($_POST['sb-filter']) and isset($_POST['sb-value'])) {
	$filter=$_POST['sb-filter'];
	$filterValue=$_POST['sb-value'];

	if (isset($_POST['sb-value2'])) {
		$filterValue2=$_POST['sb-value2'];
	}
	
	if ($filter=='type') {
		$events=Event::getByEventType($filterValue);
	}
	elseif ($filter=='topic') {
		$events=Event::getByTopicAndStatus($filterValue, 'Published');
	}
	elseif ($filter=='pricing') {
		$events=Event::getByPriceCategory($filterValue);
		getByDate($StartDate, $EndDate);
	}
	elseif ($filter=='date') {
		$events=Event::getByDate($filterValue, $filterValue2);
	}
	else {
		$events=Event::getPublishedEventList();
	}
}
else {
	$events=Event::getPublishedEventList();
}

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
			<div class="event-card card">

				<!--Card image-->
				<div class="event-image view overlay hm-white-slight">
					<img src="<?php echo $event->getimgHref() ?>" class="img-fluid" alt="" height="195px">
					<a href="#">
						<div class="mask"></div>
					</a>
				</div>
				<!--/.Card image-->

				<!--Card content-->
				<div class="event-body card-block text-xs-center">
					<!--Category & Title-->
					<div class="event-title">
						<h5><?php echo $event->getTopic() ?></h5>
						<h4 class="card-title"><strong><a href=""><?php echo $event->getTitle() ?></a></strong></h4>
					</div>
					
					<!--Description-->
					<div class="event-text card-text text-xs-left">
						<p><?php echo $event->getDescription() ?></p>
					</div>

					<!--Card footer-->
					<div class="card-footer">
						<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
						<div class="event-buttons flex-center">
							<a href="#">
								<button class="btn btn-blue-yellow-small" type="button">Show details</button>
							</a>

							<div class="event-menu">
								<button class="btn btn-grey" type="button">More</button>

								<ul class="event-dropdown-menu">
									<li class="text-xs-left"><a class="event-dropdown-item insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> href="#">
										<i class="fa fa-shopping-cart " aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
									<li class="text-xs-left"><a class="event-dropdown-item" href="#">
										<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a></li>
									<li class="text-xs-left"><a class="event-dropdown-item" href="#">
										<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
									<li class="text-xs-left"><a class="event-dropdown-item" href="#">
										<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter</a></li>
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
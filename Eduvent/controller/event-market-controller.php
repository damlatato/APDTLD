<?php
$events=Event::getPublishedEventList();
//$events=Event::getEventList();
$eventCounter=0;

foreach ($events as $event) {
	if ($eventCounter%3==0) {
		if ($eventCounter>0) {
			echo '</div>';
		}
		echo '<div class="row">';
	}

	echo '
		<div class="col-md-4 event-market-col">
			<!--Card-->
			<div class="event-card card">

				<!--Card image-->
				<div class="event-image view overlay hm-white-slight">
					<img src="' . $event->getimgHref() . '" class="img-fluid" alt="" height="195px">
					<a href="#">
						<div class="mask"></div>
					</a>
				</div>
				<!--/.Card image-->

				<!--Card content-->
				<div class="event-body card-block text-xs-center">
					<!--Category & Title-->
					<div class="event-title">
						<h5>' . $event->getTopic() . '</h5>
						<h4 class="card-title"><strong><a href="">' . $event->getTitle() . '</a></strong></h4>
					</div>
					
					<!--Description-->
					<div class="event-text card-text text-xs-left">
						<p>' . $event->getDescription() . '</p>
					</div>

					<!--Card footer-->
					<div class="card-footer">
						<div class="ticket-price">Ticket price: ' . $event->getPrice() . '</div>
						<div class="event-buttons flex-center">
							<a href="#">
								<button class="btn btn-event-details" type="button">Show details</button>
							</a>

							<div class="event-menu">
								<button class="btn btn-event-menu" type="button">More</button>

								<ul class="event-dropdown-menu">
									<li class="text-xs-left"><a class="event-dropdown-item" href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
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
		</div>';
	
	$eventCounter++;
}

if ($eventCounter>0) {
	echo '</div>';
}
?>
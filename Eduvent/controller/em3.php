<?php
include("/Applications/XAMPP/xamppfiles/htdocs/DTLD/APDTLD/Eduvent/model/Event.php");
include("/Applications/XAMPP/xamppfiles/htdocs/DTLD/APDTLD/Eduvent/model/YaasConnector.php");
include("/Applications/XAMPP/xamppfiles/htdocs/DTLD/APDTLD/Eduvent/model/Address.php");

$events = Event::getEventList();

foreach ($events as $event) {
	echo '<div class="col-md-3 event-market-col">
		<!--Card-->
		<div class="card">
			<!--Card image-->
			<div class="view overlay hm-white-slight event-image">
				<img src="'.$event->getimgHref().'" class="img-fluid" alt="">
				<a href="#">
					<div class="mask"></div>
				</a>
			</div>
			<!--/.Card image-->

			<!--Card content-->
			<div class="card-block text-xs-center">
				<!--Category & Title-->
				<h5>'.$event->getTitle().'</h5>
				<h4 class="card-title"><strong><a href="">'.$event->getTitle().'</a></strong></h4>

				<!--Description-->
				<p class="card-text event-text text-xs-left">'.$event->getDescription().'</p>

				<!--Card footer-->
				<div class="card-footer">
					<div class="ticket-price">Ticket price: '.$event->getPrice().'€</div>

					<div class="flex-center">
						<a href="#">
							<button class="btn btn-event-details" type="button">Show details</button>
						</a>

						<div class="event-menu">
							<button class="btn btn-event-menu" type="button">More</button>

							<ul class="event-dropdown-menu">
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
}
?>
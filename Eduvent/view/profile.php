<?php
$email = $_SESSION['usermail'];
$user = User::getUserByEmail($email);
?>
<div class="container">

	<div class="row">
		<div class="col-md-12 text-xs-center">

			<div>
				<img src="http://mdbootstrap.com/wp-content/uploads/2015/10/avatar-2.jpg" class="img-responsive">
			</div>
			<h1><?php echo $user->getName(); ?></h1>

		</div>
	</div><br>

	<ul class="nav nav-pills flex-center" role="tablist">
		<li class="nav-item">
			<a class="profile-nav-link nav-link active" data-toggle="tab" href="#profile1" role="tab"><i class="fa fa-user"></i> My data</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile2" role="tab"><i class="fa fa-list-ul" aria-hidden="true"></i> My events</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-ticket" aria-hidden="true"></i> My bookings</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile4" role="tab"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> My proposals</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile5" role="tab"><i class="fa fa-heart" aria-hidden="true"></i> My wishlist</a>
		</li>
	</ul><hr>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="profile1" role="tabpanel">
			<br>
			<p>
			<?php
			echo "E-mail:	".$user->getEmail();
			$address = $user->getAddress();
			echo "<br>";
			echo "Address:	".$address->getfullName();
			echo "<br>";
			echo "Birth Date:	".$user->getBirthDate();
			echo "<br>";
			$s = str_replace('[','',json_encode($user->getInterest()));
			$s = str_replace(']','',$s);
			echo "Interests:	".$s;
			?> 
			</p>
		</div>

		<div class="tab-pane fade" id="profile2" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getOrganizedEvents()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
				$eventCounter=0;
				
				if (count($events)>0){
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
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
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
				}
				
				if ($eventCounter>0) {
					echo '</div>';
				}
				?>
			
			</p>
		</div>

		<div class="tab-pane fade" id="profile3" role="tabpanel">
			<br>
			<p>
			<?php 
				$bookings = $user->getBookings();
				
				$bookingCounter=0;
				
				if (count($bookings)>0){
				foreach ($bookings as $booking) {
					$bookedEventId = $booking->getEventId();
					$bookingTime = $booking->getbookingTime();
					$event = Event::getById($bookedEventId);
					if ($bookingCounter%3==0) {
						if ($bookingCounter>0) {
							echo '</div>';
						}
						echo '<div class="row">';
					}
				
					?>
						<div class="col-md-4 event-market-col">
							<!--Card-->
							<h5><?php echo $bookingTime ?></h5>
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
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
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
					$bookingCounter++;
				}
				}
				
				if ($bookingCounter>0) {
					echo '</div>';
				}
				?>
			</p>
		</div>

		<div class="tab-pane fade" id="profile4" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getProposedEvents()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
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
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
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
			</p>
		</div>

		<div class="tab-pane fade" id="profile5" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getWishlist()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
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
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
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
			</p>
		</div>
	</div>

</div>
<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-1" data-slide-to="1"></li>
		<li data-target="#carousel-example-1" data-slide-to="2"></li>
		<li data-target="#carousel-example-1" data-slide-to="3"></li>
		<li data-target="#carousel-example-1" data-slide-to="4"></li>
	</ol>
	<!--/.Indicators-->

	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div id="carousel-item-overlay" class="carousel-item-overlay hidden">
				<div id="carousel-overlay-text">
					<br/><br/>
					<span id="text-carousel-1">Finding educational events.</span>
					<span id="text-carousel-2">Easily.</span><br><br/><br/><br/><br/><br/><br/>
					<a href="../Eduvent/index.php?page=signup">
						<button class="btn" id="btn-signup-carousel" type="button">Sign up</button>
					</a>
				</div>
			</div>
			<img src="../Eduvent/view/images/c1.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c2.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c3.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c4.jpg" class="img-fluid img-repsonsive">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c5.jpg" class="img-fluid img-repsonsive">
		</div>
	</div>
	<!--/.Slides-->

	<!--Controls-->
	<a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
		<span class="icon-prev" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
		<span class="icon-next" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container">
	<div class="row">

		<!--Sidebar (Topics)-->
		<div class="col-md-2">
			<?php
				include("sidebar-home.php");
			?>
		</div>
		<!--/.Sidebar (Topics)-->
		
		<!--Content-->
		<div class="col-md-10">
			<!--Row 1 (Popular searches) -->
			<div class="row">
				<div class="col-md-12">
					<?php
						include("search-tags.php");
					?>
				</div>
			</div>
			<!--/.Row 1-->

			<!--Navbar (Event market filter bar) -->
			<?php
				include("search-bar.php");
			?>
			<!--/.Navbar-->

			<!--Row 3 (Event lists)-->
			<div class="row evet-list-area">
				<div class="col-md-6">
					<div class="panel panel-default event-list">
						<div class="panel-heading"><h5 class="font-weight-bold"><b>Highlights</b></h5></div>
						<div class="panel-body list-group event-items highlights">
						<?php
							$events=Event::getPublishedEventList();
							for ($i = 0; $i < 4; $i++) {
								echo '<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'" class="list-group-item card-overlay event-list-item">';
								echo '<div class="white-text text-xs-left event-list-item-text">';
								echo '<span class="event-list-item-category"style="color:#1694b2;">Category</span>';
								echo '<h3>'.$events[$i]->getTitle().'</h3>';
								echo '<span class="event-list-item-date">'.$events[$i]->getDatetime().', '.$events[$i]->getLocation()->getfullName().'</span>';
								echo '</div>';
								echo '</a>';
							}
						?>
						</div>
					</div>
				</div>
			
				<div class="col-md-6">
					<div class="panel panel-default event-list">
						<div class="panel-heading"><h5 class="font-weight-bold"><b>Newest nearby</b></h5></div>
						<div class="panel-body list-group event-items newest">
						<?php
							for ($i = 4; $i < 8; $i++) {
								echo '<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'" class="list-group-item card-overlay event-list-item">';
								echo '<div class="white-text text-xs-left event-list-item-text">';
								echo '<span class="event-list-item-category"style="color:#1694b2;">Category</span>';
								echo '<h3>'.$events[$i]->getTitle().'</h3>';
								echo '<span class="event-list-item-date">'.$events[$i]->getDatetime().', '.$events[$i]->getLocation()->getfullName().'</span>';
								echo '</div>';
								echo '</a>';
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<!--/.Row 3-->
		
			<!--Row 4 (Popular events) -->
			<div class="row" id="event-market-area-home">
				<h5 class="font-weight-bold">Popular events</h5>
				<div class="col-md-12 event-market-area">
				<div class="row">
					<div class="col-md-4 event-market-col">
						<!--Card-->
						<div class="event-card card">

							<!--Card image-->
							<div class="event-image view overlay hm-white-slight">
								<img src="https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg" class="img-fluid">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="event-body card-block text-xs-center">
								<!--Category & Title-->
								<div class="event-title">
									<h5>Topic</h5>
									<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>
								</div>
								
								<!--Description-->
								<div class="event-text card-text text-xs-left">
									<p>
										Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
									</p>
								</div>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>
									<div class="event-buttons flex-center">
										<a href="#">
											<button class="btn btn-blue-yellow-small" type="button">Show details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-grey-small" type="button">More</button>

											<ul class="event-dropdown-menu">
												<li class="text-xs-left"><a class="event-dropdown-item" href="#">
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
												<li class="text-xs-left"><a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a></li>
												<li class="text-xs-left"><a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
												<li class="text-xs-left">
													<a class="event-dropdown-item" href="#">
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
					<div class="col-md-4 event-market-col">
						<!--Card-->
						<div class="event-card card">

							<!--Card image-->
							<div class="event-image view overlay hm-white-slight">
								<img src="https://static.pexels.com/photos/177598/pexels-photo-177598-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="event-body card-block text-xs-center">
								<!--Category & Title-->
								<div class="event-title">
									<h5>Topic</h5>
									<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>
								</div>

								<!--Description-->
								<div class="card-text event-text text-xs-left">
									<p>
										Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
									</p>
								</div>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="event-buttons flex-center">
										<a href="#">
											<button class="btn btn-blue-yellow-small" type="button">Show details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-grey-small" type="button">More</button>

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
					</div>
					<div class="col-md-4 event-market-col">
						<!--Card-->
						<div class="event-card card">

							<!--Card image-->
							<div class="event-image view overlay hm-white-slight">
								<img src="https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="event-body card-block text-xs-center">
								<!--Category & Title-->
								<div class="event-title">
									<h5>Topic</h5>
									<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>
								</div>

								<!--Description-->
								<div class="card-text event-text text-xs-left">
									<p>
										Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
									</p>
								</div>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="event-buttons flex-center">
										<a href="#">
											<button class="btn btn-blue-yellow-small" type="button">Show details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-grey-small" type="button">More</button>

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
					</div>
				</div>
				<div class="row">
					<?php
						for ($i = 8; $i < 11; $i++) {
							if ($events[$i]->getimgHref()!=='') {
								$eventImage = $events[$i]->getimgHref();
								//$eventImage = ROOT_PATH . $events[$i]->getimgHref();
							}
							else {
								$eventImage = ROOT_PATH . '/view/images/event-img.png';
							}

							echo '
							<div class="col-md-4 event-market-col">
								<div class="event-card card">
									<div class="event-image view overlay hm-white-slight">
										<img src="' . $eventImage . '" class="img-fluid">
										<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'">
											<div class="mask"></div>
										</a>
									</div>

									<div class="event-body card-block text-xs-center">
										<div class="event-title">
											<h5>'.$events[$i]->getTopic().'</h5>
											<h4 class="card-title"><strong><a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'">'.$events[$i]->getTitle().'</a></strong></h4>
										</div>
										
										<div class="event-text card-text text-xs-left">
											<p>'.$events[$i]->getDescription().'</p>
										</div>

										<div class="card-footer">
											<div class="ticket-price">'.$events[$i]->getPrice().'€</div>
											<div class="event-buttons flex-center">
												<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'">
													<button class="btn btn-blue-yellow-small" type="button">Show details</button>
												</a>

												<div class="event-menu">
													<button class="btn btn-grey-small" type="button">More</button>

													<ul class="event-dropdown-menu">
														<li class="text-xs-left"><a class="event-dropdown-item" href="#">
															<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
														<li class="text-xs-left"><a class="event-dropdown-item" href="#">
															<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a></li>
														<li class="text-xs-left"><a class="event-dropdown-item" href="#">
															<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
														<li class="text-xs-left">
															<a class="event-dropdown-item" href="#">
																<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>';
						}
					?>
				</div>
			</div>
			<!--/.Row 4-->

		</div>
		<!--/.Content-->
	
	</div>
</div>

<script>
$( document ).ready(function() {
	$("#carousel-overlay-text").hide();
	overlay=$("#carousel-item-overlay");
	overlay.hide();
	$("#carousel-overlay-text").removeClass("hidden");
	overlay.removeClass("hidden");
	
	overlay.delay(700).show("slide", { direction: "left" }, 1500);
	$("#carousel-overlay-text").delay(1600).show("slide", { direction: "left" }, 1400);
});
</script>
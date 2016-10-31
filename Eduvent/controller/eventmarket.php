<div class="container">

	<!--Sidebar (Topics)-->
	<div class="col-md-2">

<?php
	include("sidebar-topics.php");
?>

	</div>
	<!--/.Sidebar (Topics)-->

	<!--Content-->
	<div class="col-md-10">

		<!--Row 2 (Popular searches) -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default popular-search-tags">
					<div class="panel-heading"><h5 class="font-weight-bold"><b>Event search</b></h5></div>
					<div class="panel-body list-group flex-center grey lighten-5">
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
						<span class="tag tag-default"><a>Search tag</a></span>
					</div>
				</div>
			</div>
		</div>
		<!--/.Row 2-->

		<!--Row 3: Navbar (Event market filter bar) -->
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-light grey lighten-5">
					<div class="collapse navbar-toggleable-xs">
						<div class="pull-xs-left">

							<form class="form-inline" id="search-form" onsubmit="runSearch()">
								<i class="fa fa-search" aria-hidden="true"></i><input class="form-control" id="search-input" type="text" placeholder="Search">
								<span>within<button class="btn btn-info-outline waves-effect dropdown-toggle" type="button">5 km</button>
									from
									<div style="display:inline-block;">
										<button class="btn btn-info-outline waves-effect dropdown-toggle" type="button">Mannheim, DE</button>
										<!--<div class="dropdown-menu">

										</div>-->
									</div>
								</span>
							</form>

						</div>
						<div class="pull-xs-right">
							<div class="btn-toolbar" role="toolbar" aria-label="view-options">
								<div class="btn-group" role="group" aria-label="view-style">
									<button type="button" class="btn btn-cyan" style="background-color:#1694b2;">
										<i class="fa fa-th-large" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-cyan" style="background-color:#1694b2;">
										<i class="fa fa-th-list" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!--/.Row 3: Navbar-->

		<!--Row 4 (Event market) -->
		<div class="row" id="event-market-area">
			<div class="col-md-12 event-market-area grey lighten-5" id="search-results">
				<div class="row">
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/177598/pexels-photo-177598-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/159888/pexels-photo-159888-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/25970/pexels-photo-large.jpg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
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
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/110470/pexels-photo-110470-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/128402/pexels-photo-128402-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/7374/startup-photos-large.jpg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
										</div>
									</div>

								</div>
								<!--/.Card footer-->

							</div>
							<!--/.Card content-->

						</div>
						<!--/.Card-->
					</div>
					<div class="col-md-3 event-market-col">
						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay hm-white-slight event-image">
								<img src="https://static.pexels.com/photos/57825/pexels-photo-57825-large.jpeg" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>
							<!--/.Card image-->

							<!--Card content-->
							<div class="card-block text-xs-center">
								<!--Category & Title-->
								<h5>Topic</h5>
								<h4 class="card-title"><strong><a href="">Event title</a></strong></h4>

								<!--Description-->
								<p class="card-text event-text text-xs-left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

								<!--Card footer-->
								<div class="card-footer">
									<div class="ticket-price">Ticket price: 49€</div>

									<div class="flex-center">
										<a href="#">
											<button class="btn btn-event-details" type="button">Event details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-event-menu" type="button">More</button>

											<div class="event-dropdown-menu">
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Save to wishlist</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a>
												<a class="event-dropdown-item" href="#">
													<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company's newsletter</a>
											</div>
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
			</div>
		</div>
		<!--/.Row 4-->

	</div>
	<!--/.Content-->
</div>
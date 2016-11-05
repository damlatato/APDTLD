<div class="container">

	<!--Sidebar (Topics)-->
	<div class="col-md-2">
		<?php
			include("sidebar.php");
		?>
	</div>
	<!--/.Sidebar (Topics)-->

	<!--Content-->
	<div class="col-md-10">

		<!--Row 1 (Popular search tags) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("search-tags.php");
				?>
			</div>
		</div>
		<!--/.Row 1-->

		<!--Row 2: Navbar (Event market search bar) -->
		<div class="row">
			<div class="col-md-12">
				<?php
					include("search-bar.php");
				?>
			</div>
		</div>
		<!--/.Row 2: Navbar-->

		<!--Row 3 (Event market) -->
		<div class="row" id="event-market-area">
			<div class="col-md-12 event-market-area grey lighten-5" id="search-results">
				<div class="row list-group">
					<div class="col-md-4 event-market-col">
						<!--Card-->
						<div class="event-card card">

							<!--Card image-->
							<div class="event-image view overlay hm-white-slight">
								<img src="https://static.pexels.com/photos/191830/pexels-photo-191830-large.jpeg" class="img-fluid" alt="" height="195px">
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
					</div>
				</div>
				<div class="row list-group">
				</div>
			</div>
		</div>
		<!--/.Row 3-->

	</div>
	<!--/.Content-->
</div>
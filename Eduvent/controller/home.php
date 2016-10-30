<script>
$( document ).ready(function() {
	$("#carousel-overlay-text").hide();
	overlay=$("#carousel-item-overlay");
	overlay.hide();
	el=$("#carousel-example-1");
	//overlay.height("400px");

	/*overlay.delay(800).animate({
		width: el.css("width")
	}, 2200 );*/
	
	overlay.delay(800).show("slide", { direction: "left" }, 1500);
	$("#carousel-overlay-text").delay(1600).show("slide", { direction: "left" }, 1400);
});
</script>

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
			<div id="carousel-item-overlay" class="carousel-item-overlay">
				<div id="carousel-overlay-text">
					<br/><br/>
					<span id="text-carousel-1">Finding education events.</span>
					<span id="text-carousel-2">Easily.</span><br><br/><br/><br/><br/><br/><br/>
					<a href="../Eduvent/index.php?page=signup">
						<button class="btn" id="btn-signup-carousel" type="button">Sign up</button>
					</a>
				</div>
			</div>
			<img id="carousel-image-1" src="../Eduvent/view/images/c1.jpg">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c2.jpg">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c3.jpg">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c4.jpg">
		</div>
		<div class="carousel-item">
			<img src="../Eduvent/view/images/c5.jpg">
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
				include("sidebar-topics.php");
			?>

		</div>
		<!--/.Sidebar (Topics)-->
		
		<!--Content-->
		<div class="col-md-10">
			<!--Row 1 (Event lists)-->
			<div class="row evet-list-area">

				<div class="col-md-6">
					<div class="panel panel-default event-list">
						<div class="panel-heading"><h5 class="font-weight-bold"><b>Highlights</b></h5></div>
						<div class="panel-body list-group event-items highlights">

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category"style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

						</div>
					</div>
				</div>
			
				<div class="col-md-6">
					<div class="panel panel-default event-list">
						<div class="panel-heading"><h5 class="font-weight-bold"><b>Newest nearby</b></h5></div>
						<div class="panel-body list-group event-items newest">

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

							<a href="#" class="list-group-item card-overlay event-list-item">
								<div class="white-text text-xs-left event-list-item-text">
									<span class="event-list-item-category" style="color:#1694b2;">Category</span>
									<h3>Event Title</h3>
									<span class="event-list-item-date">20.10., Mannheim</span>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
			<!--/.Row 1-->

			<!--Row 2 (Popular searches) -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default popular-search-tags">
						<div class="panel-heading"><h5 class="font-weight-bold"><b>Popular search tags</b></h5></div>
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
			<div class="row" id="event-market-area-home">
				<div class="col-md-12">

					<div class="event-market-area card grey lighten-5" id="search-result" hidden></div>

					<div class="grey lighten-5" style="padding:4px;min-height:20em;">
						<div class="row">
							<div class="col-md-4">

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight">
										<img src="https://static.pexels.com/photos/106344/pexels-photo-106344-large.jpeg" class="img-fluid" alt="">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->

							</div>
							<div class="col-md-4">

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight event-image-home">
										<img src="https://static.pexels.com/photos/59100/pexels-photo-59100-large.jpeg" class="img-fluid" alt="">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->

							</div>
							<div class="col-md-4">

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight event-image-home">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight event-image-home">
										<img src="https://static.pexels.com/photos/132700/pexels-photo-132700-large.jpeg" class="img-fluid" alt="">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->

							</div>
							<div class="col-md-4">						

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight event-image-home">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							
							</div>
							<div class="col-md-4">

								<!--Card-->
								<div class="card">

									<!--Card image-->
									<div class="view overlay hm-white-slight event-image-home">
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
											<span class="left">49€</span>
											<span class="right">
												<a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
												<a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
											</span>
										</div>

									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.Row 4-->

		</div>
		<!--/.Content-->
	
	</div>
</div>
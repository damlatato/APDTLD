<?php
include 'header.php';
// include 'livechat.php';
?>


<!--Main layout-->
<main>

<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" style="height:310px;">
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
    <div class="carousel-inner" role="listbox" style="height:310px;">

        <div class="carousel-item active">
            <img src="includes/images/c1.jpg" alt="First slide">
        </div>

        <div class="carousel-item">
            <img src="includes/images/c2.jpg" alt="Second slide">
        </div>

        <div class="carousel-item">
            <img src="includes/images/c3.jpg" alt="Third slide">
        </div>

        <div class="carousel-item">
            <img src="includes/images/c4.jpg" alt="Third slide">
        </div>

        <div class="carousel-item">
            <img src="includes/images/c5.jpg" alt="Third slide">
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

	<!--Row 1 (Event lists)-->
	<div class="row evet-list-area" style="background-color:lightgreen;">

		<div class="col-md-6">
			<div class="eventlist panel panel-default">
				<div class="panel-heading"><h4>Highlights</h4></div>
				<div class="list-group event-items">

					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 1</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 2</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 3</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 4</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>

				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="eventlist panel panel-default">
				<div class="panel-heading"><h4>Newest nearby</h4></div>
				<div class="list-group">

					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 1</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 2</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 3</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>
					<a href="#" class="list-group-item event-item">
						<div>
							<h4 class="list-group-item-heading">Event 4</h4>
							<p class="list-group-item-text">Details<br>Description</p>
						</div>
					</a>

				</div>
			</div>
		</div>
	</div>
	<!--/.Row 1-->

	<!--Row 2 (Frequent searches) -->
	<div class="row search-terms-area">
	
		<div class="search-terms-heading"><h4>Frequent searches</h4></div>
		<div class="search-terms-items">
			<a href="#" class="search-terms-item"><div>Topic 1</div></a>
			<a href="#" class="search-terms-item"><div>Topic 2</div></a>
			<a href="#" class="search-terms-item"><div>Topic 3</div></a>
			<a href="#" class="search-terms-item"><div>Topic 4</div></a>
			<a href="#" class="search-terms-item"><div>Topic 5</div></a>
		</div>
	</div>
	<!--/.Row 2-->
	
	<!--Row 3: Navbar (Event market filter bar) -->
	<div class="row">
		<nav class="navbar navbar-light teal lighten-4" id="filter-navbar">
			<div class="collapse navbar-toggleable-xs">
				<div class="col-md-5">
					<form class="form-inline" id="search-form" onsubmit="runSearch()">
						<input class="form-control" id="search-input" type="text" placeholder="Search">
						<span>within 50 km from Mannheim, DE</span>
					</form>
				</div>

				<div class="col-md-7">
					<div class="btn-toolbar" role="toolbar" aria-label="view-options">
						<div class="btn-group" role="group" aria-label="pricing-cat" style="margin-right:12px;">
							<button type="button" class="btn btn-default">All</button>
							<button type="button" class="btn btn-default">Free</button>
							<button type="button" class="btn btn-default">Paid</button>
						</div>
						<div class="btn-group" role="group" aria-label="view-style">
							<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th">Grid</span></button>
							<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-list">List</span></button>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<!--/.Row 3: Navbar-->

	

	<!--/.Row 3-->
	
	<!--Row 4 (Event market) -->
	<div class="row event-market-area" style="background-color:lightgrey;height:300px;">
		<div id="search-result"></div>
	</div>
	<!--/.Row 4-->

	<!--Row 5 (Topics)-->
	<div class="row topics-area" style="background-color:MediumSpringGreen;">
		<div class="col-md-12"><span><h4>Topics</h4></span></div>
		
		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-business.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Business</footer>
				</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-computing.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Computing</footer>
				</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-science.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Science</footer>
				</div>
			</a>
		</div>
		
		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-economics.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Economics</footer>
				</div>
			</a>
		</div>
		
		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-business.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Economics</footer>
				</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="card topic-tile">
				<img class="card-img-top topic-card-img" src="includes/images/ind-economics.jpg" alt="Card image cap">
				<div class="card-block topic-card">
					<footer class="topic-card-footer">Economics</footer>
				</div>
			</a>
		</div>

	</div>
	<!--/.Row 5-->

	<!--Row -->
	<div class="row" style="background-color:MediumSpringGreen;margin-top:10px;">
		<div class="col-md-4">
			<div class="eventlist panel panel-default">
				<div class="panel-heading">Search term</div>
				<div class="list-group">

					<a href="#" class="list-group-item list-group-item">
						<h4 class="list-group-item-heading">Search term</h4>
					</a>

					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Search term</h4>
					</a>
					
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Search term</h4>
					</a>
					
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Search term</h4>
					</a>

				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="eventlist panel panel-default">
				<div class="panel-heading">Event topics</div>
				<div class="list-group">

					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Topic</h4>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Topic</h4>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Topic</h4>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Topic</h4>
					</a>

				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="eventlist panel panel-default">
				<div class="panel-heading">Events by city</div>
				<div class="list-group">

					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Event 1</h4>
						<p class="list-group-item-text">Description</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Event 2</h4>
						<p class="list-group-item-text">Description</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Event 3</h4>
						<p class="list-group-item-text">Description</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Event 4</h4>
						<p class="list-group-item-text">Description</p>
					</a>

				</div>
			</div>
		</div>
	</div>
	<!--/.Row -->
</div>

</main>
<!--/.Main layout-->

<script type="text/javascript" src="js-scripts/search.js"></script>

<?php
include 'footer.php';
?>

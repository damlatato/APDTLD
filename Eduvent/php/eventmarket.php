<!DOCTYPE html>
<html lang="en">

<head>
<style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
	
        html,
        body {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;

        }
        
		
        footer.page-footer {
            background-color: #4285F4;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }
        /* Carousel*/
        
        .carousel {
            height: 250px;
			margin-bottom: 10px;
        }
        
        @media (max-width: 776px) {
            .carousel {
                height: 300px;
            }
        }
        
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        .carousel-item:nth-child(1) {
            background-image: url("http://coverjunction.s3.amazonaws.com/manual/low/colorful4.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            opacity: 0.4;
        }
        
        .carousel-item:nth-child(2) {
            background-image: url("http://www.mercadodeterras.com.br/public/main/assets/images/carousel/carousel-img-2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .carousel-item:nth-child(3) {
            background-image: url("http://www.mercadodeterras.com.br/public/main/assets/images/carousel/carousel-img-5.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }
	
	.topics-area {
	color: #48453d;
	margin-top: 10px;
	margin-bottom: 10px;
	overflow: hidden;
}

.topics-heading {
	background-color: lavender;
	color: #48453d;
	font-size: 16px;
	padding: 4px;
	margin-bottom: 2px;
}

.topic-items {
	background-color: lavender;
	text-align: center;
}

.topic-item {
	background-color: #756f5d;
	padding: 12px;
	color: #fff;
	display: inline-block;
	font-size: 14px;
	line-height: 5px;
	border-radius: 9px;
	margin-top: 5px;
	margin-bottom: 5px;
	margin-left: 10px;
	margin-right: 10px;
}

.topic-item:hover {
	background-color: #a38018;
	color: White;
}

.scroll-event-market{
    max-height: 690px;
    overflow-y:scroll; 
}

.scr{
	max-height:400px;
	overflow-y: scroll;
}
</style>
	
</head>

<body>
<!--Main layout-->
<main>

<div class="container">


<!--Header of the page-->
<div class="row" style="background-color: lightgreen;">
    <div class="col-md-3" >
            <img src="../Eduvent/images/Eduvent3.png" alt="test" class="img-responsive">
			</div>
			
    <div class="col-md-7" style={ align="center"; valign="bottom";} > 
		
		    <!-- the uper text-->
		    <div class="row"> 
				<h1><strong>Save time, save effort, be eficient... </strong></h1>
		     </div>
		
		    <!-- the navigation bar-->
		    <div class="row" >
		    <nav class="navbar navbar-dark " >
       
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item" >
                        <a class="nav-link" href="#">Event Market</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">My Events</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">Create Event</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#">My Payments</a>
                    </li>
                    
                </ul>
                <!--Search form-->
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search">
                </form>        
            </nav>
		</div>
</div>

    <div class="col-md-1"  style="valign: top">
	<div style="width: 60px; height: 60px;">
	            <img src="../Eduvent/images/push-notification.png" alt="test" class="img-responsive img-circle">

</div>
</div>
 <div class="col-md-1" style="valign: top" >
	<div style="width: 60px; height: 60px;">
			    <img src="../Eduvent/images/funny-profile-pictures.jpg" alt="test" class="img-responsive img-circle">

</div>
</div>
</div>


	<!--Row 2 (Popular topics) -->
	<div class="row topics-area">
	
			<div class="topics">
				<div class="topics-heading">Popular topics</div>
				<div class="topic-items">
					<a href="#" class="topic-item"><div>Topic 1</div></a>
					<a href="#" class="topic-item"><div>Topic 2</div></a>
					<a href="#" class="topic-item"><div>Topic 3</div></a>
					<a href="#" class="topic-item"><div>Topic 4</div></a>
					<a href="#" class="topic-item"><div>Topic 5</div></a>
				</div>
			</div>

	</div>
	<!--/.Row 2-->
	
	<!--Row 3 (Event market buttons) -->
	<div class="row" style="background-color:lavender;">

		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-4">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
					</div><!-- /.col-md-4 -->
					
					<div class="col-md-4" style="margin-top:19px;">
						<span>within 50 km from Mannheim, DE</span>
					</div>

					<div class="col-md-4" style="margin-top:11px">
						<div class="btn-toolbar pull-right" role="toolbar" aria-label="view-options">
							<div class="btn-group" role="group" aria-label="pricing-cat" style="margin-right:12px;">
								<button type="button" class="btn btn-default">All</button>
								<button type="button" class="btn btn-default">Free</button>
								<button type="button" class="btn btn-default">Paid</button>
							</div>
							<div class="btn-group" role="group" aria-label="view-style">
								<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th"></span></button>
								<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></button>
							</div>
						</div>
					</div><!-- /.col-md-4 -->
			</div><!-- /.row -->
			
		</div>

	</div>
	<!--/.Row 3-->


	<!--Event market-->
	<div class="row" style="background-color: transparent;">

	<div class="container" >
    <div class="row">
       
   	   <div class="col-md-4 indtile">
            <img src="../Eduvent/images/bigdata.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block"> 
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e3.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e4.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e5.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e6.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e7.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e8.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>'
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e4.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e10.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e11.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e3.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				
				</div>
				
				
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
				<div class="col-md-4 indtile">
            <img src="../Eduvent/images/e1.jpg" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h4><strong>Title</strong></h4>
            </div>
			<div class="card-block">
					<footer class="indfooter">
					        <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							</footer>
				</div> 
				</div>
			
				
</div>
      
 </div>
  
  
  
		</div>
</div>
</main>
<!--/.Main layout-->

</body>
</html>
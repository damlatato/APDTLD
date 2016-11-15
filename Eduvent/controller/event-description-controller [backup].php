
<div class="alert alert-success" role="alert" id="successfulbuyed" style="display: none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Event added to shopping cart!</strong> Go to <a href="#" class="alert-link">Shopping cart </a>to see the content.
</div>

<!--<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">-->

    <!-- theme stylesheet 
    <link href="../view/css/style.default.css" rel="stylesheet" id="theme-stylesheet">-->

    <!-- your stylesheet with modifications
    <link href="../view/css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">

</head>

<body> -->

<div id="content">
				
    <div class="col-md-2"> <!--side bar--> 
	</div>
				
    <div class="col-md-10 box">
	
	<?php
		$event = Event::getById($eventId);
      ?>
	  
	<div class="row">
        <div class="col-sm-8">
            <div id="mainImage">
            <img src="<?php echo $event->getimgHref() ?>" alt="" class="img-responsive">
            </div>
        </div>
		
        <div class="col-sm-4">
		     <div class="box">
		         <div class= "row">
                     <h2 class="text-center"><strong><?php echo $event->getTitle() ?></strong></h2>
		      	     <hr>
		         </div>
			     <div class= "row text-center ">
                     <h5><strong><?php echo $event->getPrice() .' &euro;' ?> </strong><h5>
				     <h5 style= "opacity: 0.4 ;"> <?php echo $event->getUsersNumber() . ' users participating' ?><h5>
					 <hr>
				</div>
		        <div class="row text-center ">	
		             <h6 style= "opacity: 0.4 ;">Number of tickets<h6>
                     <div class="input-group spinner">
                     <input id="eventquantity" type="text" class="form-control" value="1">
                     <div class="input-group-btn-vertical">
                     <button class="btn btn-default count-amount-up" type="button"><i class="fa fa-caret-up"></i></button>
                     <button class="btn btn-default count-amount-down" type="button"><i class="fa fa-caret-down"></i></button>
                     </div>
                     </div>
                </div>
				<div class="row text-center buttonsr">
                     <a class="btn btn-primary insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> ><i class="fa fa-shopping-cart"></i> Add to shopping cart</a> 
                     <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
				</div>
             </div>
	     </div>
     </div>
	 
                            
                            
	<div class="row box" id="details">
	     <h2>Event details</h2>

	  <div class="span12">
         <div id="tab" class="btn-group" data-toggle="buttons-radio">
             <a href="#description2" class="btn btn-large btn-info active" data-toggle="tab">Description</a>
             <a href="#Location" class="btn btn-large btn-info" data-toggle="tab">Location</a>
             <a href="#contact2" class="btn btn-large btn-info"  data-toggle="tab">Contact Us</a>
         </div>

         <div class="tab-content">
             <div class="tab-pane active" id="description">
                <br>
                <div class="row">
				<?php echo $event->getDescription() ?>
                </div>
             </div>
         <div class="tab-pane" id="Location">
             <br>
             <div class="row">
                 <div class="span6">
                     <p>
					 <div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;">
					 <div id="display-google-map" style="height:100%; width:100%;max-width:100%;">
					 <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
					 </iframe></div><a class="embed-map-code" rel="nofollow" href="http://www.interserver-coupons.com" id="get-data-for-embed-map">http://www.interserver-coupons.com</a>
					 <style>#display-google-map .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
				     </div>
				     <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=19d8e079-6764-1a8e-4e76-1778be7b98fd&c=embed-map-code&u=1478371220" defer="defer" async="async">
				     </script>
					 </p> 
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="contact2">
             <br>
             <p class="lead">Contact Us</p>
             <form class="well span8">
                 <div class="row">
				 <?php echo $event->geteventOrganizer() ?>
                    <div class="span3">
                         <input type="text" class="span3" placeholder="Your First Name">
                         <input type="text" class="span3" placeholder="Your Last Name">
                         <input type="text" class="span3" placeholder="Your email address">
                         <label>Subject
                         <select id="subject" name="subject" class="span3">
                         <option value="na" selected="">Choose One:</option>
                         <option value="service">General Customer Service</option>
                         <option value="suggestions">Suggestions</option>
                         <option value="product">Product Support</option>
                         </select>
                         </label>
                     </div>
                     <p>
				     <div class="span5">
                     <textarea name="message" id="message" class="input-xlarge span5" rows="5" placeholder="Write your message"></textarea>
                     </div>
				     </p>
                     <button type="submit" class="btn btn-primary pull-right">Send</button>
                 </div>
             </form>
          </div>
       </div>
     </div>
    </div>
	     <div class="social">
             <h4>Share this event with friends</h4>
             <p>
             <!-- Email -->
             <a href="mailto:?Subject=Eduvent- Event&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 #">
                <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
             </a>
 
             <!-- Facebook -->
             <a href="http://www.facebook.com/sharer.php?u= #" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
             </a>
    
             <!-- Google+ -->
             <a href="https://plus.google.com/share?url= #" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
             </a>
    
             <!-- LinkedIn -->
             <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url= #" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
             </a>
    
             <!-- Pinterest -->
             <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
               <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
             </a>
    
             <!-- Print -->
             <a href="javascript:;" onclick="window.print()">
               <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
             </a>
             </p>
         </div>
     </div>
</div>


    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ 
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>-->


<script>(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--
</body>

</html>-->
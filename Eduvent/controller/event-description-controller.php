<?php
	require_once ROOT_PATH . 'view/subscribeform.php';
	$event = Event::getById($eventId);
	$eventLocation = $event->getLocation(); //required later for google maps API
?>
	


<div id="content">
    <div class="col-md-12">
		<div class="row">
			<div class="col-md-7">
				<img src="
						<?php
							if ($event->getimgHref()!=='') {
								echo $event->getimgHref();
							}
							else {
								echo 'view/images/event-img.png';
							}
						?>" class="event-img img-fluid">
			</div>	
			<div class="col-sm-5">
				<div class="row">
					<h2 class="text-center"><strong><?php echo $event->getTitle() ?></strong></h2>
					<hr>
				</div>
				<div class="row text-center">
					<h5>Ticket price: <strong><?php echo $event->getPrice() .' &euro;'; ?> </strong></h5>
					<h6><?php echo $event->getUsersNumber() . ' people booked'; ?></h6>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="spinner">
							<h6>Number of tickets</h6>
							<input id="eventquantity" type="text" class="form-control text-xs-right" value="1" style="width:5em;">
							<div class="btn-group">
								<button class="btn btn-standard count-amount-up" type="button"><strong>+</strong></button>
								<button class="btn btn-standard count-amount-down" type="button"><strong>–</strong></button>
							</div>
						</div>
					</div>
				<!--</div>
				<div class="row">-->
					<div class="col-md-8">
						<button class="btn btn-blue-yellow insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> ><strong><i class="fa fa-shopping-cart"></i> Add to shopping cart</strong></button><br>
						<button href="" id="gift" class="btn btn-dark-grey-yellow insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> style="min-width:192px;"><i class="fa fa-gift" aria-hidden="true"></i> Buy as gift</button><br>
						<button class="btn btn-blue-yellow add-to-wishlist" eventid=<?php echo $event->getId()?> usermail=<?php if (isset($_SESSION['usermail'])) { $email = $_SESSION['usermail']; $user = User::getUserByEmail($email); echo $user->getEmail(); } else { echo "NOEMAIL"; }?> ><strong><i class="fa fa-bookmark"></i> Add to wishlist</strong></button><br>
						<a href="" eventid="<?php echo $event->getId() ?>" class="btn btn-dark-grey-yellow subscribe-event" href="#" data-toggle="modal" data-target="#modal-subscribe"><i class="fa fa-feed" aria-hidden="true"></i> Subscribe company newsletter</a>
					</div>
				</div>
				<div class="social">
					<hr>
					<h5>Share this event with friends</h5>
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

		<div class="row" id="details">
			<h3>Event details</h3><br>

			<ul class="nav nav-pills" role="tablist">
				<li class="nav-item">
					<a class="profile-nav-link nav-link active" data-toggle="tab" href="#ed-1" role="tab">Event description</a>
				</li>
				<li class="nav-item">
					<a class="profile-nav-link nav-link" data-toggle="tab" href="#ed-2" role="tab">Event location</a>
				</li>
				<li class="nav-item">
					<a class="profile-nav-link nav-link" data-toggle="tab" href="#ed-3" role="tab">Contact us</a>
				</li>
			</ul><hr>

			<div class="tab-content">
				<div class="tab-pane fade in active" id="ed-1" role="tabpanel">
					<p><?php echo $event->getDescription() ?></p>
				</div>
				<div class="tab-pane fade" id="ed-2" role="tabpanel">
					<div class="span6">
						<p>
						<div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;">
							<div id="display-google-map" style="height:100%; width:100%; max-width:100%;">
							<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Mannheim&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
							</iframe></div><a class="embed-map-code" rel="nofollow" href="http://www.interserver-coupons.com" id="get-data-for-embed-map">http://www.interserver-coupons.com</a>
							<style>#display-google-map .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
						</div>
						<script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=19d8e079-6764-1a8e-4e76-1778be7b98fd&c=embed-map-code&u=1478371220" defer="defer" async="async">
						</script>
						</p> 
					</div>
				</div>
				<div class="tab-pane fade" id="ed-3" role="tabpanel">
					<form class="well span8">
						<div class="row">
							<h4><small>Contact <?php echo User::getUserById($event->geteventOrganizer())->getName() ?></small></h4>
							<div class="col-md-5">

								<div class="form-group row cp-form-group">
									<label for="ed-firstname" class="col-xs-4 col-form-label">First name</label>
									<div class="col-xs-7">
										<input type="text" class="form-control" id="ed-firstname" name="ed-firstname" placeholder="First name" required style="margin-bottom:0!important;">
									</div>
								</div>
								<div class="form-group row cp-form-group">
									<label for="ed-lastname" class="col-xs-4 col-form-label">Last name</label>
									<div class="col-xs-7">
										<input type="text" class="form-control" id="ed-lastname" name="ed-lastname" placeholder="Last name" required style="margin-bottom:0!important;">
									</div>
								</div>
								<div class="form-group row cp-form-group">
									<label for="ed-email" class="col-xs-4 col-form-label">Email address</label>
									<div class="col-xs-7">
										<input type="text" class="form-control" id="ed-email" name="ed-email" placeholder="Email address" required style="margin-bottom:0!important;">
									</div>
								</div>							
							
								<div class="form-group row cp-form-group">
									<label for="cp-topic" class="col-xs-4 col-form-label">Subject</label>
									<div class="col-xs-7">
										<select class="form-control" id="ed-subject" name="ed-subject">
											<option value="na" selected="">Choose subject</option>
											<option value="service">General Customer Service</option>
											<option value="suggestions">Suggestions</option>
											<option value="product">Product Support</option>
										</select>
									</div>
								</div>

								<div class="form-group row cp-form-group">
									<label for="ed-message" class="col-xs-4 col-form-label">
										Message &nbsp;
										<i class="fa fa-pencil prefix" style="font-size:1.45em;"></i>
									</label>
									<div class="col-xs-7 md-form">
										<textarea type="text" class="form-control md-textarea" id="ed-message" name="ed-message" placeholder="Message" required></textarea>
									</div>
								</div>

								<hr>

								<div class="form-group row cp-form-group">
									<div class="col-xs-11 flex-center">
										<button type="submit" class="btn btn-blue-yellow" name="ed-submit">Send</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div>

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
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$('.add-to-wishlist').click(function() {
	alert( "we are here" );
	$eventID = $(this).attr("eventid");
	$userMail = $(this).attr("usermail");
	alert("in wishlist js"+$eventID + '   '+ $userMail);
	$.ajax({
	  type: "POST",
	  url: "controller/wishlistHandler.php",
	  data: {
		functionname: 'addToWishlist',
		eventID: $eventID,
		userMail: $userMail
	  },
	  dataType: "text"
	}).done(function( msg ) {
		alert( "done: " + msg );
	}).fail(function( msg ) {
	  alert( "Request failed: " + msg );
	});
	

});

</script>
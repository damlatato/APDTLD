<style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
.square, .btn {
    border-radius: 0px!important;
}

/* -- color classes -- */
.coralbg {
    background-color: #FA396F;
} 

.coral {
    color: #FA396f;
}

.turqbg {
    background-color: #46D8D2;
}

.turq {
    color: #46D8D2;
}

.white {
    color: #fff!important;
}

/* -- The "User's Menu Container" specific elements. Custom container for the snippet -- */
div.user-menu-container {
  z-index: 10;
  background-color: #fff;
  margin-top: 20px;
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

div.user-menu-container .btn-lg {
    padding: 0px 12px;
}

div.user-menu-container h4 {
    font-weight: 300;
    color: #8b8b8b;
}

div.user-menu-container a, div.user-menu-container .btn  {
    transition: 1s ease;
}

div.user-menu-container .thumbnail {
   width:100%;
   min-height:200px;
   border: 0px!important;
   padding: 0px;
   border-radius: 0;
   border: 0px!important;
}

/* -- Vertical Button Group -- */
div.user-menu-container .btn-group-vertical {
    display: block;
}

div.user-menu-container .btn-group-vertical>a {
    padding: 20px 25px;
    background-color: #46D8D2;
    color: white;
    border-color: #fff;
}

div.btn-group-vertical>a:hover {
    color: white;
    border-color: white;
}

div.btn-group-vertical>a.active {
    background: #FA396F;
    box-shadow: none;
    color: white;
}
/* -- Individual button styles of vertical btn group -- */
div.user-menu-btns {
  	width: 18%;
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

div.user-menu-btns div.btn-group-vertical>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #46D8D2;
}
/* -- The main tab & content styling of the vertical buttons info-- */
div.user-menu-content {
    color: #323232;
}

ul.user-menu-list {
    list-style: none;
    margin-top: 20px;
    margin-bottom: 0;
    padding: 10px;
    border: 1px solid #eee;
}
ul.user-menu-list>li {
    padding-bottom: 8px;
    text-align: center;
}

div.user-menu div.user-menu-content:not(.active){
  display: none;
}

/* -- The btn stylings for the btn icons -- */
.btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}

/* -- Custom classes for the snippet, won't effect any existing bootstrap classes of your site, but can be reused. -- */

.user-pad {
    padding: 20px 25px;
}

.no-pad {
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

.user-details {
    background: #eee;
    min-height: 333px;
}

.user-image {
  max-height:200px;
  overflow:hidden;
}

.overview h3 {
    font-weight: 300;
    margin-top: 15px;
    margin: 10px 0 0 0;
}

.overview h4 {
    font-weight: bold!important;
    font-size: 40px;
    margin-top: 0;
}

.view {
    position:relative;
    overflow:hidden;
    margin-top: 10px;
}

.view p {
    margin-top: 20px;
    margin-bottom: 0;
}
 
.caption {
    position:absolute;
    top:0;
    right:0;
    background: rgba(70, 216, 210, 0.44);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}

.caption a {
    padding-right: 10px;
    color: #fff;
}

.info {
    display: block;
    padding: 10px;
    background: #eee;
    text-transform: uppercase;
    font-weight: 300;
    text-align: left;
}

.info p, .stats p {
    margin-bottom: 0;
}

.stats {
    display: block;
    padding: 10px;
    color: white;
}

.share-links {
    border: 1px solid #eee;
    padding: 15px;
    margin-top: 15px;
}

.square, .btn {
    border-radius: 0px!important;
}

/* -- media query for user profile image -- */
@media (max-width: 767px) {
    .user-image {
        max-height: 400px;
    }
}
</style>

    
<center>
	<h3>My Profile</h3>
</center>
                
<div class="row user-menu-container square">

	<div class="col-md-1 user-menu-btns">
		<div class="btn-group-vertical square" id="responsive">
			<a href="#" class="btn btn-block btn-default">
			  <i class="fa fa-bell-o fa-2x"></i>General
			</a>
			<a href="#" class="btn btn-block btn-default">
			  <i class="fa fa-envelope-o fa-2x"></i>Notifications
			</a>
			<a href="#" class="btn btn-block btn-default">
			  <i class="fa fa-laptop fa-2x"></i>Privacy
			</a>
			<a href="#" class="btn btn-block btn-default">
			  <i class="fa fa-money fa-2x"></i>Payments
			</a>
		</div>
	</div>

	<div class="col-md-4 user-menu user-pad" style="width: 80%">
		<div class="user-menu-content active">
			<div class="row">
				<ul class="user-menu-list">
					<li class="fa coral"> <h4>Stefan Gunter</h4> 
						<img src="http://24.media.tumblr.com/273167b30c7af4437dcf14ed894b0768/tumblr_n5waxesawa1st5lhmo1_1280.jpg" class="img-circle" style="width: 45%; heigth:45%;">
						<div class="row">
							<h5 class= "fa fa-phone">+4915700-00-00</h5>
						</div> 
						<div class="row">
							<h5 class= "fa fa-envelope">sg@gmail.com</h5> 
						</div>
					</li>
				</ul>		
			</div>
		</div>
		<div class="user-menu-content">
			<ul class="user-menu-list">
			<ul id="sortable" class="list-unstyled">
			<h3>Notify me about:</h3>
				<li class="ui-state-default">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="" />New events posted</label>
					</div>
				</li>
				<li class="ui-state-default">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="" />Events fee discounts</label>
					</div>
				</li>
				<li class="ui-state-default">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="" />Events updates</label>
					</div>
				</li>
			</ul>
			</ul>
		</div>
		<div class="user-menu-content">
			<div class="row">
				<div class="col-md-6">
					<div class="info">
						<p class="small" style="text-overflow: ellipsis">Show my profile to:</p>
					</div>
					<div class="stats turqbg">
						<select class="selectpicker">
							<option>Everybody</option>
							<option>Nobody</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="info">
						<p class="small" style="text-overflow: ellipsis">Show events booked by me to:</p>
					</div>
					<div class="stats turqbg">
						<select class="selectpicker">
							<option>Everybody</option>
							<option>Nobody</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="user-menu-content">
			<!--Second columnn-->
			<div class="col-md-4">
				<!--Card-->
				<div class="card card-inverse card-success">

					<!--Card image-->
					<div class="view overlay hm-white-slight">
						<img src="http://mdbootstrap.com/images/regular/city/img%20(4).jpg"
							class="img-fluid" alt=""> <a href="#">
							<div class="mask"></div>
						</a>
					</div>
					<!--/.Card image-->

					<!--Card content-->
					<div class="card-block">
						<!--Title-->
						<h4 class="card-title">Example Event</h4>
						<!--Text-->
						<p class="card-text">Some quick example text to build on the card
							title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-footer text-xs-center" style="background-color: #000">
						Paid
					</div>
					<!--/.Card content-->
				</div>
				<!--/.Card-->
			</div>
			<!--Second columnn-->
			<!--Second columnn-->
			<div class="col-md-4">
				<!--Card-->
				<div class="card">

					<!--Card image-->
					<div class="view overlay hm-white-slight">
						<img src="http://mdbootstrap.com/images/regular/city/img%20(4).jpg"
							class="img-fluid" alt=""> <a href="#">
							<div class="mask"></div>
						</a>
					</div>
					<!--/.Card image-->

					<!--Card content-->
					<div class="card-block">
						<!--Title-->
						<h4 class="card-title">Example Event</h4>
						<!--Text-->
						<p class="card-text">Some quick example text to build on the card
							title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Pay 37$</a>
					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->
			</div>
			<!--Second columnn-->
		</div>
	</div>
    </div>
    
<script type="text/javascript" src="../Eduvent/lib/settings.js"></script>
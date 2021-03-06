<?php
require_once 'supportcontactform.php';
require_once 'controller/initiatePage.php';
?>
<!--Footer Links-->
<div class="container-fluid">
	<div class="row">

		<!--First column-->
		<div class="col-md-7 col-md-offset-1">
			<h5 class="title">About Eduvent</h5>
			<p>Eduvent is a online platform where you can find educational events in your location. Just register to provide or book educational events.
			You can easily find events by using the filtering options.
			Haven't found the event you are interested in? Look in the event proposal section to create a event proposals.
			Or you want to offer a proposed event? Go to the event proposal section and offer an existing event or create a new one.</p>
		</div>
		<!--/.First column-->

		<hr class="hidden-md-up">

		<!--Second column-->
		<div class="col-md-2 col-md-offset-1">
			<h5 class="title">Information</h5>
			<ul>
				<li><a href="#!">About us</a></li>
				<li><a href="#!">Imprint</a></li>
				<li><a href="#!">Data privacy</a></li>
			</ul>
		</div>
		<!--/.Second column-->

	   <hr class="hidden-md-up">

	</div>
</div>
<!--/.Footer Links-->

<hr>

<!--Call to action-->
<div class="call-to-action">
	<ul>
		<li>
			<h5>Register for free</h5></li>
									<?php

	
	$check = isLoggedUserExisting();
	if ($check == true) {
?>

<li><a href="../Eduvent/index.php?page=profile" class="btn btn-opposite" id="myButton">Sign up</a></li>

    <?php }
    else {?>

		<li><a href="../Eduvent/index.php?page=signup" class="btn btn-opposite" id="myButton">Sign up</a></li>
		<?php }?>
		<li>
			<h5>Need help?</h5></li>
		<li><a  class="btn btn-standard" href="#" data-toggle="modal" data-target="#modal-contact">Support</a></li>
		
	</ul>
</div>
<!--/.Call to action-->

<hr>

<!--Social buttons-->
<div class="social-section">
	<ul>
		<li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
		<li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
		<li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
		<li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
		<li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
		<li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
		<li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
	</ul>
</div>
<!--/.Social buttons-->

<!--Copyright-->
<div class="footer-copyright">
	<div class="container-fluid">
		&copy; 2016 Copyright: <a href="http://www.Eduvent.com"> Eduvent.com </a>

	</div>
</div>
<!--/.Copyright-->
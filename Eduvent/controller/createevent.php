<?php 
require_once '../model/User.php';
require_once 'initiatePage.php';
$check = isLoggedUserExisting();
if($check === true){
	if(isset($_POST['btn-signup'])) {
	$email = $_SESSION['usermail'];
	$user = User::getPasswordByEmail($email);
	
	$id = uniqid();
	$title = $_POST['first-name'];
	$description = $_POST['about-you'];
	$datetime =   $_POST['birth-date'];
	$location = $_POST['address'] . ',' . $_POST['address-city'] . ',' . $_POST['address-state'] . ',' . $_POST['address-country'] . ',' . $_POST['address-postal-code'] ;
// 	$topic = $_POST['last-name'];
	// 		$price =$_POST['birth-date'];
	$event = new Event($id, null, $title, $description, $datetime, $location, null, null);
	$event = deleteEvent();
	$user = deleteUser();
	
	$event = setStatus(Event::$statuses[Published]);
	$user = organizeEvent($event);
	$message = "
	Hello $name,
	<br /><br />
	Hello!<br/>
	you have just created an event!";}
}

else {
	
	
	header('Location: ../index.php?page=login');
	
	
	
	
}




?>
 <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="../lib/createevent/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/createevent/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../lib/createevent/assets/css/form-elements.css">
        <link rel="stylesheet" href="../lib/createevent/assets/css/style.css">
        <link rel="stylesheet" href="../lib/createevent/assets/css/media-queries.css">
        
<!-- Description -->
<div class="description-container">
	<div class="container">
	
  
	</div>
</div>

<!-- Multi Step Form -->
<div class="msf-container">
	<div class="container">
<?php if(isset($msg)) { echo $msg; } ?>
		<div class="row">
			<div class="col-sm-12 msf-title">
				<h3>Create <span style="color:#1694b2;">Event</span></h3>
				<p>Please complete the form below to create your event:</p>
			</div>
		</div>
		<div class="row" style="    background-color: #fafafa!important;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			<div class="col-sm-12 msf-form">
				
				<form role="form" action="" method="post" class="form-inline">
					
					<fieldset>
						<h4>Information <span class="step">(Step 1 / 4)</span></h4>
						<div class="form-group">
							<label for="first-name">Company Name:</label><br>
							<input type="text" name="first-name" class="first-name form-control" id="first-name">
						</div>
						<br>
					   <div class="form-group">
							<label for="birth-date">Date (YYYY/MM/DD):</label><br>
							<input type="date" name="birth-date" class="birth-date form-control" id="birth-date">
						</div>
					   
						<br>
						<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
					</fieldset>
					
					
					<fieldset>
						<h4>Address and Contact Information <span class="step">(Step 2 / 4)</span></h4>
						<div class="form-group">
							<label for="address">Address:</label><br>
							<input type="text" name="address" class="address form-control" id="address">
						</div>
						<div class="form-group">
							<label for="address">Street:</label><br>
							<input type="text" name="address-street" class="address form-control" id="address">
						</div>
						<div class="form-group">
							<label for="address">House Number:</label><br>
							<input type="text" name="address-housenumber" class="address form-control" id="address">
						</div>
						<div class="form-group">
							<label for="address-city">City:</label><br>
							<input type="text" name="address-city" class="address-city form-control" id="address-city">
						</div>
						<div class="form-group">
							<label for="address-state">State / Province:</label><br>
							<input type="text" name="address-state" class="address-state form-control" id="address-state">
						</div>
						<div class="form-group">
							<label for="address-country">Country:</label><br>
							<input type="text" name="address-country" class="address-country form-control" id="address-country">
						</div>
						<div class="form-group">
							<label for="address-postal-code">Postal Code:</label><br>
							<input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
						</div>
<!-- 						<div class="form-group"> -->
<!-- 							<label for="telephone">Telephone:</label><br> -->
<!-- 							<input type="text" name="telephone" class="telephone form-control" id="telephone"> -->
<!-- 						</div> -->
<!-- 						<div class="form-group"> -->
<!-- 							<label for="mobile-phone">Mobile Phone:</label><br> -->
<!-- 							<input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone"> -->
<!-- 						</div> -->
<!-- 						<div class="form-group"> -->
<!-- 							<label for="email">Email:</label><br> -->
<!-- 							<input type="text" name="email" class="email form-control" id="email"> -->
<!-- 						</div> -->
						<br>
						<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
						<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
					</fieldset>
					
<!-- 					<fieldset> -->
<!-- 						<h4>Social Media Profiles <span class="step">(Step 4 / 6)</span></h4> -->
<!-- 						<div class="form-group"> -->
<!-- 							<label for="social-facebook">Facebook:</label><br> -->
<!-- 							<input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook"> -->
<!-- 						</div> -->
<!-- 						<div class="form-group"> -->
<!-- 							<label for="social-twitter">Twitter:</label><br> -->
<!-- 							<input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter"> -->
<!-- 						</div> -->
<!-- 						<div class="form-group"> -->
<!-- 							<label for="social-google-plus">Google Plus:</label><br> -->
<!-- 							<input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus"> -->
<!-- 						</div> -->
					 
					  
<!-- 						<br> -->
<!-- 						<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button> -->
<!-- 						<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button> -->
<!-- 					</fieldset> -->
					
					<fieldset>
						<h4>Description of Event <span class="step">(Step 3 / 4)</span></h4>
						<div class="form-group">
							<label for="about-you">Tell us a bit about the event:</label><br>
							<textarea name="about-you" class="about-you form-control" id="about-you" style="border: 1px solid #ccc;"></textarea>
						</div>
						<br>
						<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
						<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
					</fieldset>
					
			
					
					<fieldset>
						<h4>Other Form Elements <span class="step">(Step 4 / 4)</span></h4>
					<div class="selects-1">
							<p>Topic:</p>
							<select class="form-control" name="select-1">
								<option value="1">Art</option>
								<option value="2">Business</option>
								<option value="3">Cooking</option>
								<option value="4">Design</option>
								
							</select>
						</div>
						<br>
						<div class="selects-1">
							<p>Event Type:</p>
							<select class="form-control" name="select-1">
								<option value="1">Conference</option>
								<option value="2">Course</option>
								<option value="3">Forum</option>
								<option value="4">Hackathon</option>
								<option value="4">Meeting</option>
							</select>
						</div>
						<br>
						<div class="form-group">
							<label for="address-city">Price:</label><br>
							<input type="text" name="price" class="address-city form-control" id="address-city">
						</div>
						<br>
						<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
						<button type="submit" class="btn" name="btn-signup">Submit</button>
					</fieldset>
					
				</form>
				
			</div>
		</div>
	</div>
</div>

        <!-- Javascript -->
        <script src="../lib/createevent/assets/js/jquery-1.11.1.min.js"></script>
        <script src="../lib/createevent/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/createevent/assets/js/jquery.backstretch.min.js"></script>
        <script src="../lib/createevent/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
	<script src="assets/js/placeholder.js"></script>
<![endif]-->
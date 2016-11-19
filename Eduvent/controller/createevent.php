	<?php 
	spl_autoload_register(function ($class) {
		$file = '../model/'.$class.'.php';
		if(file_exists($file)) {
			include $file;
		}
	});
require_once 'model/YaasConnector.php';
require_once 'model/thesaurus.php';
require_once 'initiatePage.php';
$check = isLoggedUserExisting();
if($check === true){
	if(isset($_POST['btn-signup'])) {
		
	$email = $_SESSION['usermail'];
	$user = User::getUserByEmail($email);
	
	$id = uniqid();
	$title = $_POST['first-name'];
	$description = $_POST['about-you'];
	$datetime =   $_POST['birth-date'];
	$location =  new Address($_POST['address'], $_POST['address-street'], $_POST['address-housenumber'], $_POST['address-city'], $_POST['address-postal-code'], $_POST['address-country']) ;
	

	
//---image upload ---------------------------------------------------------------------------------------	
	$target_event_dir = "../Eduvent/view/images/eventimages/";
	$target_dir = "../view/images/eventimages/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$target_file_event = $target_event_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
//---------------------------------------------------------------------------------------	
	
	$event = new Event($id, $_POST['eventtype'], $title, $description, $datetime, $location, $_POST['topic'], $_POST['price'], $statuses["Published"], $target_file_event);
	$user -> organizeEvent($event);
	$message = "
	Hello". $_SESSION['username'].",
	<br /><br />
	Hello!<br/>
	you have just created an event!";
	
	
	}
}

else {
	
	
	header('Location: ../Eduvent/index.php?page=login');
		
}

?>
 <!-- CSS -->
 <!--         <link rel="stylesheet" href="../lib/createevent/assets/css/media-queries.css"> -->
 <!--         <link rel="stylesheet" href="../lib/createevent/assets/font-awesome/css/font-awesome.min.css"> -->
<!-- 		<link rel="stylesheet" href="../lib/createevent/assets/css/form-elements.css"> -->
<!--         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700"> -->
<head>     
<!--         <link rel="stylesheet" href="../lib/mdbootstrap/css/bootstrap.min.css"> -->
<!--         <link rel="stylesheet" href="../lib/createevent/assets/css/style.css"> -->
<style>/***** Multi Step Form *****/

.msf-container { padding-bottom: 80px; text-align: center; }

.msf-title h3 { padding-bottom: 10px; font-weight: 700; color: black;}
.msf-title p { opacity: 0.8;     color: black; }

.msf-form h4 {
	margin-top: 20px;
	margin-bottom: 30px;
	font-weight: 700;
	line-height: 26px;
}
.msf-form h4 .step { color: #aaa; }

.msf-form form fieldset { display: none; overflow: hidden; }

.msf-form form input[type="text"] { width: 400px; margin-left: 5px; margin-right: 5px; border: 1px solid #ccc; }

.msf-form form textarea.form-control { width: 700px; height: 160px; }

.msf-form form select.form-control { width: 400px; margin-left: 5px; margin-right: 5px; border: 1px solid #ccc;}

.msf-form form .form-group { margin-bottom: 15px; }

.msf-form form button.btn { min-width: 110px; margin-top: 15px; margin-left: 5px; margin-right: 5px; }

.msf-form form p { opacity: 0.8; }

.msf-form form .radio-buttons-1,
.msf-form form .radio-buttons-2,
.msf-form form .checkboxes-1,
.msf-form form .checkboxes-2 { display: inline-block; margin: 0 15px 20px 15px; }

.msf-form form .selects-1,
.msf-form form .selects-2 { display: inline-block; margin: 0 0 20px 0; }</style>

<script type="text/javascript">
jQuery(document).ready(function() {


	/*
	    Multi Step Form
	*/
	$('.msf-form form fieldset:first-child').fadeIn('slow');
	
	// next step
	$('.msf-form form .btn-next').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
	    	$(this).next().fadeIn();
			scroll_to_class('.msf-form');
	    });
	});
	
	// previous step
	$('.msf-form form .btn-previous').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
			$(this).prev().fadeIn();
			scroll_to_class('.msf-form');
		});
	});
	
	
});</script>
        </head>
<body style="background: #fff;
    font-family: 'Raleway', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #1694b2;
    line-height: 24px;">       
<!-- Description -->
<div class="description-container">
	<div class="container">  
	</div>
</div>

<!-- Multi Step Form -->
<div class="msf-container" style="padding-bottom: 80px; text-align: center;">
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
				<form role="form" action="" method="post" class="form-inline" enctype="multipart/form-data">
					
					<fieldset >
						<h4>Information <span class="step">(Step 1 / 4)</span></h4>
						<div class="form-group">
							<label for="first-name">Company Name:</label><br>
							<input type="text" name="first-name" class="first-name form-control" id="first-name" style="background: white;">
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
							<input type="text" name="address" class="address form-control" id="address" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address">Street:</label><br>
							<input type="text" name="address-street" class="address form-control" id="address" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address">House Number:</label><br>
							<input type="text" name="address-housenumber" class="address form-control" id="address" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address-city">City:</label><br>
							<input type="text" name="address-city" class="address-city form-control" id="address-city" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address-state">State / Province:</label><br>
							<input type="text" name="address-state" class="address-state form-control" id="address-state" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address-country">Country:</label><br>
							<input type="text" name="address-country" class="address-country form-control" id="address-country" style="background: white;">
						</div>
						<div class="form-group">
							<label for="address-postal-code">Postal Code:</label><br>
							<input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code" style="background: white;">
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
							<textarea name="about-you" class="about-you form-control" id="about-you" style="border: 1px solid #ccc;background: white;"></textarea>
						</div>
						<br>
						<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
						<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
					</fieldset>
					
			
					
					<fieldset>
						<h4>Other Form Elements <span class="step">(Step 4 / 4)</span></h4>
					<div class="selects-1">
							<p>Topic:</p>
							<select class="form-control" name="topic" style="background: white;">
								<option value="1">Art</option>
								<option value="2">Business</option>
								<option value="3">Cooking</option>
								<option value="4">Design</option>
								
							</select>
						</div>
						<br>
						<div class="selects-1">
							<p>Event Type:</p>
							<select class="form-control" name="eventtype" style="background: white;">
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
							<input type="text" name="price" class="address-city form-control" id="address-city" style="background: white;margin-left: 42px;">
						</div>
						<br>
    						<div class="form-group">
							<label for="address-city">Upload Image:</label><br>
							<input type="file" name="fileToUpload" id="fileToUpload" style="margin-left: 112px;">
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
</body>
        <!-- Javascript -->
        <script src="../lib/js/jquery-3.1.1.min.js"></script>
<!--         <script src="../lib/createevent/assets/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="../lib/js/jquery.backstretch.min.js"></script>
        <script src="../lib/js/scripts.js"></script>

<!--[if lt IE 10]>
	<script src="assets/js/placeholder.js"></script>
<![endif]-->
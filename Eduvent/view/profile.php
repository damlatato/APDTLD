<?php
include("../Eduvent/controller/profile-controller.php");

if(isset($_POST['submitProfile'])) {
	
	$target_event_dir = "../Eduvent/view/images/eventimages/";
	$target_dir = "../Eduvent/view/images/eventimages/";
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
		$target_file_event = '../Eduvent/view/images/event-img.png';
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			$target_file_event = '../Eduvent/view/images/event-img.png';
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
	$tempUser = User::getUserByEmail($userEmail);
	$tempUser->setimgHref($target_file_event);
	$tempUser->putUser();
	$userImg = $target_file_event;
}
?>
<style>.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
input[type="file"] {
    display: none;
}</style>

<script type="text/javascript">
<!--
function colorFunction() {
	$("#color").css("color","#1694b2");
}
//-->
</script>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-xs-center">
			<div><img src=<?php echo $userImg; ?> class="img-responsive" height="140"></div>

			<form action="" method="post" enctype="multipart/form-data">
   					<label class="custom-file-upload" onclick="colorFunction()"> <i class="fa fa-cloud-upload" id="color" ></i> Select image to upload 
   			 	<input type="file" name="fileToUpload" id="fileToUpload"> </label>
   			 	<button type="submit" class="btn" name="submitProfile" style="background: #1694b2;">Upload</button>
    			
			</form>
			
			<h1><div class="editable-name"></div></h1>
		</div>
	</div><br>

	<ul class="nav nav-pills flex-center" role="tablist">
		<li class="nav-item">
			<a class="profile-nav-link nav-link active" data-toggle="tab" href="#profile1" role="tab"><i class="fa fa-user"></i> My data</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile2" role="tab"><i class="fa fa-list-ul" aria-hidden="true"></i> My events</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-ticket" aria-hidden="true"></i> My bookings</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile4" role="tab"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> My proposals</a>
		</li>
		<li class="nav-item">
			<a class="profile-nav-link nav-link" data-toggle="tab" href="#profile5" role="tab"><i class="fa fa-heart" aria-hidden="true"></i> My wishlist</a>
		</li>
	</ul><hr>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="profile1" role="tabpanel">
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<table class="table table-bordered">
							<!--<thead>
								<tr>
									<th></th>
									<th></th>
								</tr>
							</thead>-->
							<tbody>
								<tr>
									<td>E-mail:</td>
									<td><?php echo $userEmail; ?></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><div class="editable-address"></div></td>
								</tr>
								<tr>
									<td>Date of birth:</td>
									<td><?php echo $userDOB; ?>
									</td>
								</tr>
								<!--<tr>
									<td>Interests:</td>
									<td><?php //echo $userInterests; ?></td>
								</tr>-->
							</tbody>
						</table>

					</div>	 
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="profile2" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getOrganizedEvents()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
				$eventCounter=0;
				
				if (count($events)>0){
				foreach ($events as $event) {
					if ($eventCounter%3==0) {
						if ($eventCounter>0) {
							echo '</div>';
						}
						echo '<div class="row">';
					}
				
					?>
						<div class="col-md-4 event-market-col">
							<!--Card-->
							<div class="event-card card">
				
								<!--Card image-->
								<div class="event-image view overlay hm-white-slight">
									<img src="<?php echo $event->getimgHref() ?>" class="img-fluid" alt="" height="195px">
									<a href="#">
										<div class="mask"></div>
									</a>
								</div>
								<!--/.Card image-->
				
								<!--Card content-->
								<div class="event-body card-block text-xs-center">
									<!--Category & Title-->
									<div class="event-title">
										<h5><?php echo $event->getTopic() ?></h5>
										<h4 class="card-title"><strong><a href=""><?php echo $event->getTitle() ?></a></strong></h4>
									</div>
									
									<!--Description-->
									<div class="event-text card-text text-xs-left">
										<p><?php echo $event->getDescription() ?></p>
									</div>
				
									<!--Card footer-->
									<div class="card-footer">
										<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
										<div class="event-buttons flex-center">
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
												<button class="btn btn-blue-yellow-small" type="button">Show details</button>
											</a>
				
											<div class="event-menu">
												<button class="btn btn-grey-small" type="button">More</button>
				
												<ul class="event-dropdown-menu">
													<li class="text-xs-left"><a class="event-dropdown-item" href="#">
														<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
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
				<?php 	
					$eventCounter++;
				}
				}
				
				if ($eventCounter>0) {
					echo '</div>';
				}
				?>
			
			</p>
		</div>

		<div class="tab-pane fade" id="profile3" role="tabpanel">
			<br>
			<p>
			<?php 
				$bookings = $user->getBookings();
				
				$bookingCounter=0;
				
				if (count($bookings)>0){
				foreach ($bookings as $booking) {
					$bookedEventId = $booking->getEventId();
					$bookingTime = $booking->getbookingTime();
					$event = Event::getById($bookedEventId);
					if ($bookingCounter%3==0) {
						if ($bookingCounter>0) {
							echo '</div>';
						}
						echo '<div class="row">';
					}
				
					?>
						<div class="col-md-4 event-market-col">
							<!--Card-->
							<h5><?php echo $bookingTime ?></h5>
							<div class="event-card card">
				
								<!--Card image-->
								<div class="event-image view overlay hm-white-slight">
									<img src="<?php echo $event->getimgHref() ?>" class="img-fluid" alt="" height="195px">
									<a href="#">
										<div class="mask"></div>
									</a>
								</div>
								<!--/.Card image-->
				
								<!--Card content-->
								<div class="event-body card-block text-xs-center">
									<!--Category & Title-->
									<div class="event-title">
										<h5><?php echo $event->getTopic() ?></h5>
										<h4 class="card-title"><strong><a href=""><?php echo $event->getTitle() ?></a></strong></h4>
									</div>
									
									<!--Description-->
									<div class="event-text card-text text-xs-left">
										<p><?php echo $event->getDescription() ?></p>
									</div>
				
									<!--Card footer-->
									<div class="card-footer">
										<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
										<div class="event-buttons flex-center">
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
												<button class="btn btn-blue-yellow-small" type="button">Show details</button>
											</a>
				
											<div class="event-menu">
												<button class="btn btn-grey-small" type="button">More</button>
				
												<ul class="event-dropdown-menu">
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
				<?php 	
					$bookingCounter++;
				}
				}
				
				if ($bookingCounter>0) {
					echo '</div>';
				}
				?>
			</p>
		</div>

		<div class="tab-pane fade" id="profile4" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getProposedEvents()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
				$eventCounter=0;
				
				foreach ($events as $event) {
					if ($eventCounter%3==0) {
						if ($eventCounter>0) {
							echo '</div>';
						}
						echo '<div class="row">';
					}
				
					?>
						<div class="col-md-4 event-market-col">
							<!--Card-->
							<div class="event-card card">
				
								<!--Card content-->
								<div class="event-body card-block text-xs-center">
									<!--Category & Title-->
									<div class="event-title">
										<h5><?php echo $event->getTopic() ?></h5>
										<h4 class="card-title"><strong><a href=""><?php echo $event->getTitle() ?></a></strong></h4>
									</div>
									
									<!--Description-->
									<div class="event-text card-text text-xs-left">
										<p><?php echo $event->getDescription() ?></p>
									</div>
				
									<!--Card footer-->
									<div class="card-footer">
										<div class="ticket-price">Number of votes: <?php echo $event->getVotesNumber() ?></div>
									</div>
									<!--/.Card footer-->
				
								</div>
								<!--/.Card content-->
				
							</div>
							<!--/.Card-->
						</div>
				<?php 	
					$eventCounter++;
				}
				
				if ($eventCounter>0) {
					echo '</div>';
				}
				?>
			</p>
		</div>

		<div class="tab-pane fade" id="profile5" role="tabpanel">
			<br>
			<p>
			<?php 
				$s = str_replace('[','',json_encode($user->getWishlist()));
				$s = str_replace(']','',$s);
				$events = Event::getListById($s);
				
				$eventCounter=0;
				
				foreach ($events as $event) {
					if ($eventCounter%3==0) {
						if ($eventCounter>0) {
							echo '</div>';
						}
						echo '<div class="row">';
					}
				
					?>
						<div class="col-md-4 event-market-col">
							<!--Card-->
							<div class="event-card card">
				
								<!--Card image-->
								<div class="event-image view overlay hm-white-slight">
									<img src="<?php echo $event->getimgHref() ?>" class="img-fluid" alt="" height="195px">
									<a href="#">
										<div class="mask"></div>
									</a>
								</div>
								<!--/.Card image-->
				
								<!--Card content-->
								<div class="event-body card-block text-xs-center">
									<!--Category & Title-->
									<div class="event-title">
										<h5><?php echo $event->getTopic() ?></h5>
										<h4 class="card-title"><strong><a href=""><?php echo $event->getTitle() ?></a></strong></h4>
									</div>
									
									<!--Description-->
									<div class="event-text card-text text-xs-left">
										<p><?php echo $event->getDescription() ?></p>
									</div>
				
									<!--Card footer-->
									<div class="card-footer">
										<div class="ticket-price">Ticket price: <?php echo $event->getPrice() ?></div>
										<div class="event-buttons flex-center">
											<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $event->getId() ?>">
												<button class="btn btn-blue-yellow-small" type="button">Show details</button>
											</a>
				
											<div class="event-menu">
												<button class="btn btn-grey-small" type="button">More</button>
				
												<ul class="event-dropdown-menu">
													<li class="text-xs-left"><a class="event-dropdown-item insert-to-shopping-cart" eventid=<?php echo $event->getId() ?> href="#">
														<i class="fa fa-shopping-cart " aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
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
				<?php 	
					$eventCounter++;
				}
				
				if ($eventCounter>0) {
					echo '</div>';
				}
				?>
			</p>
		</div>
	</div>

</div>
<script type="text/javascript" src='../Eduvent/lib/js/profile.js'></script>

<script>
function saveEdit() {
	this.value = this.tempValue;
	this.disableEditing();

	$.post('../Eduvent/controller/profile-controller.php',
	{ 
		'p_field'		: this.title,
		'p_value'		: this.value,
		'root-path'		: <?php echo '\'' . ROOT_PATH . '\''; ?>
	})
	.done(function( data ) {
		console.log( "Name changed. Message: " + data );
	})
	.fail(function( data ) {
		alert( "Error: " + data );
	});
};

editableField('.editable-name',		 '<?php echo $userName; ?>',	saveEdit, "userName");
editableField('.editable-address',	 '<?php echo $userAddress ?>',	saveEdit, "userAddress");
editableField('.editable-BirthDate', '<?php echo $userDOB ?>',		saveEdit, "userDOB");
</script>
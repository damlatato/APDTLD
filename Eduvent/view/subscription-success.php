<div class="msf-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 msf-form">
				<h2 class="doc-title">Subscription Confirmation</h2>
				<div class="row">
 					<div class="col-md-12">
					<?php
						//$event = new Event();
						$eventID = $_POST['eventID'];
						$email = $_POST['subemail'];
						$event = Event::getById($eventID);
						include_once 'controller/mail.php';
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


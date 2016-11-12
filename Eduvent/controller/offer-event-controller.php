<?php
if (isset($_POST['oe-submit']))
{
	// The Code to be executed after an event was selected.
	echo('<div><h3>Thank you for offering this event!</h3><br>
			A notification is sent out to users who voted for the event proposal.<br><br></div>');

	// more logic here
	// ...

}
else               
{
	// Display events.
	$events=Event::getPublishedEventList();
	$eventCounter=0;

	foreach ($events as $event) {
		if ($eventCounter%3==0) {
			if ($eventCounter>0) {
				echo '</div>';
			}
			echo ('<div class="row">');
		}

		echo ('
			<div class="col-md-4 event-market-col">
				<!--Card-->
				<div class="event-card card">

					<!--Card image-->
					<div class="event-image view overlay hm-white-slight">
						<img src="' . $event->getimgHref() . '" class="img-fluid" alt="" height="195px">
						<a href="#">
							<div class="mask"></div>
						</a>
					</div>
					<!--/.Card image-->

					<!--Card content-->
					<div class="event-body card-block text-xs-center">
						<!--Category & Title-->
						<div class="event-title">
							<h5>' . $event->getTopic() . '</h5>
							<h4 class="card-title"><strong><a href="">' . $event->getTitle() . '</a></strong></h4>
						</div>
						
						<!--Description-->
						<div class="event-text card-text text-xs-left">
							<p>' . $event->getDescription() . '</p>
						</div>

						<!--Card footer-->
						<div class="card-footer">
							<form action="" method="post">
								<div class="form-group event-buttons flex-center" style="margin:0;">
									<a href="#">
										<button type="submit" class="btn btn-blue-yellow-small" name="oe-submit">Post proposal</button>
									</a>
								</div>
							</form>
						</div>
						<!--/.Card footer-->

					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->
			</div>');
		
		$eventCounter++;
	}

	if ($eventCounter>0) {
		echo ('</div>');
	}
}
?>
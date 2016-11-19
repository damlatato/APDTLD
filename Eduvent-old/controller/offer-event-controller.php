<?php
if (isset($_POST['peid']) and isset($_POST['oeid']))
{
	// The Code to be executed after an event was selected.
	$peid=$_POST['peid'];
	$oeid=$_POST['oeid'];

	// more logic here
	// ...

	$output="proposal-id=" . $peid . ", offer-id=" . $oeid;
	echo $output;
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
			echo '<div class="row">';
		}

		echo '
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
							<div class="event-buttons flex-center" style="margin:0;">
								<a href="#">
									<button type="button" class="btn btn-blue-yellow-small" data-toggle="modal" data-target="#modalOffer" onclick="offerEvent(\'' . $proposalId . '\',\'' . $event->getId() . '\')">
									Offer event</button>
								</a>
								<!--Modal-->
								<div class="modal fade" id="modalOffer" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content text-xs-left">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Thank you for offering this event!</h4>
											</div>
											<div class="modal-body">
												<p>You offered the event <strong>"' . $event->getTitle() . '"</strong>.<br>
												A notification is sent out to users who voted for the event proposal.</p>
											</div>
											<div class="modal-footer text-xs-center">
												<button type="button" class="btn btn-standard" data-dismiss="modal" onclick="window.location.href=\'../Eduvent/index.php?page=event-proposals\'">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!--/.Modal-->
							</div>
						</div>
						<!--/.Card footer-->

					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->
			</div>';
		
		$eventCounter++;
	}

	if ($eventCounter>0) {
		echo '</div>';
	}
}
?>
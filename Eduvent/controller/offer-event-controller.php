<?php
if (isset($_POST['root-path'])) {
	$rootPath = $_POST['root-path'];
	define ('ROOT_PATH', $rootPath);
}

include_once(ROOT_PATH . 'model/YaasConnector.php');
spl_autoload_register(function ($class) {
    $file = ROOT_PATH . 'model/'.$class.'.php';
	if(file_exists($file)) {
		include $file;
	}
});

if (isset($_POST['peid']) and isset($_POST['oeid']))
{
	// The Code to be executed after an event was selected.
	$peid=$_POST['peid'];
	$oeid=$_POST['oeid'];
	$pEvent=Event::getById($peid);
	$oEvent=Event::getById($oeid);
	$pEvent->addOffer($oEvent);

	$output="proposal-id=" . $peid . ", offer-id=" . $oeid . ", offers: " . implode(";",$pEvent->getOffers());
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
						<img src="' . $event->getimgHref() . '" class="img-fluid" alt="" style="height:11.5em;margin:auto;">
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
												<h2 class="modal-title">Thank you for offering this event!</h2>
											</div>
											<div class="modal-body">
												<h3><small>You offered the event <strong>"' . $event->getTitle() . '"</strong>.
												A notification is sent out to users who voted for the event proposal.</small></h3>
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
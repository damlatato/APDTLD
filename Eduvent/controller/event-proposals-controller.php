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

//------------------------------------------

$f_status = "Proposed";
$f_type = "All";

if (isset($_POST['topic'])) {
	$f_topic = $_POST['topic'];
}
else {
	$f_topic = "All";
}

$f_pricing = "All";
$f_startDate = "All";
$f_endDate = "All";

$proposedEvents=Event::filterEvents($f_status, $f_type, $f_topic, $f_pricing, $f_startDate, $f_endDate);
//$proposedEvents=Event::getProposedEventList();
$proposedEvents=Event::fromJSONa($proposedEvents);
$eventCounter=0;
foreach($proposedEvents as $event) {
	$eventCounter++;
	$offerStatus='';
	$offers=$event->getOffers();
	if (count($offers)>0) {
		$offerList='';
		foreach($offers as $offerId) {
			$offeredEvent=Event::getById($offerId);
			//This might cause an error if there is no event with the offeredId.
			$offerList=$offerList . '<li><a href="../Eduvent/index.php?page=event-description&eventId=' . $offerId . '">' . $offeredEvent->getTitle() . '</a></li>';
		}
		
		$offerStatus='&nbsp;&nbsp;
			<div class="custom-dropdown-btn">
				<div class="btn-grey-special-small"><b><i>Show matching events</b></i></div>
				<ul class="custom-dropdown-menu custom-dropdown-menu-special">'
				. $offerList .
				'</ul>
			</div>
		';
	}

	echo('
	<!--Proposal-->
	<div class="row">
		<div class="col-md-12">
			<span class="proposal-topic">' . $event->getTopic() . '</span><br>
			<h4 class="proposal-title" style="display:inline-block;">' . $event->getTitle() . '</h4>' . $offerStatus . '
			<p>' . $event->getDescription() . '</p>
			<div class="read-more text-xs-right row">
				<div class="col-xs-3 pull-left text-xs-left">
					<small><i>Preferred location: ' . $event->getLocation()->getcity() . '</i></small><br>
					<!--Share-buttons-->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_xing"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!--/.Share-buttons-->
				</div>
				<div class="col-xs-9 pull-right">
					<span class="requested-by">Voted by <b id="ev-' . $event->getId() . '">' . $event->getVotesNumber() . '</b> users</span>

					<button type="button" class="btn btn-blue-yellow" data-toggle="modal" data-target="#modalVote' . $eventCounter . '" onclick="voteForEvent(\'' . $event->getId() . '\')">
						I want it also! Vote here!</button>

					<!--Modal-->
					<div class="modal fade" id="modalVote' . $eventCounter . '" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content text-xs-left">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Thank you for your vote!</h2>
								</div>
								<div class="modal-body">
									<h3><small>You showed your interest in the event proposal <strong>"' . $event->getTitle() . '"</strong>.
									We will inform you, if a company offers this event.</small></h3>
								</div>
								<div class="modal-footer text-xs-center">
									<button type="button" class="btn btn-standard" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!--/.Modal-->

					<div class="btn-group">
						<button class="btn btn-dark-grey-yellow dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Offer event</button>
						<div class="offer-event-menu dropdown-menu">
							<a class="offer-event-item dropdown-item" href="../Eduvent/index.php?page=create-event">Create new event</a>
							<a class="offer-event-item dropdown-item" href="../Eduvent/index.php?page=offer-event&proposalId=' . $event->getId() . '">Offer existing event</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.Proposal-->
	<hr class="extra-margin">');
}
?>
<?php
$proposedEvents=Event::getProposedEventList();

foreach($proposedEvents as $event) {
	echo('
	<!--Proposal-->
	<div class="row">
		<div class="col-md-12">
			<span class="proposal-topic">Topic</span>
			<h4 class="proposal-title">' . $event->getTitle() . '</h4>
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
					<span class="requested-by">Voted by <b>' . $event->getVotesNumber() . '</b> users</span>

					<button type="button" class="btn btn-blue-yellow" data-toggle="modal" data-target="#modalVote" onclick="voteForEvent(' . $event->getId() . ')">
						I want it also! Vote here!</button>

					<!--Modal-->
					<div class="modal fade" id="modalVote" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content text-xs-left">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Thank you for your vote!</h4>
								</div>
								<div class="modal-body">
									<p>You voted for the event proposal <strong>"' . $event->getTitle() . '"</strong>.</p>
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
							<a class="offer-event-item dropdown-item" href="../Eduvent/index.php?page=createevent">Create new event</a>
							<a class="offer-event-item dropdown-item" href="#">Offer existing event</a>
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
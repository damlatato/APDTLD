<?php
$proposedEvents=Event::getProposedEventList();

foreach($proposedEvents as $event) {
	echo('
	<!--Proposal-->
	<div class="row">
		<div class="col-md-12">
			<span class="proposal-topic">Topic</span>
			<a href="#!" class="proposal-title"><h4>' . $event->getTitle() . '</h4></a>
			<p>' . $event->getDescription() . '</p>
			<div class="read-more text-xs-right">
				<small class="pull-left"><i>Preferred location: ' . $event->getLocation()->getcity() . '</i></small>
				<span class="requested-by">Voted by <b>' . '35' . '</b> users</span>
				<a href="#!" class="btn btn-vote">I want it also! Vote here!</a>
				<a href="#!" class="btn btn-offer">Offer event</a>
			</div>
		</div>
	</div>
	<!--/.Proposal-->
	<hr class="extra-margin">');
}
?>
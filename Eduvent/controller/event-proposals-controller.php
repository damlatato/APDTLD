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
			<div class="read-more text-xs-right row">
				<div class="col-xs-3 pull-left text-xs-left">
					<small><i>Preferred location: ' . $event->getLocation()->getcity() . '</i></small><br>

					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_linkedin"></a>
						<a class="a2a_button_xing"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->

				</div>
				<div class="col-xs-9 pull-right">
					<span class="requested-by">Voted by <b>' . '35' . '</b> users</span>
					<a href="#!" class="btn btn-vote">I want it also! Vote here!</a>
					<a href="#!" class="btn btn-offer">Offer event</a>
				</div>
			</div>
		</div>
	</div>
	<!--/.Proposal-->
	<hr class="extra-margin">');
}

/*
			<div class="read-more text-xs-right">
				<small class="pull-left"><i>Preferred location: ' . $event->getLocation()->getcity() . '</i></small>
				<span class="requested-by">Voted by <b>' . '35' . '</b> users</span>
				<a href="#!" class="btn btn-vote">I want it also! Vote here!</a>
				<a href="#!" class="btn btn-offer">Offer event</a>
			</div>
*/
?>
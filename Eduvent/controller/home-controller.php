<?php
require_once ROOT_PATH . 'view/subscribeform.php';

function shorten_string($string, $wordsreturned) {
	$retval = $string;
	$string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
	$string = str_replace("\n", " ", $string);
	$array = explode(" ", $string);
	if (count($array)<=$wordsreturned) {
		$retval = $string;
	}
	else {
		array_splice($array, $wordsreturned);
		$retval = implode(" ", $array)." ...";
	}
	return $retval;
}
?>

<script type="text/javascript" src="../Eduvent/controller/js/shoppingCart.js"></script>
<script type="text/javascript" src="../Eduvent/controller/js/wishlist.js"></script>

<!--Row 3 (Event lists)-->
<div class="row evet-list-area">
	<div class="col-md-6">
		<div class="panel panel-default event-list">
			<div class="panel-heading"><h5 class="font-weight-bold"><b>Highlights</b></h5></div>
			<div class="panel-body list-group event-items highlights">
			<?php
				$events=Event::getPublishedEventList();
				for ($i = 0; $i < 4; $i++) {
					echo '<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'" class="list-group-item card-overlay event-list-item">';
					echo '<div class="white-text text-xs-left event-list-item-text">';
					echo '<span class="event-list-item-category"style="color:#1694b2;">'.$events[$i]->getTopic().'</span>';
					echo '<h3>'.$events[$i]->getTitle().'</h3>';
					echo '<span class="event-list-item-date">'.$events[$i]->getDatetime().', '.$events[$i]->getLocation()->getfullName().'</span>';
					echo '</div>';
					echo '</a>';
				}
			?>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default event-list">
			<div class="panel-heading"><h5 class="font-weight-bold"><b>Newest events</b></h5></div>
			<div class="panel-body list-group event-items newest">
			<?php
				for ($i = 0; $i < 4; $i++) {
					echo '<a href="../Eduvent/index.php?page=event-description&eventId='.$events[$i]->getId().'" class="list-group-item card-overlay event-list-item">';
					echo '<div class="white-text text-xs-left event-list-item-text">';
					echo '<span class="event-list-item-category"style="color:#1694b2;">'.$events[$i]->getTopic().'</span>';
					echo '<h3>'.$events[$i]->getTitle().'</h3>';
					echo '<span class="event-list-item-date">'.$events[$i]->getDatetime().', '.$events[$i]->getLocation()->getfullName().'</span>';
					echo '</div>';
					echo '</a>';
				}
			?>
			</div>
		</div>
	</div>
</div>
<!--/.Row 3-->

<!--Row 4 (Popular events) -->
<div class="row" id="event-market-area-home">
	<h5 class="font-weight-bold">Popular events</h5>
	<div class="col-md-12 event-market-area">
		<div class="row">
			<?php
				for ($i = 0; $i < count($events); $i++) {
						
						if($i==6){
							return;
						}
					if ($events[$i]->getimgHref()!=='') {
						$eventImage = $events[$i]->getimgHref();
						//$eventImage = ROOT_PATH . $events[$i]->getimgHref();
					}
					else {
						$eventImage = ROOT_PATH . '/view/images/event-img.png';
					}
			?>

					<div class="col-md-4 event-market-col">
						<div class="event-card card">
							<div class="event-image view overlay hm-white-slight">
								<img src="<?php echo $eventImage ?>" class="img-fluid">
								<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $events[$i]->getId() ?>">
									<div class="mask"></div>
								</a>
							</div>

							<div class="event-body card-block text-xs-center">
								<div class="event-title">
									<h5><?php echo $events[$i]->getTopic() ?></h5>
									<h4 class="card-title"><strong><a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $events[$i]->getId() ?>"><?php echo $events[$i]->getTitle() ?></a></strong></h4>
								</div>
								
								<div class="event-text card-text text-xs-left">
									<p><?php echo shorten_string($events[$i]->getDescription(), 23); ?></p>
								</div>

								<div class="card-footer">
									<div class="ticket-price">Ticket price: <?php echo $events[$i]->getPrice() ?>€</div>
									<div class="event-buttons flex-center">
										<a href="../Eduvent/index.php?page=event-description&eventId=<?php echo $events[$i]->getId() ?>">
											<button class="btn btn-blue-yellow-small" type="button">Show details</button>
										</a>

										<div class="event-menu">
											<button class="btn btn-grey-small" type="button">More</button>
											<ul class="event-dropdown-menu">
												<li class="text-xs-left"><a class="event-dropdown-item insert-to-shopping-cart" eventid=<?php echo $events[$i]->getId()?>  href="#">
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Add to shopping cart</a></li>
												
												<?php 
												if (isset($_SESSION['usermail'])) { ?>
													<li class="text-xs-left"><a class="event-dropdown-item add-to-wishlist" eventid=<?php echo $events[$i]->getId()?> usermail=<?php if (isset($_SESSION['usermail'])) { $email = $_SESSION['usermail']; $user = User::getUserByEmail($email); echo $user->getEmail(); } else { echo "NOEMAIL"; }?>  href="#">
													<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Add to wishlist</a></li>
						
												<?php }
												?>  
												
												
												<li class="text-xs-left"><a class="event-dropdown-item" href="#">
													<i class="fa fa-share-alt"></i>&nbsp Share this event</a></li>
												<li class="text-xs-left">
													<a class="event-dropdown-item subscribe-event" eventid=<?php echo $events[$i]->getId()?> href="#"  data-toggle="modal" data-target="#modal-subscribe">
														<i class="fa fa-feed" aria-hidden="true"></i>&nbsp Subscribe company newsletter
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php
				}
			?>
		</div>

	</div>
</div>
<!--/.Row 4-->
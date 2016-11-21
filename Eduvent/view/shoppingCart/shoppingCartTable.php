<?php
if (isset($_POST['purchaseshoppingCart'])){
?>
	<div class="row">
 		<div class="col-md-12">
			<h5>Thank you for your Purchase!</h5>
			You will receive a puchase confirmation by email. <br>
<?php
	include_once 'controller/mail.php';
	$shoppingCart = $_SESSION['shoppingCartSession'];
	$logggeduser = User::getUserById($_SESSION['userSession']);
	
	foreach($shoppingCart->getEvents() as $shoppingCartEvent){
		$logggeduser->bookEvent($shoppingCartEvent->getEvent());
	}
	deleteShoppingCart();
?>
		</div>
	</div>
<?php 
} else { 
	include_once 'shoppingCartPayment.php';

	function shorten_string($string, $wordsreturned)
	{
		$retval = $string;
		$string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
		$string = str_replace("\n", " ", $string);
		$array = explode(" ", $string);
		if (count($array)<=$wordsreturned)
		{
			$retval = $string;
		}
		else
		{
			array_splice($array, $wordsreturned);
			$retval = implode(" ", $array)." ...";
		}
		return $retval;
	}	
	
?>

                           
 <div class="table-responsive">
 	<table  class="table product-table">
 		<!--Table head-->
 		<thead>
 			<tr>
 				<th></th>
 				<th>Event</th>
 				<th>Category</th>
 				<th>Date</th>
 				<th>Price</th>
 				<th>Amount</th>
 				<th></th>
 				<th>Gift</th>
 				<th></th>
 			</tr>
 		</thead>
 		<!--/Table head-->
 
 		<!--Table body-->
 		<tbody>
 			<?php 
 			if (hasShoppingCartAtLeastOneEvent()){
 			
 			$shoppingCart = $_SESSION['shoppingCartSession'];
 			foreach($shoppingCart->getEvents() as $shoppingCartEvent):
 			?>
 
 		<!--First row-->
 			<tr id="shoppingcarttable">
 				<th scope="row"><img
 					src="<?php echo $shoppingCartEvent->getEvent()->getimgHref()?>"
 					alt="" class="img-fluid" min-width="80px width="80px" height="80px">
 				</th>
 				<td>
 					<h5>
 						<strong><?php echo $shoppingCartEvent->getEvent()->getTitle() ?></strong>
 					</h5>
 					<p class="text-muted"><?php echo shorten_string($shoppingCartEvent->getEvent()->getDescription(), 15)?></p>
 				</td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getTopic()?></td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getDateTime()?></td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getPrice() .' &euro;'?></td>
 				<td><?php echo $shoppingCartEvent->getAmount() ?> </td>
 				<td><td><?php echo (string)$shoppingCartEvent->getAmountGift() ?></td></td>
 				<td>
 					<button type="button" class="btn btn-blue-yellow delete-from-shopping-cart" eventid="<?php echo $shoppingCartEvent->getEvent()->getId()?>"
 						data-toggle="tooltip" data-placement="top" title="Remove item">X</button>
 				</td>
 			</tr>
 			<!--/First row-->
 
 			<?php endforeach; ?>
 			<tr>
 				<td colspan="3"></td>
 				<td>
 					<h4>
 						<strong>Total</strong>
 					</h4>
 				</td>
			<td>
 					<h4>
 						<strong>
 							<?php
 								$shoppingCart = $_SESSION['shoppingCartSession'];
 								echo $shoppingCart->calcTotalPrice();
 							?>
 							&euro;
 						</strong>
 					</h4>
 				</td>
				<?php  if (!isLoggedUserExisting()){?>
				<td colspan="3"><a class="btn btn-blue-yellow" href="index.php?page=login">
 						Complete purchase <i class="fa fa-angle-right right"></i>
 					</a>
 				</td>
				<?php } else {?>
 				<td colspan="3"><button type="button" class="btn btn-blue-yellow" data-toggle="modal" data-target="#paymentmodal">
 						Complete purchase <i class="fa fa-angle-right right"></i>
 					</button>
 				</td>
 				 <?php }?>
 			</tr>
 <?php } else {?>
 			<tr><td align="center" colspan="9"> <?php echo "Your shopping cart is empty."; }?></td> <tr>
 			
 		</tbody>
 	</table>
 </div>
 <?php } ?>
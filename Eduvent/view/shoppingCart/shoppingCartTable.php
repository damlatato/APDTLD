<?php
include_once 'shoppingCartPayment.php';
require_once 'view/supportcontactform.php';
?>
<div class="alert alert-success" role="alert" id="successfulbuyed" style="display: none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Event added to shopping cart!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>

                             
<div class="row">
 	<div class="col-md-12">
 		<h4>Event 1</h4>
 		<label>Select Quantity</label> <select id="eventquentity1"
 			class="browser-default">
 			<option value="1" selected>1</option>
 			<option value="2">2</option>
 			<option value="3">3</option>
 			<option value="4">4</option>
 			<option value="5">5</option>
 		</select> <input
 			class="btn btn-blue-yellow btn-rounded insert-to-shopping-cart"
 			eventid="1" type="submit" value="buy" />
 	</div>
 	<div class="col-md-12">
 		<h4>Event 2</h4>
 		<label>Select Quantity</label> <select id="eventquentity2"
 			class="browser-default">
 			<option value="1" selected>1</option>
 			<option value="2">2</option>
 			<option value="3">3</option>
 			<option value="4">4</option>
 			<option value="5">5</option>
 		</select> <input
 			class="btn btn-blue-yellow btn-rounded insert-to-shopping-cart"
 			eventid="2" type="submit" value="buy" />
 	</div>
 	<div class="col-md-12">
 		<h4>Event 3</h4>
 		<label>Select Quantity</label> <select id="eventquentity3"
 			class="browser-default">
 			<option value="1" selected>1</option>
 			<option value="2">2</option>
 			<option value="3">3</option>
 			<option value="4">4</option>
 			<option value="5">5</option>
 		</select> <input
 			class="btn btn-blue-yellow btn-rounded insert-to-shopping-cart"
 			eventid="3" type="submit" value="buy" />
 	</div>
 </div>
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
 					alt="" class="img-fluid" width="80px" height="80px">
 				</th>
 				<td>
 					<h5>
 						<strong><?php echo $shoppingCartEvent->getEvent()->getTitle() ?></strong>
 					</h5>
 					<p class="text-muted"><?php echo $shoppingCartEvent->getEvent()->getDescription()?></p>
 				</td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getTopic()?></td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getDateTime()?></td>
 				<td><?php echo $shoppingCartEvent->getEvent()->getPrice() .' &euro;'?></td>
 				<td><?php echo $shoppingCartEvent->getAmount() ?> </td>
 				<td><td><?php echo (string)$shoppingCartEvent->IsAsGift() ?></td></td>
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

 				<td colspan="3"><button type="button" class="btn btn-blue-yellow" data-toggle="modal" data-target="#paymentmodal">
 						Complete purchase <i class="fa fa-angle-right right"></i>
 					</button>
 				</td>
 			</tr>
 <?php } else {?>
 			<tr><td align="center" colspan="9"> <?php echo "Your shopping cart is empty."; }?></td> <tr>
 			
 		</tbody>
 	</table>
 </div>
<!-- Modal -->
<div class="modal fade ql-modal" id="paymentmodal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Complete Buying</h4>
			</div>
			<div class="modal-body">
				<p>Select a payment method:</p>
			</div>
			<form action="index.php?page=shoppingCart" method="post">
				<table class="table modal-body">
					<thead>
				        <tr>
				            <th></th>
				            <th></th>
				            <th>payment method</th>
				            <th></th>
				        </tr>
				    </thead>
					<tbody>
	        			<tr>
	        				<td></td>
	        				<td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked></td>
	            			<td><img src="view/images/payment-method/paypal.png" alt="" class="img-fluid" width="80px" height="80px"></td>
	            			<td>PayPal</td>
	        			</tr>
	        			<tr>
	        				 <td></td>
	        				<td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
	            			<td><img src="view/images/payment-method/visa.png" alt="" class="img-fluid" width="80px" height="80px"></td>
	            			<td>Visa</td>
	        			</tr>
	        			<tr>
	        				<td></td>
	        				<td>Total</td>
	        				<td><?php
	 								$shoppingCart = $_SESSION['shoppingCartSession'];
	 								echo $shoppingCart->calcTotalPrice();
	 							?> &euro;</td>
	        				<td></td>
	        			</tr>
					</tbody>
				</table>
				<div class="modal-footer">
					<button name="purchaseshoppingCart" type="submit" class="btn btn-blue-yellow" >Buy</button>
				</div>
			</form>
		</div>

	</div>
</div>

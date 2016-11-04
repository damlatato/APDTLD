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
			class="btn btn-success btn-rounded insert-to-shopping-cart"
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
			class="btn btn-success btn-rounded insert-to-shopping-cart"
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
			class="btn btn-success btn-rounded insert-to-shopping-cart"
			eventid="3" type="submit" value="buy" />
	</div>
</div>

<!--Shopping Cart table-->
<div class="table-responsive">
	<table class="table product-table">
		<!--Table head-->
		<thead>
			<tr>
				<th></th>
				<th>Event</th>
				<th>Category</th>
				<th>Date</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Gift</th>
				<th>Amount</th>
				<th></th>
			</tr>
		</thead>
		<!--/Table head-->
		<!--First row-->
		<tr>
			<th scope="row"></th>

		</tr>
		<!--/First row--
       
            <!--Second row-->
		<tr>
			<td colspan="3"></td>
			<td>
				<h4>
					<strong>Total</strong>
				</h4>
			</td>
			<td>
				<h4>
					<strong>0 $</strong>
				</h4>
			</td>
			<td colspan="3"><button type="button" class="btn btn-primary " disabled="disabled">
					Complete purchase <i class="fa fa-angle-right right"></i>
				</button></td>
		</tr>
		<!--/Second row-->

		</tbody>
		<!--/Table body-->
	</table>
</div>
<!--/Shopping Cart table-->

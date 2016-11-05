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

		<!--Table body-->
		<tbody>
			<?php $array = $_SESSION['shoppingCartSession'] ?>
			<?php foreach($array as $key=>$value): ?>

			<!--First row-->
			<tr>
				<th scope="row"><img
					src="<?php echo'$key->imageLink'?>"
					alt="" class="img-fluid">
				</th>
				<td>
					<h5>
						<strong><?php echo'$key->getEventTitle()'?></strong>
					</h5>
					<p class="text-muted"><?php echo'$key->getDescription()'?></p>
				</td>
				<td><?php echo'$key->getTopic()'?></td>
				<td><?php echo'$key->getDateTime()'?></td>
				<td><td><?php echo'$key->getPrice()'?></td></td>
				<td><span class="qty">1 </span>
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-sm btn-primary btn-rounded"> <input
							type="radio" name="options" id="option1">&mdash;
						</label> <label class="btn btn-sm btn-primary btn-rounded"> <input
							type="radio" name="options" id="option2">+
						</label>
					</div>
				</td>
				<td><?php echo'$key->getPrice()'?></td>
				<td>
					<button type="button" class="btn btn-sm btn-primary"
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
						<strong>1200 $</strong>
					</h4>
				</td>
				<td colspan="3"><button type="button" class="btn btn-primary">
						Complete purchase <i class="fa fa-angle-right right"></i>
					</button></td>
			</tr>

		</tbody>
	</table>
</div>

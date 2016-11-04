<div class="container">

	<!--Content-->
	<div class="row">
		<div class="col-md-12">

			<h2 class="doc-title">Shopping Cart</h2>
		
			<?php
				if (hasShoppingCartAtLeastOneEvent()){
					include 'view/shoppingCart/shoppingCartTable.php';
				} else {
					include 'view/shoppingCart/emptyShoppingCart.php';
				}
			?>
		
		</div>
		<!--/.Content-->
	</div>
</div>
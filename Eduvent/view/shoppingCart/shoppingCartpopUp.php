<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Your cart</h4>
            </div>
            <!--Body-->
            <div class="modal-body">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Product 1</td>
                            <td>100$</td>
                            <td><a><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Product 2</td>
                            <td>100$</td>
                            <td><a><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Product 3</td>
                            <td>100$</td>
                            <td><a><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Product 4</td>
                            <td>100$</td>
                            <td><a><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr class="total">
                            <th scope="row">5</th>
                            <td>Total</td>
                            <td>400$</td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary">Checkout</button>

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
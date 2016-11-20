

<!-- Modal Contact -->
<div class="modal fade modal-ext" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:black">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Newsletter subscription</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>Subscribe to this newsletter to get more informations about the events offered by this company.</p>
                <form action="index.php?page=event-market" method="post">
					<input id="modalEventID" style="display:none;" name="eventID" value="">			
					<div class="md-form">
	                    <input name="subemail" type="email" id="subemail" class="form-control validate">
	                    <label for="subemail" data-error="wrong" data-success="right">Your email</label>
	                </div>
	                <div class="text-xs-center">
	                    <button name="sendsubscribeconfirmation" class="btn btn-blue-yellow">Subscribe</button>
	                </div>
	        	</form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark-grey-yellow" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
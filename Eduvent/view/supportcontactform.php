

<!-- Modal Contact -->
<div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:black">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Need help? Write to us!</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>Our Support Team will contact you via e-mail. As soon as possible!</p>
                <br>
                
                <form action="index.php?page=mail-success" method="post">
	                <div class="md-form">
	                    <i class="fa fa-user prefix"></i>
	                    <input name="txtname" type="text" id="form22" class="form-control">
	                    <label for="form42">Your name</label>
	                </div>
	
	                <div class="md-form form-group">
	                    <i class="fa fa-envelope prefix"></i>
	                    <input name="txtmail" type="email" id="form91" class="form-control validate">
	                    <label for="form91" data-error="wrong" data-success="right">Type your email</label>
	                </div>
	
	                <div class="md-form">
	                    <i class="fa fa-tag prefix"></i>
	                    <input name="txtsubject" type="text" id="form32" class="form-control">
	                    <label for="form34">Subject</label>
	                </div>
	
	                <div class="md-form">
	                    <i class="fa fa-pencil prefix"></i>
	                    <textarea name="txtdescription" type="text" id="form8" class="md-textarea"></textarea>
	                    <label for="form8">Describe your problem</label>
	                </div>
	
	                <div class="text-xs-center">
	                    <button name ="sendsupportmail" class="btn btn-blue-yellow">Submit</button>
	
	                    <div class="call">
	                        <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"> +49 621 565 280</i></span></p>
	                    </div>
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
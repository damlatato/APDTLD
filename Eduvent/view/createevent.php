

<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Material Design Bootstrap </title>

<!-- Font Awesome -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href="includes/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="includes/mdbootstrap/css/mdb.min.css" rel="stylesheet">

<!-- Your custom styles (optional) -->
<link href="includes/mdbootstrap/css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Vendor libraries -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>

<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 282px;
    background-color: #f1f1f1;
    
}
#navigation {
    
    width: 250px;
    height: 41%;
    border-right: 1px solid black;
    
}


#pages {
    margin-left: 270px; /* 250px + 20px of actual margin */
}

.page {
    position: relative;
    display: none;
    
}
.page-link {

width: 250px; 
height: 50px;}


.order {

position: relative;
    padding: .5rem .75rem;
    margin-left: -1px;
    color: #0275d8;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
    width: 282px;
    height: 58px;}
    
/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
</style>
<script type="text/javascript">

$(document).ready(function () { 
$("#watch-me").click(function() {
 $("#show-me:hidden").show('slow');
 });
 $("#watch-me").click(function(){
 if($('watch-me').prop('checked')===false) {
    $('#show-me').hide();}
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(".page-link").on("click", function(e) {
        $(".page").fadeOut(250);
        setTimeout(function() { $($(e.currentTarget).attr("href")).fadeIn(250); }, 250);
    });
});</script>
<script type="text/javascript">
var $form = $('#payment-form');
$form.find('.subscribe').on('click', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();
    
    /* Abort if invalid form data */
    if (!validator.form()) {
        return;
    }

    /* Visual feedback */
    $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

    var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
    Stripe.setPublishableKey(PublishableKey);
    
    /* Create token */
    var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
    var ccData = {
        number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
        cvc: $form.find('[name=cardCVC]').val(),
        exp_month: expiry.month, 
        exp_year: expiry.year
    };
    
    Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
        if (response.error) {
            /* Visual feedback */
            $form.find('.subscribe').html('Try again').prop('disabled', false);
            /* Show Stripe errors on the form */
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            /* Visual feedback */
            $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            /* Hide Stripe errors on the form */
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");
            // response contains id and card, which contains additional card details            
            console.log(response.id);
            console.log(response.card);
            var token = response.id;
            // AJAX - you would send 'token' to your server here.
            $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                .done(function(data, textStatus, jqXHR) {
                    $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}
/* Fancy restrictive input formatting via jQuery.payment library*/
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

/* Form validation using Stripe client-side validation helpers */
jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Please specify a valid credit card number.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    /* Parsing month/year uses jQuery.payment library */
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Invalid expiration date.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "Invalid CVC.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('.subscribe').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('.subscribe').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);</script>
</head>

<body>


	<!-- Start your project here-->
	<header>
<div class="container" style="margin-top: 87px;">
	
<table style=" border: 1px solid black;">
<tr style="height: 234px; border: 1px solid black;" > 
<td style="width: 82%;border: 1px solid black;">
<!-- <tr> columns 1 <td>  -->
                <ul>
                    <li class="order" style="background-color:#ddd;">Create Event</li>
                    <li class="order">Location</li>
                     <li class="order">Pricing</li>
                       <li class="order">Gallery</li>
                </ul>
</td>


<!-- columnd 2 -->


<td style=" border: 1px solid black;"> 

   <form id="myForm" action="/send.php" method="post" style="
    height: 166px;width: 824px;">
    <table style="
    width: 833px;margin-top: -62px;
">
<tr  >
<td  height="100" style="
    padding-bottom: 98px;
">
				<label for="fullname">Event Name: <div class="input"><input id="fullname" name="fullname" type="text" ></div></label>
				
				<br>
				<label for="bodytext">Description: </label><div class="input" style="height: 46px;"><textarea id="bodytext" name="bodytext"></textarea><grammarly-btn><div style="z-index: 2; opacity: 1; transform: translate(530px, 402px);" class="_9b5ef6-textarea_btn _9b5ef6-not_focused" data-grammarly-reactid=".0"><div class="_9b5ef6-transform_wrap" data-grammarly-reactid=".0.0"><div title="Protected by Grammarly" class="_9b5ef6-status" data-grammarly-reactid=".0.0.0">&nbsp;</div></div></div></grammarly-btn></div>
			
				<br>
				<div class="input"><select id="select" name="select"><option>-- Event Type --</option><option value="option 1">Option 1</option><option value="option 2">Option 2</option></select></div>
					<div class="break"></div>
					<br>
				
			</td>
			 <td style="padding:0 15px 0 15px;"></td>
			  <td></td>
			   <td></td>
			<td style="padding-bottom: 98px;
">	
			<label for="select">Number of Participants:  <input type="number" name="quantity" min="1" max="100"> </label>
				 <div class="break"></div>
				 <label for="fullname">Date:  <input type="date"   name="date" > </label>
				  
				   <div class="break"></div>
				<label for="select">Category: <div class="input"><select id="select" name="select"><option>-- Select one --</option><option value="option 1">Option 1</option><option value="option 2">Option 2</option></select></div></label>
				
					<div class="break"></div>
				
		
				<div class="break"></div>
				 </td>
				   <tr>
				    </table>
<!-- </form> -->



</tr>
<tr style=" border: 1px solid black;"> <td style="border: 1px solid black;">   <ul style="margin-top: -40px;">
                    <li class="order" >Create Event</li>
                    <li class="order" style="background-color:#ddd;">Location</li>
                     <li class="order" >Pricing</li>
                       <li class="order">Gallery</li>
                </ul>
                
                </td>





<td>

<label for="bodytext">Address: </label>
<div class="input" style="height: 46px;    margin-bottom: -36px;"><textarea id="bodytext" name="bodytext" style="width: 59%;height: 56%;"></textarea><grammarly-btn><div style="z-index: 2; opacity: 1; transform: translate(530px, 402px);" class="_9b5ef6-textarea_btn _9b5ef6-not_focused" data-grammarly-reactid=".0"><div class="_9b5ef6-transform_wrap" data-grammarly-reactid=".0.0"><div title="Protected by Grammarly" class="_9b5ef6-status" data-grammarly-reactid=".0.0.0">&nbsp;</div></div></div></grammarly-btn></div>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1790.98550953453!2d8.460480341066642!3d49.483785871221926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797cc22c604e6e5%3A0xa20ea1a053f2a1!2sMannheim+%C3%9Cniversitesi!5e0!3m2!1str!2sde!4v1477074296166" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>




</td></tr>
<tr style=" border: 1px solid black;"><td style="border: 1px solid black;"> 

 <ul style="margin-top: 31px;">
                    <li class="order" >Create Event</li>
                    <li class="order" >Location</li>
                     <li class="order" style="background-color:#ddd;">Pricing</li>
                       <li class="order">Gallery</li>
                </ul>


</td> <td> 

 <table><tr><td> 
 
 
 
 <div class="radio">
  <label><input type="radio" name="optradio" >Free Paid</label>
</div>
<div class="radio">
  <label><input id='watch-me' name='test' type='radio' /> Paid Event</label>
</div>
  
 </td>
 <td>
 <div id='show-me' style='display:none'><div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4" style="    width: 143.333333%;margin-left: 26%;">
        
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
            
            
        </div>            
        
      
        
    </div>
</div></div>
 
 
 
 
 </td> </tr></table> 
 


</td></tr>
<tr> <td style=" border: 1px solid black;">
<ul style="margin-top: 31px;">
                    <li class="order" >Create Event</li>
                    <li class="order" >Location</li>
                     <li class="order" >Pricing</li>
                       <li class="order" style="background-color:#ddd;">Gallery</li>
                </ul>




</td><td> 


<div class="container">
<h2>File & Image upload</h2>
    <div class="col-xs-4">
    	<div class="form-group">
	      <label class="control-label">File upload with different text</label>
	      <input type="file" class="filestyle" data-buttonText="Select a File">
		</div>
    </div>
</div>





</td></tr>




</table>
 
       
      
          </div>
	</header>
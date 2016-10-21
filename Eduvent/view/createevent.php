

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
    

</style>

<script type="text/javascript">
$(document).ready(function() {
    $(".page-link").on("click", function(e) {
        $(".page").fadeOut(250);
        setTimeout(function() { $($(e.currentTarget).attr("href")).fadeIn(250); }, 250);
    });
});</script>
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

 <div id="content">
           
                <ul style="ist-style: none outside none;display: inline">
                    <li style="display: inline;"><a href="#page1" class="page-link">Free</a></li>
                    <li style="display: inline;"><a href="#page2" class="page-link">Paid</a></li>
                </ul>
          
            
            <div id="pages">
                <div id="page1" class="page">
                    <h1>Page 1</h1>
                    <p>This is all the lovely content on page 1.</p>
                    <p>Let's add a bunch of stuff to make it scroll.</p>
                    <p style="font-size: 72px">.<br/>.<br/>.<br/>.<br/>.<br/>.</p>
                    <p>This is at the bottom of the page.</p>
                </div>
                
                <div id="page2" class="page">
                    <h1>Page 2</h1>
                    <p>This is all the lovely content on page 2.</p>
                </div>
            </div>
        </div>


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
<!DOCTYPE html>

<html>
	<head>
		<title>FAQ</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="stylesheet" type="text/css" href="FAQ_css.css"/>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<head>
	
	<body style="font-family: Arial">
		<!--Header-->
		<div class="banner">
			<img src="Image/banner.jpg" alt="banner">
		</div>
		<!--End Header-->

		<!--Navibar-->
		<?php
			require('navibar.php');
		?>
		<!--End navibar-->
		
		<!--Wrapper-->
		<div class="wrapper">
			<p style="text-indent: 40px"><a href="mainpage.php">Home</a> > <a href="FAQ.php">FAQ</a></p>
		</div>
		<!--End Wrapper-->
     
	 <br/>
	 <br/>
	<h1 style="padding-left: 20px;">
	Frequently asked questions (FAQ)</h1>
	<div class="content">
		<button class="accordion"><font size="+1">Booking</font></button>
		<div class="panel">
	  		<h4>How to get a boarding pass?</h4>
	  		<p>You can purchase boarding tickets directly from any of our service centre. Alternatively, you can also purchase
	  		it at our website.</p> 
	  		<hr/>
	  		<h4>How do I confirm my booking (purchased) of a boarding ticket?</h4>
	  		<p>If you made your booking online, you may check for the booking that you have done in your account or in your email.</p>
	  		<hr/>
	  		<h4>What kinda of payment do you accept?</h4>
	  		<p>We accept VISA or MasterCard credit card and or cash at any of our service centres.</p>
	  		<hr/>
	  		<h4>What is the age limit for a child boarding ticket?</h4>
	  		<p>Children above the age of 12 is required to purchase the adult boarding ticket. Those between the age of 12-5 is required to purchase the children boarding ticket. Those below 5 is not required to have a boarding ticket.</p>
	  		<hr/>
	  		<h4>What is the age limit for a child to board alone?</h4>
	  		<p>Child must be 12 years old and above to travel alone due to safety and security issues.</p>
	  		<hr/>
	  		<h4>Can my pet travel in the cabin with me?</h4>
	  		<p>No pets are allowed on the coach due to hygiene reasons.</p>
		</div>

		<button class="accordion"><font size="+1">Luggage</font></button>
		<div class="panel">
			<h4>How do I check in my luggage?</h4>
	  		<p>Check-in your luggage at the coach by handing it over to our Coach Captain or Porter. It is your responsibility to ensure that your luggage is loaded into the right coach’s luggage compartment.</p> 
	  		<hr/>
	  		<h4>Do you have any restrictions on what can I place in my luggage and otherwise?</h4>
	  		<p>Kindly ensure that you do not store heat-sensitive items in your luggage and any other valuable items should be kept by your side at all times.</p> 
	  		<hr/>
	  		<h4>What if I need additional luggage tag?</h4>
	  		<p>Should you need Additional Luggage Tags, you may purchase the Additional Luggage Tags from our Customer Care Officer at the coach before boarding.</p> 
	  		<hr/>
	  		<h4>I forgot my luggage/hand-carry, can you recover it for me?</h4>
	  		<p>Each and every item found left behind on our coach will be rightfully returned to its owner.</p> 
		</div>

		<button class="accordion"><font size="+1">Charges and Refunds</font></button>
		<div class="panel">
			<h4>Can I change my travel date and time?</h4>
	  		<p>You may change your travel time and date for a small fee provided that you change your travel plans at least 3 days before the original date.</p> 
	  		<hr/>
	  		<h4>Can I get a refund for cancellations?</h4>
	  		<p>Sorry but no refunds will be given for cancellations</p>
	  		<hr/>
	  		<h4>I have lost my boarding ticket, can I get a replacement?</h4>
	  		<p>All boarding tickets printed and issued are valid till the time of travel and our system has no way of nullifying the boarding ticket. Hence, we cannot offer a replacement for lost boarding ticket. A new boarding ticket will have to be bought.</p>
	  		<hr/>
	  		<h4>Can I get a refund for a trip I missed for some reason or another?</h4>
	  		<p>Unfortunately you may not as all boarding tickets purchased are not refundable regardless of reason.</p>
		</div>

	</div>

	<!--Start Footer-->
	<?php

		require('footer.php');

	?>	
	<!--End Footer-->
	
	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
  	acc[i].addEventListener("click", function() {
    	this.classList.toggle("active");
    	var panel = this.nextElementSibling;
    	if (panel.style.display === "block") {
      	panel.style.display = "none";
    	} else {
      	panel.style.display = "block";
    	}
  		});
	}
</script>
</body>
</html>

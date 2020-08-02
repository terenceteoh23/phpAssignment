<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="About_css.css">
		<link rel="stylesheet" type="text/css" href="main.css"/>
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
			<p style="text-indent: 40px"><a href="mainpage.php">Home</a> > <a href="About.php"> About </a></p>
		</div>
		<!--End Wrapper-->
		
		<h1 style="padding-left: 200px;">About us</h1>
			<div class="content">
				<h1>Our goal</h1>
				<p>Our goal for BlueBus is to provide affordable and comfortable trips for all of our customers. We also have sure that our customers are enjoy their trip the whole time.</p>
			</div>

			<div class="content">
				<h1>Service</h1>
				<p>At BlueBus we provide you will the best service you could ask for. On board out crew will serve you meals and provide you with pillows and blankets. Futhermore our coach also offers entertainment via our touchscreen pad the contains a selection of movies and games.</p>
			</div>

			<div class="content">
				<h1>Safety</h1>
				<p>Ensuring safety is always the number one priority when it comes to our coaches. Our buses are maintained regularly and always checked before a trip. The maintenance is also done by exprienced mechanics. Futhermore, our coach captains are also professionally trained and monitored. Using a GPS, our communication department is able to monitor the coaches location at all times.</p>
			</div>
     <!--Footer-->
		<?php
		 require('footer.php');
		?>
	<!--End Footer-->
	
	</body>
</html>
<!DOCTYPE html>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="Home_css.css"/>
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
		<div class="navibar">
			<a class="active" href="homepage.php">Home</a>
			<a href="about.php">About</a>
			<a href="ContactUS.php">Contact Us</a>
			<a href="FAQ.php">FAQ</a>
			<a href="listDestinationBaseOnDate.php">Destination </a>
			<a href="listBusAvailable1.php">Bus Available </a>
			<a href="BookTicket.php">Book Ticket </a>
			<?php
				session_start();
				
				if(isset($_SESSION['username'])){
					echo"<a href='logout.php' style='float: right;'>LogOut</a>";
					echo"<a href='myProfile.php' style='float: right;'>";
					echo  $_SESSION['username'] ;
					echo " </a>";
					echo "<i class='far fa-user-circle' style='font-size:43px; float:right; color: white;'></i>";
				}
				else{
					echo"<a href='login.php' style='float: right;'>Log in</a>";
					echo"<a href='register.php' style='float: right;'>Sign up</a>";
				}
			?>
			</div>
		<!--End navibar-->
		
		<!--Wrapper-->
		<div class="wrapper">
			<p><a href="mainpage.php">Home</a>  </p>
		</div>
		<!--End Wrapper-->
		
		<!--homepage-->
		<div class="welcome_text">
		<h1>Travel with BlueBus</h1>
		<h3>We provide cheap prices and safe travels</h3>
		</div>
		
		<br/>
		<br/>
		<br/>
		
		<h1 style="text-align: center">What do we offer</h1>
		<div class="content">
			<div class="column">
			<h1>Cheap prices</h1>
			<p>
				Wanting to travel to places but in fear of expensive travel fees? BlueBus has some of the cheapest tickets you can find. 
			</p>
			<br/>

			<h1>Easy Reschedule</h1>
			<p>
				Worried about some last minute changes to your trip? We allow easy reschedule. 
			</p>
			<br/>

			<h1>Meals provided</h1>
			<p>
				Meals are provided with any trip you take with us.
			</p>
			</div>		
		</div>
		<!--End homepage-->
		
		<!--Footer-->
		<?php
		 require('footer.php');
		?>
		<!--End Footer-->
	</body>
</html>

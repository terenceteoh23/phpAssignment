<!DOCTYPE html>

<html>
	<head>
		<title>My Profile</title>
		<link rel = "stylesheet" type = "text/css" href = "member.css"/>
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
			<p><a href="mainpage.php">Home</a> > <a href="myProfile.php"> My Profile</a></p>
		</div>
		<!--End Wrapper-->
		
	<div style="padding: 80px;">
	<div class = "container1">
		<button class = "button"><a href = "myProfile.php" style="text-decoration:none">MY PROFILE</a></button>
		<button class = "button"><a href = "viewHistory.php" style="text-decoration:none">MY BOOKING HISTORY</a></button>
		<button class = "button"><a href = "editProfile.php" style="text-decoration:none">EDIT MY PROFILE</a></button>
		<button class = "button"><a href = "changePassword.php" style="text-decoration:none">CHANGE PASSWORD</a></button>
	</div>
	
	<br/><br/><br/><br/></br>
	<?php
		include("connection.php");
		
		$username = $_SESSION['username'];
		
		//Define the query
		$query = "SELECT `username`, `email`, `dob`, `contact_no`, `nationality` FROM user WHERE username = '$username'";
		$result=mysqli_query($combine,$query);
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		
			echo"<form method = 'post' action = 'myProfile.php'>";
				echo"<table border = '0' align = 'center' cellpadding = '5'>";
					echo"<tr>";
						echo"<th bgcolor = 'C7C6C6' colspan = '2'>My Profile</th>";
					echo"</tr>";
					echo"<tr>";
						echo"<td>Email</td>";
		echo"<td><input type = 'text' name = 'email' value = '{$row['email']}' readonly />";
					echo"</tr>";
					
					echo"<tr>";
						echo"<td>Date of Birth</td>";
		echo"<td><input type = 'text' name = 'dob' value = '{$row['dob']}' readonly />";
					echo"</tr>";
					
					echo"<tr>";
						echo"<td>Username</td>";
						echo"<td><input type = 'text' name = 'username' value = '{$row['username']}' readonly />";
					echo"</tr>";
					
					echo"<tr>";
						echo"<td>Contact Number</td>";
		echo"<td><input type = 'text' name = 'contact_no' value = '{$row['contact_no']}' readonly />";
					echo"</tr>";
					
					echo"<tr>";
						echo"<td>Nationality</td>";
						echo"<td><input type = 'text' name = 'nationality' value = '{$row['nationality']}' readonly />";
					echo"</tr>";
				echo"</table>";
			echo"</form>";
			echo"</div>";
		
	?>
	<!--Footer-->
		<?php
		 require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
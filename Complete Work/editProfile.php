<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
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
			<p><a href="mainpage.php">Home</a> > <a href="editProfile.php"> Edit Profile </a></p>
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
	
	<form method = "post" action = "myProfile.php">
		<table border = "0" align = "center" cellpadding = "10">
			<tr>
				<th bgcolor = "C7C6C6" colspan = "2">My Profile</th>
			</tr>
			<tr>
				<td colspan = "2"><small>You may change your personal particulars below :<small></td>
			</tr>
			<tr>
				<td align = "left">Email</td>
				<td><input type = "text" name = "email"/></td>
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td><input type = "text" name = "dateOfBirth"/></td>
			</tr>
			
			<tr>
				<td>Username</td>
				<td><input type = "text" name = "username"/></td>
			</tr>
			
			<tr>
				<td>Contact Number</td>
				<td><input type = "text" name = "contactNumber"/></td>
			</tr>
			
			<tr>
				<td>Nationality</td>
				<td><div class = "dropDownList-nationality">
					<select name = "nationality">
						<option value='australia'>AUSTRALIA</option>
						<option value='china'>CHINA</option>
						<option value='japan'>JAPAN</option>
						<option value='korea'>KOREA</option>
						<option value='malaysia'>MALAYSIA</option>
						<option value='singapore'>SINGAPORE</option>
						<option value='usa'>USA</option>
					</select>
				</div></td>
			</tr>
		</table>
		
		<br/><br/>
		
		<center><button class = "button-update" name = "update">UPDATE</button></center>
	</form>
	</div>
	<!--Footer-->
		<?php
		 require('footer.php');
		?>
		<!--End Footer-->
	</body>
</html>
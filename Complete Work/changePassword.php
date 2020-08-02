<!DOCTYPE html>

<html>
	<head>
		<title>Change Password</title>
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
			<p><a href="mainpage.php">Home</a> > <a href="changePassword.php"> Change Password</a></p>
		</div>
		<!--End Wrapper-->
		
		<div style="padding: 80px;"> 
		<div class = "container1" align="center">
			<button class = "button"><a href = "myProfile.php" style="text-decoration:none">MY PROFILE</a></button>
			<button class = "button"><a href = "viewHistory.php" style="text-decoration:none">MY BOOKING HISTORY</a></button>
			<button class = "button"><a href = "editProfile.php" style="text-decoration:none">EDIT MY PROFILE</a></button>
			<button class = "button"><a href = "changePassword.php" style="text-decoration:none">CHANGE PASSWORD</a></button>
		</div>
		
		<br/><br/>
		
		<?php
			$_SESSION["username"];
			include('connection.php');
			
			if(isset($_POST['changePassword'])){
				$password=$_POST['password'];
				$newPassword=$_POST['newPassword'];
				$confirmNewPassword=$_POST['confirmNewPassword'];

				$uppercase = preg_match('@[A-Z]@', $newPassword);
				$lowercase = preg_match('@[a-z]@', $newPassword);
				$number    = preg_match('@[0-9]@', $newPassword);
				$specialChars = preg_match('@[^\w]@', $newPassword);
				
				if(empty($password)){
					echo"<script>alert('Please enter password.')</script>";
				}
				//validate for strong password
				else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newPassword) < 8) 
				{
					echo "<script>alert('Invalid Password. Exp: Grocery@123')</script>";
				}
				else if(empty($confirmNewPassword)){
					echo"<script>alert('Please enter confirm password.')</script>";
				}
				//validate for same password input
				else if($confirmNewPassword != $confirmNewPassword){
					echo"<script>alert('Error: Confirm Password was not same. Please try again.')</script>";
					
				}
				else{
					if (count($_POST) > 0) {
						$result = mysqli_query($combine, "SELECT *from user WHERE username='" . $_SESSION["username"] . "'");
						$row = mysqli_fetch_array($result);
						if ($_POST["password"] == $row["password"]) {
							mysqli_query($combine, "UPDATE user set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
							echo"<script>alert('Password changed.')</script>";
						} else
							echo"<script>alert('Current Password incorrect.')</script>";
					}
				}
			}
		?>
		<form action = "changePassword.php" method = "post">
			<div class = "changePassword-box">
				<h1><font color = "#417de9">CHANGE PASSWORD</font></h1>
				
				<div class = "input-box">
					Current Password : <input type = "password" style="color:black;" name = "password">
				</div>
				<div class = "input-box">
					New Password : <input type = "password" style="color:black;" name = "newPassword">
				</div>
				<div class = "input-box">
					Confirm new Password : <input type = "password" style="color:black;" name = "confirmNewPassword">
				</div>
				<center><button class = "changePassword" name = "changePassword">CHANGE PASSWORD</button></center>
			</div>
		</form>
	</div>	
	<!--Footer-->
		<?php
		 require('footer.php');
		?>
		<!--End Footer-->
	</body>
</html>
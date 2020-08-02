
<!DOCTYPE html>
<?php
include("server.php");
?>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="register.css"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>

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
			<p><a href="mainpage.php">Home</a> > <a href="register.php">Register</a></p>
		</div>
		<!--End Wrapper-->
		
		<!--Register Form-->
		<div class="background-img">
		<div class="register-form-box" align="center">
			<div class="register-form-name">
				<p><b>New User Registration</b></p>
				<div class="register-form">
					<form method="POST" name="register">
						<label><span class="redText">*</span>Username</label><br>
						<input type="text" name="username" size="40" placeholder="Enter username"/>
						<br><br>
								
						<label><span class="redText">*</span>Email</label><br>
						<input type="email" name="email" size="40" placeholder="Enter email"/>
						<p class="register-word-col">Please make sure this email is spelt correctly.</p>
								
						<label><span class="redText">*</span>Password</label><br>
						<input type="password" name="password" size="30" placeholder="Enter password"/>
						<br><br>
						
						<label><span class="redText">*</span>Re-enter Password</label><br>
						<input type="password" name="Cfpassword" size="30" placeholder="Re-enter password"/>
						<br><br>
						
						<p class="policy">When clicking Register button, you agree and consent to the processing
						of your peronal data in accordance with the terms of our <a href="policy.php">
						Privacy Policy</a>.</p>
						<input type="submit" style="float:center" value='REGISTER' name="submit"/>
					</form>
				</div>
			</div>
		</div>
		</div>
		<!--End Register-->
		
		<!--Footer-->
		<?php
			require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
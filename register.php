
<!DOCTYPE html>
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
		<div class="navibar">
			<a class="active" href="#">Home</a>
			<a href="about.php">About</a>
			<a href="faq.php">FAQ</a>
			<a href="book.php">Tickets</a>
			<a href="login.php" style="float: right;">Log in</a>
			<a href="register.php" style="float: right;">Sign up</a>
			</div>
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
						<input type="text" name="username" size="40" placeholder="Enter username" required />
						<br><br>
								
						<label><span class="redText">*</span>Email</label><br>
						<input type="email" name="email" size="40" placeholder="Enter email" required />
						<p class="register-word-col">Please make sure this email is spelt correctly.</p>
								
						<label><span class="redText">*</span>Password</label><br>
						<input type="password" name="password" size="30" placeholder="Enter password" required />
						<br><br>
						
						<label><span class="redText">*</span>Re-enter Password</label><br>
						<input type="password" name="re-password" size="30" placeholder="Re-enter password" required />
						<br><br>
						
						<p class="policy">When clicking Register button, you agree and consent to the processing
						of your peronal data in accordance with the terms of our <a href="policy.php">
						Privacy Policy</a>.</p>
						<input type="button" name="register" value="REGISTER"/>
					</form>
				</div>
			</div>
		</div>
		</div>
		<!--End Register-->
		
		<!--Start Footer-->
		<footer class="site-footer">
			<div class="container">
				<div class="row-container">
					<div class="colm-container">
						<h6>About</h6>
						<p class="text-justify">About.</p>
					</div>
					
					<div class="colm-container">
						<h6>Categories</h6>
						<ul class="footer-links">
						  <li></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!--End Footer-->
	</body>
</html>
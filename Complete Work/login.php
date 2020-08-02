<!DOCTYPE html>
<?php
session_start();
include("connection.php");

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($combine, $_POST['username']);
  $password = mysqli_real_escape_string($combine, $_POST['password']);
  $username = stripslashes($_POST['username']);
  $password = stripslashes($_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
	
	//validation if the username had been record in database
	$sql="SELECT username AND password FROM user WHERE username='$username' AND password='$password' ";
	$result=mysqli_query($combine,$sql);
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)== 1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		echo "<script>alert('You are now logged in.');
			window.location='homepage.php'</script>";
			return true;
	
	}else {
		echo "<script>alert('Wrong username/password combination.')</script>";
		return false;
	}
	

}
?>
	
<html>
	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="login.css"/>
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
			<a class="active" href="Homepage.php">Home</a>
			<a href="about.php">About</a>
			<a href="ContactUS.php">Contact Us</a>
			<a href="FAQ.php">FAQ</a>
			<a href="listDestinationBaseOnDate.php">Destination </a>
			<a href="listBusAvailable1.php">Bus Available </a>
			<a href="BookTicket.php">Book Ticket </a>
			<a href="login.php" style="float: right;">Log in</a>
			<a href="register.php" style="float: right;">Sign up</a>
			</div>
		<!--End navibar-->
		
		<!--Wrapper-->
		<div class="wrapper">
			<p><a href="mainpage.php">Home</a> > <a href="login.php">Log In</a></p>
		</div>
		<!--End Wrapper-->
		
		<!--Login Form-->
		<div class="background-img">
		<div class = "login-form-box" align = "center" >
		
			<div class = "register-form-name">
			
				<p><b>Login Here</b></p>
				
				<div class = "logister-form">
				
					<form method = "post" name = "login" action="login.php">
					
						<label>Username </label>
						<br/><input type = "text" name = "username" size = "40" placeholder = "Enter username"/>
						
						<br/><br/>
						
						<label>Password</label>
						<br/><input type = "password" name = "password" size = "40" placeholder = "Enter Password"/>
						
						<input type="submit" style="float:center" value='LOGIN' name="login_user"/>
						
						<p><small>Haven't Register ?</small></p>
						<p class="register"><a href = "register.php">Register Here</a></p>
					
					</form>
				
				</div>
			
			</div>
		
		</div>
		</div>
		<!--Footer-->
		<?php
			require('footer.php');
		?>
		<!--End Footer-->
	</body>
</html>
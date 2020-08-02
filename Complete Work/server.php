<?php


include("connection.php");

// REGISTER USER
if(isset($_POST["submit"])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$Cfpassword=$_POST['Cfpassword'];
		
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		
		$username=mysqli_real_escape_string($combine, $username);
		$email=mysqli_real_escape_string($combine, $email);
		$password=mysqli_real_escape_string($combine, $password);
		$password=$password;
		
		//validation for input
		if(empty($username)){
			echo"<script>alert('Please enter username.')</script>";
		}
		else if(empty($email)){
			echo"<script>alert('Please enter email.')</script>";
		}
		//validation for input without@
		else if(!(preg_match('@[^\w]@', $email))){
			echo"<script>alert('Invalid email type. Please re-enter, it must have @.')</script>";
		}
		else if(empty($password)){
			echo"<script>alert('Please enter password.')</script>";
		}
		//validate for strong password
		else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
		{
			echo "<script>alert('Invalid Password. Exp: Grocery@123')</script>";
		}
		else if(empty($Cfpassword)){
			echo"<script>alert('Please enter confirm password.')</script>";
		}
		//validate for same password input
		else if($password != $Cfpassword){
			echo"<script>alert('Error: Confirm Password was not same. Please try again.')</script>";
			
		}
		else{
		  // first check the database to make sure 
		  // a user does not already exist with the same username
		  echo"<script>alert('You have entered strong password')</script>";
			//validation if the username had been record in database
			$sql="SELECT username FROM user WHERE username='$username'";
			$result=mysqli_query($combine,$sql);
			$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
			if(mysqli_num_rows($result)== 1)
			{
				//message when data had record in database
				echo "<script>alert('Sorry... This username had already used. Please try another.');
					window.location='register.php'</script>";
			}
				//store new record
			else if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
			{
				//success store data and display message
				$query = mysqli_query($combine, "INSERT INTO user
				(username, email, password) VALUES
				('$username', '$email', '$password')");
				if ($query)
				{
					$_SESSION['username'] = $username;
					//$_SESSION['success'] = "You are now logged in";
					echo "<script>alert('Your account had been success key in.');
					window.location='login.php'</script>";
				}
			}
			else
			{
				//message invalid input
				echo"<script>alert('You have no success store record in database')</script>";
			}
		}
}

?>
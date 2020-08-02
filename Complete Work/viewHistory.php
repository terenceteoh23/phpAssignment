<!DOCTYPE html>

<html>
	<head>
		<title>View Purchase History</title>
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
		<?php
			require('navibar.php');
		?>
		<!--End navibar-->
		
		<!--Wrapper-->
		<div class="wrapper">
			<p><a href="mainpage.php">Home</a> > <a href="viewHistory.php"> View Purchase History </a></p>
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
		
		<!--View Purchase History-->
		<?php
			include('connection.php');
			$username = $_SESSION['username'];
			$sql = "SELECT * FROM order_bus_ticket WHERE username = '$username' ";
			if($result = mysqli_query($combine,$sql)){
			if(mysqli_num_rows($result)>0){
				echo"<table align = 'center' cellpadding = '50'>";
				
					echo"<h1 align = 'center'>MY BOOK HISTORY</h1>";
					echo"<tr>";
						echo"<th>ONWARD DATE</th>";
						echo"<th>RETURN DATE</th>";
						echo"<th>FROM</th>";
						echo"<th>TO</th>";
						echo"<th>PASSENGER</th>";
						echo"<th>AMOUNT</th>";
					echo"</tr>";
			
			
				while($row = mysqli_fetch_array($result)){
					echo"<tr>";
						echo"<td>" .$row['onward_date']. "</td>";
						echo"<td>" .$row['return_date']. "</td>";
						echo"<td>" .$row['destination_from']. "</td>";
						echo"<td>" .$row['destination_to']. "</td>";
						echo"<td>" .$row['no_passenger']. "</td>";
						echo"<td>" .$row['amount']. "</td>";
					echo"</tr>";
				}
					echo"</table>";
					echo"</div>";
			//Free result set
			mysqli_free_result($result);
			}else{
				echo"There have no any record in database.";
				}
			}else{
				echo"Enable to exceute";
				mysqli_error($combine);
			}
				
				//Close connection
				mysqli_close($combine);
			?>	
		
	    <!--Footer-->
		<?php
			require('footer.php');
		?>
	    <!--End Footer-->
	</body>
</html>
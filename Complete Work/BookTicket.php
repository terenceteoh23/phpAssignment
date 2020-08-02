<!DOCTYPE html>
<?php
session_start();
include("connection.php");
$username= $_SESSION['username'];
if($username == ''){
	echo"<script>alert('Please login.')
	window.location='login.php'</script>";
}
?>
<html>
	<head>
		<title>Book Ticket</title>
		<link rel = "stylesheet" type = "text/css" href = "BookTicket.css"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<script src= 'https://kit.fontawesome.com/a076d05399.js'></script>

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
			<?php
				
				
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
			<p><a href="mainpage.php">Home</a> > <a href="BookTicket.php">Book Ticket</a></p>
		</div>
		<!--End Wrapper-->
		
		<!--Validation-->
		<?php
		include('connection.php');
		$username = $_SESSION['username'];
		
		if(isset($_POST['book']))
		{
			
			$destination_from = $_POST['destination_from'];
			$destination_to = $_POST['destination_to'];
			$onward_date = $_POST['onward_date'];
			$return_date = $_POST['return_date'];
			$bus_type = $_POST['bus_type'];
			$time = $_POST['time'];
			$no_passenger = $_POST['no_passenger'];
			
			$destination_from=mysqli_real_escape_string($combine,$destination_from);
			$destination_to=mysqli_real_escape_string($combine,$destination_to);
			$onward_date=mysqli_real_escape_string($combine,$onward_date);
			$return_date=mysqli_real_escape_string($combine,$return_date);
			$bus_type=mysqli_real_escape_string($combine,$bus_type);
			$time=mysqli_real_escape_string($combine,$time);
			$no_passenger=mysqli_real_escape_string($combine,$no_passenger);
			
			//Validation for empty
			if(!isset($_POST['way']))
			{
				echo"<script>alert('Please choose your way.')</script>";
			}
			else if($destination_from=='')
			{
				echo"<script>alert('Please choose where is your departure place')</script>";
			}
			else if($destination_to=='')
			{
				echo"<script>alert('Please choose your arrival place')</script>";
			}
			else if(empty($onward_date))
			{
				echo"<script>alert('Please choose your onward date')</script>";
			}
			else if($_POST['way'] === 'roundway')
			{
				if(empty($return_date)){
				echo"<script>alert('Please choose your return date')</script>";
				}
			}
			else if ($bus_type =='')
			{
				echo"<script>alert('Please choose your bus')</script>";
			}
			else if ($time =='')
			{
				echo"<script>alert('Please choose your time')";
			}
			else if($no_passenger=='')
			{
				echo"<script>alert('Please choose your number of passenger')</script>";
			}

				$sql="SELECT username FROM user WHERE username = '$username'";
				$result=mysqli_query($combine,$sql);
				$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
				
				$query = mysqli_query($combine, "INSERT INTO order_bus_ticket
				(username, onward_date, return_date, time, 	destination_from, destination_to, bus_type, no_passenger) VALUES
				('$username','$onward_date', '$return_date', '$time', '$destination_from', '$destination_to', '$bus_type', '$no_passenger')");
				if ($query)
				{
					
					echo"<script>alert('You have successfully book your ticket.')
				       window.location='payment.php</script>";
					
				}
			mysqli_close($combine);
		}
		
		?>
		<!--End Validation-->
		
		<form method="post" action="BookTicket.php">
		<br/><br/><p><center><font size="+4" ><b> BOOK BUS TICKET </b></font></center></p>
		<div style="padding: 300px;">
			<div class = "dropDownList">
			
			<!--table for the booking ticket-->			
				<table cellspacing = "5" >
					<tr>
						<td align="center"><font color="#63aaff" size="+2"><b>WAY: </b></font></td>
						<td align="center"><input type="radio" name="way" value="oneway"/>
						<label for="one way"><font color="#63aaff" size="+2"><b>ONE WAY</b></font></label></td>
						<td align="center"><input type="radio" name="way" value="roundway"/>
						<label for="round way"><font color="#63aaff" size="+2"><b>ROUND TRIP</b></font></label></td>
					</tr>
					
					<!--empty rows-->
					<tr>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
					</tr>
					<!--end empty rows-->
					
					<tr>
						<th><font color="#9ecaff" size="+2">FROM</font></th>
						<th><font color="#9ecaff" size="+2">TO</font></th>
						<th><font color="#9ecaff" size="+2">ONWARD DATE</font></th>
						<th><font color="#9ecaff" size="+2">RETURN DATE</font></th>
					</tr>
					
					<tr>
						<!--from dropdown list-->
						<td><select name = "destination_from">
							<option value="">FROM</option>
							<option value="Perlis">PERLIS</option>
							<option value="Kedah">KEDAH</option>
							<option value="Penang">PENANG</option>
							<option value="Ipoh">IPOH</option>
							<option value="Kuala Lumpur">KUALA LUMPUR</option>
							<option value="Melaka">MELAKA</option>
							<option value="Negeri Sembilan">NEGERI SEMBILAN</option>
							<option value="Pahang">PAHANG</option>
							<option value="Johor">JOHOR</option>
							<option value="Kelantan">KELANTAN</option>
							<option value="Terengganu">TERENGGANU</option>
						</select></td>
						<!--End form to dropdown list-->
						
						<!--To dropdown list-->
						<td><select name = "destination_to">
							<option value="">TO</option>
							<option value="Perlis">PERLIS</option>
							<option value="Kedah">KEDAH</option>
							<option value="Penang">PENANG</option>
							<option value="Ipoh">IPOH</option>
							<option value="Kuala Lumpur">KUALA LUMPUR</option>
							<option value="Melaka">MELAKA</option>
							<option value="Negeri Sembilan">NEGERI SEMBILAN</option>
							<option value="Pahang">PAHANG</option>
							<option value="Johor">JOHOR</option>
							<option value="Kelantan">KELANTAN</option>
							<option value="Terengganu">TERENGGANU</option>
						</select></td>
						<!--End to dropdown list-->
						
						<!--User select the date-->
						<td><input type="date" align = "center" name = "onward_date"></td>
						<td><input type="date" align = "center" name = "return_date"/></td>
					</tr>
				</table>
				
				<!--Next Line-->
				</br>
				</br>
				</br>
				
				<!--table for the booking ticket-->
				<table cellspacing = "5" >
					<tr>
						<th><font color="#9ecaff" size="+2">BUS</font></th>
						<th><font color="#9ecaff" size="+2">TIME</font></th>
						<th><font color="#9ecaff" size="+2">NUMBER OF PASSENGER</font></th>
					</tr>
					
					<tr>
						<!--from dropdown list-->
						<td>
							<select name = "bus_type">
							<option value="">BUSES</option>
							<option value="GJG Express">GJG EXPRESS</option>
							<option value="KKKL Express">KKKL EXPRESS</option>
							<option value="KPB Express">KPB EXPRESS</option>
							<option value="Pacific Express">PACIFIC EXPRESS</option>
							<option value="Billion Star Express">BILLION STAR EXPRESS</option>
							<option value="Alya Express">ALYA EXPRESS</option>
							</select>
						</td>
						<!--End form to dropdown list-->
						
						<!--User select the time-->
						<td><select name = "time">
							<option value="">TIME</option>
							<option value="8:00-9:00">8:00-9:00</option>
							<option value="9:00-10:00">9:00-10:00</option>
							<option value="10:00-11:00">10:00-11:00</option>
							<option value="11:00-12:00">11:00-12:00</option>
							<option value="12:00-13:00">12:00-13:00</option>
							<option value="13:00-14:00">13:00-14:00</option>
							<option value="14:00-15:00">14:00-15:00</option>
							<option value="16:00-17:00">16:00-17:00</option>
							<option value="17:00-18:00">17:00-18:00</option>
							<option value="19:00-20:00">19:00-20:00</option>
							<option value="20:00-21:00">20:00-21:00</option>
						</select></td>
						<!--End select time-->
						
						<!--User select the number of passenger-->
						<td>
							<select name = "no_passenger" style="width:410px">
								<option value = "">PASSENGER</option>
									<?php 
										
										for($p = 1; $p <=30; $p++)
										{
											print "<option value = \"$p\">$p</option>\n";
										}
									?>
							</select>
						</td>
						<!--End select-->
						
					</tr>
					<input type="hidden" name="username" value=<?php echo $_SESSION['username'];?> />
				</table>
			<br/>
			<br/>			
				
			<!--This is the book button for book ticket-->
			<input type="submit" name="book" value="BOOK NOW" class = "book-button"/>
			
			<!--This is the book button for book ticket-->
			<button class = "back-button"><a href="homepage.php" style="text-decoration:none">BACK</a></button>
			
			

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
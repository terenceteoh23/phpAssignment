<!DOCTYPE html>

<html>
	<head>
		<title>List Destination Base On Date</title>
		<link rel = "stylesheet" type = "text/css" href = "listDestinationBaseOnDate.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<p><a href="mainpage.php">Home</a> > <a href="listBusAvailable1.php"> List Bus Available </a> > <a href="pacificExpress .php"> Pacific Express </a></p>
		</div>
		<!--End Wrapper-->
		
		<?php
				$date = $_POST['date'];
				$month = $_POST['month'];
				$year = $_POST['year'];
				$valid = true;
				
				if($_POST['date'] == "date")
				{
					echo "<script>alert('Please select the date!')
					window.location='listDestinationBaseOnDate.php'</script>";
				}
				else if($month == "month")
				{
					echo "<script>alert('Please select the month!')
					window.location='listDestinationBaseOnDate.php'</script>";
				}
				else if($year == "year")
				{
					echo "<script>alert('Please select the year!')
					window.location='listDestinationBaseOnDate.php'</script>";
				}
				else if($valid)
				{
					if($date == 1 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>01/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
						
					}
					else if($date == 2 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>02/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 3 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>03/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 4 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>04/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO  MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 5 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>05/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 6 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>06/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 7 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>07/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp MELAKA TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp KUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 8 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>08/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp PENANG TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp MELAKA TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 9 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>09/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp MELAKA TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp KUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 10 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>10/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUANTAN TO KUANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 11 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>11/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 12 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>12/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 13 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>13/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 14 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>14/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 15 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>15/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 16 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>16/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPAHANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO KEDAH</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 17 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>17/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO KEDAH</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 18 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>18/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO TERENGGANU</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KEDAH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO TERENGGANU</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 19 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>19/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO PAHANG</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 20 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>20/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO TERENGGANU</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO PERLIS</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 21 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>21/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 22 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>22/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO TERENGGANU</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO PERLIS</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 23 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>23/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO TERENGGANU</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO PAHANG</font></td>";
							echo "</tr>";
					
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 24 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>24/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO KEDAH</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 25 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>25/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO NEGERI SEMBILAN</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 26 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>26/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 27 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>27/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO PAHANG</font></td>";
							echo "</tr>";

							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 29 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>29/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO TERENGGANU</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO PERLIS</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO PAHANG</font></td>";
							echo "</tr>";

							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 29 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>29/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO PAHANG</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 30 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>30/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspMELAKA TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspIPOH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPENANG TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspNEGERI SEMBILAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspPERLIS TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspJOHOR TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKEDAH TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKELANTAN TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspTERENGGANU TO KUALA LUMPUR</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
					else if($date == 31 && $month == "october" && $year == 2020)
					{
						echo "<table align = 'center' padding='20'>";
							echo "<tr>";
								echo "<th align='center'><font size = '+3'>List Bus Available on</font> 
									  </br></br><font color='#44a7c6' size='+4'><b>31/OCTOBER/2020</b></font></th>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO MELAKA</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO IPOH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PENANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO NEGERI SEMBILAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO PAHANG</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO JOHOR</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO KEDAH</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbspKUALA LUMPUR TO KELANTAN</font></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><i class='fa fa-bus' style='font-size:24px;color:#62d8ff'></i><font size = '+1'>&nbsp &nbsp KUALA LUMPUR TO TERENGGANU</font></td>";
							echo "</tr>";
							
								echo "<td><button class ='back-button'>START BOOKING</button>
								<button class = 'back-button'><a href = 'listDestinationBaseOnDate.php' style='text-decoration:none'>BACK</a></button></td>";
							echo "</tr>";
						echo "</table>";
					}
				   
				}
			?>
				
			<!--End of list-->
	
	 <!--Footer-->
		<?php
			require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
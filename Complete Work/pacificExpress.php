<!DOCTYPE html>

<html>
	<head>
		<title>Pacific Express</title>
		<link rel="stylesheet" type="text/css" href="listBusAvailable.css"/>
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
		
		<table align = "center" cellspacing = "35">
			<tr>
				<th colspan = "7" bgcolor = "A6CFF9"><font size = "+3">PACIFIC EXPRESS BUS AVAILABLE</font></th>
			</tr>
			<tr>
				<th>FROM</th>
				<th>TO</th>
				<th>DEPARTURE TIME</th>
				<th>DURATION</th>
				<th>ARRIVE TIME</th>
				<th>ADULT</th>
				<th>CHILD</th>
			</tr>
			<tr>
				<td>PENANG</td>
				<td>KUALA LUMPUR</td>
				<td>12.15AM</td>
				<td>05h 12m</td>
				<td>5.27AM</td>
				<td>RM38.50</td>
				<td>RM28.00</td>
			</tr>
			
			<tr>
				<td>KUALA LUMPUR</td>
				<td>MELAKA</td>
				<td>9.30AM</td>
				<td>03h 15m</td>
				<td>12.45PM</td>
				<td>RM25.50</td>
				<td>RM15.00</td>
			</tr>
			
			<tr>
				<td>MELAKA</td>
				<td>IPOH</td>
				<td>9.00AM</td>
				<td>05h 45m</td>
				<td>2.45PM</td>
				<td>RM35.50</td>
				<td>RM25.50</td>
			</tr>
			
			<tr>
				<td>IPOH</td>
				<td>JOHOR</td>
				<td>8.45AM</td>
				<td>06h 00m</td>
				<td>2.45PM</td>
				<td>RM68.00</td>
				<td>RM58.00</td>
			</tr>
			
			<td><button class = "back-button"><a href = "listBusAvailable1.php" style="text-decoration:none">BACK</a></button></td>
			
		</table>
	
	<!--Footer-->
		<?php
			require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
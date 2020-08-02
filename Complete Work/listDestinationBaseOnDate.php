<!DOCTYPE html>
<html lang = "en">

	<head><!DOCTYPE html>

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
			<p><a href="mainpage.php">Home</a> > <a href="listDestinationBaseOnDate.php"> List Destination Base On Date </a></p>
		</div>
		<!--End Wrapper-->
		
		<div style="padding: 300px;">
			<div class = "dropDownList-Date">
				<form method = "post" action = "listDestinationBaseOnDate1.php">
					<table cellspacing = "5" >
					
						<tr>
							<th><font size = "+2">DATE</font></th>
							<th><font size = "+2">MONTH</font></th>
							<th><font size = "+2">YEAR</font></th>
						</tr>
						
						<tr>
							<td><select name = "date">
								<option value = "date">Date</option>
									<?php 
										
										for($d = 1; $d <=31; $d++)
										{
											print "<option value = \"$d\">$d</option>\n";
										}
									
									?>
							</select></td>
						
							<td><select name = "month">
								<option value = "month">Month</option>
								<option value = "october">October</option>
							</select></td>
						
							<td><select name = "year">:
								<option value = "year">Year</option>
								<option value = 2020>2020</option>
							</select></td>
							<td><button class = "search-button">SEARCH</button></td>
							
						</tr>
					</table>
				</form>
			</div>
		</div>
	
	 <!--Footer-->
		<?php
			require('footer.php');
		?>
	<!--End Footer-->
	
	</body>
</html>
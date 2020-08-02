<!DOCTYPE html>

<html>
	<head>
		<title>List Bus Available</title>
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
			<p><a href="mainpage.php">Home</a> > <a href="listBusAvailable1.php"> List Bus Available </a> </p>
		</div>
		<!--End Wrapper-->
		
	<form method = "post" action = "listBusAvailable1.php">
		<table cellpadding = "40" border = "0" align = "center">
			<tr>
				<td align = "center"><font size = "+3">GJG Express</font>
				<br/><img src = "Image/bus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "gJGExpress.php" style="text-decoration:none">SEARCH</a></button></td>
				<td align = "center"><font size = "+3">KKKL Express</font>
				<br/><img src = "Image/blueBus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "kkklExpress.php" style="text-decoration:none">SEARCH</a></button></td>
				<td align = "center"><font size = "+3">KPB Ekspress</font>
				<br/><img src = "Image/redBus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "kpbEkspress.php" style="text-decoration:none">SEARCH</a></button></td>
			</tr>
			
			<tr>
				<td align = "center"><font size = "+3">Pacific Express</font>
				<br/><img src = "Image/yellowBus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "pacificExpress.php" style="text-decoration:none">SEARCH</button></a></td>
				<td align = "center"><font size = "+3">Billion Star Express</font>
				<br/><img src = "Image/whiteBus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "billionStarExpress.php" style="text-decoration:none">SEARCH</button></a></td>
				<td align = "center"><font size = "+3">Alya Express</font>
				<br/><img src = "Image/blackBus.jpeg" alt = "bus" width = "350" height = "250"/>
				<input type="hidden" name="submitted" value="true"/>
				<br/><button class = "searchBus-button" name = "search"><a href = "alyaExpress.php" style="text-decoration:none">SEARCH</button></a></td>
			</tr>
		</table>
	
	 <!--Footer-->
		<?php
			require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
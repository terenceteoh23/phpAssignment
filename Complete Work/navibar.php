		<style>
			.navibar {
			  position: -webkit-sticky;
			  position: sticky;
			  top: 0;
			  height: 56px;
			  padding-left: 20px;
			  padding-right: 20px;
			  background-color: #5E8DBB;
			  z-index: +1;
			}

			.navibar a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 16px 20px;
			  text-decoration: none;
			  font-size: 20px;
			}

			.navibar a:hover {
			  background-color: #ffffff;
			  color: #5E8DBB;
			}
		</style>

		<div class="navibar">
			<a href="homepage.php">Home</a>
			<a href="about.php">About</a>
			<a href="ContactUS.php">Contact Us</a>
			<a href="FAQ.php">FAQ</a>
			<a href="listDestinationBaseOnDate.php">Destination </a>
			<a href="listBusAvailable1.php">Bus Available </a>
			<a href="BookTicket.php">Book Ticket </a>
			
			<?php
				session_start();
				
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
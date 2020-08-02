<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="stylesheet" type="text/css" href="contact.css"/>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<p style="text-indent: 40px"><a href="mainpage.php">Home</a> > <a href="ContactUs.php">Contact Us</a> </p>
		</div>
		<!--End Wrapper-->
		
		<!--Validation-->
	<?php
		//Validation
	  if(isset($_POST['submit']))
	 {
		 //Declare variables
		$firstname=$_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contactnumber = $_POST['contactnumber'];
		$country = $_POST['country'];
		$feedback = $_POST['feedback'];
		$fNameAlphabets = preg_match('/^[a-zA-Z\s]+$/' , $firstname);
		$lNameAlphabets = preg_match('/^[a-zA-Z\s]+$/' , $lastname);
		$leastLength = strlen($contactnumber)<10;
		$maxLength = strlen($contactnumber)>11;	
		
		$valid = true;
		
		if(empty($firstname))
		{
			echo"<script>alert('Please enter your firstname')</script>";
		}
		else if(empty($lastname))
		{
			echo"<script>alert('Please enter your lastname')</script>";
		}
		
		  //Validation for alphabets
		else if(!$fNameAlphabets)
		{
			echo"<script>alert('Please enter your first name in letters')</script>";
		}
		else if (!$lNameAlphabets)
		{
			echo"<script>alert('Please enter your last name in letters')</script>";
		}
		
		else if(empty($contactnumber))
		{
			echo"<script>alert('Please enter your contact number')</script>";
		}
		//Validation for length of contact number
         else if($leastLength)
		{
			echo"<script>alert('Please enter at least 10 digits for contact number')</script>";	
		}
		else if($maxLength)
		{
			echo"<script>alert('You are allowed to enter maximum 11 digits for contact number')</script>";
		}
		
		else if($country == '')
		{
			echo"<script>alert('Please choose your country')</script>";
		}
		else if(empty($feedback))
		{
			echo"<script>alert('Please enter something in the feedback')</script>";
		}
		else
		{
			echo"<script>alert('You have submitted the form successfully')</script>";
		}
		
	      
	 }
	 
	 ?>
		<!--End of validation-->
		
		<!--Contact Info-->

		<div class="contact">
			<br/>		
		    <br/>
			<br/>
			<br/>
			<p><center><font size="+4" ><b> CONTACT INFO </b></font></center></p>
			</br>
			
			<table cellpadding="100" align="center">	
				<td>
				<p><center><i style="font-size:24px" class="fa">&#xf207;</i><b> Name :</b><center></p>
				<p><center><font size="+1" color="blue">BLUE BUS</font></center></p>
				
				<br/>
				
				<p><center><i style="font-size:24px" class="fa">&#xf095;</i><b> Telephone : </b></center></p>
				<p><center><font size="+1" color="blue"> +605-82937395 </font></center></p>
				
				<br/>
				
				<p><center><i style="font-size:24px" class="fa">&#xf1ac;</i><b> Fax :</b></center></p>
				<p><center><font size="+1" color="blue"> +605-82937395 </font></center></p>
				
				<br/>
				
				<p><center><i style="font-size:24px" class="fa">&#xf0e0;</i><b> Email : </b></center></p>
				<p><center><font size="+1" color="blue"> bluebus@gmail.com </font></center></p>
				
				<br/>
				
				<p><center><i style="font-size:24px" class="fa">&#xf0f2;</i><b> Working Hours : </b></center><p>
				<p><center><font size="+1" color="blue"> MONDAY - FRIDAY : 8AM - 5PM </font></center></p>
				<p><center><font size="+1" color="blue"> SATURDAY : 9AM-12PM </font></center></p>
				<p><center><font size="+1" color="blue"> SUNDAY : CLOSING DAY </font></center><p>
				
				<br/>
                </td>
				
					<td align="center">
					<p><center><i style="font-size:24px" class="fa">&#xf041;</i><b> Address : </b></center></p>
					<p><center><font size="+1" color="blue"> 168, Jalan Setia Murni, Bukit Damansara,
					</br> 50490 Kuala Lumpur,Wilayah Persekutuan Kuala Lumpur.</font></center></p>

					
					<p><center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7937881315925!2d101.64952831444667!3d3.149034354032289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
									1!3m3!1m2!1s0x31cc49031b259249%3A0xdb9f2da67e093652!2sJalan%20Setia%20Murni%2C%20Bukit%20Damansara%2C%2050490%20Kuala%20Lumpur%2C%20Wilayah%20Persekutuan
									%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1593599200256!5m2!1sen!2smy" 
									  width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center></p>
				
				</td>
				
			</table>
		</div>
		<!--End Contact Info -->
		
		<!--Feedback Form-->
		<div class="feedback">
		<br/>
		<p><center><font size="+4"><b> FEEDBACK FORM</b></font></center></p>
		<br/>
		<br/>
		  <form action="ContactUs.php" method="post">
			<label for="fname">FIRST NAME</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">

			<label for="lname">LAST NAME</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			
			<label for="lname">EMAIL</label>
			<input type="text" id="email" name="email" placeholder="Your email..">
			
			<label for="lname">CONTACT NUMBER</label>
			<input type="text" id="contact number" name="contactnumber" placeholder="Your contact..">

			<label for="country">COUNTRY</label>
			<select id="country" name="country">
			  <option value="">Country</option>
			  <option value="australia">AUSTRALIA</option>
			  <option value="canada">CANADA</option>
			  <option value="china">CHINA</option>
			  <option value="korea">KOREA</option>
			  <option value="japan">JAPAN</option>
			  <option value="malaysia">MALAYSIA</option>
			  <option value="usa">USA</option>
			</select>

			<label for="feedback">FEEDBACK</label>
			<textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" name="submit" value="Submit">
			<input type="hidden" name="submit" value="true">
		  </form>
		</div>
		<!--End Feedback Form-->
		
		
		
		 <!--Footer-->
		<?php
		 require('footer.php');
		?>
	    <!--End Footer-->
	
	</body>
</html>
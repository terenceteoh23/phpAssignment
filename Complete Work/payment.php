<!DOCTYPE html>
<?php
session_start();
include("connection.php");
$username= $_SESSION['username'];

?>
<html>
	<head>
		<title>Payment</title>
		<link rel = "stylesheet" type = "text/css" href = "payment.css"/>
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
			<p><a href="mainpage.php">Home</a> > <a href="orderTicket.php">Book Ticket</a> > <a href="payment.php">Payment</a></p>
		</div>
		<!--End Wrapper-->
			
			
			<!--Validation-->
				<?php
						//Validation
					  if(isset($_POST['submit']))
					 {
						 //Declare variables
						$card_type = $_POST['card_type'];
						$card_holder = $_POST['card_holder'];
						$credit_card_num = $_POST['credit_card_num'];
						$exp_date = $_POST['exp_date'];
						$cvv = $_POST['cvv'];
						$cHolderAlphabets = preg_match('/^[a-zA-Z\s]+$/' , $card_holder);
						$numbericCNumber = preg_match('/^([0-9]*)$/' , $credit_card_num);
						$numbericCvv = preg_match('/^([0-9]*)$/' , $cvv);
						$cNumberLength = strlen($credit_card_num)==16;
						$cvvNumberLength = strlen($cvv)== 3;	
						
						$valid = true;
						
						if($card_type=='')
						{
							echo"<script>alert('Please choose your card type')</script>";
						}
						else if(empty($card_holder))
						{
							echo"<script>alert('Please enter your card holder')</script>";
						}
						else if(empty($credit_card_num))
						{
							echo"<script>alert('Please enter your credit card number')</script>";
						}
						else if(empty($exp_date))
						{
							echo"<script>alert('Please choose your expiration date')</script>";
						}
						else if(empty($cvv))
						{
							echo"<script>alert('Please enter your cvv')</script>";
						}
						
						  //Validation for alphabets
						else if(!$cHolderAlphabets)
						{
							echo"<script>alert('Please enter your card holder in letters')</script>";
						}
						
						 //Validation for numberic
						else if(!$numbericCNumber )
						{
							echo"<script>alert('Please enter your credit card number in digits')</script>";
						}
						else if (!$numbericCvv)
						{
							echo"<script>alert('Please enter your cvv in digits')</script>";
						}
						
						//Validation for length of card number
						 else if(!$cNumberLength)
						{
							echo"<script>alert('Please enter you credit card number in 16 digits')</script>";	
						}
						else if(!$cvvNumberLength)
						{
							echo"<script>alert('Please enter your cvv in 3 digits')</script>";
						}
						
						$sql="SELECT username FROM user WHERE username = '$username'";
						$result=mysqli_query($combine,$sql);
						$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
						
						$query = mysqli_query($combine, "INSERT INTO payment
						(username, credit_card_num, card_type, card_holder, exp_date, cvv) VALUES
						('$username','$credit_card_num', '$card_type', '$card_holder', '$exp_date', '$cvv')");
						if ($query)
						{
							echo"<script>alert('You have successfully payment.')
							   window.location='Homepage.php</script>";
						}
					}
	 			?>
			<!--End Validation-->
			
			<div style="padding: 80px;"> 
			<!--form of orderTicket in payment-->
					<div class = "form">
						
						<form method = "post" action = "orderTicket.php">
							
								<h2><font size="+3" color="#53aecb"><center><b>Payment</b></center></font></h2>
								
								<p><font color="#417de9" size="+1"><b>Card Type</b></font></p>
								<img src="https://img.icons8.com/color/48/000000/visa.png"/>
								<img src="https://img.icons8.com/color/48/000000/mastercard.png"/>
								<img src="https://img.icons8.com/color/48/000000/discover.png"/>
								<img src="https://img.icons8.com/color/48/000000/amex.png"/>
								<select id="card_type" name="card_type">
								<option value=""> Card Type </option>
								<option value="visa"> VISA</option>
								<option value="mastercard"> MASTER CARD </option>
								<option value="discover"> DISCOVER </option>
								<option value="amex">AMERICAN EXPRESS</option>
                                </select>
								
								</br>
								
								<p><font color="#417de9" size="+1"><b>Card Holder</b></font></p>
								<input type = "text" name = "card_holder" size = "25" placeholder = "Card Holder"/>
								
								<p><font color="#417de9" size="+1"><b>Credit Card Number</b></font></p>
								<input type = "text" name = "credit_card_num" size = "25" placeholder = "Card Number"/>
								
								<p><font color="#417de9" size="+1"><b>Expired Month And Year</b></font></p>
								<input type = "month" id = "exp_date" name = " exp_date" />
								
								<p><font color="#417de9" size="+1"><b>CVV</b></font></p>
								<input type = "text" name = "cvv" size = "20" placeholder = "CVV"/>
								
								<br/>
								<br/>
								
								<input type = "checkbox" name = "tick" value = "tick"/>&nbsp By clicking on Make Payment you agree to our <a href="policy.php"><font color = "blue">Terms of Privacy Policy</font></a>
								<br/><br/>
								<input type="submit" name="submit" value="PAY" class = "button-orderTicket"/>
								
						</form>
						
					</div>
				</div>
             <!--End form of orderTicket in payment-->
			 
	<!--Footer-->
		<?php
		 require('footer.php');
		?>
	<!--End Footer-->
	</body>
</html>
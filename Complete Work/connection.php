<?php
$datab_mysql="bus_reservation_system_group13"; //the name of database

//connect and select the database that created
$combine = mysqli_connect("localhost","root","") or die
	("Sorry...Could not select database.");
mysqli_select_db($combine, $datab_mysql) or die
	("Sorry..Your didn't select the databse.");

?>
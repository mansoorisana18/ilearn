<?php 
	
	   
	   $con=mysqli_connect('database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com','ilearn1234');
	   if (!$con) {
	   	die('connection failed'.mysqli_connect_error());
	   }

	mysqli_select_db($con,'ilearn');

 ?>
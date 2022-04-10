<?php

			$course_name=$_GET['course_name'];


       		 $con=mysqli_connect('database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com','ilearn1234');
			mysqli_select_db($con,'ilearn');

       		$id=$_GET['course_id'];
       		$q="DELETE from courses where id='$id'";
			$result=mysqli_query($con,$q);
			if ($result) {
				header("location:admin_edit_courses.php?course_name=$course_name");
			}
			

     ?>
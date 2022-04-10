
<?php
	


		  $con=mysqli_connect('database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com','ilearn1234');
      mysqli_select_db($con,'ilearn');

       $topicname=$_POST['topic_name'];
	 	$coursename=$_POST['coursename'];
	 	$description=$_POST['editor'];
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `courses`( `topic_name`, `description`, `course_name`) VALUES ('$topicname','$description','$coursename')";


 	mysqli_query($con,$qy);
 	// echo "inserted";
 	header('location:admin_edit_courses.php?course_name='.$coursename);
?>
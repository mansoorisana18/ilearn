<?php
session_start();

	$con=mysqli_connect('database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com','ilearn1234');
	mysqli_select_db($con,'ilearn');

	
		 $id=$_POST['txt1'];
		echo "hello sunil";
		$q="select * from courses where id=$id";
		$result=mysqli_query($con,$q);
		$res=mysqli_fetch_array($result); 

	?>
      <div class="card col-md-6">
           <?php $_SESSION['message']=$res['description'];
           	
           //echo $res['description'];
            header("location:java_programming.php?course_name=".$res['course_name']); ?>


      </div>

	
	<?php ?>
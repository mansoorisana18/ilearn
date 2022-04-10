<?php 

class manage_courses_class
 {


 	public $host="database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com";
 	public $username="ilearn1234";
 	public $pass="";
 	public $db_name="ilearn";
 	public $conn;
 	public $course_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_courses()
 	{
 		$query="select * from programming_languages";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->course_list[]=$row;
 		}
 		return $this->course_list;
 	}
}

 ?>
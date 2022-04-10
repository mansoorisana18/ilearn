<?php 

class manage_videos_class
 {


 	public $host="database-1.cwzyakgvt0wa.us-east-1.rds.amazonaws.com";
 	public $username="ilearn1234";
 	public $pass="";
 	public $db_name="ilearn";
 	public $conn;
 	public $videos_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_videos()
 	{
 		$query="select * from video_info";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->videos_list[]=$row;
 		}
 		return $this->videos_list;
 	}
}

 ?>
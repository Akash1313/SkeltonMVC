<?php

class DBOperations{
	
	 private $host = 'localhost';
	 private $user = 'root';
	 private $db = 'test';
	 private $pass = '';
	 private $conn;
	

//*******************************************************************************************************/
	
	 //Constructer
	 public function __construct() 
	{		
		// mysqli_connect(ServerName,UserName,Password, Database);	
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);		
				
	}
	
//*******************************************************************************************************/	

	 public function select()
	 {	 	
	 	$con=$this->conn;
	 	$stmt= "SELECT FirstName from users where Id= ?";
	 	$query=$con->prepare($stmt);
	 	$query->bind_param("s", $id);
	 	
	 	for($i=1;$i<5;$i++)
	 	{	$id=$i;
	 		$query->bind_param('s',$id);
	 		$query->execute();
	 		$result=$query->get_result();
	 		$row=$result->fetch_array(MYSQLI_ASSOC);
	 		echo "</br>".$row['FirstName']."</br>";
	 		
	 	} 	
	 	
	 }
	 
//*******************************************************************************************************/		 

}

		
		

<?php

 class MyDb{

 	private static $connection;

 	public function connect(){

 		if(!isset(self::$connection)){
 			$config = parse_ini_file('config.ini');
 			self::$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
 		}

 		if(self::$connection == false){
 			echo "No connection" . self::$connection->connect_error;
 			return false;
 		}

 		return self::$connection;
 	}

 	public function getjobs(){

 		$sql = "select * from jobs";

 		$conn = $this->connect();
 		$result = $conn->query($sql);

 		$rows = array();

 		while($row = $result-> fetch_assoc()){

 			$rows[] = $row;

 		}

 		return $rows;

 	}

 	public function getjob($id){

 		$sql = "select * from jobs where id=$id";

 		$conn = $this->connect();

 		$result = $conn->query($sql);

 		$row = $result->fetch_assoc();

 		return $row;
 	}



 	}

 	public function addStudent($name,$major,$avg){

 		$sql = "insert into students (name,major,avg) values ('$name','$major',$avg)";

 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		
 		return $result;
 	}

 	public function deletejob($id){
 		if(is_numeric($id)){
 		$sql = "delete from jobs where id=$id";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 		}	
 		return false;
 	}

 	public function login($username,$password){ 
 		
 		//echo "unsafe username: " . $username . "<br>";
 		//echo "unsafe password: " . $password . "<br>";


 		$conn = $this->connect();

 		$safeusername = $conn->real_escape_string($username);
 		$safepassword = $conn->real_escape_string($password);

 		//echo "Safe username:" . $safeusername . "<br>";
 		//echo "Safe password: " . $safepassword;
 		
 		$sql = "select * from users where username='$safeusername' and password='$safepassword'";

 		$result	 =$conn->query($sql);
 		$num = $result->num_rows;

 		if($num>=1)
 			return true;
 		else
 			return false;
 	}

 	public function getComments(){

 		$conn = $this->connect();

 		$sql = "select * from comments";

		$result = $conn->query($sql);

 		$rows = array();

 		while($row = $result-> fetch_assoc()){

 			$rows[] = $row;

 		}

 		return $rows;

 	}

 	public function addComment($comment){

 		$safecomment = htmlspecialchars($comment);


 		$sql = "insert into comments (comment) values ('$safecomment')";

 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		
 		return $result;

 	}

 }


?>
<?php
if(isset($_session['user_id'])){

if(isset($_GET['id'])){
$id = $_GET['id'];

require 'MyDb.php';

$db = new MyDb();

$result = $db->deleteStudent($id);


if($result){
	header("location:myann.php?success=true");

}
else{
	echo "error, record was not deleted";
}
}else{
	header("location:index.php");
}

}
else{
	header("location:login.php");
}




?>
<?php
require './conn.php';
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
      $address=$_POST['address'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $category=$_POST['category'];
   $salary=$_POST['salary'];
      $company_name=$_POST['company_name'];
        $tel=$_POST['tel'];
    $email=$_POST['email'];

        if(isset($_FILES['image'])){
    //upload image
    $temp= $_FILES["image"]["tmp_name"];
    $name= $_FILES["image"]["name"];
    $image_type=$_FILES["image"]["type"];
    $error=$_FILES["image"]["error"];
    $image_path="images/";
    $arr=array("image/jpeg","image/jpg","image/png","image/PNG");
   
    

    if(in_array($image_type, $arr) && !$error){
      
        if(!is_dir($image_path)){
        mkdir($image_path);
        
        }

    if(move_uploaded_file($temp,$image_path.$name)){
              $image=$image_path.$name;
    }else{

	}
	
    }
  }
  
   
   
    $query="INSERT INTO `jobs`(`title`, `description`, `image`,`cat_id`, `salary`, `company_name`, `address`, `street`, `city`, `telephone`, `email`) VALUES ('$title','$description','$image','$category','$salary','$company_name','$address','$street','$city','$tel','$email')";
    $result= mysqli_query($conn, $query);
    header("location:addJob.php?success");
}

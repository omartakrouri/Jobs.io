<?php
require './conn.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
        $tel=$_POST['tel'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query="INSERT INTO `contact`(`name`, `telephone`, `email`,`message`) VALUES ('$name','$tel','$email','$message')";
    $result= mysqli_query($conn, $query);
    header("location:contact.php?success");
}

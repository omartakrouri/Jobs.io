<?php
require './conn.php';
if(isset($_POST['username'])){
    $username=$_POST['username'];
        $password=$_POST['password'];

        $tel=$_POST['tel'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $query="INSERT INTO `users`(`username`, `password`, `address`, `email`, `tel`) VALUES ('$username','$password','$address','$email','$tel')";
    $result= mysqli_query($conn, $query);
    header("location:register.php?success");
}

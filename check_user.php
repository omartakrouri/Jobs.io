<?php
require './conn.php';
session_start();
if(isset($_POST['username'])){
    $username=$_POST['username'];
        $password=$_POST['password'];
    $safeusername = mysqli_real_escape_string($conn, $username);
    $safepassword = mysqli_real_escape_string($conn, $password); 
    echo $safeusername;
    echo "<br>";
    echo $safepassword;


    $query="SELECT * from users where username='$safeusername' and password='$safepassword'";
    $result= mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>=1){
        $row= mysqli_fetch_array($result);
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header("location:index.php");
    }else{
            
            header("location:login.php?error=1");
            //header("locaphpp?wrong");

    }
}

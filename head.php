
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <?php require "conn.php"; ?>
    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Jobs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs.php">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="most.php">popular</a>
            </li>
            
            <?php
            session_start();
            if(isset($_SESSION['id'])){
                ?>
              <li class="nav-item">
                <a class="nav-link" href="addJob.php">Add Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="myann.php?id=<?php echo $_SESSION['id']; ?>">My Announcements</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Welcome <?php echo $_SESSION['username']; ?>(Logout)</a>
            </li>
            
            <?php
            }else{
                ?>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php
            }
            ?>
          
          </ul>
        </div>
      </div>
    </nav>
<?php
include('backend/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>The poetic empire</title>
  <!-- MDB icon -->
  <link rel="icon" href="https://media4.picsearch.com/is?HZTql8mOFWxjTbK38_P8bC182fAkdAqT6RZ1IK9vYQ0&height=255" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <!-- offline fontawesome link -->
  <!-- <link rel="stylesheet" href="assets/fontawesome/css/all.css"> -->
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- custom sign up css -->
  <link rel="stylesheet" href="assets/css/signup.css">

  <style>
 
  </style>
</head>
<body onload="poem()">
      <!-- project starts here -->
    
        <!--Navbar -->
    <?php include('includes/navbar.php'); ?>
        <!--/.Navbar -->
<!-- form -->
<div class="main-block" style="margin-top: 0;">
    <div class="left-part">
      <i class="fa fa-sign-in" aria-hidden="true"></i>      <h1>Login to artistic empire </h1>
      <p>Where poets are made.</p>
      <div class="btn-group">
      </div>
    </div>
    <form action="" autocomplete="off" method="POST">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Login here</h2>
      </div>
      <div class="info">
        <input class="fname" type="email" name="email" placeholder="example@me.com" required>
        
        <input type="password" name="password" placeholder="Password" required>     
      </div>
      <button type="submit" name="login" >Sign in</button>
      <span><a href="signup.php">Dont have an account,create one here</a></span>

    </form>
  </div>
<!-- form -->
      
         
       
<!-- End your project here-->
 <!-- footer -->
 <?php include('includes/footer.php')?>
<!-- Footer -->
</body>
</html>

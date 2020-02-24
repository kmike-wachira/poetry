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
<body onLoad="poem()">
      <!-- project starts here -->
    <?php include('includes/navbar.php');?>
 
    
<!-- form -->
<div style="margin-top: 80px"></div>
<div class="main-block mt-5">
    <div class="left-part">
      <i class="fa fa-registered fa-6x "></i>
      <h1>Register to our communinty</h1>
      <p>The best place to showcase your work and learn from others</p>
      <div class="btn-group">
        <a class="btn-item">Write your own poems</a>
        <a class="btn-item" >Share your books as .pdf files</a>
      </div>
    </div>
    <form action="" autocomplete="off" method="POST">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Register here</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" name="name" placeholder="Full name" required>
        <input type="email" name="email" placeholder="Example@domain.com" required>
        <input type="tel"   name="phone" placeholder="enter your phone no" required>
        <input type="text" name="indname" placeholder="enter your industry name||nickname" required>

        <input type="password" id="psw" name="password" placeholder="enter your Password" required> 
        <input type="password" id="cpsw" name="cpassword" placeholder="Confirm Password" required>     

      </div>
      <div class="checkbox">
        <input type="checkbox" onclick="showPassword()" name="checkbox"><span>show password </span>
      </div>
      <button type="submit" name="signup" href="">Sign up</button>
      <span><a href="signin.php">Have an account already .Login here</a></span>
    </form>
  </div>
<!-- form -->
 <!-- footer -->
 <?php include('includes/footer.php')?>
<!-- Footer -->       
<!-- End your project here-->
  <!-- jQuery -->
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
    function showPassword() {
      var x = document.getElementById("psw");
      var y = document.getElementById("cpsw");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>
</body>
</html>

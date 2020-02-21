<?php
include('backend/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>My Portfolio</title>
  <!-- MDB icon -->
  <link rel="icon" href="https://lh3.googleusercontent.com/a-/AAuE7mA0HA30RztANlIRbIuYJ2PNpUlfl7Jr_pnzL7vzlw=s96-cc-rg" type="image/x-icon">
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
<body>
      <!-- project starts here -->
    
        <!--Navbar -->
  <header>
          <nav class="mb-1 navbar navbar-expand-lg navbar-dark  fixed-top " style="background-color: #33B5E5;">
            <a class="navbar-brand" href="#">The poet's empire</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
              aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarSupportedContent-555">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="poem.php">Poems</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="book.php">Books</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Contribute
                  </a>
                  <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                    <a class="dropdown-item" href="addbook.php">Add book</a>
                    <a class="dropdown-item" href="addpoem.php"> Add poem</a>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user">mike kariuki</i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="signup.php">Sign up</a>
                    <a class="dropdown-item" href="signin.php">Login</a>
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
  </header>    
<!--/.Navbar -->
<!-- form -->
<div class="main-block" style="margin-top: 0;">
    <div class="left-part">
      <i class="fa fa-sign-in" aria-hidden="true"></i>      <h1>Login to artistic empire </h1>
      <p>Where poets are made.</p>
      <div class="btn-group">
      </div>
    </div>
    <form action="/" autocomplete="off">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Signin here</h2>
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

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>

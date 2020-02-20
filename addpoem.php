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
  <link rel="stylesheet" href="assets/css/edit.css">

</head>
<body>
      <!-- project starts here -->
    
        <!--Navbar -->
<header>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark  fixed-top " style="background-color: #33B5E5;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse p-3" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="poem.html">Poems</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book.html">Books</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Contribute
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="addbook.html">Add book</a>
          <a class="dropdown-item" href="addpoem.html"> Add poem</a>
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
          <a class="dropdown-item" href="signup.html">Sign up</a>
          <a class="dropdown-item" href="signin.html">Login</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</header>

<div class="row" style="margin-top: 50px;">
 
<div class="col-md-12 col-lg-3"></div>
<div class="col-md-12 col-lg-6 mt-5">
  <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add poem</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">
      <form class=" p-5" action="" method="POST" enctype="multipart/form-data">
        <div class="d-flex preview-empty mx-auto" id="preview"><img src="" alt="" id="preview_img">
          <p><strong>No image selected</strong></p>
        </div>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01 image"
              aria-describedby="inputGroupFileAddon01 customFile new_pic"  accept=".png, .jpg" onchange="handleFiles(this.files)">
            <label class="custom-file-label" for="inputGroupFile01">select poem image</label>
          </div>
        </div> <br>    
        <input type="text" id="" class="form-control mb-4" name="poem-title" placeholder="Enter poem title" required>
        <div class=" amber-textarea active-amber-textarea-2">
          <i class="fas fa-pencil-alt prefix">Write your poem in here</i>
          <textarea id="form24" name="poem-body" class="md-textarea form-control" id="editor" rows="3" required></textarea>          
        </div>    
        <button class="btn btn-info btn-block my-4" name="add-poem" type="submit">Add poem</button>       
    </form>
    </div>
</div>
      
</div>
<div class="col-md-12 col-lg-3"></div>


</div>
<!-- section-->

<!-- end section -->
  <!-- footer -->
<footer class="page-footer font-small cyan darken-3">
  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

         
       
      <!-- End your project here-->

 <script src="assets/js/index.js"></script>
<script src="assets/ckeditor/ckeditor.js"></script>
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
  
<script>
  // Replace the <textarea> with a CKEditor
  CKEDITOR.replace('poem-body');
</script>

</body>
</html>

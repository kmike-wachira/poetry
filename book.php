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
  <link rel="stylesheet" href="assets/css/w3.css">

</head>
<body>
      <!-- project starts here -->
    
        <!--Navbar -->
        <header>
          <nav class="mb-1 navbar navbar-expand-lg navbar-dark  fixed-top " id="navbar">
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
<!-- carousel -->
<div id="carouselExampleFade mt-5" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/project/47.jpg" style="height: 720px;"
          alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/project/79.jpg" style="height: 720px;"
          alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/project/77.jpg" style="height: 720px;"
          alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- end carousel -->
<div class="container-fluid">
    <div class="row pt-3">

        <?php
         $body_sql=" SELECT * FROM books ";
         $resultset=$connect->query($body_sql);
         if($resultset ->num_rows>0):
          while($book_row = $resultset->fetch_assoc()) :?>           
        <div class="col-lg-3 col-md-6 mt-1 mb-2  w3-center ">      
          <div class="card">      
            <!--Card image-->
            <div class="view">                    
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>      
            <!--Card content-->
            <div class="card-body">              <!--Title-->
              <h4 class="card-title" style="text-transform: uppercase;font-weight:bold"><?=$book_row['title'] ?></h4>
              <h4 class="card-title"><?= "Author  :".$book_row['author'] ?></h4>

              <!--Text-->
              <p class="card-text "><?="<b>Description</b> <br>: " .$book_row['description']?></p>
              <a href="<?="uploads/pdf/".$book_row['url'] ?>" target="_new" class="btn btn-primary">Read book</a>
            </div>    
          </div>
          <!--/.Card-->      
        </div>
        <?php 
        endwhile;
      endif;
        ?>
        <!-- Grid column -->  
      </div>
    </div>
 <!-- footer -->
 <?php include('includes/footer.php')?>
<!-- Footer -->      
       
  <!-- End your project here-->

 

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
   var pos=window.pageYOffset;
 window.onscroll=function(){
   var newpos=window.pageYOffset;
   if(pos >newpos){
      document.getElementById("navbar").style.backgroundColor="transparent";
   }else if(newpos>pos){
    document.getElementById("navbar").style.backgroundColor="#33b5E5";
    document.getElementById("navbar").style.transition="2s";
   }else{
    document.getElementById("navbar").style.backgroundColor="transparent";    
   }
 }

  </script>

</body>
</html>

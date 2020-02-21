<?php
  include("backend/connect.php");
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
  <link rel="stylesheet" href="assets/css/style.css">

   <!-- Custom styles for this template -->
   <link href="vendor/css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/poem.css">
  
</head>
<body class="">
 <header>
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top " style="background-color: #33B5E5;">
      <a class="navbar-brand" href="#">The poet's empire</a>
      <span class="navbar-toggler-icon" id="openNav"onclick="openNav()" ></span>
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
  <div id="mySidenav" class="sidenav " style="margin-top: 70px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php  
      $poem_sql = "SELECT * FROM poems";
      $poem_result = $connect->query($poem_sql);
       if ($poem_result->num_rows > 0) :
           while($poem_row = $poem_result->fetch_assoc()) :?>           
            <a href="<?="/poem.php#".$poem_row['id']?>" data-toggle="tooltip" data-placement="top" title="<?=$poem_row['title']?>" style="width:150px; text-transform: lowercase;text-overflow:ellipsis;white-space:nowrap"><?=$poem_row["title"]?></a>
         <?php  endwhile;
          endif;
    ?>
      </div>
      
      <div id="main" onclick="closeNav()">
<div class="container-fluid  poem-wrapper mx-0" >
          <!-- poem cards -->
          <!-- Card -->

<!-- Grid row -->
<div class="row pt-1 overflow-hidden">
  <!-- Grid column -->
  <!-- display poems -->
     <?php
     $poem_body_sql=" SELECT * FROM poems ";
     $resultset=$connect->query($poem_body_sql);
     if($resultset ->num_rows>0):
      while($row = $resultset->fetch_assoc()):
        if($row['picture'] == "" || empty($row['picture'])):?>
        <div class="col-lg-4 col-md-12 mt-2" id="<?=$row['id']?>">
          <!--Panel-->
          <div class="card">
            <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5"><?= $row['title'] ?>
            </h3>
            <div class="card-body">
              <p class="d-flex justify-content-between align-items-center ">
               <pre class="text-muted poem"> <?=$row['body'] ?></pre> 
              </p>
              <p class="text-small text-muted mb-0 pt-3"><?php echo "Posted by © ". getName($connect,$row['poet']) ."  On  ". date('M j<\s\up>S</\s\up> Y',strtotime($row['time']) )?></p>

            </div>
          </div>
          <!--/.Panel-->
      
        </div>
        <?php  else:?>
    <div class="col-lg-4 col-md-12 mt-2" id="<?=$row['id']?>">
      <div class="card">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" height="200" style="background-position: center;background-attachment:fixed" src="<?= "uploads/".$row['picture']?>" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h5 class="card-title"><?=$row['title'] ?></h5>
        <!-- Text -->
        <p class="d-flex justify-content-between align-items-center ">
               <pre class="text-muted poem-w-i"> <?=$row['body'] ?></pre> 
        </p>
        <p class="text-small text-muted mb-0 pt-3"><?php echo "Posted by © ". getName($connect,$row['poet']) ."  On  ". date('M j<\s\up>S</\s\up> Y',strtotime($row['time']) )?></p>
    
      </div>
      </div>
    </div>
       <?php endif;
      endwhile;
    else:
      echo "<h1>No poems Yet<h1>";
    endif; ?>
    </div>
 </div>
</div>
      <!-- /#page-content-wrapper -->
  
   <!-- footer -->
<?php include('includes/footer.php')?>
<!-- Footer -->
        
      </div>
      
      <script src="assets/js/poem.js"></script>
       <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
       <!-- Menu Toggle Script -->    
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
  // Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script> 
           
      </body>
  </html>

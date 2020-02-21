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
  <link rel="stylesheet" href="assets/css/style.css" media="screen">
  <link rel="stylesheet" href="assets/css/w3.css">

</head>
<body onload="poem()">
      <!-- project starts here -->
    
        <!--Navbar -->
        <?php include('includes/navbar.php')  ?>
        <!-- navbar -->
    
<!-- carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 crl" src="assets/img/project/47.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 crl" src="assets/img/project/79.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 crl" src="assets/img/project/77.jpg"
          alt="">
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
<div class="container-fluid background">
    <div class="row pt-3">

        <?php
         $body_sql=" SELECT * FROM books ";
         $resultset=$connect->query($body_sql);
         if($resultset):
          while($book_row = $resultset->fetch_assoc()) :?>           
        <div class="col-lg-3 col-md-6 mt-1 mb-2  w3-center " >      
          <div class="card" style="height: 300px;overflow-x:scroll;">      
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
  <script type="text/javascript" src="assets/js/scroll.js">   </script>

</body>
</html>

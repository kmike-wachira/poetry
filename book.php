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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/w3.css">
  <link rel="stylesheet" href="assets/css/style.css" media="screen">


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
        <div class="col-lg-3 col-md-6 mt-1 mb-2  w3-center " id="<?=$book_row['id'] ?>">      
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
              <a href="<?= "whatsApp://send?text=Read ".$book_row['title'] ." By *".$book_row['author']."* \n on \n ". "http://poetsaffair.epizy.com/book.php"?>" class="text-success"
                data-action="share/whatsapp/share"> <i class="fab fa-whatsapp fa-2x "></i> </a>
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

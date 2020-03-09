<?php include('backend/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>The poetic empire</title>
  <meta property="og:title" content="Poets affair">
  <meta property="og:description" content="The best there is to showcase your poetry and writing">
  <meta property="og:url" content="http://poetsaffair.epizy.com">
  <meta property="og:image" content="https://media4.picsearch.com/is?HZTql8mOFWxjTbK38_P8bC182fAkdAqT6RZ1IK9vYQ0&height=255">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:type" content="website" />
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

  <!-- Links to owl carousel -->
  <link rel="stylesheet" href="assets/OwlCarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/OwlCarousel/assets/doc.theme.min.css">

  <link rel="stylesheet" href="assets/OwlCarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/w3.css">
  <link rel="stylesheet" href="assets/css/style.css"  media="screen">



  <style>
 
  </style>
</head>
<body>
      <!-- project starts here -->
    
  <!--Navbar -->
   <?php include('includes/navbar.php') ?>
  <!-- navbar -->
   
<!-- section-->
<!--Carousel Wrapper-->
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel" style="padding-top:0px ">
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img class="d-block w-100 crl" src="assets/img/project/79.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 crl" src="assets/img/project/77.jpg"
        alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 crl" src="assets/img/project/79.jpg"
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
<!--/.Carousel Wrapper-->

<!-- end carousel -->

  <div class="content text-center p-3 mt-3">
  <i class="fa fa-users fa-7x" aria-hidden="true"></i>
    <h1 style="font-weight:bolder">About us</h1>
    <br>
    <p style="font-size:24px">We are a group of online writers whom have decided to create a platform for both upcoming and already developed writer's to share their
      writting and poetry to others and the general public as a whole.
    </p>
  </div>

<div class="image1 p-3 mt-3 my-auto " style="color: black" >
  <h1 class="my-auto">Poems Available</h1>
  <span class="Count " style="font-size: 30px; font-weight:bold;color:white"><?=getNum($connect)?></span>
<!-- <span class="Count" style="display:none">0</span> -->
</div>
<div class="content text-center py-5">
  <h1>What we offer</h1>
  <div class=" row ">
    <div class="col-lg-4 col-md-12 ">
      <i class="fa fa-quote-right fa-6x"></i>
      <h1>Poetry</h1>
      <div class="" style="font-size: 24px">
        <p>Poetry is an echo asking a shadow to dance.We as Dr Harry have gathered some amusing poems that brightens up your day and soothes your heart.Read all of our poetry  <a href="book.php">here</a></p>
      </div>
   </div>
    <div class="col-lg-4 col-md-12 ">
      <i class="fa fa-book-open fa-7x"></i>
      <h1>Books</h1>
      <div class="" style="font-size: 24px">
      
        <p>We do believe that in reading stories ,one acquires knowledge ,improves memory and reduces stress.Thats why we have a couple of inspiring stories that will do all the magic for you.Read our stories <a href="book.php">here</a></p>
      </div>
   </div>
   <div class="col-lg-4 col-md-12 ">
   <i class="fa fa-code fa-7x " aria-hidden="true"></i>
    <h1>Contribute</h1>
    <div class="">
      <p style="font-size: 24px" >To achieve our main purpose,we need your contribution in writing since we are all talented differently in this field in reaching different audiences. <a href="signup.html">Sign up </a> with us to become part of the team</p>
    </div>
 </div>

  </div>
</div>
<div class="image "> </div>
<div class="content text-center py-5">
<i class="fas fa-users fa fa-5x"></i>
  <h1 style="font-weight:bold">Our team</h1>
<div class="owl-carousel w3-center">
<!-- Card -->
<?php
 $sql ="SELECT * FROM  users  WHERE team IS NOT NULL";
 $result = $connect->query($sql); 
 if($result->num_rows>0 ):
   while($rown = $result->fetch_assoc()):?>
    <div class="card " >
        <div style=" display: flex;justify-content: center;text-align: center; ">
        <?php if(empty($rown['profilepic'])):?>
        <i class="fas fa-user fa-6x"></i>
       <?php else:?>
          <img class="" style="border-radius:50%;height:150px;width:150px"  src="<?= 'uploads/'.$rown['profilepic']?>"
          alt="<?= $rown['Full Name']?>">
        <?php endif;?>      
        </div>
      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title"><?= $rown['Full Name'] ." "."commonly known as ". $rown['industry_name']?></h4>
        <!-- Text -->
        <p class="card-text">Position :<?=$rown['team']?> </p>
        <!-- Button -->
        <a href="<?= 'tel:'.$rown['phone'] ?>" class="btn btn-primary"> <i class="fa fa-phone">Contact for assistance</i></a>
      </div>
</div>
<?php endwhile; 
 else:?>
 <h1>We currently don't have a team</h1>
 <?php endif;  
?>

</div>
</div>  
<!-- end section -->
  <!-- footer -->
    <?php include('includes/footer.php')?>
  <!-- Footer -->     
      <!-- End your project here-->

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="assets/js/scroll.js">   </script>
  <script>
  $('.Count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 10000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
  </script>

  <script type="">
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[2000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
  </script>

</body>
</html>

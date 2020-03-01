<?php
  include("backend/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta property="og:title" content="Poets affair">
<meta property="og:description" content="The best there is to showcase your poetry and writing">
<meta property="og:url" content="http://poetsaffair.epizy.com/poem.php">
<meta property="og:image" content="https://media4.picsearch.com/is?HZTql8mOFWxjTbK38_P8bC182fAkdAqT6RZ1IK9vYQ0&height=255">
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
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
  <link rel="stylesheet" href="assets/css/edit.css">
  <link rel="stylesheet" href="assets/css/style.css">

   <!-- Custom styles for this template -->
   <link href="vendor/css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/poem.css">
  
</head>
<body class="" onLoad="poem1()">
 <!--Navbar -->
 <?php include('includes/navbar.php') ?>
  <!-- navbar -->     
  <div id="mySidenav" class="sidenav " >
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php  
      $poem_sql = "SELECT * FROM poems  ORDER BY time DESC";
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
     $poem_body_sql=" SELECT * FROM poems ORDER BY time DESC";
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
              <p class="text-small text-muted mb-0 pt-3"><?php echo "Posted by © ". getName($connect,$row['poet']) ."  On  ". date('M j<\s\up>S</\s\up> Y',strtotime($row['time']) )?>
            <a href="<?= "whatsApp://send?text=Read ".$row['title'] ."By *".getName($connect,$row['poet']) ."*\n on \n ". "http://poetsaffair.epizy.com/poem.php"?>" class="text-success"
                data-action="share/whatsapp/share"> <i class="fab fa-whatsapp fa-lg">Share</i> </a></p>
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
        <p class="text-small text-muted mb-0 pt-3"><?php echo "Posted by © ". getName($connect,$row['poet']) ."  On  ". date('M j<\s\up>S</\s\up> Y',strtotime($row['time']) )?>
        <a href="<?= "whatsApp://send?text=Read  ".$row['title'] ." By *".getName($connect,$row['poet']) ."*\n on\n ". "http://poetsaffair.epizy.com/poem.php"?>" class="text-success"
                data-action="share/whatsapp/share"> <i class="fab fa-whatsapp fa-lg">Share</i> </a>
      </p>
    
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
  <script src="assets/js/poem.js"></script>
   <!-- jQuery -->
   <!-- Your custom scripts (optional) -->
   <script type="text/javascript">
  // Tooltips Initialization
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
  </script> 
  <script type="text/javascript">
  $(document).ready(function() {
   
   var isMobile = {
   Android: function() {
   return navigator.userAgent.match(/Android/i);
   },
   BlackBerry: function() {
   return navigator.userAgent.match(/BlackBerry/i);
   },
   iOS: function() {
   return navigator.userAgent.match(/iPhone|iPad|iPod/i);
   },
   Opera: function() {
   return navigator.userAgent.match(/Opera Mini/i);
   },
   Windows: function() {
   return navigator.userAgent.match(/IEMobile/i);
   },
   any: function() {
   return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
   }
   };
   $(document).on("click", '.whatsapp', function() {
   if( isMobile.any() ) {
   var text = $(this).attr("data-text");
   var url = $(this).attr("data-link");
   var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
   var whatsapp_url = "whatsapp://send?text=" + message;
   window.location.href = whatsapp_url;
   } else {
   alert("Please share this article in mobile device");
   }
   });
   });
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>           
    </body>
  </html>

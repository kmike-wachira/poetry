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
<body onload="poem()">
      <!-- project starts here -->
    
        <!--Navbar -->
<?php include('includes/navbar.php'); ?>

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
 <?php include('includes/footer.php')?>
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
    <script type="text/javascript">
        function poem(){
          document.getElementById('openNav').style.display="none";
        }
    </script>

</body>
</html>

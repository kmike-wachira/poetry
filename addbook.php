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
  <link rel="stylesheet" href="assets/css/edit.css">


  <style>

  </style>
</head>
<body onload="poem()">
      <!-- project starts here -->
  <?php include('includes/navbar.php'); ?>

<div class="row" style="margin-top: 50px;">
 
<div class="col-md-12 col-lg-3"></div>
<div class="col-md-12 col-lg-6 mt-5">
  <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>ADD BOOK</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

      <form class=" p-5" method="POST" action="" enctype="multipart/form-data">

        <p class="h4 mb-4 text-center"></p>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" required name="myfile" accept=".pdf" id="inputGroupFile01"
              aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">select a .pdf file</label>
          </div>
        </div> <br>
    
        <input type="text" id="" name="booktitle" class="form-control mb-4" placeholder="Enter book title" required>

        <input type="text" id=""  name="author" class="form-control mb-4" placeholder="Enter Authors Name" required>

    

        <div class=" amber-textarea active-amber-textarea-2">
          <i class="fas fa-pencil-alt prefix"></i>
          <textarea id="form24" name="description" class="md-textarea form-control" id="editor" rows="3" placeholder="Enter a brief book description" required></textarea>          
        </div>    
        <button class="btn btn-info btn-block my-4" name="add-book" type="submit">Add book</button>      
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
<script src="assets/ckeditor/ckeditor.js"></script>
  <!-- jQuery -->
  <!-- Your custom scripts (optional) -->
  
<script>
  // Replace the <textarea> with a CKEditor
  CKEDITOR.replace('description');
</script>
</body>
</html>

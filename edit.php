<?php
include('backend/connect.php');
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>The poetic empire</title>
  <!-- MDB icon -->
  <link rel="icon" href="https://media4.picsearch.com/is?HZTql8mOFWxjTbK38_P8bC182fAkdAqT6RZ1IK9vYQ0&height=255" type="image/x-icon">  <!-- Font Awesome -->
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
        <strong>Change poem</strong>
    </h5>
    <?php
    $query="SELECT * FROM poems where id=$id LIMIT 1";
    $res=$connect->query($query);
    if($res->num_rows>0):
        $rowdata=$res->fetch_assoc();?>

    <div class="card-body px-lg-5 pt-0">
      <form class=" p-5" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="d-flex preview-empty mx-auto" id="preview"><img src="<?="uploads/".$rowdata['picture']?>" width="145" style="border-radius: 15px" alt="No image" id="preview_img">
          <!-- <p><strong>No image selected</strong></p> -->
        </div>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01 image"
              aria-describedby="inputGroupFileAddon01 customFile new_pic"  accept=".png, .jpg, .jpeg" onchange="handleFiles(this.files)">
            <label class="custom-file-label" for="inputGroupFile01">Change || add || remove  an image</label>
          </div>
        </div> <br>  
        <input type="text" id="" class="form-control" style="border:hidden;display:none" value="<?=$id?>" name="id" >
        <input type="text" id="" class="form-control mb-4" name="poem-title" placeholder="Enter poem title" value="<?=$rowdata['title']?>" required>
        <div class=" amber-textarea active-amber-textarea-2">
          <i class="fas fa-pencil-alt prefix">Change Body</i>
          <textarea id="form24" name="poem-body" class="md-textarea form-control" id="editor" rows="6" required  value="" ><?=$rowdata['body']?></textarea>          
        </div>    
        <button class="btn btn-info btn-block my-4" name="edit-poem" type="submit">Edit Poem🧐</button> 
        <button class="btn btn-danger btn-block my-4" name="delete-poem" type="submit">Delete😢💔</button>       

    </form>
    </div>
    <?php
       endif;
       ?>
</div>
      
</div>
<div class="col-md-12 col-lg-3"></div>


</div>
<!-- section-->

<!-- end section -->
 <!-- footer -->
 <?php include('includes/footer.php')?>
<!-- Footer -->    
<script src="assets/ckeditor/ckeditor.js">
  // Replace the <textarea> with a CKEditor
  CKEDITOR.replace('poem-body');
  </script>   
      <!-- End your project here-->
<script src="assets/js/index.js"></script>


</body>
</html>

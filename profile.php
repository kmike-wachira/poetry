<?php
include('backend/connect.php');
$data=getAll($connect,$_SESSION['id']);
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
</head>
<body onload="poem()">
      <!-- project starts here -->
    
        <!--Navbar -->
<?php include('includes/navbar.php'); ?>

<div class="row " style="margin-top: 50px;">
 
<div class="col-md-12 col-lg-3"></div>
<div class="col-md-12 col-lg-6 mt-5 white" style="border-radius: 30px" >
    
<form class="p-5 " action="" method="POST" enctype="multipart/form-data">
  <fieldset>
    <center>
    <legend style="font-weight:bold "> <h3> <u> MY PROFILE</u></h3>  </legend>
    </center>
    <div class="row">
        <div class="d-flex preview-empty mx-auto" id="preview"><img src="<?='uploads/'.$data[0][6] ?>" alt="" id="preview_img" style="width:145px;border-radius:12px" alt="no image selected">
        </div>
        <div class="input-group">
          <div class="custom-file w-25" style="width:25px">
            <input type="file" name="pimage" class="custom-file-input" id="inputGroupFile01"
              aria-describedby="inputGroupFileAddon01 customFile new_pic"  accept=".png, .jpg" onchange="handleFiles(this.files)" >
            <label class="custom-file-label" for="inputGroupFile01">Add or Change your image.</label>
          </div>
        </div> <br>  
    </div> 
    <label for="materialLoginFormEmail"><p>Name</p></label>
    <input type="text" id="materialLoginFormEmail" class="form-control" style="border:hidden" value="<?=$data[0][1]?>" name="name" > <br>
    <label for="materialLoginFormEmail"><p>Email</p></label>
    <input type="email" id="materialLoginFormEmail" class="form-control" style="border:hidden" readonly  value="<?=$data[0][3]?>" > <br>
    <label for="materialLoginFormEmail"><p>Industry Name</p></label>
    <input type="text" id="materialLoginFormEmail" class="form-control" name="indname" value="<?=$data[0][2]?>"  style="border:hidden" > <br>
    <label for="materialLoginFormEmail"><p>Phone</p></label>
    <input type="tel" id="materialLoginFormEmail" class="form-control" readonly style="border:hidden" value="<?=$data[0][5]?>" > <br>
    <button class="btn btn-info btn-block my-4" name="editprofile" type="submit" >Change</button>
  </fieldset>    
</form>
      
</div>
<div class="col-md-12 col-lg-3"></div>


</div>
<!-- section-->

<!-- end section -->
 <!-- footer -->
 <?php #include('includes/footer.php')?>
<!-- Footer -->       
      <!-- End your project here-->
<script src="assets/js/index.js"></script>
<script src="assets/ckeditor/ckeditor.js">
  // Replace the <textarea> with a CKEditor
  CKEDITOR.replace('poem-body');
  </script>

</body>
</html>

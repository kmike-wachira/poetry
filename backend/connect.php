<?php 
  $servername       = "localhost";
  $serverpass       = "";
  $dbname           ="drharry";
  $serverusername   = "root";

  $connect = new mysqli("$servername","$serverusername","$serverpass","$dbname");
  if($connect->connect_error){
     echo "connection error";
  }
  // print("Connected");
  
  function getName($connect,$ids){
    $sql ="SELECT `industry_name` FROM  users WHERE `user id` = $ids";
    $result = $connect->query($sql);
    if($result->num_rows > 0){
      $industyid = $result->fetch_assoc();
    }else{
      $industyid ="Poetry industry";
    }
    return $industyid;
  }

  // add poem to database
  if(isset($_POST['add-poem'])){
    $poem_title=$_POST['poem-title'];
    $poem_body= $_POST['poem-body'];
    // $sql="";
    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){ 
      $image = $_FILES['image']['name'];
      // echo basename($image);
      $target = "uploads/".basename($image);
      $imagename=basename($image);
      // $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name']; 
      move_uploaded_file($file_tmp,$target);
        $sql = "INSERT INTO `poems`( `poet`, `title`, `picture`, `body`) VALUES ('13','$poem_title','$image','$poem_body')";
          if($connect->query($sql) === TRUE ){
            move_uploaded_file($file_tmp,$target);
            echo'<script type="text/javascript">alert("Uploaded successsfully");
                   window.location.replace("addpoem.php");
                 </script>';
           }
    }else{
      $sql1 = "INSERT INTO `poems`(`poet`, `title`,`body`) VALUES ('13','$poem_title','$poem_body')";
      if($connect->query($sql1) === TRUE ){
        echo'<script type="text/javascript">alert("Uploaded successsfully");
               window.location.replace("addpoem.php");
             </script>';
       }else{
        echo'<script type="text/javascript">alert("Poem was not uploaded");
              window.location.replace("addpoem.php");
            </script>';
       }
    }
    
  }
// add a book 
if(isset($_POST['add-book'])){
  $booktitle=$_POST['booktitle'];
  $summary= $_POST['description'];
  $author= $_POST['author'];
  if(isset($_FILES['myfile']['name']) && !empty($_FILES['myfile']['name'])){ 
    $file = $_FILES['myfile']['name'];
    $target = "uploads/pdf/".basename($file);
    $filename=basename($file);
    $file_tmp =$_FILES['myfile']['tmp_name']; 
    move_uploaded_file($file_tmp,$target);
      $sql = "INSERT INTO `books`(`title`, `author`,`description`, `url`) VALUES ('$booktitle','$author','$summary','$filename')";
        if($connect->query($sql) === TRUE ){
          move_uploaded_file($file_tmp,$target);
          echo'<script type="text/javascript">alert("Uploaded successsfully");
                 window.location.replace("addbook.php");
               </script>';
         }
  }else{ 
    echo'<script type="text/javascript">alert("An error occurred");
            window.location.replace("addbook.php");
         </script>';
  }  
}

?>

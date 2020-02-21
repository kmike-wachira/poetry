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



      //Members signup
      if(isset($_POST['signup'])){
        $memberfirstname=$_POST['memberfirstname'];
        $memberlastname=$_POST['memberlastname'];
        $memberemail=$_POST['memberemail'];
        $memberyos=$_POST['memberyos'];
        $eveteam=$_POST['eveteam'];
        $memberphone=$_POST['memberphone'];
        $memberpassword=md5($_POST['memberpassword']);
        $memberCpassword=md5($_POST['memberCpassword']);
        if($memberpassword == $memberCpassword){
        $sql_e = "SELECT * FROM `members` WHERE email='$memberemail'";
        $res_e = mysqli_query($conn, $sql_e);
    
        if (mysqli_num_rows($res_e) > 0) {
          $error ='<div class="alert alert-danger" role="alert">Email already exists !!!!!</div>';
        }else{
          $membersql="INSERT INTO `members`(`first_name`, `last_name`, `email`, `phone`, `study_year`,`password`,`eve_team_id`)
           VALUES ('$memberfirstname','$memberlastname','$memberemail','$memberphone','$memberyos','$memberpassword','$eveteam')";
         }
          if ($conn->query($membersql) === TRUE) {
            echo '<script type="text/javascript">alert("Weldone .");
             window.location.replace("../login.php");
            </script>';
          } else {
          // echo "Error: " . $membersql . "<br>" . $conn->error;
          echo '<script type="text/javascript">alert("Something went wrong");
           window.location.replace("../sign-up.php");
          </script>';
          }
        }else{
          echo '<script type="text/javascript">alert("PASSWORD MISMATCH");
           window.location.replace("../sign-up.php");
          </script>';
    
        }
      }
    //  Members login backend
      if (isset($_POST['login'])) {
        $loginemail = $_POST['email'];
        $loginpassword = md5($_POST['password']);
        $loginquery = "SELECT * FROM `users` WHERE `User name`='$loginemail' AND `password`='$loginpassword' LIMIT 1";
        $login_result = $conn->query($loginquery);
    
        if ($login_result->num_rows > 0) {
          $row = $login_result->fetch_assoc();
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['user']=$row['industry_name'];
          header('location:./index.php');
          exit;
        }else {
          echo '<script type="text/javascript">alert("Login failed.Try again");
           window.location.replace("signin.php");
          </script>';
        }
      }

?>

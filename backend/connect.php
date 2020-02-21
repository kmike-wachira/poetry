<?php 
if(!session_id())session_start(); 
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
    $sql ="SELECT `industry_name` FROM  users WHERE `id` = $ids";
    $result = $connect->query($sql);
    if($result){
      $rown=$result->fetch_assoc();
      $industryid = $rown['industry_name'];
    }else{
      $industryid ="Poetry industry";
    }
    return $industryid;
  }

  // add poem to database
  if(isset($_POST['add-poem'])){
      $poem_title=$_POST['poem-title'];
      $id=$_SESSION['id'];
      $poem_body= $_POST['poem-body'];
    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){ 
      $image = $_FILES['image']['name'];
      // echo basename($image);
      $target = "uploads/".basename($image);
      $imagename=basename($image);
      // $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name']; 
      move_uploaded_file($file_tmp,$target);
        $sql = "INSERT INTO `poems`( `poet`, `title`, `picture`, `body`) VALUES ('$id','$poem_title','$image','$poem_body')";
          if($connect->query($sql) === TRUE ){
            move_uploaded_file($file_tmp,$target);
            echo'<script type="text/javascript">alert("Uploaded successsfully");
                   window.location.replace("addpoem.php");
                 </script>';
           }
    }else{
      $sql1 = "INSERT INTO `poems`(`poet`, `title`,`body`) VALUES ('$id','$poem_title','$poem_body')";
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
        $name=$_POST['name'];
        $memberemail=$_POST['email'];
        $memberindname=$_POST['indname'];
        $memberphone=$_POST['phone'];
        $memberpassword=md5($_POST['password']);
        $memberCpassword=md5($_POST['cpassword']);
        if($memberpassword == $memberCpassword){
        $sql_e = "SELECT * FROM `users` WHERE `User name`='$memberemail'";
        $res_e = mysqli_query($connect, $sql_e);
    
        if (mysqli_num_rows($res_e) > 0) {
          echo '<script type="text/javascript">alert("Email is already taken");
             window.location.replace("signup.php");
            </script>';
        }else{
          $membersql="INSERT INTO `users`(`Full Name`, `industry_name`, `User name`, `password`, `phone`)
           VALUES ('$name','$memberindname','$memberemail','$memberpassword','$memberphone')";
         }
          if ($connect->query($membersql) === TRUE) {
            echo '<script type="text/javascript">alert("Weldcome  to the poetic empire.");
             window.location.replace("signin.php");
            </script>';
          } else {
          // echo "Error: " . $membersql . "<br>" . $conn->error;
          echo '<script type="text/javascript">alert("Something went wrong");
           window.location.replace("signup.php");
          </script>';
          }
        }else{
          echo '<script type="text/javascript">alert("PASSWORD MISMATCH");
           window.location.replace("signup.php");
          </script>';
    
        }
      }
    //  Members login backend
      if (isset($_POST['login'])) {
        $loginemail = $_POST['email'];
        $loginpassword = md5($_POST['password']);
        $loginquery = "SELECT * FROM `users` WHERE `User name`='$loginemail' AND `password`='$loginpassword' LIMIT 1";
        $login_result = $connect->query($loginquery);
    
        if ($login_result->num_rows > 0) {
          $row = $login_result->fetch_assoc();
          $_SESSION['id'] = $row['id'];
          $_SESSION['user']=$row['industry_name'];
          header('location:index.php');
          exit;
        }else {
          echo '<script type="text/javascript">alert("Login failed.Try again");
           window.location.replace("signin.php");
          </script>';
        }
      }

?>

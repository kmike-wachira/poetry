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
?>

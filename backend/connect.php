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
?>

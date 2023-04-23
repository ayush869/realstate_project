<?php 
session_start();
   $server = "localhost"; 
   $username="root"; 
   $password=""; 
   $dbname="skyway_realty"; 
   $conn=mysqli_connect($server,$username,$password,$dbname); 
      if(!$conn){ 
         die("connection:".mysqli_connect_error()); 
      }
  
     
?>
<?php
 
 $servername="localhost";
 $username="root";
 $password="";
 $database="fc";

 session_start();
 $conn = new mysqli($servername,$username,$password,$database);
 // Check connection
 
 
 if ($conn->connect_error){
     //die("Connection failed: ".$conn->connect_error);
 }else{
 //echo "Conncted sucessfully";
 }
 ?>
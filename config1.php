<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="lab";
 
   $conne= new mysqli($servername,$username, $password,$database);
   
   if($conne->connect_error){
	   die("Connection Failed:".$conne->connect_error);
   }
?>
<?php
  include_once("config1.php");
  
  $id=$_GET['id'];
  $result=mysqli_query($conne,"DELETE FROM users WHERE id=$id");
     header("Location:feedback.php");
  
?>


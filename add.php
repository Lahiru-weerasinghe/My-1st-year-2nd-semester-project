<!DOCTYPE html>
<html>
<head><title>Add User</title>
<link rel="stylesheet" type="text/css" href="lab.css">
</head>
<body>
 <center>
  <h2>Add Your Feedbaks</h2>
 </center>
 <a href="index.php">Go To Home</a><br><br>
 <form action="add.php" method="POST">
 <center>
  <table class="new" width="40%">
    <tr>
	 <td>Name</td>
	 <td><input type="text" name="name" ></td>
	 </tr>
	 <tr>
	 <td>Email</td>
	 <td><input type="text" name="email"></td>
	 </tr>
	 <tr>
	 <td>Message</td>
	 <td><textarea name="message" rows="4" cols="22" ></textarea></td>
	</tr>
	</table>
	<input type="submit" name="Submit" value="Add">
	</center>
	
	<?php
	 if(isset($_POST['Submit'])){
		 $name=$_POST['name'];
		 $email=$_POST['email'];
		 $message=$_POST['message'];
		 
		 include_once("config1.php");
		 
		 $result = mysqli_query($conne,"INSERT INTO users(name,email,message)VALUES('$name','$email','$message')");
		 
		 echo"User added Successfully.<a href='feedback.php'>View Details</a>";
	 }
	?>
</body>
</html>
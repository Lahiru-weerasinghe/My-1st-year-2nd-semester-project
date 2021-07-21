<!DOCTYPE html>
<html>
<head><title>Feedbacks</title>
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/feedback.css">
<link rel="icon" href="assets/favicon/icon.png">
</head>
<body>
<header>
        <div class="navigation">
            <div class="logo">
                <img src="assets/favicon/Logo.png">
            </div>
            <div class="navbar">
                <ul>
                    <a id="home" href="index.php">Home</a>
                    <a id="courses" href="course.html">Courses</a>
                    <a id="about" href="about.html">About Us</a>
                    <a id="contact" href="contact_us.php">Contact Us</a>
                    <a id="feedback" href="feedback.php">Feedbacks</a>
                    <div class="dropdown-1">
                        <button class="dropbtn-1"><i class="fas fa-shopping-cart"></i></button>
                        <div class="dropdown-content-1">
                            <a href="cart.php">Cart</a>
                            <a href="checkout.php">Checkout</a>
                        </div>
                    </div>
                    <div class="dropdown-2">
                        <button class="dropbtn-2"><i class="fas fa-user"></i></button>
                        <div class="dropdown-content-2">
                            <a href="login.php">Login</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </header>
<center>
 	<h1>Customer's Feedbacks</h1>
</center>
<br><br>
<center>
 <div class="bor">
	<table border="1" width="60%">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
		<th>Updates</th>
	</tr>	
 </div>
 <br>
 <a class="new_feed" href="add.php">Add New feedbaks</a><br>
 <?php
  include_once("config1.php");
  
   $sql="SELECT * FROM users";
   $result=mysqli_query($conne,$sql);
   
   if($result->num_rows >0){
	   while($row=$result->fetch_assoc()){
		   	echo"<tr>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['email']."</td>";
			echo"<td>".$row['message']."</td>"; 
			echo"<td>
			   <a href='delete.php?id=$row[id]'>Delete</a></td>";
			echo"</tr>";
	   }
   }
 ?>

 </table>
 
 </center>
 <div class="big-footer">
        <div class="column">
            <h2>QUICK LINKS</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="course.html">Courses</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="feedback.php">Feedbacks</a></li>
            </ul>
        </div>
        <div class="column">
            <h2>CONTACT US</h2>
            <ul>
                <li><a href="#">No,34/A,Main Road</a></li>
                <li><a href="#">Malabe</a></li>
                <li><a href="#">info@mott.com</a></li>
                <li><a href="#">www.mott.com</a></li>
                <li><a href="#">Tel : 011-2342679</a></li>
            </ul>
        </div>
        <div class="column">
            <h2>WORKING HOURS</h2>
            <ul>
                <li><a href="#">Mon : 8.30 - 5.30</a></li>
                <li><a href="#">Tue : 8.30 - 5.30</a></li>
                <li><a href="#">Wed : 8.30 - 5.30</a></li>
                <li><a href="#">Thu : 8.30 - 5.30</a></li>
                <li><a href="#">Fri : 8.30 - 4.30</a></li>
            </ul>
        </div>
        <!-- Quick Connect Start -->
        <div class="column">
            <h2>QUICK CONNECT</h2>
            <form action="quickconnect.php" method="POST">
                <li><input id="name" type="text" placeholder="Name" name="name"></input></li>
                <li><input id="email" type="email" placeholder="Email Address" name="email"></input></li>
                <li><textarea name="message" placeholder="Your Message"></textarea></li>
                <li><input class="submitBtn" type="submit" name="Submit"></input></li>
            </form>
        </div>
        <!-- Quick Connect End -->
    </div>
    <!-- Contents End -->
    <!-- Footer Start -->
    <footer class="sticky-footer">
        <div class="social-medias">
            <a href="https://web.facebook.com/sliit.lk" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><i class="fab fa-instagram-square"></i></a>
            <a href="https://twitter.com/sliit?lang=en" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.youtube.com/channel/UC1rINdMFZJRe6FYY2l0xbrg" target="_blank"><i class="fab fa-youtube-square"></i></a>
        </div>
        <div class="copyright-text">
            <a href="https://www.sliit.lk"><p id="copyright-text">&copy;Copyright Reserved | SLIIT_MLB_04.01_12 Group</p></a>
            <p id="year">2021</p>
        </div>
    </footer>
 <script src="https://kit.fontawesome.com/77df0d32fc.js" crossorigin="anonymous"></script>
</body>
</html>
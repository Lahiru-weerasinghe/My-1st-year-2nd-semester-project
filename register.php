<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something went wrong!')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists!')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched!')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastery</title>
    <link rel="icon" href="assets/favicon/icon.png">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/register.css">
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
                    <a id="courses" href="html/courses.php">Courses</a>
                    <a id="about" href="html/about.php">About Us</a>
                    <a id="contact" href="html/contact_us.php">Contact Us</a>
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
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text">Sign Up</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required><br>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required><br>
				<button name="submit" class="btn"> Sign up</button>
			</div>
			<p class="login-register-text">Already registered? <a href="login.php"> Login Here</a></p>
		</form>
		</br>
        <hr class="new1">
        </br>
        <p class="login-text-2"> or login with </p>
        <div class="login-social">
            <a href="#" class="facebook"> Facebook </a>
            <a href="#" class="instagram"> Instagram </a>
            <a href="#" class="googleplus">  Google Plus </a>
            <a href="#" class="linkedin">  Linkedin </a>
        </div>
	</div>

	<div class="big-footer">
        <div class="column">
            <h2>QUICK LINKS</h2>
            <ul>
                <li><a href="#">link 1</a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="column">
            <h2>CONTACT US</h2>
            <ul>
                <li><a href="#">link 1</a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="column">
            <h2>WORKING HOURS</h2>
            <ul>
                <li><a href="#">link 1</a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="column">
            <h2>QUICK CONNECT</h2>
            <form>
                <li><input id="name" type="text" placeholder="Name"></input></li>
                <li><input id="email" type="email" placeholder="Email Address"></input></li>
                <li><textarea name="Your Message" placeholder="Your Message"></textarea></li>
                <li><input class="submitBtn" type="submit" name="Send"></input></li>
            </form>
        </div>
    </div>

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
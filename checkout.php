<?php
session_start();

include 'config.php';

if(isset($_POST['checkout'])){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $name_on_card = $_POST['name_on_card'];
    $credit_card_no = $_POST['credit_card_no'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];
    $course = $_POST['course'];

    $sql = "INSERT INTO payment (id,full_name,email,name_on_card,credit_card_no,exp_month,exp_year,cvv,course) VALUES ('','$full_name','$email','$name_on_card','$credit_card_no','$exp_month','$exp_year','$cvv','$course')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Couldn't post data !!".mysqli_error());
    }else{
        echo "<script>alert('Your order placed successfully')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastery</title>
    <link rel="icon" href="assets/favicon/icon.png">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/checkout.css">
</head>
<body>
    <!-- Header Start -->
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
                    <a id="contact" href="contact_us.html">Contact Us</a>
                    <a id="feedback" href="feedback.php">Feedbacks</a>
                    <div class="dropdown-1">
                        <button class="dropbtn-1"><i class="fas fa-shopping-cart"></i></button>
                        <div class="dropdown-content-1">
                            <a href="#">Cart</a>
                            <a href="#">Checkout</a>
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
    <!-- Header End -->
    <!-- Contents Start -->
    <div class="checkout_form">
        <h2>Checkout</h2>
        <form action="" method="POST">
            <div class="row">
                <h3>Payment</h3>
                <h4>Accepted Cards</h4>
                <div class="icon-container">
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-cc-amex"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-discover"></i>
                </div>
                <label for="Choose Course"></label>
                <select name="course">
                    <option selected hidden value="">--Choose Course--</option>
                    <option value="Active Art">Active Art</option>
                    <option value="Drama Techniques">Drama Techniques</option>
                    <option value="Yoga">Yoga</option>
                    <option value="Evaluation St.">Evaluation St.</option>
                    <option value="Strong Parent-Teacher">Strong Parent-Teacher</option>
                    <option value="Coaching">Coaching</option>
                    <option value="Classroom Debates">Classroom Debates</option>
                    <option value="Dyslexia">Dyslexia</option>
                    <option value="Project Mgmt.">Project Mgmt.</option>
                    <option value="Creative Strategies">Creative Strategies</option>
                    <option value="IIntelligent Assessment">IIntelligent Assessment</option>
                    <option value="Creative Strategies-II">Creative Strategies-II</option>
                    <option value="CLIL">CLIL</option>
                    <option value="ELT">ELT</option>
                    <option value="CLIL for Phy Ed.">CLIL for Phy Ed.</option>
                    <option value="School Exp">School Exp</option>
                    <option value="Creative Thinking">Creative Thinking</option>
                    <option value="Design Thinking">Design Thinking</option>
                    <option value="Brain-Learning">Brain-Learning</option>
                    <option value="Build your app1">Build your app</option>
                </select>
                <br>
                <input type="text" id="cname" name="full_name" placeholder="Full name"><br>
                <input type="text" id="cname" name="email" placeholder="Email Address"><br>
                <input type="text" id="cname" name="name_on_card" placeholder="Cardholder Name"><br>
                <input type="int" id="cname" name="credit_card_no" placeholder="Card No"><br>
                <input type="int" id="cname" name="exp_month" placeholder="Exp Month"><br>
                <input type="int" id="cname" name="exp_year" placeholder="Exp Year"><br>
                <input type="int" id="cname" name="cvv" placeholder="CVV"><br>
                <input type="submit" value="Continue to checkout" name="checkout" class="btn">
            </div>
        </form>
    </div>
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
    <!-- Footer End -->
    <script src="https://kit.fontawesome.com/77df0d32fc.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/stat_counter.js"></script>
    <script src="js/testimonials.js"></script>
</body>
</html>
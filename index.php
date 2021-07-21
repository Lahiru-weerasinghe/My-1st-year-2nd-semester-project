<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastery</title>
    <link rel="icon" href="assets/favicon/icon.png">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
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
    <!-- Header End -->
    <!-- Contents Start -->
    <div class="slider">
        <input type="radio" id="control1" name="controls" checked="checked" />
        <label for="control1"></label>
        <input type="radio" id="control2" name="controls" />
        <label for="control2"></label>
        <input type="radio" id="control3" name="controls" />
        <label for="control3"></label>
        <input type="radio" id="control4" name="controls" />
        <label for="control4"></label>
        <div class="innerslider">
          <ul class="ul">
            <li>
              <img src="assets/images/img1.jpg">
              <div class="description">
                <div class="description-text">
                  <h2>Make your dreams come true</h2>
                  <p>We are here to support you</p>
                </div>
              </div>
            </li>
            <li>
              <img src="assets/images/img1.jpg">
              <div class="description">
                <div class="description-text">
                  <h2>Are you the next qualified teacher ?</h2>
                  <p>If so, we have works to do</p>
                </div>
              </div>
            </li>
            <li>
              <img src="assets/images/img1.jpg">
              <div class="description">
                <div class="description-text">
                  <h2>Why us?</h2>
                  <p>Students rate and highly recommnd us for everyone. what else?</p>
                </div>
              </div>
            </li>
            <li>
              <img src="assets/images/img1.jpg">
              <div class="description">
                <div class="description-text">
                  <h2>Do you wanna teach to students ?</h2>
                  <p>We always have space for you</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </div>
    <div class="introduction">
        <h1>Welcome to Mastery</h1>
        <h2>Online Teacher Training</h2>
        <br>
        <p class="intro_desc">
        Our online courses are asynchronous which means you can access the site and the information whenever it suits you, whether that’s first thing in the morning or last thing at night. There is no set time to be in a classroom with a group of people. You will only need to make the time to log on, access the material and interact on the forums.
        We offer courses that match your career path. There are courses that start at the beginning of your career so you can hit the ground running, and there are courses for professional development once you’ve had a few years’ experience as a teacher.
        Find more detailed information on our online courses below, and please feel free to contact us with any questions you have.
        </p>
    </div>
    <br>
    <div class="counters">
        <div class="container">
            <div class="students">
                <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                <div class="counter" data-target="35000">0</div>
                <h3>Students</h3>
            </div>
            <div class="courses">
                <i class="fa fa-user-md fa-4x" aria-hidden="true"></i>
                <div class="counter" data-target="400">0</div>
                <h3>Qualified Instructors</h3>
            </div>
            <div class="instructors">
                <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                <div class="counter" data-target="28000">0</div>
                <h3>Qualified Students</h3>
            </div>
            <div class="experience">
                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                <div class="counter" data-target="150">0</div>
                <h3>Courses</h3>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->
    <div class="newsletter">
        <h2>Stay tuned with Us</h2>
        <h3>Sign Up to our newsletter</h3>
        <form action="newsletter.php" method="POST" class="info_input">
            <input type="text" placeholder="First Name" name="f_name">
            <input type="text" placeholder="Last Name" name="l_name">
            <input type="text" placeholder="Your Email" name="email">
            <button class="sign-up" name="sign-up">Subscribe</button>
        </form>
    </div>
    <!-- Newsletter End -->
    <div class="container_2">
        <div class="veiw-box">
            <div id="testimonials">
                <div class="user">
                    <img src="images/user1.jpg" alt="">
                    <p>Being based at home, it has meant that I have been able to study something that I have wanted to do for a long time without having to worry about childcare etc..</p>
                    <h3>Emma Anderson</h3>
                </div>
                <div class="user space">
                    <img src="images/user2.jpg" alt="">
                    <p>I feel that over the duration of the course I gained a lot of knowledge and practical strategies that will be beneficial to me, and those I deal with personally and professionally. The course exceeded my expectations significantly..</p>
                    <h3>John Naver</h3>
                </div>
                <div class="user">
                    <img src="images/user1.jpg" alt="">
                    <p>It's very interesting. I am always fascinated by the children's behaviour. Helps in my work and with my own children, to have a clear understanding of their nature/nurture. I made the right choice of my course. The credit goes to Mastery.</p>
                    <h3>Hannah J.</h3>
                </div>
            </div>
            <div class="controls">
                <span id="control5"></span>
                <span id="control6" class="active"></span>
                <span id="control7"></span>
            </div>
        </div>
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
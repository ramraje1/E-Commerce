<?php 
 include('./database/connect.php');
 include('./admin_area/function1/c_function.php');
session_start();
 $_SESSION['User'];
 if(!isset($_SESSION['User']))
{
    header('location:LoginForm.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php $name=$_SESSION['User'];
    $GetResult = "select * from `user` where Fullname='$name'";
                $Result = mysqli_query($Con, $GetResult);
                while ($Row = mysqli_fetch_assoc($Result)) {
                    
                    $UName = $Row['Fullname'];
                    $UImg = $Row['profilepic'];
                } ?>
    <script src="script.js"></script>
    <section id="header">
        <a href=""><img src="Img/logo.png" class="logo"></a>
        <div>
        <ul id="navabar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a class="active" href="contact.php">contact</a></li>
                <img src="./admin_area/product_images/<?php echo $UImg; ?>" height="50px" width="50px" style="border-radius: 50%;">
                <li><a href="UpdateForm1.php"><i class="fa-solid fa-user-plus" ><b></i><?php echo $UName; ?></b></a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
            </ul>
        </div>
    </section>
    <section id="hero-about">
        <h1>#LetsTalk</h1>
        <span>LEAVE A MESSAGE,We Love to hear from you</span>
    </section>

    <section id="contact-div">
        <div class="contact-detail">
            <div class="contact-add">
                <span style="font-weight: 500;">GET IN TOUCH</span>
                <h2>Visit one of our agency locations or contact us today</h2>
                <span style="font-size: 19px; font-weight: 600px;padding: 0px 0 20px 0;">Head Office</span>
                <div class="contact-list">
                    <li>
                        <i class="fa-solid fa-map"></i>
                        <p>56 Glasslord Street Glasgow New York</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <p>Contact@example.com</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>+91 1234567891</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock"></i>
                        <p>Monday-Sunday: 9AM-6PM</p>
                    </li>
                </div>
            </div>
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.6437014809785!2d74.60714607474068!3d18.1803200828485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc37558dcd4dfe9%3A0x8318a8027559ebe1!2sVidya%20Pratishthan&#39;s%20Arts%2C%20Science%20%26%20Commerce%20College%2C%20Baramati!5e0!3m2!1sen!2sin!4v1705215137840!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

    <section id="feedback-id">
        <div class="feedback">
            <div class="feedback-form">

                <span>LEAVE MESSAGE</span>
                <h2>We Love to hear from you</h2>
                <form>
                    <input type="text" name="text" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="textarea" rows="8" cols="15" placeholder="Your Message"></textarea>
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
            <div class="feedback-team">
                <div class="team1">
                    <div class="team11">
                        <img src="Img/1.png">
                    </div>
                    <div class="team12">
                        <h3>Jone Due</h3>
                    <span>Seinor Marketing Manager</span>
                    <span>Phone:+91 0983378231</span>
                    <span>Email:Contact@example.com</span>
                    </div>
                </div>
                <div class="team1">
                    <div class="team11">
                        <img src="Img/2.png">
                    </div>
                    <div class="team12">
                        <h3>Jone Due</h3>
                    <span>Seinor Marketing Manager</span>
                    <span>Phone:+91 0983378231</span>
                    <span>Email:Contact@example.com</span>
                    </div>
                </div>
                <div class="team1">
                    <div class="team11">
                        <img src="Img/3.png">
                    </div>
                    <div class="team12">
                        <h3>Jone Due</h3>
                    <span>Seinor Marketing Manager</span>
                    <span>Phone:+91 0983378231</span>
                    <span>Email:Contact@example.com</span>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="news-bar" class="section-p1">
        <div class="bar-1">
            <h2>Sign Up For Newsletters</h2>
            <span>Get E-mail Updates about our latest shop and <a href="">Special Offers</a></span>

        </div>
        <div class="news-bar">
            <input class="search" type="email" placeholder="Your email address">
            <button>sign up</button>
        </div>

    </section>
    <footer class="section section-p1">
        <div class="col-1">
            <img src="Img/logo.png">
            <h3>Contact</h3>
            <p><strong>Address:</strong>567 Rui-sawal Road,Street 32,Baramati 413102</p>
            <p><strong>phone:</strong>+91 8600509611</p>
            <p><strong>Hours:</strong>7.00:5.00 Mon-sun</p>
            <h2>Follow Us</h2>
            <div class="icon">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
        <div class="col-2">
            <h3>About</h3>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col-2">
            <h3>My Account</h3>
            <a href="#">Sign Ins</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col-4">
            <h3>Install App</h3>
            <span> From App Store or Google Play</span>
            <div class="row">
                <img src="Img/app.jpg">
                <img src="Img/play.jpg">

            </div>
            <p>Secured Payment Gateways</p>
            <img class="pg" src="Img/pay.png">
        </div>


    </footer>
    <section>
        <div class="copyright">
            <p>© 1996-2023,All rights Reserved</p>
        </div>
    </section>



</body>
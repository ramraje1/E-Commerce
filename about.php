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
                <li><a class="active" href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <img src="./admin_area/product_images/<?php echo $UImg; ?>" height="50px" width="50px" style="border-radius: 50%;">
                <li><a href="UpdateForm1.php"><i class="fa-solid fa-user-plus" ><b></i><?php echo $UName; ?></b></a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
                
            </ul>
        </div>
    </section>
    <section id="hero-about">
        <h1>#KnowUs</h1>
        <span>Lorem ipsum dolor sit amet consectetur</span>
    </section>
    <section id="about-us">
        <div class="about-us1">
            <div class="about-us-img">
                <img src="Img/a6.jpg">
            </div>
            <div class="about-us-data">
                <h1>Who We Are? </h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quam, aspernatur sed repudiandae delectus enim omnis debitis at ducimus, magni minima, vero placeat.
                     Saepe obcaecati perferendis, voluptatum beatae dicta rerum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat quas autem repellat maxime sint,
                      temporibus nisi omnis pariatur eum est debitis odit eius impedit. Aut doloribus est officiis magnam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita necessitatibus sit iusto mollitia est dignissimos illum rerum veritatis, quaerat, iure cumque. 
                    Dolorum possimus odio est repellendus eligendi, molestiae dolores velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate doloremque corrupti
                     officia itaque maxime enim harum recusandae voluptatem. Pariatur recusandae beatae sequi mollitia, corrupti inventore ipsam quia enim modi cumque!</p>
                 <b><abbr title="">Create the stunning images with as much little control you like Create the stunning images with as much little control you like</abbr></b>
                 <marquee> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia sequi officiis laborum rem cupiditate eos harum doloribus, non distinctio? Et doloribus est sit aut nihil quod nisi nobis vitae.</marquee>     

            </div>
            
        </div>
    </section>
    <section id="about-app" class="section-p1" >
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="Img/1.mp4" ></video>
        </div>

    </section>
    
    <section id="fecture" class="section-p1">
        <div class="fe-box">
            <a><img src="Img/f1.png" alt=""></a>
            <h6>Free Shiping</h6>
        </div>
        <div class="fe-box">
            <a><img src="Img/f2.png" alt=""></a>
            <h6>online order</h6>
        </div>
        <div class="fe-box">
            <a><img src="Img/f3.png" alt=""></a>
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <a><img src="Img/f4.png" alt=""></a>
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <a><img src="Img/f5.png" alt=""></a>
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <a><img src="Img/f6.png" alt=""></a>
            <h6>24/7 Support</h6>
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
         <footer class="section section-p1" >
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
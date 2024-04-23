
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
                <li><a class="active" href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <img src="./admin_area/product_images/<?php echo $UImg; ?>" height="50px" width="50px" style="border-radius: 50%;">
                <li><a href="UpdateForm1.php"><i class="fa-solid fa-user-plus" ><b></i><?php echo $UName; ?></b></a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
            </ul>
        </div>
    </section>
    <section id="hero-b" class="section-p1">
        <h1>#readmore</h1>
        <span>Read all case study about our products</span>
    </section>
    <section id="blog1">
        <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b1.jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b2 (1).jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b3.jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b4.jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b5.jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="bolog-box">
        <div class="blog1-img">
            <img src="Img/b6.jpg">
        </div>
        <div class="blog1-data">
            <h4>The Cotton-jersey Zip-Up Hoodie</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis ratione similique nobis voluptates perspiciatis, dolores explicabo consectetur quis autem impedit expedita nihil nostrum. Illum quod quasi eius porro maxime?</p>
          <a href="">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    </section>
</section>
<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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
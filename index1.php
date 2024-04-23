<?php
 include('./database/connect.php');
 include('./admin_area/function1/c_function.php');
?> 
 

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" >
        
</head>

<body>
    <script src="script.js"></script>
    <section id="header">
        <a href="#"><img src="Img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navabar">
                <li><a class="active" href="index1.php">Home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="SignUpForm.php"><i class="fa-solid fa-user-plus"></i></a></li>
            </ul>
        </div>
        <?php 
        session_start();
        session_unset();
        session_destroy();
        // echo "session Undone";
        ?>

    </section>
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>save more with componant & up to 70% off</p>
        <button href="shop.php">Shop Now</button>
    </section>
    <section id="fecture" class="section-p1">
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <a><img src="Img/f1.png" alt=""></a>
            <h6>Free Shiping</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <a><img src="Img/f2.png" alt=""></a>
            <h6>online order</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <a><img src="Img/f3.png" alt=""></a>
            <h6>Save Money</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='about.php'">
            <a><img src="Img/f4.png" alt=""></a>
            <h6>Promotion</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='shop.php'">
            <a><img src="Img/f5.png" alt=""></a>
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box" onclick="window.location.href='contact.php'">
            <a><img src="Img/f6.png" alt=""></a>
            <h6>24/7 Support</h6>
        </div>

    </section>
    <section id="product1" class="section-p1">
        <h1>Fecture Products</h1>
        <p>Summer Collection new Mordan Design</p>
        <div class="pro-container">
        <div class="pro" onclick="window.location.href='Awtshirt.php';">
                <img src="Img/adidas wt5.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Women's Fashine T-Shir</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$13</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Amtshirt.php';">
               <img src="Img/adidas1.avif" alt="">
                <!-- <img src="Img/p2.jpg" alt=""> -->
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$13</h4>
                    
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Ajacket.php'">
              <img src="Img/adi jacket1.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men's Jacket</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$15</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro"  onclick="window.location.href='Apants.php'">
                <img src="Img/adi pants2.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men's Pants</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$10</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro"  onclick="window.location.href='Ashorts.php'">
                <img src="Img/adi shorts1.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men's Shorts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$10</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/puma wpant1.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/puma wjac4.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/puma shorts3.avif" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>

        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repaire Servise</h4>
        <h2>Up to <span>70% Off</span> - All t-shirts & Accessories</h2>
        <button class="normal">Explore more</button>
    </section>
    <section id="product1" class="section-p1">
        <h1>New Arrival</h1>
        <p>Summer Collection new Mordan Design</p>
        <div class="pro-container">
        <div class="pro">
                <img src="Img/nike tshirt.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>



            <div class="pro">
                <img src="Img/nike pants.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/nike hoo.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/nike tshirt.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/levis mjackte.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/levis mpants.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/levis wjacket.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="Img/levis wpants.webp" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronate T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            </div>

        </div>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="sm-1 sm-cm">
        <h4>Crazy Deals</h4>
        <h1>Buy 1 get 1 free</h1>
        <span>The best classic dress is on sale of cara</span>
        <button class="normal">Learn more</button>
    </div>
    <div class="sm-2 sm-cm">
        <h4>Spring/Summer</h4>
        <h1>Upcoming Season</h1>
        <span>The best classic dress is on sale of cara</span>
        <button class="normal">Collection</button>
    </div>
    </section>
    <section id="sn-banner" class="section-p1">
        <div class="sn-1 sn-cm">
            <h1>SEASONAL SALE</h1>
            <span>Winter Collection 50% Off</span>
        </div>
        <div class="sn-2 sn-cm">
            <h1>NEW FOOTWEAR COLLECTION</h1>
            <span>Spring/Summer</span>
        </div>
        <div class="sn-3 sn-cm">
            <h1>T-SHIRTS</h1>
            <span>New Trendy Prints</span>
        </div>

    </section>
    <section id="news-bar" class="section-p1">
   <div class="bar-1">
    <h2>Sign Up For Newsletters</h2>
    <span>Get E-mail Updates about our latest shop and <a href="">Special Offers</a></span>

   </div>
   <div class="bar-2">
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

</html>
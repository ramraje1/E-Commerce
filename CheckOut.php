<?php
 include('./database/connect.php');
 include('./admin_area/function1/c_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            #navabar .CPrize
{
    display: flex;
    flex-direction: column;
    font-weight: 700;
    font-size: small;
}
#cart-coupon2
{
    padding-top: 40px;
}
.Opration
{
    display: flex;
    justify-content: center;
    align-items: flex-end;
}
#cart-coupon2
{
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px 0;

}
#cart-coupon2 .coupon-code
{
    width: 50%;
    
    margin-bottom: 90px;
    padding: 0 40px 40px 40px ;
    /* display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start; */

}
#cart-coupon2 .coupon-code input
{
    width: 60%;
    padding: 7px 0;
}
#cart-coupon2 .coupon-code button
{
    width: 12%;
    padding: 8px 0;
    color: #E3E6F3;
    background-color: rgb(3, 92, 3);
    border-radius: 5px;

}
#cart-coupon2  button
{
    margin: 7px 0;
    width: 26%;
    padding: 8px 0;
    color: #E3E6F3;
    background-color: rgb(3, 92, 3);
    border-radius: 5px;

}
#cart-table1 .Opration button
{
    
            background-color: #ed4112;
            color: rgb(249, 248, 247);
            height: 40px;
            /* width: 11%; */
            border: 2px solid white;
            border-radius: 8px;
            margin-right: 20px;
}
#cart-table1 .Opration button:hover{
            /* background-color: rgba(53, 226, 30, 0.825); */
            transform: scale(1.1);
            color: #E3E6F3;
            background-color: rgb(3, 92, 3);

        }
        .bold1
        {
            font-size: large;
            font-weight: 800;
        }
        .bold
        {
            font-weight: 700;
        }
        input[type="checkbox"] {
        transform: scale(0.6); /* Adjust the scale value as needed */
    }
        /* #wrap
        {
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        } */
        #news-bar input
{
    height: 33px;
    width:330px;
    background-color: white;
    color: black;
    border: none;
    border-radius: 3px;
}
#news-bar button
{
    height: 35px;
    width: 100px;
    background-color: rgb(245, 84, 20);
    color: rgb(230, 236, 228);
    border: none;
    border-radius: 3px;

}
#news-bar button:hover{
    background-color: rgb(28, 210, 43);
}
#news-bar input:hover,
#news-bar input:active
{
border: 3px solid orangered;
transform: scale(1.1);
}
.cart-total button a
{
    text-decoration: none;
    color: white;
}
        </style>
</head>

<body>
    <script src="script.js"></script>
    <section id="header">
        <a href=""><img src="Img/logo.png" class="logo"></a>
        <div>
        <ul id="navabar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
                <li class="CPrize"><div>Total Prize:</div><div>&#8377;<?php TotalCPrize(); ?>/-</div></li>
            </ul>
        </div>
    </section>
    <section id="hero-about">
        <h1>#CheckOut</h1>
        <span>Thank You,Visit us again</span>
    </section>
    <?php if(!isset($_SESSION['Fullname']))
    {
        // include('UserArea/LoginForm.php');
        header('location:LoginForm.php');
    }
    else
    {
        header('location:Payment.php');

    }
    ?>


   



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
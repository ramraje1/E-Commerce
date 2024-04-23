<?php
 include('./database/connect.php');
 include('./admin_area/function1/c_function.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>

/* #product11 .pro1 .b1
{
    display: flex;
    justify-content: space-between;
    align-items: center;
} */

        #header2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px 80px;
    background-color: #E3E6F3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    width: 100%;
    height: 10vh;
    z-index: 999;
    position: sticky;
    bottom: 0;
}
#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background-color: #E3E6F3;
    box-shadow:0 5px 15px rgba(0,0,0,0.06);
    width: 100%;
    z-index: 1000;
    position: sticky;
    top:0;
}
#hero-shop{
    
    background-size: cover;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    height: 40vh;
    width: 100%;
    padding: 14px;

}
#product11{
    width: 100%;
    display: flex;
    /* justify-content: space-between;
    flex-wrap: wrap; */
}
#product11 .pro1{
            width:25%;
            height: 67vh;
     min-width: 20px; 
     padding: 1px 20px;
    margin:20px 10px;
    border-radius: 8px; 
    box-shadow: 20px 20px 30px rgb(163, 152, 152); 
    cursor: pointer;
    position: relative;
        }
        #product11 .pro1 img{
     height: 300px; 
    width: 100%;
    border-radius: 20px;
     border:none; 
     object-fit: cover;
}
#product11 .pro1 .des1{
    text-align: start;
    font-size: 20px; 
}
#product11 .pro1 .des1 h4{
    color:rgb(18, 19, 19);
    font-size: 15px;
    font-weight: 1000;
}
#product11 .container{
    width: 80%;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}
#product11 .container2{
    width: 20%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
} 
#product11 .container2 li
{
    list-style: none;
   padding: 10px 0;
   font-size: 20px;
   font-weight: 300;
   text-align: center;
   
    

}
#product11 .container2 .brands{
    background-color: aliceblue;
}
#product11 .container2 .categories{
    background-color: rgb(234, 241, 247);
}
#product11 .container2 h4
{
    font-weight: 700;
    font-size: 17px;
    text-align: center;
}
.des1 h5
{
    font-size: 13px;
}
.des1 span
{
    color: black;
}

.news-bar .input1
{
    height: 33px;
    width:330px;
    background-color: white;
    color: black;
    border: none;
    border-radius: 3px;
}
.news-bar .input2
{
    height: 35px;
    width: 100px;
    background-color: rgb(245, 84, 20);
    color: rgb(230, 236, 228);
    border: none;
    border-radius: 3px;

}
.news-bar .input2:hover{
    background-color: rgb(28, 210, 43);
}
.news-bar .input1:hover,
.news-bar .input1:active
{
border: 3px solid orangered;
transform: scale(1.1);
}
    </style>
</head>

<body>
    <script src="script.js"></script>
    <section id="header">
        <a href=""><img src="Img/logo.png" class="logo"></a>
        <form action="search_product.php" method="get">
       
        <div class="news-bar">
            <input class="input1" type="search" placeholder="Search Product" name="SearchField">
            <input class="input2" type="submit" value="Search" name="SearchButton">
        </div>
        </form>
        <div>
            <ul id="navabar">
            
                <li><a href="index.php">Home</a></li>
                <li><a class="active">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
            </ul>
        </div>
    </section>
    <section id="hero-shop" style="background-image: url('Img/b1\ \(1\).jpg');">
        

        <h2>#stayhome</h2>
        <p>save more with componant & up to 70% off</p>

    </section>

    <section id="header2">
    <h2>Collection Store</h2>
    <h4> Dive into the Unknown!</h4>
    </section>

    <section id="product11" class="section-p1">
        <div class="container">
            <?php
           
            // GProduct();
            GCIDProduct();
            GetUC();
            GetUB();
           // Cart();
            // $ip = getIPAddress();  
            // echo 'User Real IP Address - '.$ip;  

            //  $Query="select * from `products` order by rand()";
            //  $Result=mysqli_query($Con,$Query);
            // while($fetch=mysqli_fetch_assoc($Result))
            // {
            //      $pid=$fetch['pid'];
            //      $pname=$fetch['pname'];
            //      $pdesc=$fetch['pdesc'];
            //      $category_id=$fetch['category_id'];
            //      $brand_id=$fetch['brand_id'];
            //      $image2=$fetch['image2'];
            //      $prize=$fetch['pprize']; 
            //      echo" <div class='pro1'>
            //      <img src='./admin_area/product_images/$image2' alt=''>
            //      <div class='des1'>
            //          <h4>$pname</h4>
            //          <h5>$pdesc</h5>
            //          <div class='star'>
            //              <i class='fas fa-star'></i>
            //              <i class='fas fa-star'></i>
            //              <i class='fas fa-star'></i>
            //              <i class='fas fa-star'></i>
            //              <i class='fas fa-star'></i>
            //              <i class='fas fa-star'></i>
            //          </div>
            //          <h4>&#8377;$prize</h4>
            //      </div>
            //      <div class='b1'>
            //     <a href='#' class='btn btn-success'>Add To Cart</a>
            //     <a href='#' class='btn btn-secondary'>View More</a>
            //     </div> 
            //  </div>";


            //  }
             ?>
            <!-- <div class="pro1" onclick="window.location.href='sproduct.php';">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
            </div> -->

             <!-- <div class="pro1">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
                <div class="b1">
                <a href="#" class="btn btn-success">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
                </div> 
            </div>

            <div class="pro1">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
                <div class="b1">
                <a href="#" class="btn btn-success">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
                </div> 
            </div>

            <div class="pro1">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
                <div class="b1">
                <a href="#" class="btn btn-success">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
                </div>
            </div>
            <div class="pro1">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
                <div class="b1">
                <a href="#" class="btn btn-success">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
                </div>
            </div>-->
 
        </div> 


        <div class="container2">
            <div class="brands">
                <ul>
                    <li><a href=""><h4>Select Top Brands</h4></a></li>
                    <!-- <li><a href="#">Brand 1</a></li>
                    <li><a href="#">Brand 2</a></li>
                    <li><a href="#">Brand 3</a></li>
                    <li><a href="#">Brand 4</a></li> -->
                     <?php
               // gcategorie(); 
               GetBrands();
               
    //    $Query = "select * from brands";
    //    $Result = mysqli_query($Con, $Query);
       
    // //    if (!$result) {
    // //        die("Error in query: " . mysqli_error($con));
    // //    }
       
    //    while ($Row_Data = mysqli_fetch_assoc($Result)) {
    //        $Brand_unit = $Row_Data['brand_unit'];
    //        $Brand_id = $Row_Data['brand_id'];
    //        echo "<li><a href='shop.php?brand=$Brand_id'>$Brand_unit</a></li>";
    //    }
       
      


       ?>

                </ul>
            </div>


           <div class="categories">
            <ul>
            <li><a href="#"><h4>Select Top Categories</h4></a></li>
            <!-- <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <li><a href="#">Category 4</a></li> -->

                <?php
               GetCategories();
    //    $Query = "select * from categories";
    //    $Result = mysqli_query($Con, $Query);
       
    // //    if (!$result) {
    // //        die("Error in query: " . mysqli_error($con));
    // //    }
       
    //    while ($Row_Data = mysqli_fetch_assoc($Result)) {
    //        $Category_unit = $Row_Data['category_unit'];
    //        $Category_id = $Row_Data['category_id'];
    //        echo "<li><a href='shop.php?category=$Category_id'>$Category_unit</a></li>";
    //    }
       
        ?>

            </ul>
           </div>


        </div>
          
           
           
    </section> 
    <!-- <section id="Shopping">
        <div class="pictures1">
            <div class="pro1" onclick="window.location.href='sproduct.php';">
                <img src="Img/p2.jpg" alt="">
                <div class="des1">
                    <span>Addias</span>
                    <h4>Cartoon Astronate T-Shirts</h4>
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
        <div class="list13">
            <div class="brands">
                <ul>
                    <li>brand 1</li>
                    <li>brand 1</li>
                    <li>brand 1</li>
                    <li>brand 1</li>
                    <li>brand 1</li>
                </ul>
            </div>
            <div class="categories">
                <ul>
                    <li>category</li>
                    <li>category</li>
                    <li>category</li>
                    <li>category</li>
                    <li>category</li>
                </ul>
            </div>
        </div>
    </section> -->
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

</html>
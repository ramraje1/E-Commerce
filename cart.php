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
                <li><a  href="index.php">Home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <img src="./admin_area/product_images/<?php echo $UImg; ?>" height="50px" width="50px" style="border-radius: 50%;">
                <li><a href="UpdateForm1.php"><i class="fa-solid fa-user-plus" ><b></i><?php echo $UName; ?></b></a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php CartItem(); ?></sup></a></li>
                <li class="CPrize"><div>Total Prize:</div><div>&#8377;<?php TotalCPrize(); ?>/-</div></li>
            </ul>
        </div>
    </section>
    <section id="hero-about">
        <h1>#cart</h1>
        <span>Add your coupon code & SAVE upto 70%</span>
    </section>
    <!-- <section id="wrap"> -->
    <form action="" method="post">
    <section id="cart-table1">
        <table width="100%">
            <!-- <thead class="bold1"><tr>
                <th>PRODUCT</th>
                <th>IMAGE</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>Remove</th>
                <th>OPERATIONS</th>
           </tr></thead> -->
            
                <?php 
                    global $Con;
                    $ip = GetIPAddress();
                    global $Total,$Total1,$Total2,$DTotal;
                    $Total=$Total1=0;
                    $Cart_Query="Select * from `cart_details` where ip_address='$ip'";
                    $Result=mysqli_query($Con,$Cart_Query);
                    $ResultCount = mysqli_num_rows($Result);
                    if($ResultCount>0)
                    {
                        echo "<thead class='bold1'><tr>
                        <th>PRODUCT</th>
                        <th>IMAGE</th>
                        <th>QUANTITY</th>
                        <th>PRICE</th>
                        <th>Remove</th>
                        <th>OPERATIONS</th>
                   </tr></thead> <tbody>";
                    while ($Row=mysqli_fetch_array($Result))
                    {
                        $pid=$Row['pid'];
                        $Product_Query="Select * from `products` where pid='$pid'";
                        $PResult=mysqli_query($Con,$Product_Query);  // here we to took all the records related to the 
                                                                    //and then stored inside the variable
                        while ($PRow=mysqli_fetch_array($PResult))
                        {
                            $PPrize=array($PRow['pprize']);  // from there we just took the prize
                            $NormalPPrize=($PRow['pprize']);
                            $PTitle=($PRow['pname']);
                            $PImg=($PRow['image1']);
                            $PPrizeSum=array_sum($PPrize);
                            $Total+=$PPrizeSum;
                      
                ?>
                <tr>
                    <td class="bold"> <?php echo $PTitle ?></td>
                    <td><img src="Img/<?php echo $PImg ?> "> </td>
                    <td><input type="text" name="Quantity" > </td>
                    <?php 
                    global $Con;
                    $Total1;
                    $ip = GetIPAddress();
                    if(isset($_POST['UpdateCart']))
                    {
                        $QALL = intval($_POST['Quantity']);
                        $NormalPPrize=($PRow['pprize']);
                        $UpdateC_Query="update `cart_details` set quantity=$QALL where ip_address='$ip'";
                        $UCResult=mysqli_query($Con,$UpdateC_Query);
                        $Total1=$NormalPPrize*$QALL;
                        
                    }
                    // echo "Normal=$NormalPPrize";
                    $Total2=$Total+$Total1;
                    $DTotal=$Total2-($Total2*0.10);
                    // echo "Total=$Total";
                    // echo "Total1=$Total1";
                    // echo "Total2=$Total2";
                    // echo "DTotal=$DTotal";
                    ?>
                    <td class="bold">&#8377;<?php echo $NormalPPrize ?></td>
                    <td><input type="checkbox" name="RemoveProduct[]" value=<?php echo $pid?>
                    ></td>
                    <td><div class="Opration">
                        <button type="submit" value="remove" name="RemoveCart">Remove Product</button><button type="submit" value="update" name="UpdateCart">Update Cart</button></div> </td>
                </tr>
                <?php   }
                
            } }
            else
            {
                echo "<h2 style='color:red;font-size:40px;text-align:center'>The Cart is Empty</h2>";
            }
            ?>
                
              
                
            </tbody>
        </table>
    </section>
    
    <section id="cart-coupon2">
        <div class="coupon-code">
            <!-- <h3>Apply Coupon</h3>
            <input type="text" placeholder="Enter your Coupon" required>
            <button type="submit">Apply</button> -->
        </div>
        <div class="cart-total">
        <table border="1" width="70%">
            <h3>Cart Total</h3>
                <tr>
                    <td class="bold">Cart SubTotal</td>
                    <td class="bold">&#8377;<?php echo $Total2 ?></td>
                </tr>
                <tr>
                    <td class="bold">Shipping</td>
                    <td class="bold">Free</td>
                </tr>
                <tr>
                    <td class="bold">Discount</td>
                    <td class="bold">10%</td>
                </tr>
                <tr>
                    <td class="bold1">Total</td>
                    <td class="bold1">&#8377;<?php echo $DTotal ?></td>
                </tr>
            </table>
            <button type="submit"><a href="Checkout.php">Proceed to checkout</a></button>
        </div>

    </section>
    </form>
    <!-- </section> -->

    <?php
   // Fun To remove product
   function RemoveProduct()
   {
    global $Con;
    if(isset($_POST['RemoveCart']))
    {
        foreach($_POST['RemoveProduct'] as $RemoveId)
        {
            echo $RemoveId;
            $DeleteC_Query="delete from `cart_details`  where pid=$RemoveId";
                        $DCResult=mysqli_query($Con,$DeleteC_Query);
                        if($DCResult)
                        {
                            echo "<script>window.open('cart.php','_self')</script>";
                        }

        }
    }

   }
   echo $RemoveProduct = RemoveProduct();

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
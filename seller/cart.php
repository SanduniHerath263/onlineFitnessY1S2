<?php
require 'cartcss.php';
require 'cartjs.php';
require 'shop.php';
require 'screen.php';
require 'calandercss.php';
require 'calanderjs.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    
    

</head>

<body>
    <nav class="topnav">
        <img src="Logo.png" class="logo">
        <h1 id="name">Fit Forge</h1>
        <img src="user.png" class="userpic">
        <h3 class="user">User Name</h3>
    </nav>

    <ul>
        <li><a href="#shop" class="active">Shop</a></li>
        <li><a href="#home">Home</a></li>
        <li><a href="#aboutus">About Us</a></li>
        <li><a href="#fitnesstrainers">Fitness Trainers</a></li>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <div class="searchimg">
                    <a href=""><img src="search.png"></a>
                </div>
            </form>
        </div>
    </ul>

    <!---------------------------------------------cart---------------------------------------------------->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Forge | Cart</title>
    <link rel="stylesheet" href="cart.css">
	<script src="cart.js"> </script>
</head>

<body>
    <main>
        <div class="container">
            <h1>Shopping Cart</h1>
            <table>
                <thead>
                    <tr>
                        <th class="num">Product</th>
                        <th class="num">Quantity</th>
                        <th class="num">Price</th>
                        <th class="num">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td><input type="number" class="quantity" value="0" min="1" data-price="10.00"></td>
                        <td>$10.00</td>
                        <td><button class="remove">Remove</button></td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td><input type="number" class="quantity" value="0" min="1" data-price="20.00"></td>
                        <td>$20.00</td>
                        <td><button class="remove">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <hr class="hrline">
            <p class="subtotal"><b>Subtotal: $<span id="subtotal">30.00</span></b></p>
            <div class="note">
                <label for="note">Add a note to your order:</label>
                <textarea id="note" rows="4" cols="50"></textarea>
            </div>
            <div class="checkout">
            <a href="../payment/payment1.php"><button type="submit">Check out</button></a>
            </div>
        </div>
    </main>

   
</body>

</html>


<!--------------------------------------------------------------------------------------------->

<footer class="footer">


        <div class="contact-info">
            <div>No 08, Hill Street, Colombo 03.</div>
            <div class="spacer">|</div>
            <div>+94712345678</div>
            <div class="spacer">|</div>
            <div>fitforge@gmail.com</div>
        </div>

        <div class="footer1">
            <div class="img">
                <img src="Logo.png" width="5%" class="logo1">
                <a class="flink1" href="about us"><b>About us</b></a>
                <br>
                <a class="flink2" href="contact us"><b>Contact us</b></a>
                <div class="socialMtxt">
                    <p>Join with Us on</p>
                </div>
                <div class="socialM">
                    <a href="#"><img src="fb.png" alt="fb logo" class="logo2"></a>
                    <a href=""><img src="x.png" alt="X logo" class="logo2"></a>
                    <a href=""><img src="instagraam.png" alt="instagram logo" class="logo2"></a>
                </div>
            </div>

            <div class="calendar"></div>
            <div class="ccc1">
                <h4>Copyright©2024 fitforge.lk</h4>
            </div>
        </div>
    </footer>

</body>

</html>
<?php
require 'contactt.php';
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

    <!--............................................................................................................................................-->
    <!--contact us-->



</head>

<body>

<form class="table2" method="post" action="sqlcontact.php">

<table class="mobile1">

<p class="find"> <b> where to find us </b> </p> 

<tr>
<th class="mobile1">Mobile</th>
<th class="mobile1">Email</th>
<th class="mobile1">Address</th>
<th class="mobile1">Office House</th>
</tr>

<tr>
<td class="fit"> <div class="font1">071-2345678 </div></td>
<td class="fit"> <div class="font1">fitforge@gmail.com </div></td>
<td class="fit"> <div class="font1">no.08,</div>
				<div class="font1">Hill Street,</div>
				<div class="font1">Colombo 03. </div>
				</td>
<td class="fit"> <div class="font1">10.00 am Until 7.00 pm </div>
				<div class="font1">open seven days a week </div>
				</td>
</tr>

</table>

<hr class="hori">
</hr>

<p class="send"> <b>Send us a message</b> </p>
<p class="any">if you have any concern or inquiry on our product, feel free to inquire here.</p>

<div class="body1">

<b>Name </b> <br> <input type="text" class="name1" name="Name"> <br><br>

<b>Email </b> <br> <input type="email" class="name1" name="Email"> <br><br>

<b>Phone</b> <br> <input type="number" class="name2" name="Phone"> <br><br>

<b>Comment or Message </b> <br> <input type="text" class="name3" name="CommentorMessage"> <br><br>

<input type="submit" class="button" name="Submit"> 
</div>

</form>

</body>

<!-------------------------------------------------------------------->

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
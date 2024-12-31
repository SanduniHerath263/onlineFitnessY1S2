<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="Shop.css">
    <link rel="stylesheet" href="screan.css">
    <link rel="stylesheet" href="calander.css">
    <link rel="stylesheet" href="slideshow.css">
    <script src="calander.js"></script>
    <script src="shop.js"></script>
    <script src="slideshow.js"></script>
    
</head>
<body>
  <nav class="topnav"> 
    <img src="Logo.png" class="logo">
    <h1 id="name">Fit Forge</h1>
    <img src="user.png" class="userpic">
    <h3 class="user">User Name</h3>    
  </nav>

  <ul class="menu">
    <li><a href="#shop" class="active">Shop</a></li>
    <li><a href="#home">Home</a></li>
    <li ><a href="#aboutus">About Us</a></li>
    <li ><a href="#fitnesstrainers">Fitness Trainers</a></li>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <div class="searchimg">
      <a href=""><img src="searsh1.jpg"></a>
      </div>
    </form>
  </div>
  </ul>

<!--............................................................................................................................................-->
<div class="wrapper">
      <input type="radio" name="slide" id="one" checked>
      <input type="radio" name="slide" id="two">
      <input type="radio" name="slide" id="three">
      <input type="radio" name="slide" id="four">
      <input type="radio" name="slide" id="five">
      <div class="img img-1">
      <img src="1.jpg" alt="">
      </div>
      <div class="img img-2">
        <img src="2.jpg" alt="">
      </div>
      <div class="img img-3">
        <img src="3.jpg" alt="">
      </div>
      <div class="img img-4">
        <img src="4.jpg" alt="">
      </div>
      <div class="img img-5">
        <img src="5.jpg" alt="">
      </div>
      <div class="sliders">
        <label for="one" class="one"></label>
        <label for="two" class="two"></label>
        <label for="three" class="three"></label>
        <label for="four" class="four"></label>
        <label for="five" class="five"></label>
      </div>
    </div>
    <br>
    <br><br>
<section class='items'>
<ul class='products'>

<?php
        require_once './config.php';

        $sql = "SELECT Name, Price, Picture FROM product LIMIT 15";
        $result = $connection->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $name = $row["Name"];
            $price = $row["Price"];
            $image = base64_encode($row["Picture"]);
            echo "
                      <li data-id='1'>
                      <img src='data:image/jpg;base64,$image' alt='Product 1'>
                      <h2>Product 1</h2>
                      <p>$10.00</p>
                      <button data-id='1'>Add to Cart</button>
                      <button data-id='1'>Buy Now</button>
                    </li>
                    ";
                  }
                }
        
              ?>
              </section>
<div class='slideshow'>
 <?php
        require_once './config.php';

        $sql = "SELECT Name, Price, Picture FROM product LIMIT 15";
        $result = $connection->query($sql);
        echo"
        
                <img class='slideshow-image' src='data:image/jpg;base64,$image' alt='Image 1'>
                <img class='slideshow-image' src='data:image/jpg;base64,$image' alt='Image 2'>
                <img class='slideshow-image' src='data:image/jpg;base64,$image' alt='Image 3'>";  
        ?>
        <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
                <a class='next' onclick='plusSlides(1)'>&#10095;</a>
         <div class='dot-container'>
                  <span class='dot' onclick='currentSlide(1)'></span>
                  <span class='dot' onclick='currentSlide(2)'></span>
                  <span class='dot' onclick='currentSlide(3)'></span>
                </div>
        </div>
      

<div class="next-page-bar">
  <a href="shop.html" class="previous-page-button">Previous Page</a>
  <span class="page-indicator">Page <span class="current-page">2</span> of <span class="total-pages">5</span></span>
  <a href="#" class="next-page-button">Next Page</a>
</div>

<!--............................................................................................................................................-->

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
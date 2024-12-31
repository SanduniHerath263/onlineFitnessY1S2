<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="screan.css">
    <link rel="stylesheet" href="calander.css">
    <script src="calander.js"></script>

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
    <li><a href="../Home">Home</a></li>
    <li ><a href="../aboutus">About Us</a></li>
    <li ><a href="../trainers">Fitness Trainers</a></li>
    <!-- <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." class="search-input"name="search">
      <div class="searchimg">
      <a href=""><img src="search.png"></a>
      </div>
    </form> -->
  </div>
  </ul>

<!--............................................................................................................................................-->
<div class="login-container">
  <h2><b><i>WELCOME BACK</i></b></h2>
  <br>
  <form method="post" action="check.php">
      <label for="role">Role:</label>
      <input type="checkbox" id="user-role" name="role" value="user"> User
      <input type="checkbox" id="trainer-role" name="role" value="trainer"> Trainer
      <br>
      <br>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="text" id="password" name="password" required>
      <br>

      <a href="../ForgetPW">Forgot password?</a>
      <button type="submit">Login</button>
  </form>
 
</div>
<script src="script.js"></script>
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
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="screan.css">
    <link rel="stylesheet" href="calander.css">
    <script src="calander.js"></script>
</head>
<body>
    <script src="signup.js"></script>
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
      <input type="text" placeholder="Search.." class="search-input" name="search">
      <div class="searchimg">
      <a href=""><img src="search.png"></a>
      </div>
    </form> -->
  </div>
  </ul>
<!--............................................................................................................................................-->

<div class="signup-details-container">
  <h1><b><i>Let Your Journey<br>Begin<br>Here</i></b></h1>
  <br>
  <p class="p11"><i>Welcome to our online fitness community! We're thrilled to have you join us on your journey towards a healthier 
    and happier you. Signing up is your first step towards unlocking a world of personalized workouts, expert guidance,
    and a supportive community that's here to cheer you on every step of the way.<br><br> Whether you're a seasoned athlete or 
    just starting out, our platform offers something for everyone, with tailored fitness plans designed to meet your goals
    and fit your lifestyle. Ready to take charge of your fitness journey?</i><br><br>
    <b>Let's get started – sign up now and let's crush those goals together!</b></p>
</div>
<div class="signup-form-container">
<h1>Sign Up</h1>
<fieldset>
        
        <form method="post" action="insert.php">
            User ID : <input type="text" disabled ><br><br>
            First Name : <input type="text" id="first_name" name="First__Name"><br><br>
            Last Name : <input type="text" name="Last__Name"><br><br>
            Email : <input type="email" name="Email"><br><br>
            Username : <input type="text" name="UserName"><br><br>
            Password : <input type="password" name ="Password"><br><br>
            <input type="submit" div class="submitt"></div><br>
            <input type="reset" div class="reset1">
        </form>
    </fieldset>
    
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
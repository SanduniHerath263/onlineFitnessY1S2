<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0" />
		<title>BOOK YOUR SESSION</title>
		<link
			rel="stylesheet"
			href="sessin.css" />
		<link
			rel="stylesheet"
			href="screan.css" />
		<link
			rel="stylesheet"
			href="calander.css" />
		<script src="calander.js"></script>
		<nav class="topnav">
			<img
				src="Logo.png"
				class="logo" />
			<h1 id="name">Fit Forge</h1>
			<img
				src="user.png"
				class="userpic" />
			<h3 class="user">User Name</h3>
		</nav>

		<ul>
			<li>
				<a
					href="#shop"
					class="active"
					>Shop</a
				>
			</li>
			<li><a href="../Home">Home</a></li>
			<li><a href="../aboutus">About Us</a></li>
			<li><a href="../trainers">Fitness Trainers</a></li>
			<div class="search-container">
				<form action="/action_page.php">
					<input class="input"
						type="text"
						placeholder="Search.."
						name="search" />
					<div class="searchimg">
						<a href=""><img src="search.png"></a>
					</div>
				</form>
			</div>
		</ul>
		<style>
			body {
				background-color: azure;
			}
			form {
				color: white;
				width: 50%;
				/*text-align: center;*/
			}
		</style>
	</head>

	<body>
		<h2 class="h2">BOOK SESSION</h2>
		<form
			action=""
			method="POST">
			<fieldset>
				<legend>Personal info</legend>
				<div class="formdiv">
				First Name:<br>
				<input type="text" name="firstname"	class="i" ></input><br /><br />
				Last Name:<br>
				<input type="text"name="lastname"class="i" ></input><br /><br />
				Email:<br>
				<input type="text"name="email"class="i" ></input><br /><br />
				Gender:<br>
				<input type="radio"	name="gender" value="Male" >Male</input>
				<input type="radio"	name="gender" value="Female" >Female</input><br /><br />
				Age:<br>
				<input type="text" name="age" ></input><br /><br />
				Weight:<br>
				<input type="text" name="weight"></input><br /><br />
				</div>
			</fieldset>

			
		</form>
		<div class="Bsubmit">
		<a href='../bookingconfirmation'><button data-id='1'>Submit</button></a>
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
					<img
						src="Logo.png"
						width="5%"
						class="logo1" />
					<a
						class="flink1"
						href="about us"
						><b>About us</b></a
					>
					<br />
					<a
						class="flink2"
						href="contact us"
						><b>Contact us</b></a
					>
					<div class="socialMtxt">
						<p>Join with Us on</p>
					</div>
					<div class="socialM">
						<a href="#"
							><img
								src="fb.png"
								alt="fb logo"
								class="logo2"
						/></a>
						<a href=""
							><img
								src="x.png"
								alt="X logo"
								class="logo2"
						/></a>
						<a href=""
							><img
								src="instagraam.png"
								alt="instagram logo"
								class="logo2"
						/></a>
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

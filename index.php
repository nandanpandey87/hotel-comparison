<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>"Homepage : EkEarnkaro.xyz"</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />



</head>
<body>		
			<nav>
			<img src="images/EK.png" class="logoek">
			<input id="nav-toggle" type="checkbox">
			<div class="logo"><strong>EkEarnkaro</strong></div>
				<ul class="links">
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<label for="nav-toggle" class="icon-burger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</label>
			</nav>



			<div class="container">
				<div class="row">
					<div class="col">
						<div class="col1">
						<h1>Welcome to EkEarnkaro </h1>
						<h1>A Hotel Comparing website</h1>
						<p>Compare all top travel cites Hotels in just one search to find the best hotel deals </p>
						<!-- <button type="button">Explore</button>	 -->
						</div>
						<script src="js/search_box.js"></script>
						<div class="row2">
						<div class="col2">
						<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for city..">

							<ul id="myUL">
							  <li><a href="kota_hotels.php">Kota, Rajasthan</a></li>
							  <li><a href="indore_hotels.php">Indore, Madhya Pradesh</a></li>

							  <li><a href="#">New Delhi</a></li>
							  <li><a href="#">Jaipur, Rajasthan</a></li>

							  <li><a href="#">Bhopal, Madhya Pradesh</a></li>
							  <li><a href="#">Udiapur, Rajasthan</a></li>
							  <li><a href="#">Jodhpur, Rajasthan</a></li>

							</ul>
						</div>
						<div class="col3">
								<h1 style="font-size: 1rem; margin-left: 20px;" >Checkin checkout Date (optional)</h1>
								<input type="date" id="myInputDate" placeholder="Checkin Date">
								<input type="date" id="myInputDate" placeholder="Checkout Date">
						</div>
						</div>

					</div>
				</div>

			</div>


</body>
</html>
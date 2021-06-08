<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>"INDORE HOTELS"</title>
	<link rel="stylesheet" href="css/indore_hotels.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />


</head>
<body>	

	<nav>
		<img src="images/EK.png" class="logoek">
		<input id="nav-toggle" type="checkbox">
		<div class="logo"><strong>EkEarnkaro</strong></div>
		<ul class="links">
			<li><a href="login.php">Login/Register</a></li>
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


	<div class="container1">
		 <ul class="container1links">
		 	<li><a href="#login">Top searched cities :</a></li>
			<li><a href="kota_hotels.php">Kota</a></li>
			<li><a href="indore_hotels.php">Indore</a></li>
			<li><a href="#about">Jaipur</a></li>
			<li><a href="#contact">Delhi</a></li>
			<li><a href="#contact">Ahmedabad</a></li>
			<li><a href="#contact">Mumbai</a></li>
			<li><a href="#contact">Bengaluru</a></li>
		</ul>
	</div>

	<div class="container2">
		<div class="r0">
			<h1><pre> 		FIND YOUR IDEAL HOTEL </pre></h1>
			<h1><pre>				& ITS COMPARE PRICES <!-- of different Hotel Booking websites  --> </pre></h1>
		</div>
		<p> Currently you have searched hotels for </p>

		<div class="r1">
			<h1> Indore, Madhya Pradesh</h1>
		</div>
		

		<a href="index.php">Or want to search hotels for other cities..</a>
	</div>

	<div class="container3">
		<div class="container3c1">
			<h1>Hotels available in <strong> Indore :</strong></h2>
			<h2>Capital O 16115 Hotel Solitaire</h2>
			<h2>Effotel by Sayaji</h2>
			<h2>Sayaji Indore</h2>
			<h2>Fairfield By Marriott Indore</h2>		
		</div>
		<div class="container3c2">


		    <?php
		    $data = file_get_contents("json/json_indore.json");
		    $data_js = json_decode($data,true);
		    // echo $data_js[1]['price1'];
			?>

			<h1> 1. Capital O 16115 Hotel Solitaire </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Indore/1/1.jpg" class="kota1h" height="150">
					<img src="images/hotels/Indore/1/4.jpg" class="kota1h" height="120">
					<div class="kotahotelpics">
						<img src="images/hotels/Indore/1/2.jpg" class="kota1h" height="100">
						<img src="images/hotels/Indore/1/3.jpg" class="kota1h" height="100">
						<img src="images/hotels/Indore/1/5.jpg" class="kota1h" height="100">
					</div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo:  ₹<?php echo $data_js[0]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[0]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[0]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[0]['price4']; ?></h3>
				</div>
			</div>

			<h1> 2. Effotel by Sayaji </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Indore/2/1.jpg" class="kota2h" height="200" >
				    <img src="images/hotels/Indore/2/4.jpg" class="kota2h" height="150">
				    <div class="kotahotelpics">
					    <img src="images/hotels/Indore/2/2.jpg" class="kota2h" height="100">
					    <img src="images/hotels/Indore/2/3.jpg" class="kota2h" height="100">
					    <img src="images/hotels/Indore/2/5.jpg" class="kota2h" height="100">
				    </div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[1]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[1]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[1]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[1]['price4']; ?></h3>
				</div>
			</div>
			
			
			<h1> 3.Sayaji Indore </h2>
			<div class="kotarow1">
				<div class="kotacol1">
    				<img src="images/hotels/Indore/3/1.jpg" class="kota3h" height="200" width="300">
    				<img src="images/hotels/Indore/3/4.jpg" class="kota3h" height="120">
    				<div class="kotahotelpics">
    					<img src="images/hotels/Indore/3/2.jpg" class="kota3h" height="90">
    					<img src="images/hotels/Indore/3/3.jpg" class="kota3h" height="90">
    					<img src="images/hotels/Indore/3/5.jpg" class="kota3h" height="90">
    				</div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[2]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[2]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[2]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[2]['price4']; ?></h3>
				</div>
			</div>
			

			<h1> 4. Fairfield By Marriott Indore </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Indore/4/1.jpg" class="kota4h" height="200" >
    				<img src="images/hotels/Indore/4/4.jpg" class="kota4h" height="150">
    				<div class="kotahotelpics">
    					<img src="images/hotels/Indore/4/2.jpg" class="kota4h" height="100">
    					<img src="images/hotels/Indore/4/3.jpg" class="kota4h" height="100">
    					<img src="images/hotels/Indore/4/5.jpg" class="kota4h" height="100">
				    </div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[3]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[3]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[3]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[3]['price4']; ?></h3>
				</div>
			</div>

		</div>
	</div>



</body>
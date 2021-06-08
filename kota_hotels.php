<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>"KOTA HOTELS"</title>
	<link rel="stylesheet" href="css/kota_hotels.css">
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
			<h1> Kota, Rajasthan</h1>
		</div>
		

		<a href="index.php">Or want to search hotels for other cities..</a>
	</div>

	<div class="container3">
		<div class="container3c1">
			<h1>Hotels available in <strong> KOTA :</strong></h2>
			<h2>Country Inn & Suites by Radisson Kota</h2>
			<h2>Capital O 991 Hotel Bharat</h2>
			<h2>WelcomHeritage Umed Bhawan Palace</h2>
			<h2>Hotel Rockland</h2>		
		</div>


		<div class="container3c2">

			<?php
		    $data = file_get_contents("json/json_kota.json");
		    $data_js = json_decode($data,true);
		    // echo $data_js[1]['price1'];
			?>

			<h1> 1. Country Inn & Suites by Radisson Kota </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Kota/1/1.jpg" class="kota1h" >
					<img src="images/hotels/Kota/1/4.jpg" class="kota1h" height="100">
					<div class="kotahotelpics">
						<img src="images/hotels/Kota/1/2.jpg" class="kota1h" height="100">
						<img src="images/hotels/Kota/1/3.jpg" class="kota1h" height="100">
						<img src="images/hotels/Kota/1/5.jpg" class="kota1h" height="100">
					</div>
				</div>
				<div class="kotacol2">
				    <a href="https://www.oyorooms.com/" target="_blank">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[0]['price1']; ?></h3>
					</a>
					
					<a href="https://www.booking.com/hotel/in/country-inn-suites-by-carlson-kota.en-gb.html?label=gen173nr-1FCAEoggI46AdIM1gEaGyIAQGYAQm4ARfIAQzYAQHoAQH4AQuIAgGoAgO4Aqfq5YQGwAIB0gIkNTA5OGZmNTItZWNmZS00MWQxLTk4ZTktMWI2NGVlNTlmMTkz2AIG4AIB;sid=fc44720966ab6117c0595f4224264901;dest_id=-2101515;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1620669750;srpvid=9d4c7edbd9a40064;type=total;ucfs=1;sig=v1ESa3v279#hotelTmpl" target="_blank">
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[0]['price2']; ?></h3>
					</a>
					
					<a href="https://www.makemytrip.com/hotels/hotel-listing/?checkin=05122021&topHtlId=201706051217482302&city=CTXOK&checkout=05132021&roomStayQualifier=2e0e&locusId=CTXOK&country=IN&locusType=city&searchText=Country%20Inn%20Suites%20By%20Radisson%20Kota,%20Kota,%20Rajasthan&visitorId=130a462e-5473-450a-8bd6-2fa059263e6d" target="_blank">
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[0]['price3']; ?></h3>
					</a>
					
					<a href="https://www.agoda.com/pages/agoda/default/DestinationSearchResult.aspx?selectedproperty=2329647&city=16846&hid=2329647&site_id=1888762&tag=70865e3f-29f2-4779-9958-933ecb8a976c&device=c&network=g&adid=508616610626&rand=17930159665916303493&expid=&adpos=&gclid=Cj0KCQjws-OEBhCkARIsAPhOkIbMT13onmB9RVrI_P56eIHqY-PENMJ0lgullXXpwmsgJS5lhqJ1BpwaAmEfEALw_wcB" target="_blank">
					<h3 font-color:red; >Agoda.com : ₹<?php echo $data_js[0]['price4']; ?></h3>
					</a>
				</div>
			</div>

			<h1> 2. Capital O 991 Hotel Bharat </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Kota/2/1.jpg" class="kota2h" height="200" >
					<img src="images/hotels/Kota/2/4.jpg" class="kota2h" height="150">
					<div class="kotahotelpics">
						<img src="images/hotels/Kota/2/2.jpg" class="kota2h" height="100">
						<img src="images/hotels/Kota/2/3.jpg" class="kota2h" height="100">
						<img src="images/hotels/Kota/2/5.jpg" class="kota2h" height="100">
					</div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[1]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[1]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[1]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[1]['price4']; ?></h3>
				</div>
			</div>


			<h1> 3. WelcomHeritage Umed Bhawan Palace </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Kota/3/1.jpg" class="kota3h" height="200" width="300">
					<img src="images/hotels/Kota/3/4.jpg" class="kota3h" height="120">
					<div class="kotahotelpics">
						<img src="images/hotels/Kota/3/2.jpg" class="kota3h" height="90">
						<img src="images/hotels/Kota/3/3.jpg" class="kota3h" height="90">
						<img src="images/hotels/Kota/3/5.jpg" class="kota3h" height="90">
					</div>
				</div>
				<div class="kotacol2">
					<h3 font-color:red; >Oyo: ₹<?php echo $data_js[2]['price1']; ?></h3>
					<h3 font-color:red; >Booking.com: ₹<?php echo $data_js[2]['price2']; ?></h3>
					<h3 font-color:red; >makemytrip: ₹<?php echo $data_js[2]['price3']; ?></h3>
					<h3 font-color:red; >Agoda.com: ₹<?php echo $data_js[2]['price4']; ?></h3>
				</div>
			</div>

			<h1> 4.Hotel Rockland </h2>
			<div class="kotarow1">
				<div class="kotacol1">
					<img src="images/hotels/Kota/4/1.jpg" class="kota4h" height="200" >
					<img src="images/hotels/Kota/4/4.jpg" class="kota4h" height="150">
					<div class="kotahotelpics">
						<img src="images/hotels/Kota/4/2.jpg" class="kota4h" height="100">
						<img src="images/hotels/Kota/4/3.jpg" class="kota4h" height="100">
						<img src="images/hotels/Kota/4/5.jpg" class="kota4h" height="100">
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
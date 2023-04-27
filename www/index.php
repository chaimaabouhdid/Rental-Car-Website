<!DOCTYPE html>
<html>
<head>
	<title>The main page.</title>
	<link rel="stylesheet" href="home.css">
</head>

<body>

	<div class="MainMenu">

  		<a class="active" href="index.php" >Home</a>
 	 	    <a href="About_us.php">About Us</a>
			<a href="Our_cars.php">Our Cars</a>

<?php
session_start();
include 'config.php';
    if (isset($_SESSION["id"]))
    {
        echo "<a href='logout.php'>Log Out</a>";
    } else {
        echo "<a href='login_page.php'>Login</a>";
        echo "<a href='register_page.php'>Register</a>";
    }
?>
	</div>
	<br>
		<h1>
			Welcome to Wandering Wheels!
		</h1>
	<br>

	<center>
	<h2> BMW X4 </h2>
</center>
	<br>
	<p style="text-align: center;margin:30px ">
The BMW X4 has 2 Diesel Engine and 1 Petrol Engine on offer. The Diesel engine is 1995 cc and 2993 cc while the Petrol engine is 1998 cc . It is available with Automatic transmission.Depending upon the variant and fuel type the X4 has a mileage of 12.82 to 16.55 kmpl . The X4 is a 5 seater 6 cylinder car and has length of 4752 mm, width of 1918 mm and a wheelbase of 2864 mm.
	</p>
<br><br>

<center>
	<img style=" width: 40%; height: 40%; " src="https://www.kbb.com/wp-content/uploads/2020/07/2020-bmw-x4-16x9-1.jpg">
</center>
<center>
	<h2>Ford Fiesta </h2>
</center>
	<br>

<p style = "text-align: center;margin:30px">
	2019 Ford Fiesta Features The Fiesta comes standard with the basic SYNC infotainment system, but it’s worth springing for a model equipped with the available SYNC 3 system. It’s easy to use, and the touch screen has sharp graphics and responds quickly to inputs. It also comes with Apple CarPlay and Android Auto.
</p>
<center>
	<img width="600" src = "https://th.bing.com/th/id/OIP.JS4btAkBNGWrk8Z7aFYHTQHaE8?w=241&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
</center>




</body>
</html>
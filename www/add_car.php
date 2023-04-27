<?php

session_start();
include('config.php');

	if (isset($_POST['submit']))
	{
    	$car_name = $_POST["car_name"];
    	$car_description = $_POST["car_description"];
    	$car_category = $_POST["car_category"];
    	$keywords = $_POST["keywords"];
    	$video_url = $_POST["video_url"];
    	$image_url = $_POST["image_url"];
    	$start_date = $_POST["start_date"];
    	$end_date = $_POST["end_date"];


        $sql = "INSERT INTO `car_details`  (`user_ID`, `car_name`, `car_description`, `car_category` , `keywords` , `video_url` , `image_url` , `start_date` , `end_date` ) VALUES (". $_SESSION['id'].", '".$car_name."', '".$car_description."', '".$car_category."', '".$keywords."', '".$video_url."', '".$image_url."', '".$start_date."', '".$end_date."')" ;
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
        	header('Location: /Our_Cars.php');
        	mysqli_close($con);
        }
        else
        {
        	echo $con->error;
        }
        }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cars Registration page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="MainMenu">

	<a class="active" href="index.php" >Home</a>
 	 	    <a href="AboutUs.html">About Us</a>
			<a href="Our_cars.php">Our Cars</a>
			<a href="logout.php">Logout</a>
<?php if (isset($_SESSION["id"]))
        { ?>
			<a href="logout.php">Log Out</a>
<?php }?>

	</div>
	<br><br>
	<center>
		<form method="post" >
	<label>
		Car Name
	</label>
	<input type="text" required name="car_name">
	<br><br>
	<label>
		Car Description
	</label>
	<input type="text" required name="car_description">
	<br><br>
	<label>
		Car Category
	</label>
	<input type="text" required name="car_category">
	<br><br>
	<label>
		keywords
	</label>
	<input type="text" required name="keywords">
	<br><br>
	<label>
		Video URL
	</label>
	<input type="url" required name="video_url">
	<br><br>
	<label>
		image URL
	</label>
	<input type="url" require name="image_url">
	<br><br>
	<label>
		Start Date
	</label>
	<input type="Date" required name="start_date">
	<br><br>
	<label>
		End Date
	</label>
	<input type="Date" required name="end_date">
	<br><br>
	<input type="submit" name="submit" value="add car">

</form>
</center>
</body>
</html>
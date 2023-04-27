<!DOCTYPE html>
<html>
<head>
	<title>Our Cars</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="MainMenu">

    <a class="active" href="index.php" >Home</a>
      <a href="About_us.php">About Us</a>
      <a href="Our_cars.php">Our Cars</a>
      <a href="logout.php">Logout</a>
    <a href="/add_car.php">Add Cars</a>
</div>
<center>
<h2> List of Cars </h2>
</center>
<br><br>
			<table>
				<tr>
					<th> Car Name </td>
					<th> Car Description </td>
					<th> Car Category </td>
					<th> keywords </td>
					<th> video</td>
					<th> image</td>
					<th> start_date </td>
					<th> end_date </td>
					<th> Action </td>
				</tr>
				<?php
					// Include config file
					require_once "config.php";

					$sql = "SELECT * FROM car_details";
					$result = mysqli_query ($con,$sql) or die (mysqli_error($con));
					if($result==true){
						While($row=mysqli_fetch_assoc($result))
						{
                                                        $ID=$row['ID'];
							$car_name = $row["car_name"];
							$car_description = $row["car_description"];
							$car_category = $row["car_category"];
							$keywords = $row["keywords"];
							$video_url = $row["video_url"];
							$image_url = $row["image_url"];
							$start_date = $row["start_date"];
							$end_date = $row["end_date"];
							?>
							<tr>
							<td> <?php echo $car_name; ?> </td>
							<td> <?php echo $car_description; ?> </td>
							<td> <?php echo $car_category; ?> </td>
							<td> <?php echo $keywords; ?> </td>
							<td> <a href="<?php echo $video_url; ?>">video</a>  </td>
                                                        <td>
                                                        <img id="<?php echo $ID;?>" class="photosize" src='<?php echo $image_url; ?>'>
                                                        <button id="<?php echo $ID;?>_btn" onclick="toggleImage(<?php echo $ID;?>)">hide image</button>
                                                        </td>
							<td> <?php echo $start_date; ?> </td>
							<td> <?php echo $end_date; ?> </td>
							<td> <a href="add_car.php?id=<?php echo $ID; ?>" class="action">
                <button type="button"> Update </button></a> - <a href="Delete_car.php?id=<?php echo $ID; ?>" class="action">
                <button type="button"> Delete </button></a> </td>
							</tr>
						<?php
						}
					}
				?>
			</table>
        <script type="text/javascript" src="./javascript.js"></script>

</body>
</html>
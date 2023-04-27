<!-- <!DOCTYPE html>
<html>
<head>
	<title>Cars Editing page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="MainMenu">
	
	<a class="active" href="index.php" >Home</a>
 	 	    <a href="AboutUs.html">About Us</a>
			<a href="Our_cars.php">Our Cars</a>
			<a href="logout.php">Log Out</a>

	</div>
	<br><br>
	<center>
    <form method="post" action="edit_car.php">
	<label>
		Car Name
	</label>
	<input type="text" require name="car_name">
	<br><br>
	<label>
		Car Description
	</label>
	<input type="text" require name="car_description">
	<br><br>
	<label>
		Car Category
	</label>
	<input type="text" require name="car_category">
	<br><br>
	<label>
		keywords
	</label>
	<input type="text" require name="keywords">
	<br><br>
	<label>
		Video URL
	</label>
	<input type="url" name="video_url">
	<br><br>
	<label>
		image URL
	</label>
	<input type="url" require name="image_url">
	<br><br>
	<label>
		Start Date
	</label>
	<input type="Date" require name="start_date">
	<br><br>
	<label>
		End Date
	</label>
	<input type="Date" require name="end_date">
	<br><br>
	<input type="submit" name="submit" value="Edit Car">

</form>
</center>
</body>
</html>



	// session_start();
    // include('config.php');

	// if (isset($_POST['submit'])) 
	// {
	// 	// $user_ID = $_POST["user_id"];
    // 	$car_name = $_POST["car_name"];
    // 	$car_description = $_POST["car_description"];
    // 	$car_category = $_POST["car_category"];
    // 	$keywords = $_POST["keywords"];
    // 	$video_url = $_POST["video_url"];
    // 	$image_url = $_POST["image_url"];
    // 	$start_date = $_POST["start_date"];
    // 	$end_date = $_POST["end_date"];
    
	
	// 	$update_sql = "INSERT INTO `car_details`  (`user_ID`, `car_name`, `car_description`, `car_category` , `keywords` , `video_url` , `image_url` , `start_date` , `end_date` ) VALUES ('" .$_SESSION["id"]. "', '".$car_name."', '".$car_description."', '".$car_category."', '".$keywords."', '".$video_url."', '".$image_url."', '".$start_date."', '".$end_date."')" ;
	// 	// echo $sql;
	// 	//fire query to save entries and check it with if statement
	// 	$rs = mysqli_query($con, $update_fhalsql);
	// 	if($rs)
	// 	{
	// 		header('Location: /Our_Cars.php');
	// 		mysqli_close($con);
	// 	}
	// 	else 
	// 	{
	// 		$_SESSION['id'];
	// 	}
	// }

 -->


 <!DOCTYPE html> 
<html>
	<head>
		<title> Adding & Listing of Brands </title>
	</head>
	<body>
		<div id="main">
			<h2> Adding Brands form </h2>
			<form method="post" action="Add.php">
				<table>
				<tr>
					<tr>
						<td> 
                            Car Name:
                        </td>
						<td> 
                            <input type="text" name="car_name" value="<?php echo $car_name; ?>" /> 
                        </td>
						</tr>
						<tr>
							<td> 
								Car Description: 
							</td>
							<td> 
								<input type="textarea" name="car_description" value="<?php echo $car_description ?>" /> 
							</td>
						</tr>
						<tr>
						<td> 
                            Car Category:  
                        </td>
						<td> 
                            <input type="text" name="car_category" value="<?php echo $car_category; ?>" /> 
                        </td>
						</tr>
						<tr>
                        <td>   
                        keywords:
                        </td>
                        <td>
                        <input type="text" name="keywords" value="<?php echo $keywords ?>" /> 
                        </td>
                   	 </tr>
                    	<tr>
                        <td>   
                        video_url: 
                        </td>
						<td> 
                        <input type="url" name="video_url" value="<?php echo $video_url; ?>" /> 
                        </td>
						</tr>
                   		 <tr>
                         <td>  
                        image_url: 
                        </td>
						<td> 
                        <input type="url" name="image_url" value="<?php echo $image_url; ?>" /> 
                        </td>
					</tr>
                    <tr>
                        <td>
                            start date:
                        </td>
						<td>
                         <input type="date" name="start_date" value="<?php echo $start_date; ?>" /> 
                        </td>
						</tr>
                   	 <tr>
                        <td>
                            end date:
                        </td>
						<td>
                        <input type="date" name="end_date" value="<?php echo $end_date; ?>" /> 
                        </td>
						</tr>
						<td> 
							<input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
						</td>
						<td>
						<input type="submit" name="submit" value="Update Car" /> 
						</td>
				
						<tr>
						<td> <input type="submit" name="submit" value="Add a car" /> </td>
						<td> <input type="reset" name="reset" value="Reset" /> </td>
						</tr>
				</table>
			</form>
			<br />
			<hr />
			<br />
			<h2> List of Brands </h2>
			<table>
				<tr>
					<th> Car ID </td>
					<th> Car Name </td>
					<th> Car Description </td>
					<th> Car Category </td>
					<th> keywords </td>
					<th> video_url </td>
					<th> image_url </td>
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
								<td> <?php echo $ID; ?> </td>
								<td> <?php echo $car_name; ?> </td>
								<td> <?php echo $car_description; ?> </td>
								<td> <?php echo $car_category; ?> </td>
								<td> <?php echo $keywords; ?> </td>
								<td> <?php echo $video_url; ?> </td>
								<td> <?php echo $image_url; ?> </td>
								<td> <?php echo $start_date; ?> </td>
								<td> <?php echo $end_date; ?> </td>
								<td> <img class="photosize" src='<?php echo $Image; ?>' /> </td>
								<td> <a href="Edit.php?id=<?php echo $ID; ?>" class="action"><button type="button"> Update </button></a> - <a href="Delete.php?id=<?php echo $ID; ?>" class="action"><button type="button"> Delete </button></a> </td>
							</tr>
						<?php	
						}
					}
				?>
			</table>
		</div>
			
	</body>
</html>











<!-- <!DOCTYPE html> 
<html>
	<head>
		<title> Adding and Editing Cars </title>
	</head>
	<body>
    <div class="MainMenu">
	
	<a class="active" href="index.php" >Home</a>
 	 	    <a href="About_us.php">About Us</a>
			<a href="Our_cars.php">Our Cars</a>
			<a href="logout.php">Log Out</a>

	</div>
	<br><br>
		<div id="main">
            <?php
                // $ID=$_GET['id'];	
                			$ID =1;
                        
                // Include config file
                require_once "config.php";
                            
                $sql="SELECT * FROM car_details WHERE ID=".$ID;
                $result=mysqli_query($con,$sql);
                if($result==true) 
                    {
                        $row=mysqli_fetch_assoc($result);

                        $car_name = $row["car_name"];
                        $car_description = $row["car_description"];
                        $car_category = $row["car_category"];
                        $keywords = $row["keywords"];
                        $video_url = $row["video_url"];
                        $image_url = $row["image_url"];
                        $start_date = $row["start_date"];
                        $end_date = $row["end_date"];
                    }				
            ?>
<h2> Updating cars form </h2>
			<form method="post" action="edit_car.php">
				<table>
                <tr>
					<tr>
						<td> 
                            Car Name:
                        </td>
						<td> 
                            <input type="text" name="car_name" value="<?php echo $car_name; ?>" /> 
                        </td>
					</tr>
					<tr>
						<td> 
                            Car Description: 
                        </td>
						<td> 
                            <input type="text" name="car_description" value="<?php echo $car_description ?>" /> 
                        </td>
					</tr>
					<tr>
						<td> 
                            Car Category:  
                        </td>
						<td> 
                            <input type="text" name="car_category" value="<?php echo $car_category; ?>" /> 
                        </td>
					</tr>
					<tr>
                        <td>   
                        keywords:
                        </td>
                        <td>
                        <input type="text" name="keywords" value="<?php echo $keywords ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>   
                        video_url: 
                        </td>
						<td> 
                        <input type="text" name="video_url" value="<?php echo $video_url; ?>" /> 
                        </td>
					</tr>
                    <tr>
                         <td>  
                        image_url: 
                        </td>
						<td> 
                        <input type="text" name="image_url" value="<?php echo $image_url; ?>" /> 
                        </td>
					</tr>
                    <tr>
                        <td>
                            start date:
                        </td>
						<td>
                         <input type="date" name="start_date" value="<?php echo $start_date; ?>" /> 
                        </td>
					</tr>
                    <tr>
                        <td>
                            end date:
                        </td>
						<td>
                        <input type="date" name="end_date" value="<?php echo $end_date; ?>" /> 
                        </td>
					</tr>
					<td> 
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
                    </td>
					<td>
                    <input type="submit" name="submit" value="Update Car" /> 
                    </td>
				</tr>
				</table>
                </form>
			
            </div>
                
        </body>
    </html>







 -->



 <!-- the user has to login to edit this page heheh
// <?php
//     session_start();
//     if(!isset($_SESSION['user_id'])){
//         header('Location: login.php');
//         exit;
//     } else {
//         // Show users the page!
//     }
// ?> -->
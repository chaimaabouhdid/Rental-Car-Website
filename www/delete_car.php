<?php
	$ID=$_GET['id'];				
	
	// Include config file
	require_once "config.php";
				
	$sql="DELETE FROM car_details WHERE ID=".$ID;
	
	$result=mysqli_query($con,$sql) or die(mysqli_error());
	if($result==true) {
		header('location:our_cars.php');
	}
	else {
		echo "Mission Failed";
	}

?>
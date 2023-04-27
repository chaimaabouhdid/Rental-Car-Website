<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<header class="MainMenu">
	
		<a class="active"href="index.php">Home</a>
 	    <a href="About_us.php">About Us</a>
 	    <a href="register_page.php">Register</a>
 	    <a href="login_page.php">Login</a>

	</header>
	<br><br>
	<center>
		<img src="http://simpleicon.com/wp-content/uploads/add-user.png" width="200" height="200">
		<br><br>
		<form method="post" action="verify\register.php">

	<label>
		User Name
	</label>
	<input type="text" required name="username">
	<br><br>
	<label>
		Password
	</label>
	<input type="password" required name="password">
	<br><br>
	<label>
		Verify Password
	</label>
	<input type="password" required name="verify_password">
	<br><br>
	<label>
		Title
	</label>
	<input type="text" required name="title">
	<br><br>
		<label>
		First Name
	</label>
	<input type="text" required name="first_name">
	<br><br>
	<label>
		Last Name
	</label>
	<input type="text" required name="last_name">
	<br><br>
	<label>
		Gender
	</label>
	<input type="text" name="gender">
	<br><br>
	<label>
		adress1
	</label>
	<input type="text" required name="adress1">
	<br><br>
	<label>
		adress2
	</label>
	<input type="text" required name="adress2">
	<br><br>
	<label>
		adress3
	</label>
	<input type="text" name="adress3">
	<br><br>
	<label>
		PostCode
	</label>
	<input type="number" required name="postcode">
	<br><br>
	<label>
		Description
	</label>
	<textarea
		 type="textarea" required name="description">
		 </textarea>
	<br><br>
	<label>
		Email Address
	</label>
	<input type="Email" required name ="email">
	<br><br>
	<label>
		Telephone
	</label>
	<input type="text" required name="telephone">
	<label>
			Profile URL
	</label>
	<input type="url" required name="profile_url">
	<label>

	<br>
	<input type="submit" value="submit">

	</form>
	</center>
		
</body>
</html>


<?php
session_start();
include('config.php');

if(isset($_POST['submit']))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$title = $_POST["title"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$gender = $_POST["gender"];

	$adress1 = $_POST["adress1"];
	$adress2 = $_POST["adress2"];
	$adress3 = $_POST["adress3"];
	$postcode = $_POST["postcode"];
	$description = $_POST["description"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$profile_url = $_POST["profile_url"];

	//This below line is a code to Send form entries to database
	$sql = "INSERT INTO `user_details` (username, password, title , first_name , last_name , gender , adress1 , adress2, adress3, postcost, description, email, telephone,profile_url ) VALUES  ('".$username."', '".$password."', '".$title."', '".$first_name."', '".$last_name."', '".$gender."', '".$adress1."', '".$adress2."', '".$adress3."', '".$postcode."', '".$description."', '".$email."', '".$telephone."', '".$profile_url."')" ;
  //fire query to save entries and check it with if statement
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
        header('Location: /login_page.php');
	    mysqli_close($con);
	}
}


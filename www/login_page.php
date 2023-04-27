<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>The login page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

	<div class="MainMenu">

	<a class="active"href="index.php">Home</a>
 	 	    <a href="About_us.php">About Us</a>
 		    <a href="register_page.php">Register</a>
 		    <a href="login_page.php">Login</a>

	</div>
	<center>

<?php

    require_once('config.php');
    if (isset($_POST['login']))
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT count(*) as user FROM user_details WHERE username='" . $username . "' and password='" . $password . "'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);

        if ($row['user'] > 0)
		{
			echo '<p class="success">Congratulations, you are logged in!</p>';
                        $query = "SELECT * FROM user_details WHERE username = '" . $username . "'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
			$_SESSION["id"] = $row["user_ID"];
			header("Location: /index.php");
                        die();
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
?>
	<form method="post">

	<div class = "loginbox">

			<br><br><br>
			<img src="https://mkhelpinghands.org.uk/media/1059/person_1058396.png" width="200" height="200">
			<div class="loginform">
			<br>
			<input required name="username" type="text" placeholder="Username">
			<br>
				<input required name="password" type="text" placeholder="Password">
			<br>
			<input type="submit" name="login" value="login">
			</div>
    </div>
			<br>
			<a href="/Forgotten_Password.php"> Forgotten password</a>
			<br> <br>
			<label>
				Don't have an account?
			</label>
			<a href="/register_page.php">Sign up.</a>
			<br>

			<a  href="/index.php">Return to the main page</a>
</form>
		</center>
</body>
</html>
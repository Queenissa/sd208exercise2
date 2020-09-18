<?php
       if(isset($_POST['login'])){
          header('location: bio.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="login.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href='https://fonts.googleapis.com/css?family=Leckerli One' rel='stylesheet'>
</head>
<body>

<div class="container">
	<h2>Login to your Account</h2>
	<div class="main">
		<div class="logo">
			<h1>Hi</h1>
		</div>
		<form action="#" method="post">
			<input type="email" placeholder="Email" name="email">	<i class="fa fa-user"></i>
			<input type="password" placeholder="Password" name="password">	<i class="fa fa-lock"></i>
			<input type="submit" value="Login" name="login">
			<h4>Not Registered yet?<a href="registration.php" class="reg"> Create an Account</a></h4>
		</form>
	</div>
</div>

</body>
</html>
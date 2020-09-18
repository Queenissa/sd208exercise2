<?php
       if(isset($_POST['register'])){
         header('location: login.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Leckerli One' rel='stylesheet'>
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>

<body>

<div class="container">
  <div class="form">
    <h2 class="main-text">Create an Account</h2>
    <form class="register-form" method="post">
      <input type="text" placeholder="First name">
      <input type="text" placeholder="Last name">
      <input type="text" placeholder="Address">
      <input type="email" placeholder="Email Address">
      <input type="email" placeholder="Confirm email address">
      <input type="password" placeholder="Password">
      <input type="password" placeholder="Confirm password">
      <input type="submit" class="submit-btn" value="Register" name="register">

      <p class="message">Already registered? <a href="login.php">Login</a></p>
    </form>
  </div>
</div>

</body>
</html>
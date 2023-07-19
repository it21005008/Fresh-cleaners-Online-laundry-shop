<?php
include 'config.php';
?>



<!DOCTYPE html>
<head>
	
	<title>Login</title>
	
	<link href="styles/login_styles.css" rel="stylesheet">
</head>
<body>
	
	<div class="contact-form">
		<img alt="" class="avatar" src="images/log/a1.jpg">
		<h2>Sign in</h2>
		<form method="post" action="loginValidate.php">
			<p>User name</p><input placeholder="Enter Username" name="username" type="text">
			<p>Passwrod</p><input placeholder="Enter Password" name="password" type="password"> 
            <input type="submit" value="Sign in">
			<p><input type="checkbox" name="remenber" >Remember Me <br>Not an Account</p>
            <button type="button" class="reg" value="Register"><a href="registration.html"><h5>Register</h5></a></button>
            <a href="index.html" class="log-logo"><img src="images/log/logo.png"> </a>
           
		</form>
	</div>
</body>
</html>
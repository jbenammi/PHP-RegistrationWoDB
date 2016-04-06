<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title>Registration without Validation</title>
	<meta name="description" content="This is a PHP assignment for Coding Dojo">
	<link rel="stylesheet" type="text/css" href="style.css.php">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src=""></script>
</head>
<body>
	<div id="container">
		<h1>Registration...</h1>
		<form action="Process.php" method="post">
			<label for="First_Name">First Name: *</label>
			<input type="text" id="First_Name" placeholder="First Name" name="First_Name" autofocus />
			<label for="Last_Name">Last Name: *</label>
			<input type="text" id="Last_Name" placeholder="Last Name" name="Last_Name" />
			<label for="Birthdate">Birthdate: *</label>
			<input type="date" id="Birthdate" placeholder="YYYY/MM/DD" name="Birthdate" />
			<label for="EMail">E-Mail Address: *</label>
			<input type="email" id="EMail" placeholder="E-Mail" name="EMail" />
			<label for="Password">Password: *</label>
			<input type="password" id="Password" placeholder="Minum 6 Characters" name="Password" />
			<label for="ConfirmPass">Confirm Password: *</label>
			<input type="password" id="ConfirmPass" name="ConfirmPass" />
			<label for="profilePicture">Profile Picture:</label>
			<input type="file" id="profilePicture" placeholder="Attach Picture" name="Picture" />
			<input type="submit" id="submitBtn" value="Submit!" />
		</form>
	</div>
</body>
</html>
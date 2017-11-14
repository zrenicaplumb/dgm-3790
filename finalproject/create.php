<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php require_once('header.php'); ?>
	<h1>To Do List</h1>
	<form action="create2.php" method="POST" enctype="multipart/form-data">
		<h2>Create an Account</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="text" name="password" placeholder="Password" required>
		<button type="submit" name="submit">Create</button>
		<a href="login.php">Log in</a>
	</form>
</body>
</html>
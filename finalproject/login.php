<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php require_once('header.php'); ?>
	<h1>To Do List</h1>
	<form action="login2.php" method="POST" enctype="multipart/form-data">
		<h2>Login</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="text" name="password" placeholder="Password" required>
		<button type="submit" name="submit">Log in</button>
		<a href="create.php">Create an account</a>
	</form>
</body>
</html>
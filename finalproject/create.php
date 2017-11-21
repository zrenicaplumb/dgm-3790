<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		if(!empty($username) && !empty($password)){
			$query = "SELECT * FROM todo_list_users WHERE username = '$username'";
			$alreadyexists = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($alreadyexists) == 0) {
				$query = "INSERT INTO todo_list_users (username, password, email) VALUES ('$username', '$password', '$email') ";
				mysqli_query($dbconnection, $query) or die('Insert query failed.');
				echo '<p>Your account has been created!</p>';
				echo '<br><a href="login.php">Login to your new account.</a>';
				mysqli_close($dbconnection);
				
			}	
			else{
				echo '<p class="error">An account already exists with this username, use a different username.';
				echo '<br><a href="login.php">Go to login page.</a>';
			}
		}
		
	}
	
 ?>

<?php require_once('head.php'); ?>
<body>
	<?php require_once('header.php'); ?>
	<h1>To Do List</h1>
	<form action="create.php" method="POST" enctype="multipart/form-data">
		<h2>Create an Account</h2>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<button type="submit" name="submit">Create</button>
		<a href="login.php">Log in</a>
	</form>
</body>
</html>
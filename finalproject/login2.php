<?php 
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die("Connection failed");
		$query = "";

	}
?>
<?php 
	if (!isset($_COOKIE['username'])) {
		echo '<p>Please <a href="login.php">log in</a> to access this page</p>';
		exit();
	}
?>
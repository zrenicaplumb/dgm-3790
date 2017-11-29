<?php 
	include_once('protect.php');
?>
<?php require_once('head.php'); ?>
<body>
	<?php require_once('header.php');
		require_once('variables.php');
	 ?>
	<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';
	    $error = "";
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		if (isset($_POST['submit'])) {
			$task = $_POST['task'];
			if (empty($task)) {
				$error = "Please enter a task";
			}
			else{
				mysqli_query($dbconnection, "INSERT INTO tasks (task) VALUES ('$task')");
			}
		}
		if (isset($_GET['del_task'])) {
			$id = $_GET['del_task'];
			mysqli_query($dbconnection, "DELETE FROM tasks WHERE id=$id");
		}
		$tasks = mysqli_query($dbconnection, "SELECT * FROM tasks");
		if (isset($_POST['save'])) {
				$email = $_POST['emailto'];
				$subject = "Here is your latest task list";
			    $result = mysqli_query($dbconnection, "SELECT * FROM tasks") or die("error");
			    while ($row = mysqli_fetch_array($result)) {
			        $content = $row['task'];
			    }
			    $message = "Hello ".$email.", here is your task list. \n" . $content;
			    
			  	
			    mail($email, $subject, $message);
			}
	?>
	<h1>To Do List</h1>
	<div class="list-wrap">
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<input class="new-item" type="text" name="task" placeholder="Enter a task:" required>
			<button class="add" type="submit" value="submit" name="submit">Add to list</button>
		</form>
		<div class="list">
			<?php 
				while ($row = mysqli_fetch_array($tasks)) { ?>
				<?php  
					// $mydate = getdate(date("U"));
					// echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
					echo '<p class="task">' . $row['task'] . '</p>';
					?>
						<a class="delete" href="index.php?del_task=<?php echo $row['id']; ?>">X</a>
					<?php
				}
			?>				
		</div>	
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<h4>Email this list to:</h4> 
			<input class="new-item" type="email" name="emailto" placeholder="Email this list to:" >
			<button class="save clear" value="save" name="save">Send list</button> 
		</form>
	</div>
</body>
</html>
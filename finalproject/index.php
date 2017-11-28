<?php 

	include_once('protect.php');
?>

<?php require_once('head.php'); ?>
<body>
	<?php require_once('header.php'); ?>
	<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';
		
	?>
	<h1>To Do List</h1>
	<div class="list-wrap">
		<input class="new-item" type="text" name="add" placeholder="Title" required>
		<button class="add">Add to list</button>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<div class="list">
				<ul>
					
					
				</ul>
			</div> 
			<button class="save clear" value="submit" name="submit">Save list</button>
		</form>
	
		
	</div>
		
	
	

</body>
</html>
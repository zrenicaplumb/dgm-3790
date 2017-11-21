<?php 

	include_once('protect.php');
?>

<?php require_once('head.php'); ?>
<body>
	<?php require_once('header.php'); ?>
	<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';?>
	<h1>To Do List</h1>
	<div class="list-wrap">
		<h2>To Do</h2>
		<input class="new-item" type="text" name="add" placeholder="Title" required>
		<button class="add">Add to list</button>
		<div class="list">
			<ul>
				
				
			</ul>
		</div> 
		
		<button class="save clear" >Save list</button>
		
	</div>
		
	
	

</body>
</html>
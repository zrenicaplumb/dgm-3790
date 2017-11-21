

$(document).ready(function () {
	var date = new Date();
	var save = $('.save');
	// creating the new list item
	function newItem(){
		var input = $('.new-item').val();
		// var p = $('<p></p>');
		var li = $('<li class="task" value="input"></li>');
		var date = new Date();
		var ul = $('.list ul');
		if (input === '') {
    		alert("Entry required.");
	  	} else {
	  		// p.append(input);
			li.append(input);
			ul.append(li);
			//creating the delete button
			var btn = $('<button class="delete">X</button>');
			$(li).append(btn);
	  	}
	  	//remove the task
	  	btn.on("click", function(){
	  		$(this).parent().remove();
	  	});
	  	li.on("click", function(){
	  		$(this).css({
	  			'text-decoration':'line-through',
	  			'background':'rgb(240,240,240)'
	  		});

	  	}); 
	}
	
	

	$('.add').on("click", function(){	
	  	newItem();

	  	
	});
	$('.save').on("click", function(){
		var listItem = document.getElementsByTagName('li');
		// var listItems = [];
		// listItems.push(listItem);
		$.post(
			'todo.php', 
			{
				'listItem': listItem 
			}, 
			function(data){
				alert(data);
			});
		
	});

});

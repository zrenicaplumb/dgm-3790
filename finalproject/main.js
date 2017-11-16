

$(document).ready(function () {
	
	// creating the new list item
	function newItem(){
		var input = $('.new-item').val();
		var li = $('<li></li>');
		var ul = $('.list ul');
		if (input === '') {
    		alert("Entry required.");
	  	} else {
			li.append(input);
			ul.append(li);
			//creating the delete button
			var btn = $('<button class="delete">X</button>');
			$(btn).css({
				'background':'red',
				'padding':'5px'
			});
			$(li).append(btn);

	  	}
	  	//remove the task
	  	btn.on("click", function(){
	  		$(this).parent().remove();
	  	});
	}
	
	

	$('.add').on("click", function(){	
	  	newItem();

	  	
	});
});

$(document).ready(function(){
	$("form#std_login_form").on('submit',  function(event) {
		event.preventDefault();
		$("button").text("Signing in....");

		var that = $(this),
        url = that.attr("action"),
        type = that.attr("method"),
        data = {};
	    that.find('[name]').each(function(index, value){
	        var that = $(this),
	            name = that.attr('name'),
	            value = that.val();
	            data[name] = value;
	    });
		
		$.ajax({
	        url: url,
	        type: type,
	        data: data,
	        success: function(response){
	            var msg = $(".msg");
	            if (response == "login successful") {
	            	msg.html(response);
	            	msg.removeClass("text-danger");
	            	msg.addClass("text-success");
	            	window.location = 'home';
	            } else {
	            	msg.html(response);
	            	msg.addClass("text-danger");
	            	$("button").text("SIGN IN");
	            }
	        }
    	})

	});

	$("form#std_login_practice_form").on('submit',  function(event) {
		event.preventDefault();
		$("button").text("Signing in....");

		var that = $(this),
        url = that.attr("action"),
        type = that.attr("method"),
        data = {};
	    that.find('[name]').each(function(index, value){
	        var that = $(this),
	            name = that.attr('name'),
	            value = that.val();
	            data[name] = value;
	    });
		
		$.ajax({
	        url: url,
	        type: type,
	        data: data,
	        success: function(response){
	            var msg = $(".msg");
	            if (response == "login successful") {
	            	msg.html(response);
	            	msg.removeClass("text-danger");
	            	msg.addClass("text-success");
	            	window.location = 'home?practice';
	            } else {
	            	msg.html(response);
	            	msg.addClass("text-danger");
	            	$("button").text("SIGN IN");
	            }
	        }
    	})

	});
})
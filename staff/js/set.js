$(document).ready(function(){
	$("form#reset_pass_form").on("submit",function(){
		$("button").text("Processing....");
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
        		var resp = JSON.parse(response);
				var message = (resp["message"]);
				var status = resp["status"];

				// console.log(response);
				var msg = $(".msg");

				if(status == 0) {
					msg.html(resp["message"]);
	            	msg.addClass("text-danger");
					msg.removeClass("text-success");
				} 
				if (status == 1) {
					msg.html(message);
	            	msg.removeClass("text-danger");
					msg.addClass("text-success");
				}
				$("button").text("Change");
        }
    })

    	return false;
	})

	// delete question for staff

	$("form#deleteform").on('submit',function(event) {
		event.preventDefault();
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
        	msg.html(response);
			
        }
    })
		
	});

})
$(document).ready(function() {
	$("form#set_question_form").on('submit',  function(event) {
		event.preventDefault();
		// $("button.btn").text("Processing....");

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

				console.log(response);
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
					$(".input").val("");
					$("textarea").val("");
					$("#question_no").load(window.location.href + " #question_no");
				}
				// console.log(response)

				$("button.btn").text("Save");
	        }
    	})

	});

	$("#edit_question_form").on('submit',  function(event) {
		event.preventDefault();
		$("[name=edit_q]").text("Processing....");
		var btn = document.activeElement.getAttribute('value');
		var that = $(this),
        url = that.attr("action"),
        type = that.attr("method"),
        data = {};
        data["name"] = btn;
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
	        	msg.addClass("text-danger");
				msg.removeClass("text-success");

	        	if (response === "Duplicate question!") {
	        		msg.html(response);

	        	} else {
		        	var resp = JSON.parse(response);
		        	var message = (resp["message"]);
					var status = resp["status"];	

					if(status === 0) {
						msg.html(message);
						msg.addClass("text-danger");
						msg.removeClass("text-success");
					} 
					else if (status === 1) {
						msg.html(message);
		            	msg.removeClass("text-danger");
						msg.addClass("text-success");
					}
				}

				// console.log(response);

				$("[name=edit_q]").text("Update");
	        }
    	})

	});


	// check();

	// function check() {
	// 	var course_no = '';

	// 	$("select#c_no_new").change(function(){
	// 		 course_no = $(this).val();
	// 		$("input#c_no_new").val(course_no);
	// 	})
	// 	return course_no;
	// }






})
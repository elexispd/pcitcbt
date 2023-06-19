
$(document).ready(function(){

	$("form#register_student_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("Processing....");

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
					$("input").val("");
					$("select").val("");
				}
				$("html, body").animate({ scrollTop: 0 }, 0);
				// alert(response);
				$("button.loading").text("Register");
	        }
    	})

	});

	$("form#edit_student_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("updating....");

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
				$("html, body").animate({ scrollTop: 0 }, 0);
				$("button.loading").text("save");
	        }
    	})

	});

	/*--------------------delete student-----------------*/

	$("form#del_form").on('submit',  function(event) {
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
				}
				$("html, body").animate({ scrollTop: 0 }, 0);
	        }
    	})

	});

	/*--------------------end delete---------------------*/

	$("form#admin_view-students year").on('change',  function(event) {
		// event.preventDefault();
		var $year = $(this).val();
        url = "../php/includes/set.inc.php)",
        type = "post",
        data = "year="+year;
		
		$.ajax({
	        url: url,
	        type: type,
	        data: data,
	        success: function(response){
	           console.log(response);
	        }
    	})

	});


	$("form#register_staff_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("Processing....");

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
					$("input").val("");
					$("select").val("");
				}
				$("html, body").animate({ scrollTop: 0 }, 0);
				// alert(response);
				$("button.loading").text("Register");
	        }
    	})

	});

	$("form#update_staff_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("Processing....");

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
				$("html, body").animate({ scrollTop: 0 }, 1000);
				// alert(response);
				$("button.loading").text("Register");
	        }
    	})

	});

	/*---------------------course--------------------------*/
	$("form#add_course_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("Processing....");

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

				// console.log(response);
				var msg = $(".msg");

				if(response != "course created successfully") {
					msg.html(response);
	            	msg.addClass("text-danger");
					msg.removeClass("text-success");
				} 
				if (response == "course created successfully") {
					msg.html(response);
	            	msg.removeClass("text-danger");
					msg.addClass("text-success");
				}

				$("button.loading").text("Add");
				$("input").val("");
	        }
    	})

	});

	/*---------------------course number--------------------------*/
	$("form#add_course_number_form").on('submit',  function(event) {
		event.preventDefault();
		$("button.loading").text("Processing....");

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

				// console.log(response);
				var msg = $(".msg2");

				if(response != "course created successfully") {
					msg.html(response);
	            	msg.addClass("text-danger");
					msg.removeClass("text-success");
				} 
				if (response == "course created successfully") {
					msg.html(response);
	            	msg.removeClass("text-danger");
					msg.addClass("text-success");
				}

				$("button.loading").text("Add Course Number");
	        }
    	})

	});

	$("form#assign_course_form").on("submit",function(){
		$("button.loading").text("Processing....");
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
				}
			$(".select2-selection__rendered").text("");
        }
    })

    	return false;
	})

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






})


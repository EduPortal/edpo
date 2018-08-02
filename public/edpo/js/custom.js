$(document).ready(function($) {
	if ($("#errors_occured").length) {
		$("#add_new_class_modal").modal("show");
	}
});

$("#save_profile_information").click(function(event) {
	var first_name 		=		 $("#first_name").val();
	var last_name 		=		 $("#last_name").val();
	var birthday 		=		 $("#birthday").val();
	var email 			=		 $("#email").val();
	var phone 			=		 $("#phone").val();
	var country 		=		 $("#country").val();
	var province 		=		 $("#province").val();
	var city 			=		 $("#city").val();
	var description 	=		 $("#description").val();
	var website 		=		 $("#website").val();
	var birthplace 		=		 $("#birthplace").val();
	var marital_status 	=		 $("#marital_status").val();
	var facebook 		=		 $("#facebook").val();
	var twitter 		=		 $("#twitter").val();
	var linkedin 		=		 $("#linkedin").val();
	var google_plus 	=		 $("#google_plus").val();

	var call = getFlag()+"/settings/save_profile_information";

	$.ajax({
		url: call,
		type: 'POST',
		headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
        },
		data: {'first_name' : first_name , 'last_name' : last_name , 'birthday' : birthday , 'email' : email , 'phone' : phone , 'country' : country , 'province' : province , 'city' : city , 'description' : description , 'birthplace' : birthplace , 'marital_status' : marital_status , 'facebook' : facebook , 'twitter' : twitter , 'linkedin' : linkedin , 'google_plus' : google_plus, 'website' : website},
	})
	.done(function(result) {
		if ($.isEmptyObject(result.errors)) {
			showSuccessMessage("Profile information updated successfully!");
		}
		else{
			printErrorMsg(result.errors);
		}
	})
	.fail(function() {
		console.log(result);
	});
});

$("#image_input").click(function() {
    $("#my_file").click();
});

$("#my_file").change(function(event) {
	$("#avatar_form").submit();
});

$("#image_input_mobile").click(function() {
    $("#my_file_mobile").click();
});

$("#my_file_mobile").change(function(event) {
	$("#avatar_form_mobile").submit();
});

$("#save_hobby_information").click(function(event) {
	var	hobbies                =     $("#hobbies").val();
	var favourite_tv_shows     =     $("#favourite_tv_shows").val();
	var favourite_movies	   =     $("#favourite_movies").val();
	var favourite_games		   =     $("#favourite_games").val();
	var	favourite_artists	   =	 $("#favourite_artists").val();
	var	favourite_books		   =	 $("#favourite_books").val();
	var	favourite_writers	   =	 $("#favourite_writers").val();
	var	favourite_interests	   =	 $("#favourite_interests").val();

	var call = getFlag()+"/settings/save_hobby_information";

	$.ajax({
		url: call,
		type: 'POST',
		headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
        },
		data: { 'hobbies' : hobbies,
				'favourite_tv_shows' 	: 	favourite_tv_shows,
				'favourite_movies'  	: 	favourite_movies,	 
				'favourite_games'		: 	favourite_games,
				'favourite_artists'		: 	favourite_artists,
				'favourite_books' 		: 	favourite_books,
				'favourite_writers' 	: 	favourite_writers,
				'favourite_interests'	: 	favourite_interests
			},
	})
	.done(function(result) {
		if ($.isEmptyObject(result.errors)) {
			showSuccessMessage("Hobbies and Interests updated successfully!");
		}
		else{
			printErrorMsg(result.errors);
		}
	})
	.fail(function() {
		console.log("error");
	});
});

$("#change_password_btn").click(function(event) {
	var email					=		$("#email").val();
	var new_password			=		$("#new_password").val();
	var new_password_repeat		=		$("#new_password_repeat").val();

	if (email == "" || new_password == "" || new_password_repeat == "") {
		showSingleError("All fields are required.");
		return;
	}

	if (new_password != new_password_repeat) {
		showSingleError("Passwords does not match.");
		return;
	}

	var call = getFlag()+"/settings/verify-email-address";

	$.ajax({
		url: call,
		type: 'POST',
		headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
        },
		data: { 'email' : email },
	})
	.done(function(result) {
		if (result == 1) {
			$("#questions_modal").modal('show');
		}
		else{
			showSingleError("Email does not match.");
		}
	})
	.fail(function() {
		console.log("error");
	});
});

$("#verify_security_questions_button").click(function(event) {
	var answer_1 = $("#answer_1").val();
	var answer_2 = $("#answer_2").val();
	var answer_3 = $("#answer_3").val();

	if (answer_1 == "" || answer_2 == "" || answer_3 == "") {
		showSingleError("Please give all the answers.");
	}
	else{

		var call = getFlag()+"/settings/verify-security-answers";

		$.ajax({
			url: call,
			type: 'POST',
			headers: {
	            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
	        },
			data: { 'answer_1' : answer_1,'answer_2' : answer_2,'answer_3' : answer_3 },
		})
		.done(function(result) {
			if (result == 1) {
				$("#change_password_form").submit();
			}
			else{
				showSingleError("Oops, one or more answer is incorrect.");
			}
		})
		.fail(function() {
			console.log("error");
		});
	}
});

$(".close").click(function(event) {
	$(".alert").fadeOut();
});

$("#post_type").change(function(event) {
	post_type = $("#post_type option:selected").val();
	description = $("#post_description").val();
	if (post_type != "none" && description != "") {

		$("#post_btn").attr('disabled', false);
		$("#post_btn").addClass('btn-primary');

		if(post_type == "announcement" || post_type == "none"){
			$("#attachments").hide("slow");
		}
		else{
			$("#attachments").show("slow");
		}
	}
	else{
		$("#post_btn").attr('disabled', true);
		$("#post_btn").removeClass('btn-primary');
		$("#attachments").hide("slow");
		return;
	}
});

$("#post_btn").click(function(event) {
	post_type = $("#post_type option:selected").val();
	description = $("#post_description").val();

	if (post_type == "none") {
		showSingleError("Please select the post type.");
		return;
	}

	if (description == "") {
		showSingleError("Please write the description.");
		return;
	}

	if (post_type != "none" && description != "") {
		$("#post_form").submit();
	}
});

$("#post_description").keyup(function(event) {
	post_type = $("#post_type option:selected").val();
	description = $("#post_description").val();
	if (post_type != "none" && description != "") {

		$("#post_btn").attr('disabled', false);
		$("#post_btn").addClass('btn-primary');

		if(post_type == "announcement" || post_type == "none"){
			$("#attachments").hide("slow");
		}
		else{
			$("#attachments").show("slow");
		}
	}
	else{
		$("#post_btn").attr('disabled', true);
		$("#post_btn").removeClass('btn-primary');
		$("#attachments").hide("slow");
		return;
	}
});

$("#join_class_btn").click(function(event) {
	var code = $("#class_code").val();
	if (code == "") {
		showSingleError("Please enter class code.");
		return;
	}

	var call = getFlag()+"/class/join";

	$.ajax({
		url: call,
		type: 'POST',
		headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
        },
		data: {'code' : code},
	})
	.done(function(result) {
		console.log(result);
		if (result == "not found") {
			showSingleError("Whoops! Invalid class code.");
			return;
		}
		else if (result == "already exist") {
			showSingleError("Already joined this class.");
			return;
		}
		else{
			showSuccessMessage("Class joined, Successfully!");
			setTimeout(function() {
				window.location.reload();
			}, 1000);
		}
	})
	.fail(function() {
		console.log(result);
	});
});

function showSuccessMessage(e) {
    swal({
	  title: "Success!",
	  text: e,
	  icon: "success",
	  button: 'Great!',
	});
}

function showSuccessMessageNoty(e) {
    new Noty({
	    text: e,
	    type: 'success',
	    theme: 'sunset',
	    progressBar: 'true',
	    layout: 'bottomLeft',
	    timeout: 5000,
	}).show();
}

function showFirstMessage(e) {
    new Noty({
	    text: e,
	    type: 'alert',
	    theme: 'sunset',
	    progressBar: 'true',
	    layout: 'bottomLeft',
	    timeout: 5000,
	}).show();
}

function printErrorMsg(e) {
    $.each(e, function(e, t) {
        new Noty({
		    text: t,
		    type: 'error',
		    theme: 'sunset',
		    progressBar: 'true',
		    layout: 'bottomLeft',
		    timeout: 5000,
		}).show();
    })
}

function showSingleError(e) {
    new Noty({
	    text: e,
	    type: 'error',
	    theme: 'sunset',
	    progressBar: 'true',
	    layout: 'bottomLeft',
	    timeout: 5000,
	}).show();
}

function custom_promt(e , t) {
    new Noty({
	    text: e,
	    type: 'info',
	    theme: 'sunset',
	    progressBar: 'true',
	    layout: 'bottomLeft',
	    timeout: t,
	}).show();
}

function getFlag() {
	var flag = window.location.pathname.split("/")[1];

	if(flag == "student") {
		return '/student';
	}
	else if(flag == "teacher") {
		return '/teacher';
	}
}

function view_attachments(id) {

	$("#attachments_table").html("");
	custom_promt("Please wait ..." , 1000);
	call = getFlag()+"/classes/post/view_attachments";

	$.ajax({
		url: call,
		type: 'POST',
		headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
        },
		data: { 'id' : id },
	})
	.done(function(result) {
		if ($.isEmptyObject(result.errors)) {
			for (var i = 0; i < result.length; i++) {
				$("#attachments_table").append('<tr> <td><img src="/edpo/extensions/'+result[i].type+'.png" class="img-fluid"></td><td class="td">'+result[i].original_name+'</td><td class="td">'+result[i].size+'KB</td><td><a download="'+result[i].original_name+'" href="'+result[i].path+'"><button style="top: 15px;" type="button" class="btn btn-primary">Download</button></a></td></tr>');
			}
			$("#attachments_modal").modal("show");
		}
		else{
			printErrorMsg(result.errors);
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function create_comment(post_id) {
	var comment = $("#comment_"+post_id).val();
	if (comment == "") {
		showSingleError("Please write a comment.");
	}
	else{
		var call = getFlag()+"/class/post/create_comment";

		$.ajax({
			url: call,
			type: 'POST',
			headers: {
	            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
	        },
			data: {'post_id' : post_id , 'comment' : comment},
		})
		.done(function(result) {
			if ($.isEmptyObject(result.errors)) {
				comment_item = '<li class="comment-item"> <div class="post__author author vcard inline-items"> <img src="'+result[0]+'" alt="author"> <div class="author-date"> <a class="h6 post__author-name fn" href="#">'+result[1]+'</a> <div class="post__date"> <time class="published" datetime="2004-07-24T18:18"> '+result[2]+' </time> </div></div></div><p>'+result[3]+'</p></li>';
				$("#comment_box_"+post_id).append(comment_item);
				$("#comment_"+post_id).val("");
				$("#comment_counter_"+post_id).html(parseInt($("#comment_counter_"+post_id).html()) + 1);
				showSuccessMessageNoty("Comment created, Successfully");
			}
			else{
				printErrorMsg(result.errors);
			}
		})
		.fail(function() {
			console.log("error");
		});
	}
}

function toggleComments(post_id) {
	$(".comment_box_"+post_id).slideToggle("slow");
}

$(".message_box").animate({ scrollTop: $('.message_box').prop("scrollHeight")}, 1000);

$("#seach_input").keyup(function(event) {
	var query = $("#seach_input").val();
	var call = getFlag()+"/search";
	if (query.length > 2) {
		$.ajax({
			url: call,
			type: 'POST',
			headers: {
	            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
	        },
			data: {'query' : query},
		})
		.done(function(results) {
			if (results.length > 0) {
				$("#search_area").html("");
			    $("#search_area").hide();
				for (var i = 0; i < results.length; i++) {
					var html_string = '<a href="/teacher/classes/'+results[i].code+'"><div class="inline-items" style="padding: 4%;"> <div class="author-thumb"><img src="'+results[i].avatar+'" alt="avatar"></div><div class="notification-event"><span class="h6 notification-friend">'+results[i].name+'</span></div></div></a>';
					$("#search_area").append(html_string);
				}
			}
			else{
				var html_string = '<a href="#"><div class="inline-items" style="padding: 4%;"> <div class="notification-event"><span class="h6 notification-friend">Whoops! no class found.</span></div></div></a>';
				$("#search_area").html(html_string);
			}
			$("#search_area").show();
		})
		.fail(function() {
			console.log("error");
		});
	}
	else{
		$("#search_area").html("");
		$("#search_area").hide();
	}
});
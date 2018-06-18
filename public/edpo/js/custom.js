$(document).ready(function($) {
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
			console.log("error");
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
});

function showSuccessMessage(e) {
    swal({
	  title: "Success!",
	  text: e,
	  icon: "success",
	  button: 'Great!',
	});
}

function showFirstMessage(e) {
    new Noty({
	    text: e,
	    type: 'alert',
	    theme: 'sunset',
	    progressBar: 'true',
	    layout: 'bottomLeft',
	    timeout: 10000,
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
		    timeout: 10000,
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
	    timeout: 10000,
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




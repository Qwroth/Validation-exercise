$(function() {

	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	$("#email_error_message").hide();
	$("#dob_error_message").hide(); 

	var error_username = false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;

	var error_dob = false; 

	$("#form_username").focusout(function() {

		check_username();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
	});

	$("#form_email").focusout(function() {

		check_email();
		
	});

	$("#form_dob ").focusout(function() {

		check_dob();
		
	});


	

	function check_username() {
	
		var username_length = $("#form_username").val().length;
		
		if(username_length < 5 || username_length > 100) {
			$("#username_error_message").html("Should be between 5-50 characters");
			$("#username_error_message").show();
			$("#form_username").css("border-color", "red"); 
			error_username = true;
		} else {
			$("#username_error_message").hide();
			$("#form_username").css("border-color", ""); 
		}
	
	}

	function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 8) {
			$("#password_error_message").html("At least 8 characters");
			$("#password_error_message").show();
			$("#form_password").css("border-color", "red"); 
			error_password = true;
		} else {
			$("#password_error_message").hide();
			$("#form_password").css("border-color", ""); 
		}
	
	}

	function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		
		if(password !=  retype_password) {
			$("#retype_password_error_message").html("Passwords don't match");
			$("#retype_password_error_message").show();
			$("#form_retype_password").css("border-color", "red"); 
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
			$("#form_retype_password").css("border-color", ""); 
		}
	
	}

	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
			$("#form_email").css("border-color", ""); 
		} else {
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			$("#form_email").css("border-color", "red"); 
			error_email = true;
		}
	
	}

	function check_dob() {

		var dob = $("#form_dob").val();
       


        

 

       
        re = /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/;

        if (!dob.match(re))
        {
            $("#form_dob").css("border-color", "red");
            $("#dob_error_message").html("Invalid data format"); 
            $("#dob_error_message").show(); 
            error_dob = true;
        }
        else
        {
            $("#form_dob").css("border-color", "");
            $("#dob_error_message").hide(); 
            error_dob = false; 
        }

	}



	$("#clear_button")
	.click(function() {
		
		var r = confirm("Are you sure?");

		if (r==true)
		{
			$("#form_username").val(""); 
			$("#form_email").val("");
			$("#form_dob").val("");
			$("#form_password").val(""); 
			$("#form_retype_password").val("");
			$("#form_dob").val(""); 


			$("#username_error_message").hide();
			$("#password_error_message").hide();
			$("#retype_password_error_message").hide();
			$("#email_error_message").hide();
			$("#dob_error_message").hide();

			$("#form_username").css("border-color", "");
			$("#form_email").css("border-color", "");
			$("#form_password").css("border-color", "");
			$("#form_retype_password").css("border-color", "");
			$("#form_dob").css("border-color", ""); 


		}



	});

	$("#form").submit(function() {
											
		error_username = false;
		error_password = false;
		error_retype_password = false;
		error_email = false;
											
		check_username();
		check_password();
		check_retype_password();
		check_email();
		check_dob(); 

		var r = confirm("Is this information correct?"); 

	if (r==true)
	{
	
		if(error_username == false && error_password == false && error_retype_password == false && error_email == false && error_dob ==false) {
			return true;
		} else {
			return false;	
		}
	}
	else
	{
		return false; 
	}

	});

});
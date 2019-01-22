// JavaScript Document
//error messages for form validations

	var errorMessage = {
		required : "This field is required.",
		remote : "Please fix this field.",
		email : "Please enter a valid email address.",
		url : "Please enter a valid URL.",
		date : "Please enter a valid date.",
		dateISO : "Please enter a valid date (ISO).",
		number : "Please enter a valid number.",
		digits : "Please enter only digits.",
		creditcard : "Please enter a valid credit card number.",
		equalTo : "Please enter the same value again.",
		accept : "Please enter a value with a valid extension.",
		exactlength : $.validator.format("Please enter exactly {0} characters."),
		maxlength : $.validator.format("Please enter no more than {0} characters."),
		minlength : $.validator.format("Please enter at least {0} characters."),
		rangelength : $.validator.format("Please enter a value between {0} and {1} characters long."),
		range : $.validator.format("Please enter a value between {0} and {1}."),
		max : $.validator.format("Please enter a value less than or equal to {0}."),
		min : $.validator.format("Please enter a value greater than or equal to {0}."),
		checkPasswords : "Two Passwords not matched. Please check",
		checkFnamePsw:"Firstname and Password cannot be same",
		checkUnamePsw:"Username and Password Cannot be same",
		terms_conditions :"You should read and agree to our terms and conditions",
		user_minlength : "username lenght must be more than 8 ",
		psw_minlength : "password lenght must be more than 8",
		invalid_phone : "Please specify a valid phone/mobile number",
		alpha : "Enter only alphabets",
		validZipCode: "Enter a valid Zip Code",
		usernameExist : "This Username already exists.",
		duplicateEmail : "This Email already exists.",
		textAtLeastOne : "Please Select at least one",
		validURL : "Please Enter a Valid URL"
	}
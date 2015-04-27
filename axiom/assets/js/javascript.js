	// JavaScript Document Bobby Wilson

	

	function initialize() {
	   	var myLatlng = new google.maps.LatLng(39.802891, -86.152788);
	   	var mapOptions = {
	   		scrollwheel: false,
	    	zoom: 16,
	    	center: myLatlng
	   	}
	   	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	   	
	   	var marker = new google.maps.Marker({
	   		position: myLatlng,
	   		map: map,
	   		title: 'Axiom Property Management LLC'
	   	});	
	   	
	 }
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
		
		
	$('#collapse1').collapse("hide");
		
	
	function validateForm()		{
	
	var requiredFields = ["first_name", "last_name", "email", "area_code", "phone_prefix", "phone_suffix", "street", "city", "state", "zip_code", "comment"];
	
	
	var errorFields = [];
	var errorMessages = [];
	
	for (i = 0; i < requiredFields.length; i++)	{
		var formFieldValue = document.forms["contact_form"][requiredFields[i]].value;
		if (checkEmpty(formFieldValue))		{
			
			errorFields.push(requiredFields[i]);

		}
	}

	var first_name = document.forms["contact_form"]["first_name"].value;
	
	if (first_name < 3)	{
	
		errorFields.push("first_name");
		errorMessages.push("<span>&bull; </span> First Name field is required.");
		
	}
	
	if (/[0-9]/.test(first_name)) {
	
		errorFields.push("first_name");
		errorMessages.push("<span>&bull; </span> First name must only contain letters.");
			
	}
	
	
	last_name = document.forms["contact_form"]["last_name"].value;
	
	if (last_name < 3)	{
	
		errorFields.push("last_name");
		errorMessages.push("<span>&bull; </span> Last Name field is required.");
		
	}
	
	if (/[0-9]/.test(last_name)) {
	
		errorFields.push("last_name");
		errorMessages.push("<span>&bull; </span> Last Name must only contain letters.");
			
	}
	
	
	var email = document.forms["contact_form"]["email"].value;
	
	if (!/.+?@.+?\..+/.test(email))	{
	
		errorFields.push("email");
		errorMessages.push("<span>&bull; </span> Email is required and must be in this format: john.smith@example.com .");
		
	}
	
	
	var area_code = document.forms["contact_form"]["area_code"].value.length;
	var phone_prefix = document.forms["contact_form"]["phone_prefix"].value.length;
	var phone_suffix = document.forms["contact_form"]["phone_suffix"].value.length;
	var area_code = document.forms["contact_form"]["area_code"].value;
	var phone_prefix = document.forms["contact_form"]["phone_prefix"].value;
	var phone_suffix = document.forms["contact_form"]["phone_suffix"].value;
	
	if (area_code < 3 || phone_prefix < 3 || phone_suffix < 4)	{
	
		errorFields.push("area_code", "phone_prefix", "phone_suffix");
		errorMessages.push("<span>&bull; </span> Phone number is required and must be in this format: 555-555-1234 .");
		
	}
	
	if (/[A-z]/.test(area_code) || /[A-z]/.test(phone_prefix) || /[A-z]/.test(phone_suffix))	{
	
		errorFields.push("area_code", "phone_prefix", "phone_suffix");
		errorMessages.push("<span>&bull; </span> Phone number must only contain numbers.");

	}
	
	
	var state = document.forms["contact_form"]["state"].value;
	
	if (state == "Choose a State")	{
	
		errorFields.push("state");
		errorMessages.push("<span>&bull; </span> State field is required.");
		
	}
	
	
	var zip_code = document.forms["contact_form"]["zip_code"].value.length;
	var zip_code = document.forms["contact_form"]["zip_code"].value;
	
	if (/[A-z]/.test(zip_code))	{
	
		errorFields.push("zip_code");
		errorMessages.push("<span>&bull; </span> Zip Code must only contain numbers.");
		
	}
	
	
	
	if (zip_code < 5)	{
	
		errorFields.push("zip_code");
		errorMessages.push("<span>&bull; </span> Zip Code must be a total of 5 numbers.");
		
	}
	
	var comment = document.forms["contact_form"]["comment"].value.length;
	
	if (comment < 50)	{
	
		errorFields.push("comment");
		errorMessages.push("<span>&bull; </span> Comment is required and must be minimum 50 letters.");
		
	}
	
	

		if (errorFields.length > 0)		{
		
		for (i = 0; i < errorFields.length; i++)	{
			
			var errorElement = document.getElementById(errorFields[i]);
			
			errorElement.className += " hasError";
	
		}
		
		var allErrorMessages = "";
		
		for (i = 0; i < errorMessages.length; i++)	{
		
			allErrorMessages += errorMessages[i] + "</br>";
		}
	
		document.getElementById("client-errors-box").innerHTML = allErrorMessages;
		
		document.getElementById("client-errors-box").style.display = "inherit";
	
		return false; 
		
	}	else	{
	
		return true; 
	}
	
	
	
	}
		
	function checkEmpty(fieldValue)		{

		if (fieldValue == null || fieldValue == "" || fieldValue == "Choose a State")	{
		
		return true;
		
	} else	{
	
		return false;
	}

	}	



	function upper(contact_form) {
		
    	first_name.value = first_name.value.substr(0,1).toUpperCase() + first_name.value.substr(1);
    	last_name.value = last_name.value.substr(0,1).toUpperCase() + last_name.value.substr(1);
		
		return false;
	
	
	
	}
	
	
	
		
		
		
	function firstNameError()		{
	
	
		document.getElementById("first_name").className = "form-control";

	}


	function lastNameError()		{
	
	
		document.getElementById("last_name").className = "form-control";
	}

	function emailError()		{
	
	
		document.getElementById("email").className = "form-control";
	}

	function phoneError()		{
	
	
		document.getElementById("area_code").className = "form-control";
		document.getElementById("phone_prefix").className = "form-control";
		document.getElementById("phone_suffix").className = "form-control";
	}



	function streetError()		{
	
	
		document.getElementById("street").className = "form-control";
	}
	

	function cityError()		{
	
	
		document.getElementById("city").className = "form-control";
	}


	function stateError()		{
	
		if (state !== "Choose a State")	{
		
			document.getElementById("state").className = "form-control";
		}
	}


	function zipCodeError()		{
	
	
		document.getElementById("zip_code").className = "form-control";
	}


	function commentError()		{
	
	
		document.getElementById("comment").className = "form-control";
	}














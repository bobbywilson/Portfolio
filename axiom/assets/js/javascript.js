	// JavaScript Document Bobby Wilson

	function noBack() {
		window.history.forward();
		location.location.reload(true);
		window.location = 'index.php';
	}

	function TimeoutRedirect() {

		window.location = 'index.php';
		window.load();
	}

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
	
	var requiredFields = ["first_name", "last_name", "email", "comment"];
	
	
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
		
		
	}
	
	if (/[0-9]/.test(first_name)) {
	
		errorFields.push("first_name");
		
			
	}
	
	
	last_name = document.forms["contact_form"]["last_name"].value;
	
	if (last_name < 3)	{
	
		errorFields.push("last_name");
		
		
	}
	
	if (/[0-9]/.test(last_name)) {
	
		errorFields.push("last_name");
		
			
	}
	
	
	var email = document.forms["contact_form"]["email"].value;
	
	if (!/.+?@.+?\..+/.test(email))	{
	
		errorFields.push("email");
		
		
	}
	
	
	
	var comment = document.forms["contact_form"]["comment"].value.length;
	
	if (comment < 50)	{
	
		errorFields.push("comment");
		
		
	}
	
	

	if (errorFields.length > 0)		{
		
		for (i = 0; i < errorFields.length; i++)	{
			
			var errorElement = document.getElementById(errorFields[i]);
			
			errorElement.className += " hasError";
	
		}
		
		var allErrorMessages = " ";
		
		for (i = 0; i < errorMessages.length; i++)	{
		
			allErrorMessages += errorMessages[i] + "</br>";
		}
	
	
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


	function commentError()		{
	
	
		document.getElementById("comment").className = "form-control";
	}











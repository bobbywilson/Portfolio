

<?php

include("../config.php");

$page = "Contact Us";

$js = URL_ROOT . "assets/js/javascript.js";
	
$contact_status = 'class="active"';
$home_icon = 'id="home-icon"';



if(isset($_POST["submit"])) {


	include("../classes/validation.class.php");
	
	$validation = new Validation();
	
	$first_name = $validation -> clean_txt($_POST["first_name"], "T");
	$last_name = $validation -> clean_txt($_POST["last_name"], "T");
	$email = $validation -> clean_email($_POST["email"]);
	$area_code = $validation -> clean_int($_POST["area_code"]);
	$phone_prefix = $validation -> clean_int($_POST["phone_prefix"]);
	$phone_suffix = $validation -> clean_int($_POST["phone_suffix"]);
	$street = $validation -> clean_txt($_POST["street"]);
	$city = $validation -> clean_txt($_POST["city"], "T");
	$state = $validation -> clean_txt($_POST["state"]);
	$zip_code = $validation -> clean_int($_POST["zip_code"]);
	$comment = $validation -> clean_txt($_POST["comment"]);


	$validations = array();
	
	$validations[] = $validation -> required($first_name, 3, "First Name");
	$validations[] = $validation -> required($last_name, 3, "Last Name");
	$validations[] = $validation -> valid_email($email, "Email");
	$validations[] = $validation -> valid_int($area_code, 3, "Area Code");
	$validations[] = $validation -> valid_int($phone_prefix, 3, "Phone Prefix");
	$validations[] = $validation -> valid_int($phone_suffix, 4, "Phone Suffix");
	$validations[] = $validation -> required($street, 3, "Street");
	$validations[] = $validation -> required($city, 3, "City");
	$validations[] = $validation -> required($state, 3, "State");
	$validations[] = $validation -> valid_int($zip_code, 5, "Zip Code");
	$validations[] = $validation -> required($comment, 50, "Comment");
	
	
	$errors = array();
	
		foreach($validations as $rule) {
		
			if($rule != "") {
			
				$errors[] = $rule;
			
			}
		
	}
	
	
		
	$phone = $area_code . "-" . $phone_prefix . "-" . $phone_suffix;
	$to = "email.bobby.wilson@gmail.com";
	$subject = "Axiom Website Comment";
	$message = "Hello, </br></br> $comment </br></br></br> Sincere, Salutations, </br> $first_name $last_name </br> $phone </br> $email";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: email.bobby.wilson@gmail.com";
	
	
	$encrypt_first_name = sha1($first_name);
	$encrypt_last_name = sha1($last_name);
	$encrypt_email = sha1($email);
	$encrypt_phone = sha1( $phone);
	$encrypt_street = sha1($street);
	$encrypt_city = sha1($city);
	$encrypt_state = sha1($state);
	$encrypt_zip_code = sha1($zip_code);
	$encrypt_comment = sha1($comment);
	
	$encrypt_to = sha1($to);
	$encrypt_subject = sha1($subject);
	$encrypt_message = sha1($message);
	$encrypt_headers = sha1($headers);
	
	if(isset($errors) && count($errors) == 0) {

	require("../classes/contact.class.php");
	
	$contact = new Contact();
	
	$contact->add_comment($first_name, $last_name, $email, $phone, $street, $city, $state, $zip_code, $comment);

	unset($contact);
	
	mail($to,$subject,nl2br($message),$headers);
	
	}

		
	
	} else {
	
		$first_name = "";
		$last_name = "";
		$email = "";
		$area_code = "";
		$phone_prefix = "";
		$phone_suffix = "";
		$street = "";
		$city = "";
		$state = "";
		$zip_code = "";
		$comment = "";
	
	}
	
	include("../includes/header.php");

	
	

	
	if(!isset($errors) || count($errors) != 0) {
	
	
		include("../includes/contact_us_form.php");
		
		
	} else {
	
	
	include("../includes/submission_display.php");

	}	
	
	echo "\t" . "\t" . '</div>';
	echo "\t" . '</div>';
	echo '</div>';

	
	include("../includes/footer.php");
	
	
		
		
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
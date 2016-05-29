<?php

include("../config.php");

$page = "Contact";

$js = URL_ROOT . "assets/js/javascript.js";
	
$contact_status = 'class="active"';
$home_icon = 'id="home-icon"';


if(isset($_POST["submit"])) {


	include("../classes/validation.class.php");
	
	$validation = new validation();
	
	$first_name = $validation -> clean_txt($_POST["first_name"], "T");
	$last_name = $validation -> clean_txt($_POST["last_name"], "T");
	$email = $validation -> clean_email($_POST["email"]);
	$comment = $validation -> clean_txt($_POST["comment"]);


	$validations = array();
	
	$validations[] = $validation -> required($first_name, 3, "First Name");
	$validations[] = $validation -> required($last_name, 3, "Last Name");
	$validations[] = $validation -> valid_email($email, "Email");
	$validations[] = $validation -> required($comment, 50, "Comment");
	
	
	$errors = array();
	
		foreach($validations as $rule) {
		
			if($rule != "") {
			
				$errors[] = $rule;
			
			}
		
	}

	
	$to = "php.developer@bobbywwilson.com";
	$subject = "Bobby Wilson PHP Developer";
	$message = "Hello, </br></br> $comment </br></br></br> Sincere, Salutations, </br> $first_name $last_name </br> $email";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: $email";
	

	$encrypt_first_name = sha1($first_name);
	$encrypt_last_name = sha1($last_name);
	$encrypt_email = sha1($email);
	$encrypt_comment = sha1($comment);
	
	$encrypt_to = sha1($to);
	$encrypt_subject = sha1($subject);
	$encrypt_message = sha1($message);
	$encrypt_headers = sha1($headers);
	
	if(isset($errors) && count($errors) == 0) {

	require("../classes/contact.class.php");
	
	$contact = new contact();
	
	$contact->add_comment($first_name, $last_name, $email, $comment);

	unset($contact);
	
	mail($to,$subject,nl2br($message),$headers);
	
	}

		
	
	} else {
	
		$first_name = "";
		$last_name = "";
		$email = "";
		$comment = "";
	
	}
	
	include("../includes/header.php");


	if(!isset($errors) || count($errors) != 0) {
	
	
		include("../includes/contact.form.php");
		
		
	} else {
	
	
	include("../includes/contact.confirmation.php");

	}	
	
	include("../includes/footer.php");
	
	
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
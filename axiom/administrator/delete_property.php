<?php

	session_start();
	
	if ((isset($_SESSION['views']) && $_SESSION['views'] == "loggedout" || $_SESSION['views'] == "")) {
	
	header('Location: ../includes/login_error_display.php');
	
	}
	
	include("../config.php");
	
	$page = "Axiom Property Management Administration";

	$properties_status = 'class="active"';

	include("../includes/header.php");
	
	$property_id = $_POST["property_id"];
	
	
	if(isset($_POST["submit"])) {
	
		include("../classes/property.class.php");

		$property = new Property();
			
		$property->delete_property($property_id);
		
		$property_name = $item->property_name;

		unset($property);
	
	
		$to = "email.bobby.wilson@gmail.com";
		$subject = "Axiom Website Comment";
		$message = "Hello, </br></br> The Axiom Property Management Available Properties page has been updated. If this update should not have taken place, please log in and review your content. </br></br></br> Sincere, Salutations, </br> Axiom Property Management LLC";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: email.bobby.wilson@gmail.com";
		
		
		$encrypt_property_name = sha1($property_name);
		$encrypt_street = sha1($street);
		$encrypt_city = sha1($city);
		$encrypt_state = sha1($state);
		$encrypt_zip_code = sha1($zip_code);
		$encrypt_beds = sha1($beds);
		$encrypt_baths = sha1($baths);
		$encrypt_square_feet = sha1($square_feet);
		$encrypt_rent = sha1($rent);
		$encrypt_fee = sha1($fee);
		$encrypt_deposit = sha1($deposit);
		$encrypt_property_description = sha1($property_description);
		$encrypt_amenities = sha1($amenities);
		$encrypt_promotions = sha1($promotions);
		$encrypt_availability = sha1($availability);
		$encrypt_apply = sha1($apply);
		
		
		$encrypt_to = sha1($to);
		$encrypt_subject = sha1($subject);
		$encrypt_message = sha1($message);
		$encrypt_headers = sha1($headers);
		
			
		mail($to,$subject,nl2br($message),$headers);
		
		include("../includes/update_display.php");
			
	} else {
		include("../includes/delete_property_list.php");
	}
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';	

		include("../includes/footer.php");

?>

			
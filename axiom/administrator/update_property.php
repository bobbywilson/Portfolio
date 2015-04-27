
<?php

session_start();

include("../config.php");

$page = "Axiom Property Management Administration";

$js = URL_ROOT . "assets/js/javascript.js";
	
$admin_status = 'class="active"';
$home_icon = 'id="home-icon"';




if(isset($_POST["submit"])) {

	include("../classes/validation.class.php");

	$validation = new Validation();

	
	$property_name = $validation -> clean_txt($_POST["property_name"], "T");
	$street = $validation -> clean_txt($_POST["street"]);
	$city = $validation -> clean_txt($_POST["city"], "T");
	$state = $validation -> clean_txt($_POST["state"]);
	$zip_code = $validation -> clean_int($_POST["zip_code"]);
	$beds = $validation -> clean_int($_POST["beds"]);
	$baths = $validation -> clean_txt($_POST["baths"]);
	$square_feet = $validation -> clean_int($_POST["square_feet"]);
	$rent = $validation -> clean_int($_POST["rent"]);
	$fee = $validation -> clean_int($_POST["fee"]);
	$deposit = $validation -> clean_int($_POST["deposit"]);
	$property_description = $validation -> clean_txt($_POST["property_description"]);
	$amenities = $validation -> clean_txt($_POST["amenities"]);
	$promotions = $validation -> clean_txt($_POST["promotions"]);
	$availability = $validation -> clean_txt($_POST["availability"]);
	$apply = $validation -> clean_txt($_POST["apply"]);

	
	
	
	

	$validations = array();
	
	$validations[] = $validation -> required($street, 3, "Street");
	$validations[] = $validation -> required($city, 3, "City");
	$validations[] = $validation -> required($state, 3, "State");
	$validations[] = $validation -> valid_int($zip_code, 5, "Zip Code");
	$validations[] = $validation -> valid_int($beds, 1, "Bedrooms");
	$validations[] = $validation -> required($baths, 1, "Bathrooms");
	$validations[] = $validation -> valid_int($square_feet, 3, "Square Feet");
	$validations[] = $validation -> valid_int($rent, 1, "Rent");
	$validations[] = $validation -> valid_int($fee, 1, "Application Fee");
	$validations[] = $validation -> valid_int($deposit, 1, "Security Deposit");
	$validations[] = $validation -> required($apply, 50, "Appfolio Application Link");

	
	
	
	
	
	
	$errors = array();
	
		foreach($validations as $rule) {
		
			if($rule != "") {
			
				$errors[] = $rule;
			
			}
		
		}
	
	

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
	
	
	
	
	if(isset($errors) && count($errors) == 0) {

	require("../classes/property.class.php");
	
	$property = new Property();
	
	$image_1 = "assets/images/address/" . basename( $_FILES["image_1"]["name"]);
	$image_2 = "assets/images/address/" . basename( $_FILES["image_2"]["name"]);
	$image_3 = "assets/images/address/" . basename( $_FILES["image_3"]["name"]);
	$image_4 = "assets/images/address/" . basename( $_FILES["image_4"]["name"]);
	$image_5 = "assets/images/address/" . basename( $_FILES["image_5"]["name"]);
	$image_6 = "assets/images/address/" . basename( $_FILES["image_6"]["name"]);
	$image_7 = "assets/images/address/" . basename( $_FILES["image_7"]["name"]);
	$image_8 = "assets/images/address/" . basename( $_FILES["image_8"]["name"]);
	//$image_9 = "assets/images/address/" . basename( $_FILES["image_9"]["name"]);
	//$image_10 = "assets/images/address/" . basename( $_FILES["image_10"]["name"]);
	
	
	
	$property->add_property($street, $city, $state, $zip_code, $beds, $baths, $square_feet, $rent, $fee, $deposit, $property_description, $property_name, $amenities, $promotions, $availability, $apply, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6, $image_7, $image_8);

	unset($property);
	
	mail($to,$subject,nl2br($message),$headers);
	
	$target_dir = "../assets/images/address/";
	$target_file_1 = $target_dir . basename($_FILES["image_1"]["name"]);
	$target_file_2 = $target_dir . basename($_FILES["image_2"]["name"]);
	$target_file_3 = $target_dir . basename($_FILES["image_3"]["name"]);
	$target_file_4 = $target_dir . basename($_FILES["image_4"]["name"]);
	$target_file_5 = $target_dir . basename($_FILES["image_5"]["name"]);
	$target_file_6 = $target_dir . basename($_FILES["image_6"]["name"]);
	$target_file_7 = $target_dir . basename($_FILES["image_7"]["name"]);
	$target_file_8 = $target_dir . basename($_FILES["image_8"]["name"]);
	//$target_file_9 = $target_dir . basename($_FILES["image_9"]["name"]);
	//$target_file_10 = $target_dir . basename($_FILES["image_10"]["name"]);
	
	

	move_uploaded_file($_FILES["image_1"]["tmp_name"], $target_file_1);
	move_uploaded_file($_FILES["image_2"]["tmp_name"], $target_file_2);
	move_uploaded_file($_FILES["image_3"]["tmp_name"], $target_file_3);
	move_uploaded_file($_FILES["image_4"]["tmp_name"], $target_file_4);
	move_uploaded_file($_FILES["image_5"]["tmp_name"], $target_file_5);
	move_uploaded_file($_FILES["image_6"]["tmp_name"], $target_file_6);
	move_uploaded_file($_FILES["image_7"]["tmp_name"], $target_file_7);
	move_uploaded_file($_FILES["image_8"]["tmp_name"], $target_file_8);
	//move_uploaded_file($_FILES["image_9"]["tmp_name"], $target_file_9);
	//move_uploaded_file($_FILES["image_10"]["tmp_name"], $target_file_10);
	
	}	
	
	} else {
	
		$property_name = "";
		$street = "";
		$city = "";
		$state = "";
		$zip_code = "";
		$beds = "";
		$baths = "";
		$square_feet = "";
		$rent = "";
		$fee = "";
		$deposit = "";
		$property_description = "";
		$amenities = "";
		$promotions = "";
		$availability = "";
		$apply = "";
		
	
	}
	
	include("../includes/header.php");


	if(!isset($errors) || count($errors) != 0) {
	
		
		include("../includes/update_property_form.php");
		
		
	} else {
	
	
	include("../includes/update_display.php");

	}	
	
	echo "\t" . "\t" . '</div>';
	echo "\t" . '</div>';
	echo '</div>';

	
	include("../includes/footer.php");
	
		
		
?>
 

 
 
 
 
 
 
 
 
 
 
 
 


<?php

session_start();


include("../config.php");

$page = "Axiom Property Management Administration Login";

$js = URL_ROOT . "assets/js/javascript.js";
	
$admin_login_status = 'class="active"';
$home_icon = 'id="home-icon"';



if(isset($_POST["submit"])) {



	include("../classes/validation.class.php");
	
	$validation = new Validation();
	
	
	$username = $validation -> clean_txt($_POST["username"]);
	$password = $validation -> clean_txt($_POST["password"]);
	
	
	

	$validations = array();
	
	$validations[] = $validation -> valid_user($username, $password, 8, "Username", "Password");

	
	
	$errors = array();
	
		foreach($validations as $rule) {
		
			if($rule != "") {
			
				$errors[] = $rule;
			
			}
		
	}
	
	
	if(isset($errors) && count($errors) == 0) {
	
	}

		
	
	} else {
	
		$username = "";
		$password = "";
	
	}
	
	include("../includes/header.php");

	
	if(!isset($errors) || count($errors) != 0) {
	
	
		include("../includes/admin_login_form.php");
		
		
	} else {
	
		include("../includes/admin_menu.php");
		
	
	}	
	
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';

	
		include("../includes/footer.php");


		
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
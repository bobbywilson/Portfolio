
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
	
	$first_name = $validation -> clean_txt($_POST["first_name"], "T");
	$last_name = $validation -> clean_txt($_POST["last_name"], "T");
	$email = $validation -> clean_email($_POST["email"]);
	$username = $validation -> clean_txt($_POST["username"]);
	$password1 = $validation -> clean_txt($_POST["password1"]);
	$password2 = $validation -> clean_txt($_POST["password2"]);



	$validations = array();
	
	$validations[] = $validation -> required($first_name, 3, "First Name");
	$validations[] = $validation -> required($last_name, 3, "Last Name");
	$validations[] = $validation -> valid_email($email, "Email Address");
	$validations[] = $validation -> required($username, 3, "Username");
	$validations[] = $validation -> valid_match($password1, $password2, 5, "Password");
	
	
	
	$errors = array();
	
		foreach($validations as $rule) {
		
			if($rule != "") {
			
				$errors[] = $rule;
			
			}
		
		}
		
	$encryption = sha1($password1);
	
	
		
	if(isset($errors) && count($errors) == 0) {

	include("../classes/register.class.php");
	
	$admin = new Admin();
	
	$admin->register($first_name, $last_name, $email, $username, $encryption);

	unset($admin);
	
	}
		
	
	} else {
	
		$first_name = "";
		$last_name = "";
		$email = "";
		$username = "";
		$password1 = "";
		$password2 = "";
		
	
	}
	
	include("../includes/header.php");
	
	
	if(!isset($errors) || count($errors) != 0) {
	
		include("../includes/registration_form.php");
		
		
	} else {
	
	
		
	include("../includes/registration_display.php");
		
		
	}	
	
	echo "\t" . "\t" . '</div>';
	echo "\t" . '</div>';
	echo '</div>';

	
	include("../includes/footer.php");
		
		
?>
 
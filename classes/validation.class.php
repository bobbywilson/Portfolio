<?php


require_once("database.class.php");


class validation {

	/* constructor */
		
		public function __construct() {
		
			$db = new database();
			$this->conn = $db->conn;
		
		}
	
	/* destructor */
	
		public function __destruct() {
		
			$this->conn = null;
		
		}
		
	/* get function */
		
		public function __get($name) {
		
			return $this->$name;
		
		}
		
	/* set function */
		
		public function __set($name, $value) {
			
			$this->$name=$value;
		
		}

	public function clean_txt($text, $case = "") {
	
		$text = trim($text);
		
		$text = filter_var($text, FILTER_SANITIZE_STRING);
		
		switch($case) {

			case "L":
				$text = strtolower($text);
				break;
				
			case "U":
				$text = strtoupper($text);
				break;
				
			case "T":
				$text = ucwords($text);
				break;
				
		}
		
		return $text;
		
	}
		
	public function clean_email($email) {
	
		$email = $this -> clean_txt($email, "L");
		
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		return $email;
	
	}
	
	public function clean_int($int) {
	
		$int = trim($int);
		
		$int = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
		
		return $int;
	
	} // End Sanitization
	

	// Begin Form Validation
	
	public function required($var, $min_length = 3, $field_name) {
	
		if(strlen($var) < $min_length || $var == "Choose a State") {
		
			return $field_name . " is required.";
		
		}
		
	}
	
	public function checked($var, $field_name) {
	
		if($var = "checked") {
		
			return "Select a property to delete. " . $var;
		
		} else {
		
			return false;
		
		}
		
	}
	
	public function valid_email($email, $field_name) {
	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
			return $field_name . " is required.";
		
		}
		
	}
	
	
	public function valid_int($int, $min_length = 3, $field_name) {
	
		$required = $this -> required($int, $min_length, $field_name);
		
		if($required == "") {
		
			if(!filter_var($int, FILTER_VALIDATE_INT)) {
		
				return $field_name . " must only contain numbers.";
			
				} 
				
			} else {
			
				return $required;
		}
		
	}
	
	public function valid_match($var1, $var2, $min_length = 5, $field_name) {
	
		if(strlen($var1) < $min_length || strlen($var2) < $min_length) {
		
			return $field_name . "s are required.";
		
			} else if(strcmp($var1, $var2) !== 0) {
		
			return $field_name . "s do not match.";
		
			}
		
	}
	
	public function valid_user($var1, $var2, $min_length = 8, $field_name1, $field_name2) {
	
		$sql = "SELECT * FROM administration WHERE username = '$var1'";
				
		$result = $this->conn->query($sql);
		
		$item = $result->fetch(PDO::FETCH_OBJ);
		
		$encrypt = sha1($var2);
		
		$user = $item->first_name;
		
	
		if(strlen($var1) < $min_length || strlen($var2) < $min_length) {
		
			return $field_name1 . " is required. " . " &bull; " . $field_name2 . " is required. ";
		
		} else if ($var1 != $item->username)	{
			
			return $field_name1 . " " . $var1 . " " . "does not exist.";
		
		} else if ($encrypt != $item->password)	{
		
			return "The " . strtolower($field_name2) . " you entered is incorrect.";
		
		} else if ($encrypt = $item->password) {

			$_SESSION['views'] = $user;

		} else {

			$_SESSION['views'] = "";

		}
							
	}
	
} // End of Class

?>















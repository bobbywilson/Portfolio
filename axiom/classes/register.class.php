<?php


	require_once("database.class.php");
	
	class Admin {
	
		public $conn="";
		
		
	/* constructor */
		
		public function __construct() {
		
			$db = new Database();
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
		
		
		public function register($first_name, $last_name, $email, $username, $password1) {
		
			try {
					
					$sql = "INSERT administration(first_name, last_name, email, username, password, created_at, updated_at) VALUES(:first_name, :last_name, :email, :username, :password, CURRENT_DATE(), CURRENT_DATE())";
				
					$s = $this->conn->prepare($sql);
					$s -> bindValue(':first_name', $first_name);
					$s -> bindValue(':last_name', $last_name);
					$s -> bindValue(':email', $email);
					$s -> bindValue(':username', $username);
					$s -> bindValue(':password', $password1);
					
					$s -> execute();
					
						
					
				}
				
				// Catch Errors
				
				catch (PDOException $error) {
					
					echo "Unable to add user: " . $error;
						
					exit();
						
				}
				
				
			}
			
			
		// End insert methods
		
		
	
			
	}


?>





















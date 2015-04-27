

<?php


	require_once("database.class.php");
	
	
	class Comments {
	
	
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
		
		
		public function get_comment_blog() {
		
			// Connect to Database
		
			try {
				
				$sql = "SELECT contact_id, first_name, last_name, email, phone, street, city, state, zip_code, comment, created_at FROM contact ORDER BY contact_id ASC";
				
				$result = $this->conn->query($sql);
				
				return $result;	
				
			}
			
			// Catch Errors
			
			catch (PDOException $error) {
				
				echo "Unable to retrieve record(s): " . $error->getMessage();
					
				exit();
					
			}
				
			
		} 
		
			
	}


?>





















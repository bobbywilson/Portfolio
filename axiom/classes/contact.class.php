

<?php


	require_once("database.class.php");
	
	class Contact {
	
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
		
		
		
		public function add_comment($first_name, $last_name, $email, $phone, $street, $city, $state, $zip_code, $comment) {
		
			try {
					
					$sql = "INSERT contact(first_name, last_name, email, phone, street, city, state, zip_code, comment, created_at) VALUES(:first_name, :last_name, :email, :phone, :street, :city, :state, :zip_code, :comment, CURRENT_DATE())";
				
					$s = $this->conn->prepare($sql);
					$s -> bindValue(':first_name', $first_name);
					$s -> bindValue(':last_name', $last_name);
					$s -> bindValue(':email', $email);
					$s -> bindValue(':phone', $phone);
					$s -> bindValue(':street', $street);
					$s -> bindValue(':city', $city);
					$s -> bindValue(':state', $state);
					$s -> bindValue(':zip_code', $zip_code);
					$s -> bindValue(':comment', $comment);
					
					$s -> execute();
					
						
					
				}
				
				// Catch Errors
				
				catch (PDOException $error) {
					
					echo "Unable to add record(s): " . $error;
						
					exit();
						
				}
				
				
			}
			
			
		// End insert methods
		
		
		
		public function getCommentBlog() {
		
			// Connect to Database
		
			try {
				
				$sql = "SELECT contact_id, first_name, last_name, email, phone, street city, state, zip_code, comment FROM contact WHERE contact_id != 0 ORDER BY contact_id";
				
				$result = $this->conn->query($sql);
				
				return $result;	
				
			}
			
			// Catch Errors
			
			catch (PDOException $error) {
				
				echo "Unable to retrieve record(s): " . $error-getMessage();
					
				exit();
					
			}
				
			
		} 
		
			
	}


?>





















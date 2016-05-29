<?php


	require_once("database.class.php");
	
	class download {
	
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
		
		
		
		
		
		public function getDownload() {
		
			try {
				
				$sql = "SELECT download_id, name, path FROM download WHERE download_id = 2";
				
				$result = $this->conn->query($sql);
				
				return $result;	
				
			}
			
			
			
			catch (PDOException $error) {
				
				echo "Unable to retrieve record(s): " . $error-getMessage();
					
				exit();
					
			}
				
			
		} 
		
			
	}


?>






















<?php


	require_once("database.class.php");
	
	
	class Property {
	
	
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
			
	
		public function property_list() {
		
		
		
			try {
				
			$sql = "SELECT property_id, street, city, state, zip_code, beds, baths, square_feet, rent, deposit, fee, property_description, property_name, amenities, promotions, availability, apply, image_1, image_2, image_3, image_4, image_5, image_6, image_7, image_8, image_9, image_10 FROM property";
				
				$result = $this->conn->query($sql);
				
				return $result;	
				
			}
			
			// Catch Errors
			
			catch (PDOException $error) {
				
				echo "Unable to retrieve record(s): " . $error->getMessage();
					
				exit();
					
			}
		
				$this->conn = $conn;		
			
		}
		
		
		
		
		public function add_property($street, $city, $state, $zip_code, $beds, $baths, $square_feet, $rent, $fee, $deposit, $property_description, $property_name, $amenities, $promotions, $availability, $apply, $image_1, $image_2, $image_3, $image_4, $image_5, $image_6, $image_7, $image_8) {
		
			try {
			
					$sql = "INSERT property(street, city, state, zip_code, beds, baths, square_feet, rent, fee, deposit, property_description, property_name, amenities, promotions, availability, apply, image_1, image_2, image_3, image_4, image_5, image_6, image_7, image_8, created_at, updated_at) VALUES(:street, :city, :state, :zip_code, :beds, :baths, :square_feet, :rent, :fee, :deposit, :property_description, :property_name, :amenities, :promotions, :availability, :apply, :image_1, :image_2, :image_3, :image_4, :image_5, :image_6, :image_7, :image_8, CURRENT_DATE(), CURRENT_DATE())";
				
					$s = $this->conn->prepare($sql);
					$s -> bindValue(':street', $street);
					$s -> bindValue(':city', $city);
					$s -> bindValue(':state', $state);
					$s -> bindValue(':zip_code', $zip_code);
					$s -> bindValue(':beds', $beds);
					$s -> bindValue(':baths', $baths);
					$s -> bindValue(':square_feet', $square_feet);
					$s -> bindValue(':rent', $rent);
					$s -> bindValue(':fee', $fee);
					$s -> bindValue(':deposit', $deposit);
					$s -> bindValue(':property_description', $property_description);
					$s -> bindValue(':property_name', $property_name);
					$s -> bindValue(':amenities', $amenities);
					$s -> bindValue(':promotions', $promotions);
					$s -> bindValue(':availability', $availability);
					$s -> bindValue(':apply', $apply);
					$s -> bindValue(':image_1', $image_1);
					$s -> bindValue(':image_2', $image_2);
					$s -> bindValue(':image_3', $image_3);
					$s -> bindValue(':image_4', $image_4);
					$s -> bindValue(':image_5', $image_5);
					$s -> bindValue(':image_6', $image_6);
					$s -> bindValue(':image_7', $image_7);
					$s -> bindValue(':image_8', $image_8);
					//$s -> bindValue(':image_9', $image_9);
					//$s -> bindValue(':image_10', $image_10);
				
					
					$s -> execute();
		
				}
				
				// Catch Errors
				
				catch (PDOException $error) {
					
					echo "Unable to add property: " . $error;
						
					exit();
						
				}
				
				
			}
			
			
			public function delete_property($property_id) {
		
		
			try {
				
			$sql = "DELETE FROM property WHERE property_id='$property_id'";
			
				$result = $this->conn->query($sql);
				
				return $result;	
				
			}
			
			// Catch Errors
			
			catch (PDOException $error) {
				
				echo "Unable to delete record(s): " . $error->getMessage();
					
				exit();
					
			}
		
				$this->conn = $conn;		
			
		}
	
	
	}


?>

















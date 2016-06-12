
<?php

	// Database Class

	class Database {

		private $host 	  = "localhost";
		private $database = "portfolio";
		private $user     = "root";
		private $password = "**********";

		public $conn="";

	/* constructor */

		public function __construct() {

			$this->db_connect();

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

	/* Database Connection Method */

		private function db_connect() {

			// Connect to Database

			try {

				$conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->password);

				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$conn->exec("SET NAMES 'utf8'");

			}

			// Catch Errors

			catch (PDOException $error) {

				echo "Unable to connect to database: " . $error->getMessage();

				exit();

			}

				$this->conn = $conn;

		}

	}

?>

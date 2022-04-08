<?php
include './database/databaseConnection.php';
	class SliderRepository{
		private $connection;

		function __construct(){
			$conn = new DBConnection;
			$this->connection = $conn->startConnection();
		}

		function getAllImages(){
			$conn = $this->connection;

			$sql = "SELECT * FROM slider";

			$statement = $conn->query($sql);
			$images = $statement->fetchAll();

			return $images;
		}
	}
?>
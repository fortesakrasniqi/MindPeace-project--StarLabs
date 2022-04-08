<?php
include './database/databaseConnection4.php';

	class contactRepository{
		private $connection;

		function __construct(){
			$conn = new DBConnection4;
			$this->connection = $conn->startConnection();
		}
		function insertContact($contact){
			$conn = $this->connection;

			$id = $contact->getId();
			$name = $contact->getName();
			$lastName = $contact->getLastName();
			$email = $contact->getEmail();
			$city = $contact->getCity();
			$nr = $contact->getNr();
			$therapist = $contact->getTherapist();
			$message = $contact->getMessage();


			$sql = "INSERT INTO contact (id,name,lastName,email,city,nr,therapist,message) VALUES (?,?,?,?,?,?,?,?)";

			$statement = $conn->prepare($sql);
			$statement->execute([$id,$name,$lastName,$email,$city,$nr,$therapist,$message]);
		}

		function getAllContacts(){
			$conn = $this->connection;

			$sql = "SELECT * FROM contact";

			$statement = $conn->query($sql);
			$contact = $statement->fetchAll();

			return $contact;
		}

		function getContactById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM contact WHERE id='$id' ";

			$statement=$conn->query($sql);
			$contact = $statement->fetch();

			return $contact;
		}

		function deleteContactById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM contact WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}

	}
?>

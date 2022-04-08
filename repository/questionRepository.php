<?php
include './database/databaseConnection3.php';

	class QuestionRepository{
		private $connection;

		function __construct(){
			$conn = new DBConnection3;
			$this->connection = $conn->startConnection();
		}

		function insertQuestion($q){
			$conn = $this->connection;

			$id = $q->getId();
			$question = $q->getQuestion();
			$answer = $q->getAnswer();
			$image = $q->getImage();
			$uploaded = $q->getUploaded();

			$sql = "INSERT INTO faqs2 (id,question,answer,image,uploaded) VALUES (?,?,?,?,?)";

			$statement = $conn->prepare($sql);
			$statement->execute([$id,$question,$answer,$image,$uploaded]);
			echo "<script> alert('User has been inserted successfully!') </script>";
		}

		function getAllQuestions1(){
			$conn = $this->connection;

			$sql = "SELECT * FROM faqs";

			$statement = $conn->query($sql);
			$faqs = $statement->fetchAll();

			return $faqs;
		}
		function getAllQuestions2(){
			$conn = $this->connection;

			$sql = "SELECT * FROM faqs2";

			$statement = $conn->query($sql);
			$faqs2 = $statement->fetchAll();

			return $faqs2;
		}

		function getQuestionById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM faqs WHERE id='$id' ";

			$statement=$conn->query($sql);
			$faqs = $statement->fetch();

			return $faqs;
		}
		function getQuestion2ById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM faqs2 WHERE id='$id' ";

			$statement=$conn->query($sql);
			$faqs = $statement->fetch();

			return $faqs;
		}

		function updateQuestion($id,$question,$answer,$image,$uploaded){
			$conn = $this->connection;

			$sql = "UPDATE faqs SET question=?,answer=?,image=?,uploaded=? where id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$question,$answer,$image,$uploaded,$id]);
		}
		function updateQuestion2($id,$question,$answer,$image,$uploaded){
			$conn = $this->connection;

			$sql = "UPDATE faqs2 SET question=?,answer=?,image=?,uploaded=? where id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$question,$answer,$image,$uploaded,$id]);
		}

		function deleteQuestionById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM faqs WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}

		function deleteQuestion2ById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM faqs2 WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}
	}
?>
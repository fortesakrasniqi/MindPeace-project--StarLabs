<?php
include './database/databaseConnection2.php';

	class staffRepository{
		private $connection;

		function __construct(){
			$conn = new DBConnection2;
			$this->connection = $conn->startConnection();
		}

		function getAllStaff1(){
			$conn = $this->connection;

			$sql = "SELECT * FROM staff1";

			$statement = $conn->query($sql);
			$staff1 = $statement->fetchAll();

			return $staff1;
		}
		function getAllStaff2(){
			$conn = $this->connection;

			$sql = "SELECT * FROM staff2";

			$statement = $conn->query($sql);
			$staff2 = $statement->fetchAll();

			return $staff2;
		}

		function getStaff1ById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM staff1 WHERE id='$id' ";

			$statement=$conn->query($sql);
			$staff1 = $statement->fetch();

			return $staff1;
		}
		function getStaff2ById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM staff2 WHERE id='$id' ";

			$statement=$conn->query($sql);
			$staff2 = $statement->fetch();

			return $staff2;
		}

		function updateStaff1($id,$name,$image,$profession,$about){
			$conn = $this->connection;

			$sql = "UPDATE staff1 SET name=?,image=?,profession=?,about=? where id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$name,$image,$profession,$about,$id]);
		}
		function updateStaff2($id,$name,$image,$profession,$about){
			$conn = $this->connection;

			$sql = "UPDATE staff2 SET name=?,image=?,profession=?,about=? where id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$name,$image,$profession,$about,$id]);
		}

		function deleteStaff1ById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM staff1 WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}
		function deleteStaff2ById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM staff2 WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}
	}
?>
<?php
include './database/databaseConnection.php';

	class UserRepository{
		private $connection;

		function __construct(){
			$conn = new DBConnection;
			$this->connection = $conn->startConnection();
		}

		function insertUser($user){
			$conn = $this->connection;

			$id = $user->getId();
			$name = $user->getName();
			$lastName = $user->getLastName();
			$email = $user->getEmail();
			$password = $user->getPassword();
			$password2 = $user->getPassword2();


			$sql = "INSERT INTO user (id,name,lastName,email,password,password2,role) VALUES (?,?,?,?,?,?,?)";

			$statement = $conn->prepare($sql);
			$statement->execute([$id,$name,$lastName,$email,$password,$password2,0]);
			echo "<script> alert('User has been inserted successfully!') </script>";
		}

		function getAllUsers(){
			$conn = $this->connection;

			$sql = "SELECT * FROM user";

			$statement = $conn->query($sql);
			$users = $statement->fetchAll();

			return $users;
		}

		public function kontrollouserat($users2){
		$c = 0;
		foreach($users2 as $user){
			if($user['email'] == $this->email && $user['password'] == $this->password && $user['role'] == 0){
				header("Location: index.php");	
				//exit();
				$c++;
			
				$name = $user['name'];
				$lastName = $user['lastName'];
				$value = $name.' '.$lastName;
				$_SESSION["NamelastName"] = $value;
				setcookie("user",$value,time()+86400,"/");
				}
			else if($user['email'] == $this->email && $user['password'] == $this->password && $user['role'] == 1){
				header("Location: Dashboard.php");
				$c++;
				$name = $user['name'];
				$lastName = $user['lastName'];
				$value = $name.' '.$lastName;
				setcookie("user",$value,time()+86400,"/");
			}
		}
		return $c;
		}

		function getUserById($id){
			$conn = $this->connection;

			$sql = "SELECT * FROM user WHERE id='$id' ";

			$statement=$conn->query($sql);
			$user = $statement->fetch();

			return $user;
		}


		function updateUser($id,$name,$lastName,$email,$role){
			$conn = $this->connection;

			$sql = "UPDATE user SET name=?,lastName=?,email=?,role=? where id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$name,$lastName,$email,$role,$id]);

			echo "<script> alert('User has been updated successfully!') </script>";
		}


		function deleteUserById($id){
			$conn = $this->connection;

			$sql = "DELETE FROM user WHERE id=?";

			$statement = $conn->prepare($sql);
			$statement->execute([$id]);
		}
	}
?>
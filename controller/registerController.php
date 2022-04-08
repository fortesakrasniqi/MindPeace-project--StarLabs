<?php
include_once './repository/userRepository.php';
include_once './models/user.php';

 if(isset($_POST['registerBtn'])){
 	if(empty($_POST['name']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password'])){
		}else{
			$name = $_POST['name'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$id = rand(1,1000).$name;
		
			$user = new User($id,$name,$lastName,$email,$password,$password2);
			$userRepository = new UserRepository();
			$userRepository->insertUser($user);
		}
}
?>
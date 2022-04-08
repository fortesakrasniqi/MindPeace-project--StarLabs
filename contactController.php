<?php
include_once './repository/contactRepository.php';
include_once './models/contact.php';


 if(isset($_POST['Submit'])){
 	if(empty($_POST['name']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['city']) || empty($_POST['nr']) || empty($_POST['therapist']) || empty($_POST['message'])){
		}else{
			$name = $_POST['name'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			$nr = $_POST['nr'];
			$therapist = $_POST['therapist'];
			$message = $_POST['message'];
			$id = rand(1,1000).$name;
		
			$contact = new Contact($id,$name,$lastName,$email,$city,$nr,$therapist,$message);
			$contactRepository = new ContactRepository();
			$contactRepository->insertContact($contact);
		}
}
?>
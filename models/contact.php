<?php

class Contact{
	private $id;
	private $name;
	private $lastName;
	private $email;
	private $city;
	private $nr;
	private $therapist;
	private $message;

	function __construct($id,$name,$lastName,$email,$city,$nr,$therapist,$message){
		$this->id=$id;
		$this->name=$name;
		$this->lastName=$lastName;
		$this->email=$email;
		$this->city=$city;
		$this->nr=$nr;
		$this->therapist=$therapist;
		$this->message=$message;
	}

	function getId(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getLastName(){
		return $this->lastName;
	}
	function getEmail(){
		return $this->email;
	}
	function getCity(){
		return $this->city;
	}
	function getNr(){
		return $this->nr;
	}
	function getTherapist(){
		return $this->therapist;
	}
	function getMessage(){
		return $this->message;
	}
}
?>

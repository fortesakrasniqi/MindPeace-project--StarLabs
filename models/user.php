<?php

class User{
	private $id;
	private $name;
	private $lastName;
	private $email;
	private $password;
	private $password2;
	//private $role;

	function __construct($id,$name,$lastName,$email,$password,$password2){
		$this->id=$id;
		$this->name=$name;
		$this->lastName=$lastName;
		$this->email=$email;
		$this->password=$password;
		$this->password2=$password2;
		//$this->password2=$password2;
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
	function getPassword(){
		return $this->password;
	}
	function getPassword2(){
		return $this->password2;
	}
}
?>
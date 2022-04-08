<?php

class Staff{
	private $id;
	private $name;
	private $image;
	private $profession;
	private $about;

	function __construct($id,$name,$image,$profession,$about){
		$this->id=$id;
		$this->name=$name;
		$this->image=$image;
		$this->profession=$profession;
		$this->about=$about;
	}

	function getId(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getImage(){
		return $this->image;
	}
	function getProfession(){
		return $this->profession;
	}
	function getAbout(){
		return $this->about;
	}
}
?>
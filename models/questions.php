<?php

class Question{
	private $id;
	private $question;
	private $answer;
	private $image;
	private $uploaded;

	function __construct($id,$question,$answer,$image,$uploaded){
		$this->id=$id;
		$this->question=$question;
		$this->answer=$answer;
		$this->image=$image;
		$this->uploaded=$uploaded;
	}

	function getId(){
		return $this->id;
	}
	function getQuestion(){
		return $this->question;
	}
	function getAnswer(){
		return $this->answer;
	}
	function getImage(){
		return $this->image;
	}
	function getUploaded(){
		return $this->uploaded;
	}
}
?>
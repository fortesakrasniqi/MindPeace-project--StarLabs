<?php
include_once './repository/questionRepository.php';
include_once './models/questions.php';

 if(isset($_POST['upload'])){
 	if(empty($_POST['question']) || empty($_POST['answer']) || empty($_POST['image']) || empty($_POST['uploaded'])){
		}else{
			$id = $_POST['id'];
			$question = $_POST['question'];
			$answer = $_POST['answer'];
			$image = $_POST['image'];
			$uploaded = $_POST['uploaded'];
		
			$question = new Question($id,$question,$answer,$image,$uploaded);
			$qRepository = new QuestionRepository();
			$qRepository->insertQuestion($question);
			header('location:dashboard.php');
		}
}
?>
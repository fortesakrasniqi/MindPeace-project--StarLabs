<?php   

include_once './repository/questionRepository.php';

$id = $_GET['id'];

$questionRepository = new QuestionRepository();

$questionRepository->deleteQuestionById($id);
header('location:dashboard.php');

?>
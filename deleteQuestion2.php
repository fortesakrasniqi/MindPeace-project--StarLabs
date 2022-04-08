<?php   

include_once './repository/questionRepository.php';

$id = $_GET['id'];

$questionRepository = new QuestionRepository();

$questionRepository->deleteQuestion2ById($id);
header('location:dashboard.php');

?>
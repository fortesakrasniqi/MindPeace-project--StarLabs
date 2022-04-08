<?php

include_once './repository/questionRepository.php';

$questionId = $_GET['id'];
$questionRepository = new QuestionRepository();
$question = $questionRepository->getQuestion2ById($questionId);

?>
<!DOCTYPE html>
<html>
	<head>
    	<title>Document</title>
    	<link rel="stylesheet" href="./css/editStaff.css">
	</head>
	<body>
		<h1>Edit staff infos</h1>

    	<form action="" method="POST" class="input-group2">
			<input type="text" name="id" value="<?=$question['id']?>" class="input-field2">
   			<input type="text" name="question" value="<?=$question['question']?>" class="input-field2">
    		<input type="text" name="answer" value="<?=$question['answer']?>" class="input-field2">
    		<input type="file" name="image" value="<?=$question['image']?>" class="input-field2">
    		<input type="text" name="uploaded" value="<?=$question['uploaded']?>" placeholder="Write your name please..." class="input-field2">

    		<button type="submit" class="submit-btn" name="saveQuestion" value="saveQuestion">Save</button>
    	</form>
	</body>
</html>

<?php
	if(isset($_POST['saveQuestion'])){
		$id = $_POST['id'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$image = $_POST['image'];
		$uploaded = $_POST['uploaded'];

		$questionRepository->updateQuestion2($id,$question,$answer,$image,$uploaded);
		header('location:dashboard.php');
	}
?>
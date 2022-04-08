<!DOCTYPE html>
<html>
	<head>
    	<title>Document</title>
    	<link rel="stylesheet" href="./css/editStaff.css">
	</head>
	<body>
		<h1>Add a question</h1>
		<main>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="input-group2">
			<input type="text" name="id" value="" placeholder="id" class="input-field2" >
			<input type="text" name="question" value="" placeholder="question" class="input-field2">
    		<input type="text" name="answer" value="" placeholder="answer" class="input-field2">
    		<input type="file" name="image" value="" class="input-field2">
    		<input type="text" name="uploaded" placeholder="Write your name please..." value="" class="input-field2">

    		<button type="submit" class="submit-btn" name="upload" value="upload">Upload</button>

    	</form>
    	<?php include_once './controller/questionController.php' ?>
    	
    	</main>
    </body>
    </html>
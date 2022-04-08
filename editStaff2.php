<?php

include_once './repository/staffRepository.php';

$staffId = $_GET['id'];
$staffRepository = new StaffRepository();
$staff = $staffRepository->getStaff2ById($staffId);

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
			<input type="text" name="id" value="<?=$staff['id']?>" class="input-field2" readonly>
   			<input type="text" name="name" value="<?=$staff['name']?>" class="input-field2">
    		<input type="file" name="image" value="<?=$staff['image']?>" class="input-field2">
    		<input type="text" name="profession" value="<?=$staff['profession']?>" class="input-field2">
    		<input type="text" name="about" value="<?=$staff['about']?>" class="aboutStaff">
    		<button type="submit" class="submit-btn" name="save2" value="save2">Save</button>
    	</form>
	</body>
</html>

<?php
	if(isset($_POST['save2'])){
		$id = $staff['id'];
		$name = $_POST['name'];
		$image = $_POST['image'];
		$profession = $_POST['profession'];
		$about = $_POST['about'];

		$staffRepository->updateStaff2($id,$name,$image,$profession,$about);
		header('location:dashboard.php');
	}
?>
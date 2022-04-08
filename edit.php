<?php  

include_once './repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);

?>

<!DOCTYPE html>
<html>
	<head>
    	<title>Document</title>
    	<link rel="stylesheet" href="./css/edit.css">
	</head>
	<body>
		<h1>Edit your infos</h1>
		<form action="" method="POST" class="input-group">
			<input type="text" name="id" value="<?=$user['id']?>" class="input-field" readonly>
   			<input type="text" name="name" value="<?=$user['name']?>" class="input-field">
    		<input type="text" name="lastName" value="<?=$user['lastName']?>" class="input-field">
    		<input type="text" name="email" value="<?=$user['email']?>" class="input-field">
    		<input type="text" name="role" value="<?=$user['role']?>" class="input-field">
    		<button type="submit" class="submit-btn" name="save" value="save">Save</button>
    	</form>

	</body>
</html>

<?php
	if(isset($_POST['save'])){
		$id = $user['id'];
		$name = $_POST['name'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$role = $_POST['role'];

		$userRepository->updateUser($id,$name,$lastName,$email,$role);
		header('location:dashboard.php');
	}

?>
<?php 
session_start();

if(!isset($_SESSION['email'])){
    header("location:joinUs.php");
}else{
   if($_SESSION['role'] == "0"){
       header("location:index.php");
   }else{

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/dashboard.css">
	<title>Document</title>
</head>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
<body>
	<h1>USERS</h1>
	<table border="2">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL</th>
			<th>ROLE</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>

		<?php
			include_once './repository/userRepository.php';
			$userRepository = new UserRepository();
			$users = $userRepository->getAllUsers();
			foreach($users as $user){
				echo 
				"
				<tr>
					<td>$user[id]</td>
					<td>$user[name]</td>
					<td>$user[lastName]</td>
					<td>$user[email]</td>
					<td>$user[role]</td>
					<td><button><a href='edit.php?id=$user[id]'>Edit</button></a></td>
					<td><button><a href='delete.php?id=$user[id]'>Delete</button></a></td>
				</tr>
				";
			}
		?>
	</table>


	<br><br>
		<h1>QUESTIONS</h1>
		<table border="2">
		<tr>
			<th>ID</th>
			<th>QUESTION</th>
			<th>ANSWER</th>
			<th>IMAGE </th>
			<th>UPLOADED BY</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>


		<?php
			include_once './repository/questionRepository.php';
			$questionRepository = new questionRepository();
			$questions = $questionRepository->getAllQuestions1();
			foreach($questions as $question){
				echo 
				"
				<tr>
					<td>$question[id]</td>
					<td>$question[question]</td>
					<td>$question[answer]</td>
					<td>$question[image]</td>
					<td>$question[uploaded]</td>
					<td><button><a href='editQuestion.php?id=$question[id]'>Edit</button></a></td>
					<td><button><a href='deleteQuestion.php?id=$question[id]'>Delete</button></a></td>
				</tr>
				";
			}
			$questions2 = $questionRepository->getAllQuestions2();
			foreach($questions2 as $question2){
				echo 
				"
				<tr>
					<td>$question2[id]</td>
					<td>$question2[question]</td>
					<td>$question2[answer]</td>
					<td>$question2[image]</td>
					<td>$question2[uploaded]</td>
					<td><button><a href='editQuestion2.php?id=$question2[id]'>Edit</button></a></td>
					<td><button><a href='deleteQuestion2.php?id=$question2[id]'>Delete</button></a></td>
				</tr>
				";
			}
		?>
	</table>
	<br><br>
	<div class="faqsBtn">
		<div class="faqsBtn1">
			<button><a href='addQuestion.php'>ADD NEW QUESTION</a></button>
		</div>
	</div>
	<br><br>
		<h1>THERAPISTS</h1>

		<table border="2">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>IMAGE SRC</th>
			<th>PROFESSION</th>
			<th>ABOUT</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>


		<?php
			include_once './repository/staffRepository.php';
			$staffRepository = new staffRepository();
			$staffE = $staffRepository->getAllStaff1();
			foreach($staffE as $staff1){
				echo 
				"
				<tr>
					<td>$staff1[id]</td>
					<td>$staff1[name]</td>
					<td>$staff1[image]</td>
					<td>$staff1[profession]</td>
					<td>$staff1[about]</td>
					<td><button><a href='editStaff1.php?id=$staff1[id]'>Edit</button></a></td>
					<td><button><a href='deleteStaff1.php?id=$staff1[id]'>Delete</button></a></td>
				</tr>
				";
			}
			$staffE2 = $staffRepository->getAllStaff2();
			foreach($staffE2 as $staff2){
				echo 
				"
				<tr>
					<td>$staff2[id]</td>
					<td>$staff2[name]</td>
					<td>$staff2[image]</td>
					<td>$staff2[profession]</td>
					<td>$staff2[about]</td>
					<td><button><a href='editStaff2.php?id=$staff2[id]'>Edit</button></a></td>
					<td><button><a href='deleteStaff2.php?id=$staff2[id]'>Delete</button></a></td>
				</tr>
				";
			}

		?>
	</table>
	<br><br>
	<h1>MESSAGES</h1>
		<table border="2">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL</th>
			<th>CITY</th>
			<th>NUMBER</th>
			<th>THERAPIST</th>
			<th>MESSAGE</th>
			<th>DELETE</th>
		</tr>

		<?php
			include_once './repository/contactRepository.php';
			$contactRepository = new ContactRepository();
			$contacts = $contactRepository->getAllContacts();
			foreach($contacts as $contact){
				echo 
				"
				<tr>
					<td>$contact[id]</td>
					<td>$contact[name]</td>
					<td>$contact[lastName]</td>
					<td>$contact[email]</td>
					<td>$contact[city]</td>
					<td>$contact[nr]</td>
					<td>$contact[therapist]</td>
					<td>$contact[message]</td>
					<td><button><a href='deleteContact.php?id=$contact[id]'>Delete</button></a></td>
				</tr>
				";
			}
		?>
	</table>
	</table>
</body>
</html>
<?php
	}
	}
?>
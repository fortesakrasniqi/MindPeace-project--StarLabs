<?php   

include_once './repository/contactRepository.php';

$id = $_GET['id'];

$contactRepository = new ContactRepository();

$contactRepository->deleteContactById($id);
header('location:dashboard.php');

?>
<?php   

include_once './repository/staffRepository.php';

$id = $_GET['id'];

$staffRepository = new StaffRepository();

$staffRepository->deleteStaff2ById($id);
header('location:dashboard.php');

?>
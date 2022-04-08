<?php 
include_once './repository/userRepository.php';
include_once './models/user.php';

if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Please fill all fields!";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $i=0;
        $getUsers = new UserRepository();
        $users = $getUsers->getAllUsers();
        foreach($users as $user){
            $i++;
            if($email == $user['email'] && $password == $user['password']){

               session_start();

               $_SESSION['email']=$email;
               $_SESSION['password'] = $password;
               $_SESSION['role'] = $user['role'];

               header("location:index.php");
                exit();

            }else{
                if($i == count($users)){
                     header("location:joinUs.php");
                    exit();
                }
            }
        }
    }
}

?>


<?php 
session_start();

if(isset($_SESSION['email'])){
   header("location:index.php");
}else{

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/joinUs.css">
</head>
<body>
    <header>
        <?php if(!isset($_SESSION['email'])){
            include 'includes/header1.php'; 
        }else{
            include 'includes/header.php';
        }
        ?>
        <style>
            .hide{
                display: none;
            }
        </style>
    </header>
    <main>
    <div class="pjesaContact">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button> 
                <button type="button" class="toggle-btn" onclick="register()">Register</button> 
            </div>
            <div class="animals-icons">
                <img src="images/peace.png">
                <img src="images/peace.png">
                <img src="images/peace.png">
            </div>
            <form action="loginController.php" method="post" id="login" class="input-group" onsubmit="return loginValidate()">
                <input type="text" id="email" name="email" class="input-field" placeholder="Email">
                <input type="password" id="pw" name="password" class="input-field" placeholder="Password"></br></br>
                <button type="submit" class="submit-btn" name="loginBtn" onclick="validimi(0)"> Log in</button>
            </form>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="register" name="reg" class="input-group" onsubmit="return registerValidate()">
                <input type="text" name="name" id="emri" class="input-field" placeholder="Name">
                <input type="text" name="lastName" id="mbiemri" class="input-field"  placeholder="Last Name">
                <input type="text" name="email" id="mail" class="input-field"  placeholder="Email">
                <input type="password" id="psw" class="input-field" name="password" placeholder="Password">
                <input type="password"  class="input-field" name="password2" placeholder="Confirm Password"></br></br>
                <button type="submit" class="submit-btn" name="registerBtn" onclick="return validimi(1)">Register</button>
            </form>

            <?php include_once './controller/registerController.php' ?>
        </div>
    </div>
    </main>
    
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
        <script src="js/joinUs.js"></script>
</body>
</html>
<?php 

}
?>
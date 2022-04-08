<?php 
$hide="";
    if($_SESSION['role'] == "1"){
        $hide="";
    }else{
        $hide="hide";
    }
?>
<ul class="nav-list">
    <li><a href="./index.php">WELCOME</a></li>
    <li><a href="./services.php">SERVICES</a></li>
    <li><a href="./about.php">ABOUT</a></li>
</ul>
    <a href="./index.php"><img id="nav-img" src="./images/peace.png"></a>
<ul class="nav-list">
    <li><a href="./faqs.php">FAQS</a></li>
    <li><a href="./contact.php">CONTACT</a></li>
    <li><a href="./dashboard.php" class="<?=$hide?>">DASHBOARD</a></li>
    <li><a href="logout.php">LOG OUT</a></li>
</ul>
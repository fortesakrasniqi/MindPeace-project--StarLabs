<?php 
session_start();
$hide="";
if(!isset($_SESSION['email'])){
    header("location:joinUs.php");
}
else{
    if($_SESSION['role'] == "1"){
        $hide="";
    }else{
        $hide="hide";
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact.css">
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
<!---------------LEFT PART--------------->
        <div class="first-main">
            <h1>You only live once so let's make it happen.!</h1>
        </div>
        <div class="main-items">
            <div class="para-formulari">
                <h4>Eating Disorders | Anxiety & Depression | Couples Therapy</h4>
                <p>Our services include <b> 1:1 Psychotherapy sessions</b>, as well as <b>Telehealth</b> (online sessions)<br> for clients located away from the clinic.</p><br>
            <div class="centerPic">
                <img src="./images/center.jpg">
                <img src="./images/center2.jpg">
            </div>
            <div class="centerPic">
                <img src="./images/center3.jpg">
                <img src="./images/center4.jpg">
            </div><br>
                <p> We are committed to LGBTQ+ equality and support all expressions of gender identity.<br> Inclusive & Culturally Relevant Wellness, Non-Restrictive Vegetarian and <br>Vegan welcomed.<i> Get in touch by filling out the form on the right: </i></p> 
        </div>
<!----------------FORMULARI------------->
        <div class="formulari">
            <h3>Schedule a consultation</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="row">
                <div class="label">
                    <label>Name:</label>
                </div>
                <div class="input">
                    <input type="text" name="name" size="20" maxlength="50"><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>LastName:</label>
                </div>
                <div class="input">
                    <input type="text" name="lastName" size="20" maxlength="60"><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>Email:</label>
                </div>
                <div class="input">
                    <input type="email" name="email" size="20" minlength="9"> <br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>City:</label>
                </div>
                <div class="input">
                    <input type="text" name="city" size="20" maxlength="30"> <br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>Number:</label>
                </div>
                <div class="input">
                    <input type="tel" name="nr" size="20" maxlength="30"> <br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>Therapist:</label>
                </div>
                <div class="input">
                    <input type="text" name="therapist" size="20" maxlength="30"> <br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label>Message:</label>
                </div>
                <div class="input message">
                    <input type="text" name="message" size="20" maxlength="500"> <br>
                </div>
                <div class="notRegistered">
                    <input type="submit" name="Submit" value="Submit">
                    <p><a href="./joinUs.php">Not registered yet?</a></p>
                </div>
                <?php include_once './controller/contactController.php' ?>
        </form>
        </div>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>
<?php
    }
?>
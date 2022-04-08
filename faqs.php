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
    <link rel="stylesheet" href="./css/faqs.css">
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
        <h1 id="faqs">Frequently Asked Questions</h1><br>
    <?php
        include_once './repository/questionRepository.php';
        $questionRepository = new questionRepository();
        
        $questions = $questionRepository->getAllQuestions1();
        foreach($questions as $question){
    ?> 
        <section class="section2" id="<?php echo $question['id'];?>">
            <article>
                <h3><?php echo $question['question'];?></h3>
                <p><?php echo $question['answer'];?></p>
            </article>
            <aside>
                <img src="images/<?php echo $question['image'];?>" alt="">
            </aside>
        </section>
    <?php
        }

        $questions2 = $questionRepository->getAllQuestions2();
        foreach($questions2 as $question2){
    ?>
        <section class="section1" id="<?php echo $question2['id'];?>">
            <article>
                <img src="images/<?php echo $question2['image'];?>" alt="">
            </article>
            <aside>
                <h3><?php echo $question2['question'];?></h3>
                <p><?php echo $question2['answer'];?></p>
            </aside>
        </section>
    <?php
        }
    ?>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>
<?php
    }
?>
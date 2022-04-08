<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
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
        <!--SLIDER STARTS-->
        <div id="borderSlider">
            <div class="slider">
                <div class="slideShow">
                    <?php
                        include_once './repository/sliderRepository.php';
                        $sliderRepository = new SliderRepository();
                        $images = $sliderRepository->getAllImages();
                        foreach($images as $img){
                    ?> 
                        <div class="mySlides">
                            <img src="./images/<?php echo $img['image'];?>" alt="">
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="pointers">
                    <span class="dot" onclick="slideMomental(1)"></span>
                    <span class="dot" onclick="slideMomental(2)"></span>
                    <span class="dot" onclick="slideMomental(3)"></span>
                    <span class="dot" onclick="slideMomental(4)"></span>
                    <span class="dot" onclick="slideMomental(5)"></span>
                </div>
            </div>
        </div>
        
        <!--SLIDER ENDS-->
            <br>
            <br>
        <div class="therapist-intro">
            <div>
                <h2>THERAPISTS</h2>
            </div>
            <div>
                <p>Seeing yourself differently is often the first step to living<br> the life you truly want to live.</p>
            </div>
        </div>
            <br>
            <br>
        <div class="main-items">
            <!--first-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist2.jpeg">
                </div>
                <div class="therapist-info">
                    <h3>Case Lovell, Psychotherapist</h3>
                    <p>Case has worked for many years in a wide variety of settings, from psychiatric clinics to homeless shelters, providing psychotherapy to clients struggling with severe mental health issues. The clinical expertise he has developed in these settings, make him a great fit for clients with particularly acute and challenging symptoms such as panic disorder and chronic suicidal ideation.</p>
                    
                    <div>
                        <a href="./about.php"><button>Learn More</button></a>
                    </div>
                </div>

            </div>
            <!--second-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist.jpeg">
                </div>
                <div class="therapist-info">
                    <h3>Rachael Sofian, Psychotherapist</h3>
                    <p>Rachael has exhibited her work in local art galleries and has created album art for local PNW bands. She brings these worlds together in her therapeutic work, helping her clients learn to express themselves with confidence.She also provides guest lectures for Psychology students at local universities. Rachael excels at providing art and play therapy, in addition to CBT.</p>
                    <div>
                        <a href="./about.php"><button>Learn More</button></a>
                    </div>
                </div>
            </div>          
        </div>

        <div class="aboutBtn">
            <a href="./about.php"><button>Find more about our therapists...</button></a>
        </div>


        <div class="menu">
            <div>
                <a href="./services.php"><img src="./images/food.png"></a>
            </div>
            <div>
                <img src="./images/boo.jpg">
            </div>
            <div>
                <a href="./services.php"><img src="./images/relationship.png"></a>
            </div>
            <div>
                <a href="./services.php"><img src="./images/anxiety.png"></a>
            </div>
            <div>   
                <img src="./images/myBodyNotYours.jpg">  
            </div>
            <div>
                <a href="./services.php"><img src="./images/depression.png"></a>
            </div>
        </div>
        <div class="therapist-intro">
            <div id="noFear">
                <h1>“I'LL TELL YOU WHAT FREEDOM IS TO ME. NO FEAR.”<h1>
                <p>- NINA SIMONE</p>
            </div>
        </div>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
    <script src="js/slider.js"></script>
</body>
</html>

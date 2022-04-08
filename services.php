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
    <link rel="stylesheet" href="./css/services.css">
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
<!--------------EATING DISORDERS------------->
    <div class="main-pic"> 
        <img src="./images/obb2.jpg">
        <p id="therapist">EATING DISORDER THERAPIST</p>
        <p id="h1">Don’t let an eating disorder hold you back.</p>
    </div>
    <div class="mid">
        <div class="mid-pic"><br>
            <img src="./images/pc1.jpg">
        </div>
        <div class="mid-p">
            <p><b>If you feel like “your weight” is holding you back in life, or that you’re eating to numb (rather than nourish) yourself </b>, I can help you get to the heart of the matter and transform your relationship with food, and yourself.<br><br><b> Working with both individuals and small groups, I integrate psychotherapy with practices such as mindfulness and intuitive eating.</b></p>
            <a href="./contact.php"><button>SCHEDULE A CONSULATION</button></a>
        </div>
    </div>

    <div class="three-pic">
        <div class="three-pic-1"><br>
            <h3>I can help you overcome:</h3>
            <p>• Anorexia <br> • Bulimia <br> • Orthorexia<br> • Binge eating<br> • Compulsive eating
            <br> • Emotional eating<br> • Exercise Addiction<br> • Body Image Issues </p>
        </div>
        <div class="three-pic-2">
            <img src="./images/mybody.jpg">
        </div>
        <div class="three-pic-3"><br>
            <h3>Therapies and techniques:</h3>
            <p>• Mindfulness <br> • Intuitive Eating <br> • Cognitive Behavioural Therapy 
            <br> • Emotionally Focused Therapy <br> • Radically Open Dialectical Behavior Therapy <br> • Body Positive Principles <br> • Practical strategies and healthy habits <br></p>
        </div>
    </div>

    <p id="h1">You didn’t choose to have an eating disorder, 
        <br>but you get to choose what happens next.</p><br>

    <div class="after-three">
        <div class="one-one">
            <img src="./images/chair.png">
            <h4>1:1 Therapy</h4>
            <p>Highly personalized therapy sessions at my Portland clinic.<br> Telehealth (virtual sessions) is available for clients in New York.</p>
            <a href="./contact.php"><button>Get in touch</button></a>
        </div>
        <div class="group">
            <img src="./images/group.png">
            <h4>Binge eating disorder group</h4>
            <p>Group therapy is highly effective for BED, and includes a nutritionist’s <br> support. Our next round of sessions beings in September. </p>
            <a href="./contact.php"><button>Get in touch</button></a>
        </div>
    </div>
<!--------------EATING DISORDERS------------->
    <div class="main-pic">
        <img src="./images/rel.png">
        <p id="therapist-b">COUPLE THERAPY</p>
        <p id="h1-b">When love becomes a struggle or a chore, seeking help to get<br>
             things back on track makes sense.</p>
    </div>
    <div class="mid-b">
        <div class="mid-pic-b"><br>
            <img src="./images/hands.jpg">
        </div>
        <div class="mid-p-b">
            <p>Couples therapy is beneficial for relationships of any age, culture or orientation; be it a happy couple that want to seek greater intimacy and satisfaction, or a distressed couple dealing with issues such as infidelity, addiction, financial strain, or frequent conflict.Committed relationships require regular care and maintenance to prevent the build up of unhealthy patterns and unresolved issues. Couples therapy provides a safe and supportive space for both of you to explore your emotions, resolve your differences, and deepen your love and connection. </p>
            <a href="./contact.php"><button>SCHEDULE A CONSULATION</button></a>
        </div>
    </div>
    
    <p id="mid-pp">LOVE IS NOT JUST A FEELING. IT’S A CHOICE WE MAKE EVERY SINGLE DAY.
         I CAN HELP YOU WORK THROUGH ISSUES SUCH AS:</p>
    
    <div class="issues">
        <div class="issues-1">
            <p>• Emotional distance and communication breakdown </p>
            <p>• Infidelity, jealousy and loss of trust</p>
            <p>• Disputes around parenting, in-laws, money, etc.</p>
        </div>
        <div class="issues-2">
            <p>• Financial distress or redundancy</p>
            <p>• Sex and intimacy issues</p>
            <p>• Addiction</p>
        </div>
    </div>
<!--------------ANXIETY DISORDERS------------->
    <div class="main-pic">
        <img src="./images/anx.jpg">
        <p id="therapist-c">ANXIETY THERAPY</p>
        <p id="h1-c">Learn how navigate your emotions and release anxiety.</p>
    </div>
    <div class="mid-c">
        <div class="mid-pic-c"><br>
            <img src="./images/thumbs.jpg">
        </div>
        <div class="mid-p-c">
            <p>If you need support getting out of your own way or navigating a difficult life transition, I can help you find more calm and positivity, and start living life to the full. I provide highly personalized psychotherapy for those struggling with Anxiety, conditions such as Generalized Anxiety, Social Phobia & Obsessive Compulsive Disorder. Whether you’re dealing with loss, divorce, a family member struggling with addiction, or a sudden life or career change, I have a knack for resolving uncomfortable emotions in a way that feels light and empowering.</p>
            <a href="./contact.php"><button>SCHEDULE A CONSULATION</button></a>
        </div>
    </div>

    <p id="mid-pp">HERE’S SOME MORE INFORMATION ON THE MOOD DISORDERS I TYPICALLY TREAT:</p>

    <div class="disorders">
        <div class="disorder-a">
            <hr>
            <p><b><i>Social Phobia</i></b> is an intense fear of social situations that goes beyond normal shyness and has a severe negative impact on a person’s life. A person suffering from social phobia tends to be highly self-critical and afraid of being judged by others. They sometimes go to great lengths to avoid everyday human interactions such as going into a store, spending time with friends, dating, or working with other people. Social phobias often hinder an otherwise successful career or hold a person back from certain goals that require interaction with others. When thrust into a stressful situation, a person with social phobia may experience sweaty palms, heart-pounding or heart-palpitations..</p>
            <hr>
        </div>
        <div class="disorder-b">
            <hr>
            <p><b><i>General Anxiety</i></b> – a very common condition that can be triggered by traumatic events, social and workplace situations, or simply manifest itself as a feeling of general unease and stress. Experiencing a certain degree of anxiety is natural. But experiencing too much anxiety becomes unhealthy. Living with a constant or near-constant state of anxiety you feel unable to control, is destabilizing and rarely corrects itself. Under stress, your body releases a hormone called cortisol to reduce the stressful feeling. Over time cortisol can weaken your immune system. This is why treating anxiety generally improves your overall health as well as mental wellbeing. </p>
            <hr>
        </div>
        <div class="disorder-c">
            <hr>
            <p><b><i>Obsessive-Compulsive Disorder (OCD)</i></b> is characterized by obsessive thoughts which are considered intrusive or unwanted, followed by compulsive actions in response to the thoughts. OCD thoughts and behaviors differ from person to person. A common example though is for a person to have obsessive thoughts about germs followed by compulsive hand-washing.Those who suffer from OCD can feel like they are stuck in an endless cycle. This is an emotionally exhausting, not to mention time-consuming, mental disorder, which can interfere with a person’s normal day-to-day life. Fortunately, there are proven, evidence-based treatments available.</p>
            <hr>
        </div>
    </div>
<!--------------DEPRESSION DISORDERS------------->
    <div class="main-pic">
        <img src="./images/dep.jpg">
        <p id="therapist-d">DEPRESSION THERAPY</p>
        <p id="h1-d">Help finding lasting relief from crippling depression.</p>
    </div>
    <div class="mid-d">
        <div class="mid-pic-d"><br>
            <img src="./images/depp.jpg">
        </div>
        <div class="mid-p-d">
            <p>Depression is a very common condition that can be triggered by traumatic events or appear for seemingly no reason, often involving a combination of biological and socio-emotional factors. It can create feelings like loneliness, fear, guilt, and worthlessness. Sadly, many people struggle with the condition on their own, for months or even years, before getting professional help. If you suspect you may be experiencing depression do get in touch with myself or another healthcare professional. Depression can be effectively treated, but only you can take the first step.</p>
            <a href="./contact.php"><button>SCHEDULE A CONSULATION</button></a>
        </div>
    </div>
    <div class="disorders-dep">
        <div class="disorder-a">
            <hr>
            <p><b><i>Persistent Depressive Disorder or dysthymia</i></b> is a long-term form of depression which can persist for years. Symptoms may lessen at times only to intensify later. For the most part, the feelings of sadness and hopelessness associated with dysthymia are ever-present. While dysthymia may present fewer or less severe symptoms than MDD, their persistence over time can result in poor overall health, breakdown of relationships, poor performance at work, and, being perceived by others as having a cranky gloomy personality. Psychotherapy can help you to identify and address negative beliefs and patterns that may be contributing to your disorder. I can teach you skills and techniques to better cope with symptoms and live the life you were born to live.</p>
            <hr>
        </div>
        <div class="disorder-b">
            <hr>
            <p><b><i>Postpartum Depression</i></b> affects some new mothers in the weeks or months following childbirth. This depressive disorder is different from “the baby blues” that many new mothers experience as a result of sleepless nights and changing hormones. Since postpartum depression can make it difficult to bond with your baby which often leads to feelings of guilt or failure, it’s important to realize that this disorder should not be considered a weakness or flaw on the mother’s part. Symptoms are more intense than those associated with “the baby blues” and include mood swings, crying, irritability, strong feelings of overwhelm and inadequacy, difficulty bonding with and sometimes even a dislike of your new baby, loss of appetite, and trouble sleeping.</p>
            <hr>
        </div>
        <div class="disorder-c">
            <hr>
            <p><b><i>Seasonal Affective Disorder or SAD</i></b>, is a type of depression associated with a lack of sunlight and it generally sets in with the changing of the seasons. While studies estimate that about 10% of the population in the US suffer from SAD, the percentage may be as high as 20%-30% in Portland due to the city’s notoriously low annual number of sunny days. Hopelessness, sadness, fatigue, excessive sleep, food cravings – particularly for carbohydrates, weight fluctuations, and problems with relationships are common symptoms of SAD. While light therapy and supplementing with vitamin-D3 may provide some relief, I can help you to employ effective stress management techniques and methods that allow you to identify and change the negative thoughts. </p>
            <hr>
        </div>
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
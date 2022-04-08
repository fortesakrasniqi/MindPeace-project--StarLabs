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
    <link rel="stylesheet" href="./css/about.css">
</head>
<body>
    <style>
        .hide{
            display:none;
        }
    </style>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>
        <div class="intro">
            <h2>PSYCHIATRY & PSYCHOTHERAPY</h2>
            <p>Finding the best psychiatrist or therapist is all about finding the best fit. <br> All the psychiatrists and therapists at Seattle Anxiety Specialists have <br> backgrounds and sub-specializations that uniquely position them to serve particular clients.</p>
            <h2>FINDING THE BEST MENTAL HEALTH PROVIDER FOR YOU</h2>
            <p>If you are not sure which therapist would be the best fit for you, there is no need to worry.<br> Any of our providers can do a first session with you to help you get a better sense of what your therapeutic needs are.</p>
            <br><br>
            <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </div>

        <div class="main-items">
            <!--first-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist2.jpeg">
                </div>
                <div class="therapist-info">
                    <h2>Case Lovell, Psychotherapist</h2>
                    <p>Case has worked for many years in a wide variety of settings, from psychiatric clinics to homeless shelters, providing psychotherapy to clients struggling with severe mental health issues. The clinical expertise he has developed in these settings, using evidence based methods such as Brief Solution Focused Therapy and Cognitive Behavioral Therapy (CBT), make him a great fit for clients with particularly acute and challenging symptoms such as panic disorder and chronic suicidal ideation.Case also has extensive experience managing the often complex interrelationships between anxiety, substance abuse, depression, and additional diagnoses such as Autism Spectrum disorders and ADHD.</p>
                </div>
            </div>
            <!--second-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist.jpeg">
                </div>
                <div class="therapist-info">
                    <h2>Rachael Sofian, Psychotherapist</h2>
                    <p>A trained artist before going to graduate school for Psychology, Rachael has exhibited her work in local art galleries and has created album art for local PNW bands. She brings these worlds together in her therapeutic work, helping her clients learn to express themselves with confidence.Rachael has partnered with the Seattle Children’s Hospital Gender Clinic to provide gender affirming therapeutic and medical care for trans and non binary youth. She serves Seattle Public Schools and King County in an advisory capacity to improve the quality of healthcare of trans youth in Seattle schools. She also provides guest lectures for Psychology students at local universities. Rachael excels at providing art and play therapy, in addition to CBT. She is also experienced in navigating Seattle public school systems with special focus on IEP and 504 plan implementation.</p>

                </div>
            </div>          
        </div>

        <div class="main-items">
            <!--third-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist3.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Jennie Ketcham Crooks, Psychotherapist</h2>
                    <p>Jennie oversees the master’s and doctoral level clinical mental health counseling and clinical psychology internship programs at SAS. She is also currently in the early stages of developing outpatient psychiatric residency/fellowship programs that will allow us to expand our low-fee services, offering psychiatric medication management in addition to therapy, and providing training to MDs, DOs, and DNPs.Prior to joining the practice Jennie was lead medical social worker at the Polyclinic, a department and role within the Polyclinic that she founded and developed. Jennie has also spent a substantial amount of time involved in research at the University of Washington, has been a guest lecturer at Harvard University, and has been an invited guest on a number of popular podcasts.</p>
                </div>

            </div>
            <!--fourth-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist4.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Misty Yi Tu, Medical Director</h2>
                    <p>Misty is an expert in the biological foundations and psychopharmacology of anxiety disorders (including GAD, OCD, and PTSD) as well as related conditions such as depression, substance abuse, bipolar disorder, and ADHD.Prior to founding the Psychiatry and Psychopharmacology Department at Seattle Anxiety Specialists, Misty was the Senior Medical Director for Psychiatry and Behavioral Health for Blue Cross Blue Shield Minnesota where she was responsible for clinical programming and led a high complexity case unit focusing on finding better approaches to care for patients with more complicated needs.Misty is also dual board certified – a diplomat both of the American Board of Psychiatry and Neurology and the American Board of Preventive and Addiction Medicine. </p>
                </div>
            </div>          
        </div>

        <div class="main-items">
            <!--fifth-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist5.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Chris Russo, Psychotherapist</h2>
                    <p>Prior to joining the practice, Chris worked extensively in developing and implementing experiential-based therapy programs designed to ease stress and anxiety. He is trained in advanced Cognitive Behavioral Therapy (CBT) through programs at the University of Washington and the Medical University of South Carolina. In addition to his work at Seattle Anxiety Specialists, Chris has worked with non-profits to develop support groups for LGBTQ+ teens and has served as lead guide for a wilderness therapy program based in the rainforests of Hawaii. Chris also spent a substantial amount of time working as a mental health researcher at the University of Michigan.</p>
                </div>
            </div>
            <!--sixth-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist6.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Chandler Stevens, Psychotherapy Intern</h2>
                    <p>Chandler is a clinical intern at Seattle Anxiety Specialists for 2021-2022. He is working in our low-cost therapy program, providing individual and group therapy, currently via tele-health video-therapy sessions due to the COVID-19 Pandemic. Prior to his education and training to become a therapist, Chandler worked as a microbiology contractor for the US Environmental Protection Agency. He also spent a number of years working as a wellness professional, helping clients discover how embodied movement impacts their day to day lives.</p>
                </div>
            </div>          
        </div>

        <div class="main-items">
            <!--seventh-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist7.jpeg">
                </div>
                <div class="therapist-info">
                    <h2>Maya Hsu, Research Intern</h2>
                    <p>Maya is a research intern at Seattle Anxiety Specialists, working with Dr. Jennifer Ghahari on research related to psychology of the self and theories of the self that focus on the parts of the self and their interrelationships. Before joining our team, Maya worked as a research assistant at Evidence Based Treatment Centers of Seattle, working on research related to behavioral psychology, exposure therapy, and anxiety disorders. Maya is on track to graduate wither her Bachelor’s of Science in Psychology from the University of Washington in 2022, after which she hopes to pursue graduate school to become either a clinical psychologist or pursue a career in mental health research.</p>
                </div>
            </div>
            <!--eighth-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist8.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Jennifer Ghahari, Research Director</h2>
                    <p>Jennifer leads the research wing of our work, conducting ongoing quantitative research to help us better understand anxiety and improve the efficacy of the therapy we offer. Jennifer is a sociologist by training (she earned an inter-disciplinary doctorate from Rutgers). She has taught Sociology and Research Methods at the college level for over a decade at both public and private universities. She also worked as a quantitative research analyst and project manager for Fortune 500 companies, as well as non-profits such as The Nature Conservancy. Her published work focuses on issues at the intersection of Moral Psychology and ethical decision making.</p>
                </div>
            </div>          
        </div>

        <div class="intro">
            <h2>Our Administrative Team</h2>
            <p>Feel free to reach out to our administrative team if you have any questions.</p>
        </div>

        <div class="main-items">
            <!--ninth-therapist-->
            <div class="first-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist9.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Jonathan Boyd, Office Manager</h2>
                    <p>Jonathan serves as our office manager, coordinates patient care, and manages a variety of special projects at Seattle Anxiety Specialists. Prior to joining our practice, Jonathan worked as a project manager at Nexelis (Pacific Biomarkers) where he coordinated Phase I-III clinical trial testing projects. In addition to his many years of work supporting advancement in science and healthcare, Jonathan has an especially keen understanding of mental health and wellness that he has continued to develop following his BA in psychology from Seattle University.He also has experience working in the design field (home interior remodeling) and is an amateur horticulturalist in his spare time.</p>
                </div>
            </div>
            <!--tenth-therapist-->
            <div class="second-therapist">
                <div class="therapist-image">
                    <img src="./images/therapist10.jpg">
                </div>
                <div class="therapist-info">
                    <h2>Blake Thompson, Executive Director</h2>
                    <p>Blake serves as the executive director of the practice, as a clinical supervisor, and also provides individual and group psychotherapy.In addition to his work as a therapist, he has pursued a wide range of other professional interests, including curating a lecture series for a group of art galleries in the Portland area and working as a writer for Max Baucus (U.S. ambassador to China under the Obama Administration).Before pursuing graduate studies in psychology and becoming a therapist, Blake attended graduate school for philosophy and taught philosophy and logic for a time. He is currently pursuing research focused on the intersections of cognitive psychology and existentialism.</p>
                </div>
            </div>          
        </div>
    </main>
    <footer>
        <img src="./images/peace.png">
        <div class="footeri">
            <div class="information">
                <h2>INFORMATION</h2>
                <p><a href="./faqs.php">FAQs</a></p>
                <p>Privacy Policy</p>
            </div>
            <div class="contact">
                <h2>CONTACT</h2>
                <h3>964-502-3820</h3>
                <p>mindpeace@gmail.com</p>
                <p>3 Columbus Circle- 15/F, <b> New York </b>, NY 10019</p>
            </div>
            <div class="services">
                <h2>THERAPY SERVICES</h2>
                <p>Eating Disorders</p>
                <p>Couples Therapy</p>
                <p>Anxiety & Depression</p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
    }
?>
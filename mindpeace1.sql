-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 10:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindpeace1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `nr` int(20) NOT NULL,
  `therapist` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastName`, `email`, `city`, `nr`, `therapist`, `message`) VALUES
('260Fortesa', 'Fortesa', 'Krasniqi', 'fk48404@ubt-uni.net', 'Drenas', 49000000, ' Case Lovell', 'BLA BLA Message');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `image`, `uploaded`) VALUES
('question11', 'Can friendship help depression?', 'The benefits of friendship for people that are depressed are astounding.Relationships, although not a substitute for professional therapy, can help people dealing with depression with their healing.<br>            A strong friendship can help heal someone’s thinking habits and improve how the brain functions, helping them gain clarity into their situation, building up mental resilience and encouraging them to face and overcome what is causing them distress.', 'friendship.png', 'admin1'),
('question12', 'What are the most common problems in a relationship?', '<b>Infidelity</b> is increasingly becoming one of the most common relationship challenges in romantic relationships.<br>                    <b>Intimacy</b> - It involves the physical, social, emotional, mental and spiritual aspects as well as sexual components that can enhance the feelings of togetherness between the romantic couple<br>                    <b>Conflict</b> is part of any interpersonal relationship and occurs as a result of differences in opinions. People differ in values, dreams, desires and perceptions.<br>                    <b>Communication</b> - A good healthy romantic relationship is often characterised by good communication.', 'rela.png', 'admin2'),
('question13', 'Is there a cure for Anxiety?', '<b>The short answer... no, but...</b> <br>Anxiety is not curable, but there are ways to keep it from being a big problem.Getting the right treatment for your anxiety will help you dial back your out-of-control worries so that you can get on with life. There are many ways to do this. Scientific studies have helped healthcare providers sort out which ones work best for most people.', 'anx.png', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `faqs2`
--

CREATE TABLE `faqs2` (
  `id` varchar(50) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `uploaded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs2`
--

INSERT INTO `faqs2` (`id`, `question`, `answer`, `image`, `uploaded`) VALUES
('question21', 'How Parents Affect Their Child\'s Mental Health?', 'There’s even a dedicated term for these types of negative events — adverse childhood experiences (ACEs).Situations that are typically considered ACEs include the following.                    <br>• Being a victim of violence, abuse or neglect at home                    <br>• Having parents who are separated/divorced                    <br>• Substance abuse                    <br>• Mental health problems', 'parents.png', 'admin1'),
('question22', 'How will therapy help me?', 'Several benefits can emerge from participating in psychotherapy. Therapists can provide support, problem-solving skills, and enhanced coping strategies for issues such as depression, anxiety, eating disorders, relationship troubles, unresolved childhood issues, grief, stress management, body image issues and creative blocks. Many people also find that counselors can be tremendously helpful in managing personal growth, interpersonal relationships, family concerns, marriage issues, and the hassles of daily life. Therapists can provide a fresh perspective on difficult problems or point you in the direction of a solution.', 'talk.png', 'admin2'),
('question23', 'Are mood swings and anxiety the same thing?', '\"Mood swings\" has often been an incorrectly used term. People talk about those that are emotional as though they have mood swings when it truth their emotions are perfectly normal reactions to life events. Someone that cries often or someone that\'s angry isn\'t necessarily suffering from a \"swing\" simply because they have a strong emotion. They just have stronger emotions.', 'mood.png', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
('s01', 's1.jpg'),
('s02', 's2.jpg'),
('s03', 's3.jpg'),
('s04', 's4.jpg'),
('s05', 's5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff1`
--

CREATE TABLE `staff1` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff1`
--

INSERT INTO `staff1` (`id`, `name`, `image`, `profession`, `about`) VALUES
('001', 'Case Lovell', 'therapist2.jpeg', 'Psychotherapist', 'Case has worked for many years in a wide variety of settings, from psychiatric clinics to homeless shelters, providing psychotherapy to clients struggling with severe mental health issues. The clinical expertise he has developed in these settings, using evidence based methods such as Brief Solution Focused Therapy and Cognitive Behavioral Therapy (CBT), make him a great fit for clients with particularly acute and challenging symptoms such as panic disorder and chronic suicidal ideation.Case also has extensive experience managing the often complex interrelationships between anxiety, substance abuse, depression, and additional diagnoses such as Autism Spectrum disorders and ADHD.'),
('002', 'Rachael Sofian', 'therapist.jpeg', 'Psychotherapist', 'A trained artist before going to graduate school for Psychology, Rachael has exhibited her work in local art galleries and has created album art for local PNW bands. She brings these worlds together in her therapeutic work, helping her clients learn to express themselves with confidence.Rachael has partnered with the Seattle Children’s Hospital Gender Clinic to provide gender affirming therapeutic and medical care for trans and non binary youth. She serves Seattle Public Schools and King County in an advisory capacity to improve the quality of healthcare of trans youth in Seattle schools. She also provides guest lectures for Psychology students at local universities. Rachael excels at providing art and play therapy, in addition to CBT. She is also experienced in navigating Seattle public school systems with special focus on IEP and 504 plan implementation.'),
('003', 'Jennie Ketcham Crooks', 'therapist3.jpg', 'Psychotherapist', 'Jennie oversees the master’s and doctoral level clinical mental health counseling and clinical psychology internship programs at SAS. She is also currently in the early stages of developing outpatient psychiatric residency/fellowship programs that will allow us to expand our low-fee services, offering psychiatric medication management in addition to therapy, and providing training to MDs, DOs, and DNPs.Prior to joining the practice Jennie was lead medical social worker at the Polyclinic, a department and role within the Polyclinic that she founded and developed. Jennie has also spent a substantial amount of time involved in research at the University of Washington, has been a guest lecturer at Harvard University, and has been an invited guest on a number of popular podcasts.'),
('004', 'Misty Yi Tu', 'therapist4.jpg', ' Medical Director', 'Misty is an expert in the biological foundations and psychopharmacology of anxiety disorders (including GAD, OCD, and PTSD) as well as related conditions such as depression, substance abuse, bipolar disorder, and ADHD.Prior to founding the Psychiatry and Psychopharmacology Department at Seattle Anxiety Specialists, Misty was the Senior Medical Director for Psychiatry and Behavioral Health for Blue Cross Blue Shield Minnesota where she was responsible for clinical programming and led a high complexity case unit focusing on finding better approaches to care for patients with more complicated needs.Misty is also dual board certified – a diplomat both of the American Board of Psychiatry and Neurology and the American Board of Preventive and Addiction Medicine.'),
('005', 'Chris Russo', 'therapist5.jpg', 'Psychotherapist', 'Prior to joining the practice, Chris worked extensively in developing and implementing experiential-based therapy programs designed to ease stress and anxiety. He is trained in advanced Cognitive Behavioral Therapy (CBT) through programs at the University of Washington and the Medical University of South Carolina. In addition to his work at Seattle Anxiety Specialists, Chris has worked with non-profits to develop support groups for LGBTQ+ teens and has served as lead guide for a wilderness therapy program based in the rainforests of Hawaii. Chris also spent a substantial amount of time working as a mental health researcher at the University of Michigan.');

-- --------------------------------------------------------

--
-- Table structure for table `staff2`
--

CREATE TABLE `staff2` (
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff2`
--

INSERT INTO `staff2` (`id`, `name`, `image`, `profession`, `about`) VALUES
('006', 'Chandler Stevens', 'therapist6.jpg', 'Psychotherapy Intern', 'Chandler is a clinical intern at Seattle Anxiety Specialists for 2021-2022. He is working in our low-cost therapy program, providing individual and group therapy, currently via tele-health video-therapy sessions due to the COVID-19 Pandemic. Prior to his education and training to become a therapist, Chandler worked as a microbiology contractor for the US Environmental Protection Agency. He also spent a number of years working as a wellness professional, helping clients discover how embodied movement impacts their day to day lives.'),
('007', 'Maya Hsu', 'therapist7.jpeg', 'Research Intern', 'Maya is a research intern at Seattle Anxiety Specialists, working with Dr. Jennifer Ghahari on research related to psychology of the self and theories of the self that focus on the parts of the self and their interrelationships. Before joining our team, Maya worked as a research assistant at Evidence Based Treatment Centers of Seattle, working on research related to behavioral psychology, exposure therapy, and anxiety disorders. Maya is on track to graduate wither her Bachelor’s of Science in Psychology from the University of Washington in 2022, after which she hopes to pursue graduate school to become either a clinical psychologist or pursue a career in mental health research.'),
('008', 'Jennifer Ghahari', 'therapist8.jpg', 'Research Director', 'Jennifer leads the research wing of our work, conducting ongoing quantitative research to help us better understand anxiety and improve the efficacy of the therapy we offer. Jennifer is a sociologist by training (she earned an inter-disciplinary doctorate from Rutgers). She has taught Sociology and Research Methods at the college level for over a decade at both public and private universities. She also worked as a quantitative research analyst and project manager for Fortune 500 companies, as well as non-profits such as The Nature Conservancy. Her published work focuses on issues at the intersection of Moral Psychology and ethical decision making.'),
('009', 'Jonathan Boyd', 'therapist9.jpg	', 'Office Manager', 'Jonathan serves as our office manager, coordinates patient care, and manages a variety of special projects at Seattle Anxiety Specialists. Prior to joining our practice, Jonathan worked as a project manager at Nexelis (Pacific Biomarkers) where he coordinated Phase I-III clinical trial testing projects. In addition to his many years of work supporting advancement in science and healthcare, Jonathan has an especially keen understanding of mental health and wellness that he has continued to develop following his BA in psychology from Seattle University.He also has experience working in the design field (home interior remodeling) and is an amateur horticulturalist in his spare time.'),
('010', 'Blake Thompson', 'therapist10.jpg', 'Executive Director', 'Blake serves as the executive director of the practice, as a clinical supervisor, and also provides individual and group psychotherapy.In addition to his work as a therapist, he has pursued a wide range of other professional interests, including curating a lecture series for a group of art galleries in the Portland area and working as a writer for Max Baucus (U.S. ambassador to China under the Obama Administration).Before pursuing graduate studies in psychology and becoming a therapist, Blake attended graduate school for philosophy and taught philosophy and logic for a time. He is currently pursuing research focused on the intersections of cognitive psychology and existentialism.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `email`, `password`, `password2`, `role`) VALUES
('123', 'joadmin', 'joadmin', 'joadmin@gmail.com', 'Joadmin123', 'Joadmin123', 0),
('12', 'admin', 'admin', 'admin@gmail.com', 'Admin123', 'Admin123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

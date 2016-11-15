<?php
include "Event.php";
include "User.php";
include "Address.php";
include "Interest.php";
include "YaasConnector.php";
include "thesaurus.php";
include "Notification.php";
include "Booking.php";
include "Payment.php";

$address1 = new Address("Uni Mannheim", "Universitat Strasse", 1, "Mannheim", 168159, "Germany");

$description4 = "SouJava is running a Raspberry Pi and Java hackathon at Campus Party, the week-long technology gathering of geeks, developers, gamers, scientists, and students in Brazil. Sponsored by Oracle Technology Network, the hackathon is designed for enthusiasts who want to create IoT projects with Raspberry Pi and Java. The objectives are for attendees to learn, practice, and innovative while creating an IoT project

Java evangelist Angela Caicedo opened the hackathon with an overview of IoT and Java development. Over two days, participants will build teams, brainstorm, attend training, get a kit from the organizers and hack on their own project. Onsite experts will be available to help participants. They are veteran Java developers of web, enterprise and embedded development. Among them are GlobalCode founder Vinicius Senger, senior developer Rubens Saraiva, SouJava leader Bruno Souza, Java Champion Yara Senger, product manager Bruno Borges and senior mobile developer Ricardo Ogliari
 
Learn more about IoT:
- Raspberry Pi and Java Tutorials: Working with Java Embedded 8 by Using the Raspberry Pi Series
- IoT community page highlighting projects, discussions, hobbyists, and experts";

$description5 = "PHP is a widely used programming language which works on the principal of server side scripting to produce dynamic Web pages. It can be easily integrated with HTML and SQL to produce these dynamic web pages, and is often used to process the contents of a Web page form as it is more secure and reliable than JavaScript. This free online PHP programming course gives an overview of how PHP programming works in the Web environment and you will learn what certain commands and lines of code infer within a .php file and review the resultant effect on client side machines. MySQL is an open-source relational database management system which uses structured query language requests for working with data. You will learn how PHP can be combined with MySQL to create a very powerful online database engine. This free online PHP programming course will be of great interest to IT and Web development professionals who would like to learn more about using PHP and MySQL to integrate database functions into Websites, and to learners who would like to learn more about the functionality of PHP and MySQL.
CERTIFICATION
To qualify for your official ALISON Diploma, Certificate or PDF you must study and complete all modules and score 80% or more in each of the course assessments. A link to purchase your Diploma certificate will then appear under the My Certificates heading of your My Account page.

LEARNING OUTCOMES
Learning outcomes:
- Understanding the basics of the PHP;
- Examine how web pages are developed using PHP;
- Learn certain specific PHP variables and syntax;
- Better understanding of how PHP, HTML and MYSQL work together to produce dynamic pages.";


$description6 = "C is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language. It keeps fluctuating at number one scale of popularity along with Java programming language, which is also equally popular and most widely used among modern software programmers.

Audience
This tutorial is designed for software programmers with a need to understand the C programming language starting from scratch. This tutorial will give you enough understanding on C programming language from where you can take yourself to higher level of expertise.

Prerequisites
Before proceeding with this tutorial, you should have a basic understanding of Computer Programming terminologies. A basic understanding of any of the programming languages will help you in understanding the C programming concepts and move fast on the learning track.";

$event4 = new Event(4, $eventtypes["Hackathon"], "Internet of Things (IoT) Hackathon in Germany", $description4, "04.12.2016 14:50", $address1, $interest["Technology"], 0, $statuses["Published"], "http://www.di-ip.net/wp-content/uploads/2016/04/bestbooks-for-programming-java-768x432.jpg");

$event5 = new Event(5, $eventtypes["Online-course"], "Introduction to PHP and MySQL Programming", $description5, "05.12.2016 15:00", $address1, $interest["Technology"], 0, $statuses["Published"], "http://123shivcode.net/wp-content/uploads/2015/11/PHP-Mysql.png");

$event6 = new Event(6, $eventtypes["Tutorial"], "C Tutorial", $description6, "06.12.2016 12:00", $address1, $interest["Technology"], 0, $statuses["Published"], "https://i.ytimg.com/vi/4gkzG9eaWi0/hqdefault.jpg");


$user1 = new User(111,"Andrena Objects","leonidgunko1@yandex.ru","213322","", $address1, $genders["Mr."], "09.07.1992", $interest["Technology"], "http://wiki.eclipse.org/images/0/07/Andrena-logo-exp-RGB.png");

$event4->deleteEvent();
$user1->deleteUser();	
$user1->postUser();	

$user1->organizeEvent($event4);
$user1->organizeEvent($event5);
$user1->organizeEvent($event6);
?>
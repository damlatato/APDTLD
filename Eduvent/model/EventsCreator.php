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
 
Learn more about IoT:
- Raspberry Pi and Java Tutorials: Working with Java Embedded 8 by Using the Raspberry Pi Series
- IoT community page highlighting projects, discussions, hobbyists, and experts";

$description5 = "PHP is a widely used programming language which works on the principal of server side scripting to produce dynamic Web pages. It can be easily integrated with HTML and SQL to produce these dynamic web pages, and is often used to process the contents of a Web page form as it is more secure and reliable than JavaScript. This free online PHP programming course gives an overview of how PHP programming works in the Web environment and you will learn what certain commands and lines of code infer within a .php file and review the resultant effect on client side machines. MySQL is an open-source relational database management system which uses structured query language requests for working with data. You will learn how PHP can be combined with MySQL to create a very powerful online database engine.";


$description6 = "C is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language. It keeps fluctuating at number one scale of popularity along with Java programming language, which is also equally popular and most widely used among modern software programmers.

Audience
This tutorial is designed for software programmers with a need to understand the C programming language starting from scratch. This tutorial will give you enough understanding on C programming language from where you can take yourself to higher level of expertise.";

$description7 = "Swift is a new programming language developed by Apple Inc for iOS and OS X development. Swift adopts the best of C and Objective-C, without the constraints of C compatibility.

Swift uses the same runtime as the existing Obj-C system on Mac OS and iOS, which enables Swift programs to run on many existing iOS 6 and OS X 10.8 platforms.

Audience
This tutorial is designed for software programmers who would like to learn the basics of Swift programming language from scratch. This tutorial will give you enough understanding on Swift programming language from where you can take yourself to higher levels of expertise.";


$event4 = new Event(4, $eventtypes["Hackathon"], "Internet of Things (IoT) Hackathon in Germany", $description4, "04.12.2016 14:50", $address1, $interest["Technology"], 0, $statuses["Published"], "http://www.di-ip.net/wp-content/uploads/2016/04/bestbooks-for-programming-java-768x432.jpg");

$event5 = new Event(5, $eventtypes["Online-course"], "Introduction to PHP and MySQL Programming", $description5, "05.12.2016 15:00", $address1, $interest["Technology"], 0, $statuses["Published"], "http://123shivcode.net/wp-content/uploads/2015/11/PHP-Mysql.png");

$event6 = new Event(6, $eventtypes["Tutorial"], "C Tutorial", $description6, "06.12.2016 12:00", $address1, $interest["Technology"], 0, $statuses["Published"], "https://i.ytimg.com/vi/4gkzG9eaWi0/hqdefault.jpg");

$event7 = new Event(7, $eventtypes["Tutorial"], "Swift Tutorial", $description7, "07.12.2016 13:00", $address1, $interest["Technology"], 0, $statuses["Published"], "http://itcambo.com/wp/wp-content/uploads/2015/04/Bootstrap9.jpg");


$user1 = new User(111,"Andrena Objects","leonidgunko1@yandex.ru","213322","", $address1, $genders["Mr."], "09.07.1992", $interest["Technology"], "http://wiki.eclipse.org/images/0/07/Andrena-logo-exp-RGB.png");

$event4->deleteEvent();
$event5->deleteEvent();
$event6->deleteEvent();
$event7->deleteEvent();
$user1->deleteUser();	
$user1->postUser();	

$user1->organizeEvent($event4);
$user1->organizeEvent($event5);
$user1->organizeEvent($event6);
$user1->organizeEvent($event7);
?>
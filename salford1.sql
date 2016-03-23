/*
SQLyog Community v11.52 (32 bit)
MySQL - 5.6.17 : Database - salford
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`salford` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `salford`;

/*Table structure for table `adminlogin` */

DROP TABLE IF EXISTS `adminlogin`;

CREATE TABLE `adminlogin` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `adminlogin` */

insert  into `adminlogin`(`a_id`,`firstname`,`lastname`,`email`,`password`) values (1,'pushpa','d','p@gmail.com','202cb962ac59075b964b07152d234b70'),(2,'hello','c','h@gmail.com','123');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fb_id` int(11) DEFAULT NULL,
  `fb_u_id` int(11) DEFAULT NULL,
  `feedback_options` varchar(100) DEFAULT NULL,
  `comments` text,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fb_id`,`fb_u_id`,`feedback_options`,`comments`,`created_at`) values (NULL,NULL,'Excellent and very confident','jhgjhj',NULL),(NULL,NULL,'Good and some what confident','fgfg',NULL),(NULL,0,'Good and some what confident','fgfg',NULL),(NULL,0,'Good and some what confident','hgfh',NULL),(NULL,0,'Average and still not sure','ghjhj',NULL),(NULL,6,'Average and still not sure','ghjhj',NULL),(NULL,6,'Average and still not sure','',NULL);

/*Table structure for table `general_information` */

DROP TABLE IF EXISTS `general_information`;

CREATE TABLE `general_information` (
  `gi_id` int(11) NOT NULL AUTO_INCREMENT,
  `gi_u_id` int(10) NOT NULL,
  `name_oraganization` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `expereince` varchar(50) DEFAULT NULL,
  `other_info` varchar(50) DEFAULT NULL,
  `size_enterprise` varchar(50) DEFAULT NULL,
  `type_enterprise` varchar(50) DEFAULT NULL,
  `services_enterprise` varchar(50) DEFAULT NULL,
  `turover_enterprise` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`gi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `general_information` */

insert  into `general_information`(`gi_id`,`gi_u_id`,`name_oraganization`,`designation`,`expereince`,`other_info`,`size_enterprise`,`type_enterprise`,`services_enterprise`,`turover_enterprise`,`updated_at`,`updated_by`,`created_at`) values (1,1,'pushpa','siva1456','hello','hfh123','small','private','bgf','micro','2016-03-09 00:00:00',1,'0000-00-00 00:00:00'),(2,1,'htghgf','hggdh','ghgfh','hfh','hgh','hfh','hfgh','hgh','2016-03-09 00:00:00',1,'0000-00-00 00:00:00'),(3,3,'htghgf','hggdh','ghgfh','','small','private','gfsag','micro','2016-03-23 06:15:55',3,'0000-00-00 00:00:00'),(4,4,'hello','12','12','123','micro','private','hello123','small','2016-03-24 11:12:16',4,'0000-00-00 00:00:00'),(6,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(7,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(8,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(9,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(10,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(11,1,'htghgf','dfdf','dfsdf','','','','','','0000-00-00 00:00:00',0,'2016-03-17 03:19:05'),(12,6,'ab','bc','cd','de','micro','public','q','medium','2016-03-24 07:35:56',6,NULL);

/*Table structure for table `q_answers` */

DROP TABLE IF EXISTS `q_answers`;

CREATE TABLE `q_answers` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_u_id` int(50) NOT NULL,
  `stage` int(11) DEFAULT NULL,
  `question_id` varchar(50) DEFAULT NULL,
  `q_answers` varchar(50) DEFAULT NULL,
  `q_unansewred` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=379 DEFAULT CHARSET=latin1;

/*Data for the table `q_answers` */

insert  into `q_answers`(`con_id`,`con_u_id`,`stage`,`question_id`,`q_answers`,`q_unansewred`,`created_at`,`status`) values (1,1,1,'werwr','rewre','ewrew','2016-03-09 00:00:00',1),(233,4,2,'Q0','Q0_1','','2016-03-23 22:42:27',1),(234,4,2,'Q1','Q1_1','','2016-03-23 22:42:27',1),(235,4,2,'Q2','Q2_1','','2016-03-23 22:42:27',1),(236,4,2,'Q3','Q3_1','','2016-03-23 22:42:27',1),(237,4,2,'Q4','Q4_1','','2016-03-23 22:42:27',1),(238,4,2,'Q5','Q5_1','','2016-03-23 22:42:27',1),(239,4,2,'Q6','Q6_1','','2016-03-23 22:42:27',1),(240,4,2,'Q7','Q7_1','','2016-03-23 22:42:27',1),(241,4,2,'Q8','Q8_1','','2016-03-23 22:42:27',1),(242,4,2,'Q9','Q9_1','','2016-03-23 22:42:27',1),(243,4,2,'Q10','Q10_1','','2016-03-23 22:42:27',1),(244,4,2,'Q11','Q11_1','','2016-03-23 22:42:27',1),(245,4,2,'Q15','Q15_1','','2016-03-23 22:42:27',1),(246,4,3,'Q16','Q16_1','','2016-03-23 22:42:39',1),(247,4,3,'Q17','Q17_1','','2016-03-23 22:42:39',1),(248,4,3,'Q18','Q18_1','','2016-03-23 22:42:39',1),(364,6,2,'Q2','Q2_3',NULL,'2016-03-24 07:06:02',1),(365,6,2,'Q3','Q3_3',NULL,'2016-03-24 07:06:02',1),(366,6,2,'Q4','Q4_2',NULL,'2016-03-24 07:06:02',1),(367,6,2,'Q5','Q5_3',NULL,'2016-03-24 07:06:02',1),(368,6,2,'Q6','Q6_3',NULL,'2016-03-24 07:06:02',1),(369,6,2,'Q7','Q7_3',NULL,'2016-03-24 07:06:02',1),(370,6,2,'Q8','Q8_1',NULL,'2016-03-24 07:06:02',1),(371,6,2,'Q9','Q9_2',NULL,'2016-03-24 07:06:02',1),(372,6,2,'Q10','Q10_3',NULL,'2016-03-24 07:06:02',1),(373,6,2,'Q11','Q11_2',NULL,'2016-03-24 07:06:02',1),(374,6,2,'Q12','Q12_2',NULL,'2016-03-24 07:06:02',1),(375,6,2,'Q13','Q13_3',NULL,'2016-03-24 07:06:02',1),(376,6,2,'Q14','Q14_2',NULL,'2016-03-24 07:06:02',1),(377,6,2,'Q15','Q15_2',NULL,'2016-03-24 07:06:03',1),(378,6,3,'Q17','Q17_2',NULL,'2016-03-24 07:06:05',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`created_by`,`updated_by`,`firstname`,`lastname`,`email`,`u_password`,`mobile`,`date_of_birth`,`address`,`gender`,`created_at`,`updated_at`,`status`) values (3,1,1,'john','cena','john@gmail.com','d41d8cd98f00b204e9800998ecf8427e','789456120','1020',' 2','male','2016-03-23 05:38:50','2016-03-23 05:38:54',1),(4,4,0,'hai','c','h@gmail.com','d41d8cd98f00b204e9800998ecf8427e',' hgh','12_3','   gdfg','male','0000-00-00 00:00:00','0000-00-00 00:00:00',0),(6,2,2,'pushpa','d','dscsdc@gmail.com','202cb962ac59075b964b07152d234b70','123456','12/3/14','ddsf','female','2016-03-23 23:12:41','2016-03-23 23:12:41',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

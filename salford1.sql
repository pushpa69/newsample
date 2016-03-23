/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.5.8-log : Database - salford
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `adminlogin` */

insert  into `adminlogin`(`a_id`,`firstname`,`lastname`,`email`,`password`) values (1,'salford','admin','admin@gmail.com','1111');

/*Table structure for table `confirmation` */

DROP TABLE IF EXISTS `confirmation`;

CREATE TABLE `confirmation` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_u_id` int(50) NOT NULL,
  `stage` int(11) DEFAULT NULL,
  `question_id` varchar(50) DEFAULT NULL,
  `q_answers` varchar(50) DEFAULT NULL,
  `q_unansewred` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `confirmation` */

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `general_information` */

insert  into `general_information`(`gi_id`,`gi_u_id`,`name_oraganization`,`designation`,`expereince`,`other_info`,`size_enterprise`,`type_enterprise`,`services_enterprise`,`turover_enterprise`,`updated_at`,`updated_by`,`created_at`) values (16,15,'vijay','developer','1 year','123','micro','private','hai','micro','2016-03-22 07:28:04',15,'0000-00-00 00:00:00'),(17,16,'abc1','asa','abc','s','micro','private','wrw','micro','2016-03-23 02:53:07',16,'0000-00-00 00:00:00'),(21,5,'abc1','asa','pqr','nothing','small','public','fsdg','small','2016-03-23 10:34:02',5,'0000-00-00 00:00:00'),(22,17,'abc','developer','1 year','123','medium','public','q','small','2016-03-23 11:40:51',17,NULL),(23,20,'abc','developer','pqr','ghi','small','private','s','small','2016-03-23 02:51:52',20,NULL),(24,22,'abc','xyz','1 year','ghi','small','public','sdff','micro','2016-03-23 03:12:52',22,NULL),(25,23,'abc1','xyz','1 year','ghi','micro','public','hg','small','2016-03-23 03:16:33',23,NULL),(26,24,'vijay','developer','1 year','ghi','medium','private','jj','micro','2016-03-23 03:20:27',24,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=322 DEFAULT CHARSET=latin1;

/*Data for the table `q_answers` */

insert  into `q_answers`(`con_id`,`con_u_id`,`stage`,`question_id`,`q_answers`,`q_unansewred`,`created_at`,`status`) values (1,1,1,'werwr','rewre','ewrew','2016-03-09 00:00:00',1),(2,3,2,'Q0','Q0_1,Q0_2,Q0_3','ewrew','2016-03-09 00:00:00',1),(3,3,2,'Q1','Q1_3,Q1_4','ewrew','2016-03-09 00:00:00',1),(4,3,2,'Q2','Q2_2,Q2_3','ewrew','2016-03-09 00:00:00',1),(5,3,2,'Q4','Q4_3,Q4_4','ewrew','2016-03-09 00:00:00',1),(6,3,2,'Q6','Q6_1,Q6_2','ewrew','2016-03-09 00:00:00',1),(7,3,2,'Q9','Q9_2,Q9_3','ewrew','2016-03-09 00:00:00',1),(8,3,2,'Q12','Q12_1,Q12_2,Q12_3','ewrew','2016-03-09 00:00:00',1),(9,3,2,'Q14','Q14_1,Q14_2','ewrew','2016-03-09 00:00:00',1),(10,3,2,'Q15','Q15_1,Q15_2','ewrew','2016-03-09 00:00:00',1),(11,3,2,'hid','','ewrew','2016-03-09 00:00:00',1),(79,7,2,'Q0','Q0_1','','0000-00-00 00:00:00',1),(80,7,2,'Q1','Q1_1','','0000-00-00 00:00:00',1),(81,7,2,'Q2','Q2_1','','0000-00-00 00:00:00',1),(82,7,2,'Q3','Q3_1','','0000-00-00 00:00:00',1),(83,7,2,'Q4','Q4_1','','0000-00-00 00:00:00',1),(84,7,2,'Q5','Q5_1','','0000-00-00 00:00:00',1),(85,7,2,'Q6','Q6_1','','0000-00-00 00:00:00',1),(86,7,2,'Q7','Q7_1','','0000-00-00 00:00:00',1),(87,7,2,'Q8','Q8_1','','0000-00-00 00:00:00',1),(88,7,2,'Q9','Q9_1','','0000-00-00 00:00:00',1),(89,7,2,'Q10','Q10_1','','0000-00-00 00:00:00',1),(90,7,2,'Q11','Q11_1','','0000-00-00 00:00:00',1),(91,7,2,'Q12','Q12_1','','0000-00-00 00:00:00',1),(92,7,2,'Q13','Q13_1','','0000-00-00 00:00:00',1),(93,7,2,'Q14','Q14_1','','0000-00-00 00:00:00',1),(94,7,2,'Q15','Q15_1','','0000-00-00 00:00:00',1),(95,7,3,'Q16','Q16_1','','2016-03-22 10:22:27',1),(96,7,3,'Q17','Q17_1','','2016-03-22 10:22:27',1),(97,7,3,'Q18','Q18_1','','2016-03-22 10:22:27',1),(98,13,2,'Q0','Q0_1','','2016-03-22 16:48:37',1),(99,13,2,'Q1','Q1_1','','2016-03-22 16:48:37',1),(100,13,2,'Q2','Q2_1','','2016-03-22 16:48:37',1),(101,13,2,'Q3','Q3_1','','2016-03-22 16:48:37',1),(102,13,2,'Q4','Q4_1','','2016-03-22 16:48:37',1),(103,13,2,'Q5','Q5_1','','2016-03-22 16:48:37',1),(104,13,2,'Q6','Q6_1','','2016-03-22 16:48:37',1),(105,13,2,'Q7','Q7_1','','2016-03-22 16:48:37',1),(106,13,2,'Q8','Q8_1','','2016-03-22 16:48:37',1),(107,13,2,'Q9','Q9_2','','2016-03-22 16:48:37',1),(108,13,2,'Q10','Q10_3','','2016-03-22 16:48:37',1),(109,13,2,'Q11','Q11_2','','2016-03-22 16:48:37',1),(110,13,2,'Q12','Q12_3','','2016-03-22 16:48:37',1),(111,13,2,'Q13','Q13_2','','2016-03-22 16:48:37',1),(112,13,2,'Q14','Q14_2','','2016-03-22 16:48:37',1),(113,13,2,'Q15','Q15_2','','2016-03-22 16:48:37',1),(114,13,3,'Q16','Q16_2','','2016-03-22 16:48:43',1),(115,13,3,'Q17','Q17_2','','2016-03-22 16:48:44',1),(116,13,3,'Q18','Q18_2','','2016-03-22 16:48:44',1),(117,14,2,'Q0','Q0_1','','2016-03-22 17:23:03',1),(118,14,2,'Q1','Q1_4','','2016-03-22 17:23:03',1),(119,14,2,'Q4','Q4_1','','2016-03-22 17:23:03',1),(120,14,2,'Q10','Q10_1','','2016-03-22 17:23:04',1),(121,14,2,'Q14','Q14_1','','2016-03-22 17:23:04',1),(122,14,2,'Q15','Q15_8','','2016-03-22 17:23:04',1),(123,14,3,'Q16','Q16_1','','2016-03-22 17:23:10',1),(124,14,3,'Q17','Q17_1','','2016-03-22 17:23:10',1),(125,14,3,'Q18','Q18_3','','2016-03-22 17:23:10',1),(135,4,2,'Q0','Q0_3','','2016-03-22 18:07:51',1),(136,4,2,'Q1','Q1_4','','2016-03-22 18:07:51',1),(137,4,2,'Q2','Q2_1','','2016-03-22 18:07:51',1),(138,4,2,'Q3','Q3_3','','2016-03-22 18:07:51',1),(139,4,2,'Q4','Q4_3','','2016-03-22 18:07:51',1),(140,4,2,'Q6','Q6_3','','2016-03-22 18:07:51',1),(141,4,2,'Q9','Q9_2','','2016-03-22 18:07:51',1),(142,4,2,'Q13','Q13_4','','2016-03-22 18:07:51',1),(143,4,2,'Q15','Q15_3,Q15_6','','2016-03-22 18:07:51',1),(144,4,3,'Q16','Q16_1','','2016-03-22 18:08:00',1),(145,4,3,'Q17','Q17_1','','2016-03-22 18:08:00',1),(146,4,3,'Q18','Q18_4','','2016-03-22 18:08:00',1),(212,5,2,'Q1','Q1_5',NULL,'2016-03-23 10:34:06',1),(213,5,2,'Q2','Q2_1',NULL,'2016-03-23 10:34:06',1),(214,5,2,'Q3','Q3_1',NULL,'2016-03-23 10:34:06',1),(215,5,3,'Q16','Q16_1',NULL,'2016-03-23 10:34:07',1),(216,5,3,'Q17','Q17_2',NULL,'2016-03-23 10:34:07',1),(217,5,3,'Q18','Q18_1',NULL,'2016-03-23 10:34:07',1),(224,17,2,'Q0','Q0_4',NULL,'2016-03-23 11:40:55',1),(225,17,2,'Q1','Q1_1',NULL,'2016-03-23 11:40:55',1),(226,17,2,'Q10','Q10_1',NULL,'2016-03-23 11:40:55',1),(227,17,2,'Q11','Q11_1',NULL,'2016-03-23 11:40:55',1),(228,17,2,'Q14','Q14_1',NULL,'2016-03-23 11:40:55',1),(229,17,3,'Q18','Q18_4',NULL,'2016-03-23 11:40:58',1),(239,20,2,'Q0','Q0_3',NULL,'2016-03-23 13:14:41',1),(240,20,2,'Q2','Q2_1,Q2_2',NULL,'2016-03-23 13:14:41',1),(241,20,2,'Q7','Q7_1,Q7_2,Q7_3,Q7_4',NULL,'2016-03-23 13:14:41',1),(242,20,2,'Q10','Q10_2',NULL,'2016-03-23 13:14:41',1),(246,20,3,'Q17','Q17_1,Q17_2,Q17_4',NULL,'2016-03-23 13:17:10',1),(247,20,3,'Q19','Q19_4',NULL,'2016-03-23 13:17:10',1),(248,1,3,'Q17','Q17_1,Q17_2,Q17_4',NULL,'2016-03-23 13:22:16',1),(249,1,3,'Q19','Q19_4',NULL,'2016-03-23 13:22:16',1),(250,21,2,'Q16','Q16_8',NULL,'2016-03-23 14:31:35',1),(252,21,3,'Q18','Q18_1',NULL,'2016-03-23 14:33:28',1),(253,21,3,'Q19','Q19_4',NULL,'2016-03-23 14:33:28',1),(271,16,2,'Q0','Q0_1',NULL,'2016-03-23 14:54:40',1),(272,16,2,'Q1','Q1_4',NULL,'2016-03-23 14:54:40',1),(273,16,2,'Q2','Q2_2,Q2_3',NULL,'2016-03-23 14:54:40',1),(274,16,2,'Q3','Q3_1,Q3_2',NULL,'2016-03-23 14:54:40',1),(275,16,2,'Q4','Q4_3,Q4_4',NULL,'2016-03-23 14:54:40',1),(276,16,2,'Q5','Q5_3',NULL,'2016-03-23 14:54:40',1),(277,16,2,'Q6','Q6_2',NULL,'2016-03-23 14:54:40',1),(278,16,2,'Q7','Q7_1,Q7_3',NULL,'2016-03-23 14:54:40',1),(279,16,2,'Q8','Q8_2',NULL,'2016-03-23 14:54:40',1),(280,16,2,'Q9','Q9_1,Q9_2',NULL,'2016-03-23 14:54:40',1),(281,16,2,'Q10','Q10_3',NULL,'2016-03-23 14:54:40',1),(282,16,2,'Q11','Q11_1',NULL,'2016-03-23 14:54:40',1),(283,16,2,'Q12','Q12_2',NULL,'2016-03-23 14:54:40',1),(284,16,2,'Q13','Q13_2',NULL,'2016-03-23 14:54:40',1),(285,16,2,'Q14','Q14_1',NULL,'2016-03-23 14:54:40',1),(286,16,3,'Q17','Q17_2',NULL,'2016-03-23 14:54:42',1),(287,16,3,'Q18','Q18_3',NULL,'2016-03-23 14:54:42',1),(288,22,2,'Q0','Q0_2',NULL,'2016-03-23 15:13:03',1),(289,22,2,'Q1','Q1_2',NULL,'2016-03-23 15:13:03',1),(290,22,2,'Q4','Q4_3',NULL,'2016-03-23 15:13:03',1),(291,22,2,'Q7','Q7_4',NULL,'2016-03-23 15:13:03',1),(292,22,2,'Q10','Q10_3',NULL,'2016-03-23 15:13:03',1),(293,22,2,'Q12','Q12_2',NULL,'2016-03-23 15:13:03',1),(294,22,2,'Q16','Q16_8',NULL,'2016-03-23 15:13:03',1),(295,22,3,'Q19','Q19_2',NULL,'2016-03-23 15:13:08',1),(296,23,2,'Q0','Q0_4',NULL,'2016-03-23 15:16:45',1),(297,23,2,'Q1','Q1_2',NULL,'2016-03-23 15:16:45',1),(298,23,2,'Q5','Q5_1',NULL,'2016-03-23 15:16:45',1),(299,23,2,'Q9','Q9_1',NULL,'2016-03-23 15:16:45',1),(300,23,2,'Q13','Q13_3',NULL,'2016-03-23 15:16:45',1),(301,23,2,'Q16','Q16_8',NULL,'2016-03-23 15:16:45',1),(302,23,3,'Q19','Q19_2',NULL,'2016-03-23 15:16:49',1),(303,24,2,'Q0','Q0_1',NULL,'2016-03-23 15:20:52',1),(304,24,2,'Q1','Q1_1',NULL,'2016-03-23 15:20:52',1),(305,24,2,'Q2','Q2_1',NULL,'2016-03-23 15:20:52',1),(306,24,2,'Q3','Q3_1',NULL,'2016-03-23 15:20:52',1),(307,24,2,'Q4','Q4_1',NULL,'2016-03-23 15:20:52',1),(308,24,2,'Q5','Q5_1',NULL,'2016-03-23 15:20:52',1),(309,24,2,'Q6','Q6_1',NULL,'2016-03-23 15:20:52',1),(310,24,2,'Q8','Q8_1',NULL,'2016-03-23 15:20:52',1),(311,24,2,'Q9','Q9_1',NULL,'2016-03-23 15:20:52',1),(312,24,2,'Q10','Q10_1',NULL,'2016-03-23 15:20:52',1),(313,24,2,'Q11','Q11_1',NULL,'2016-03-23 15:20:52',1),(314,24,2,'Q12','Q12_1',NULL,'2016-03-23 15:20:52',1),(315,24,2,'Q13','Q13_2',NULL,'2016-03-23 15:20:52',1),(316,24,2,'Q14','Q14_2',NULL,'2016-03-23 15:20:52',1),(317,24,2,'Q15','Q15_2',NULL,'2016-03-23 15:20:52',1),(318,24,2,'Q16','Q16_7',NULL,'2016-03-23 15:20:52',1),(319,24,3,'Q17','Q17_2',NULL,'2016-03-23 15:20:59',1),(320,24,3,'Q18','Q18_2',NULL,'2016-03-23 15:20:59',1),(321,24,3,'Q19','Q19_4',NULL,'2016-03-23 15:20:59',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`created_by`,`updated_by`,`firstname`,`lastname`,`email`,`u_password`,`mobile`,`date_of_birth`,`address`,`gender`,`created_at`,`updated_at`,`status`) values (1,1,1,'vijay','raghava reddy','gvijayaraghavareddy7@gmail.com','202cb962ac59075b964b07152d234b70','9632587410','05/07/1994','hyderabad','male','2016-03-22 16:40:33','2016-03-22 16:40:33',1),(2,1,1,'bayapu','reddy','bayapureddy@gmail.com','68053af2923e00204c3ca7c6a3150cf7','789456123','05/07/1990','hyderabad','male','2016-03-22 16:42:18','2016-03-22 16:42:18',1),(3,1,1,'puspa','d','pushpa@gmail.com','68053af2923e00204c3ca7c6a3150cf7','7891234560','01/02/1994','kukatpally','female','2016-03-22 16:43:32','2016-03-22 16:43:32',1),(15,1,1,'bayapu','ortan','admin1@gmail.com','1955b38f13116a57e4de2134a139d139','8500226782','05/06/1993',' fu','male','2016-03-22 19:08:38','2016-03-22 19:08:38',1),(16,1,1,'bayapu','reddy','h@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','05/06/1993','vfg','male','2016-03-22 19:29:11','2016-03-22 19:29:11',1),(17,1,1,'randy','ortan','randy@gmail.com','202cb962ac59075b964b07152d234b70','123','10/06/1880','123','male','2016-03-23 11:38:43','2016-03-23 11:38:43',1),(18,17,17,'shasi','vardhan reddy','shasi@gmail.com','d41d8cd98f00b204e9800998ecf8427e','123123123','05/06/1993','  123','male','2016-03-23 11:50:23','2016-03-23 11:50:23',1),(20,1,1,'dean','ambrose','ambrose@gmail.com','4f9fecabbd77fba02d2497f880f44e6f','879654130','10/06/1880',' hyderabd','male','2016-03-23 12:08:38','2016-03-23 12:08:38',1),(21,1,1,'bayapu','cena','k@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','05/06/1993','v','female','2016-03-23 14:24:04','2016-03-23 14:24:04',1),(22,1,1,'bayapu','cena','a@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','10/06/1880','gfg','female','2016-03-23 15:08:37','2016-03-23 15:08:37',1),(23,1,1,'vijay','reddy','j@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','10/06/1880','jgj','male','2016-03-23 15:15:43','2016-03-23 15:15:43',1),(24,1,1,'asd','reddy','ab@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','10/06/1880','xbfh','male','2016-03-23 15:19:38','2016-03-23 15:19:38',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

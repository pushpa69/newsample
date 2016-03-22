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
  `stage` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `q_answers` varchar(50) NOT NULL,
  `q_unansewred` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `confirmation` */

/*Table structure for table `general_information` */

DROP TABLE IF EXISTS `general_information`;

CREATE TABLE `general_information` (
  `gi_id` int(11) NOT NULL AUTO_INCREMENT,
  `gi_u_id` int(10) NOT NULL,
  `name_oraganization` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `expereince` varchar(50) NOT NULL,
  `other_info` varchar(50) NOT NULL,
  `size_enterprise` varchar(50) NOT NULL,
  `type_enterprise` varchar(50) NOT NULL,
  `services_enterprise` varchar(50) NOT NULL,
  `turover_enterprise` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`gi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `general_information` */

insert  into `general_information`(`gi_id`,`gi_u_id`,`name_oraganization`,`designation`,`expereince`,`other_info`,`size_enterprise`,`type_enterprise`,`services_enterprise`,`turover_enterprise`,`updated_at`,`updated_by`,`created_at`) values (16,15,'vijay','developer','1 year','123','micro','private','hai','micro','2016-03-22 07:28:04',15,'0000-00-00 00:00:00'),(17,16,'abc1','asa','abc','s','micro','private','wrw','micro','2016-03-22 07:32:17',16,'0000-00-00 00:00:00');

/*Table structure for table `q_answers` */

DROP TABLE IF EXISTS `q_answers`;

CREATE TABLE `q_answers` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_u_id` int(50) NOT NULL,
  `stage` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `q_answers` varchar(50) NOT NULL,
  `q_unansewred` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;

/*Data for the table `q_answers` */

insert  into `q_answers`(`con_id`,`con_u_id`,`stage`,`question_id`,`q_answers`,`q_unansewred`,`created_at`,`status`) values (1,1,1,'werwr','rewre','ewrew','2016-03-09 00:00:00',1),(2,3,2,'Q0','Q0_1,Q0_2,Q0_3','ewrew','2016-03-09 00:00:00',1),(3,3,2,'Q1','Q1_3,Q1_4','ewrew','2016-03-09 00:00:00',1),(4,3,2,'Q2','Q2_2,Q2_3','ewrew','2016-03-09 00:00:00',1),(5,3,2,'Q4','Q4_3,Q4_4','ewrew','2016-03-09 00:00:00',1),(6,3,2,'Q6','Q6_1,Q6_2','ewrew','2016-03-09 00:00:00',1),(7,3,2,'Q9','Q9_2,Q9_3','ewrew','2016-03-09 00:00:00',1),(8,3,2,'Q12','Q12_1,Q12_2,Q12_3','ewrew','2016-03-09 00:00:00',1),(9,3,2,'Q14','Q14_1,Q14_2','ewrew','2016-03-09 00:00:00',1),(10,3,2,'Q15','Q15_1,Q15_2','ewrew','2016-03-09 00:00:00',1),(11,3,2,'hid','','ewrew','2016-03-09 00:00:00',1),(79,7,2,'Q0','Q0_1','','0000-00-00 00:00:00',1),(80,7,2,'Q1','Q1_1','','0000-00-00 00:00:00',1),(81,7,2,'Q2','Q2_1','','0000-00-00 00:00:00',1),(82,7,2,'Q3','Q3_1','','0000-00-00 00:00:00',1),(83,7,2,'Q4','Q4_1','','0000-00-00 00:00:00',1),(84,7,2,'Q5','Q5_1','','0000-00-00 00:00:00',1),(85,7,2,'Q6','Q6_1','','0000-00-00 00:00:00',1),(86,7,2,'Q7','Q7_1','','0000-00-00 00:00:00',1),(87,7,2,'Q8','Q8_1','','0000-00-00 00:00:00',1),(88,7,2,'Q9','Q9_1','','0000-00-00 00:00:00',1),(89,7,2,'Q10','Q10_1','','0000-00-00 00:00:00',1),(90,7,2,'Q11','Q11_1','','0000-00-00 00:00:00',1),(91,7,2,'Q12','Q12_1','','0000-00-00 00:00:00',1),(92,7,2,'Q13','Q13_1','','0000-00-00 00:00:00',1),(93,7,2,'Q14','Q14_1','','0000-00-00 00:00:00',1),(94,7,2,'Q15','Q15_1','','0000-00-00 00:00:00',1),(95,7,3,'Q16','Q16_1','','2016-03-22 10:22:27',1),(96,7,3,'Q17','Q17_1','','2016-03-22 10:22:27',1),(97,7,3,'Q18','Q18_1','','2016-03-22 10:22:27',1),(98,13,2,'Q0','Q0_1','','2016-03-22 16:48:37',1),(99,13,2,'Q1','Q1_1','','2016-03-22 16:48:37',1),(100,13,2,'Q2','Q2_1','','2016-03-22 16:48:37',1),(101,13,2,'Q3','Q3_1','','2016-03-22 16:48:37',1),(102,13,2,'Q4','Q4_1','','2016-03-22 16:48:37',1),(103,13,2,'Q5','Q5_1','','2016-03-22 16:48:37',1),(104,13,2,'Q6','Q6_1','','2016-03-22 16:48:37',1),(105,13,2,'Q7','Q7_1','','2016-03-22 16:48:37',1),(106,13,2,'Q8','Q8_1','','2016-03-22 16:48:37',1),(107,13,2,'Q9','Q9_2','','2016-03-22 16:48:37',1),(108,13,2,'Q10','Q10_3','','2016-03-22 16:48:37',1),(109,13,2,'Q11','Q11_2','','2016-03-22 16:48:37',1),(110,13,2,'Q12','Q12_3','','2016-03-22 16:48:37',1),(111,13,2,'Q13','Q13_2','','2016-03-22 16:48:37',1),(112,13,2,'Q14','Q14_2','','2016-03-22 16:48:37',1),(113,13,2,'Q15','Q15_2','','2016-03-22 16:48:37',1),(114,13,3,'Q16','Q16_2','','2016-03-22 16:48:43',1),(115,13,3,'Q17','Q17_2','','2016-03-22 16:48:44',1),(116,13,3,'Q18','Q18_2','','2016-03-22 16:48:44',1),(117,14,2,'Q0','Q0_1','','2016-03-22 17:23:03',1),(118,14,2,'Q1','Q1_4','','2016-03-22 17:23:03',1),(119,14,2,'Q4','Q4_1','','2016-03-22 17:23:03',1),(120,14,2,'Q10','Q10_1','','2016-03-22 17:23:04',1),(121,14,2,'Q14','Q14_1','','2016-03-22 17:23:04',1),(122,14,2,'Q15','Q15_8','','2016-03-22 17:23:04',1),(123,14,3,'Q16','Q16_1','','2016-03-22 17:23:10',1),(124,14,3,'Q17','Q17_1','','2016-03-22 17:23:10',1),(125,14,3,'Q18','Q18_3','','2016-03-22 17:23:10',1),(135,4,2,'Q0','Q0_3','','2016-03-22 18:07:51',1),(136,4,2,'Q1','Q1_4','','2016-03-22 18:07:51',1),(137,4,2,'Q2','Q2_1','','2016-03-22 18:07:51',1),(138,4,2,'Q3','Q3_3','','2016-03-22 18:07:51',1),(139,4,2,'Q4','Q4_3','','2016-03-22 18:07:51',1),(140,4,2,'Q6','Q6_3','','2016-03-22 18:07:51',1),(141,4,2,'Q9','Q9_2','','2016-03-22 18:07:51',1),(142,4,2,'Q13','Q13_4','','2016-03-22 18:07:51',1),(143,4,2,'Q15','Q15_3,Q15_6','','2016-03-22 18:07:51',1),(144,4,3,'Q16','Q16_1','','2016-03-22 18:08:00',1),(145,4,3,'Q17','Q17_1','','2016-03-22 18:08:00',1),(146,4,3,'Q18','Q18_4','','2016-03-22 18:08:00',1),(147,5,2,'Q1','Q1_5','','2016-03-22 18:18:09',1),(148,5,2,'Q2','Q2_1','','2016-03-22 18:18:09',1),(149,5,2,'Q3','Q3_1','','2016-03-22 18:18:09',1),(150,5,3,'Q16','Q16_1','','2016-03-22 18:18:11',1),(151,5,3,'Q17','Q17_2','','2016-03-22 18:18:11',1),(152,5,3,'Q18','Q18_1','','2016-03-22 18:18:11',1),(172,16,2,'Q0','Q0_1','','2016-03-22 19:32:21',1),(173,16,2,'Q1','Q1_4','','2016-03-22 19:32:21',1),(174,16,2,'Q2','Q2_2,Q2_3','','2016-03-22 19:32:21',1),(175,16,2,'Q3','Q3_1,Q3_2','','2016-03-22 19:32:21',1),(176,16,2,'Q4','Q4_3,Q4_4','','2016-03-22 19:32:21',1),(177,16,2,'Q5','Q5_3','','2016-03-22 19:32:21',1),(178,16,2,'Q6','Q6_2','','2016-03-22 19:32:21',1),(179,16,2,'Q7','Q7_1,Q7_3','','2016-03-22 19:32:21',1),(180,16,2,'Q8','Q8_2','','2016-03-22 19:32:21',1),(181,16,2,'Q9','Q9_1,Q9_2','','2016-03-22 19:32:21',1),(182,16,2,'Q10','Q10_3','','2016-03-22 19:32:21',1),(183,16,2,'Q11','Q11_1','','2016-03-22 19:32:21',1),(184,16,2,'Q12','Q12_2','','2016-03-22 19:32:21',1),(185,16,2,'Q13','Q13_2','','2016-03-22 19:32:21',1),(186,16,2,'Q14','Q14_1','','2016-03-22 19:32:21',1),(187,16,2,'Q15','Q15_3','','2016-03-22 19:32:21',1),(188,16,3,'Q16','Q16_2','','2016-03-22 19:32:23',1),(189,16,3,'Q17','Q17_2','','2016-03-22 19:32:23',1),(190,16,3,'Q18','Q18_3','','2016-03-22 19:32:23',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`created_by`,`updated_by`,`firstname`,`lastname`,`email`,`u_password`,`mobile`,`date_of_birth`,`address`,`gender`,`created_at`,`updated_at`,`status`) values (1,1,1,'vijay','raghava reddy','gvijayaraghavareddy7@gmail.com','202cb962ac59075b964b07152d234b70','9632587410','05/07/1994','hyderabad','male','2016-03-22 16:40:33','2016-03-22 16:40:33',1),(2,1,1,'bayapu','reddy','bayapureddy@gmail.com','68053af2923e00204c3ca7c6a3150cf7','789456123','05/07/1990','hyderabad','male','2016-03-22 16:42:18','2016-03-22 16:42:18',1),(3,1,1,'puspa','d','pushpa@gmail.com','68053af2923e00204c3ca7c6a3150cf7','7891234560','01/02/1994','kukatpally','female','2016-03-22 16:43:32','2016-03-22 16:43:32',1),(4,1,1,'randy','ortan','randy@gmail.com','202cb962ac59075b964b07152d234b70','9876543210','02/03/1994','hyd','male','2016-03-22 16:45:39','2016-03-22 16:45:39',1),(5,1,1,'john','cena','johncena@gmail.com','202cb962ac59075b964b07152d234b70','9632587410','10/06/1880','usa','male','2016-03-22 17:20:47','2016-03-22 17:20:47',1),(15,1,1,'bayapu','ortan','admin1@gmail.com','1955b38f13116a57e4de2134a139d139','8500226782','05/06/1993',' fu','male','2016-03-22 19:08:38','2016-03-22 19:08:38',1),(16,1,1,'bayapu','reddy','h@gmail.com','202cb962ac59075b964b07152d234b70','8500226782','05/06/1993','vfg','male','2016-03-22 19:29:11','2016-03-22 19:29:11',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

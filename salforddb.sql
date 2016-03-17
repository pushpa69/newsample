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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `general_information` */

insert  into `general_information`(`gi_id`,`gi_u_id`,`name_oraganization`,`designation`,`expereince`,`other_info`,`size_enterprise`,`type_enterprise`,`services_enterprise`,`turover_enterprise`,`updated_at`,`updated_by`,`created_at`) values (1,1,'pushpa','siva1456','hello','hfh123','small','private','bgf','micro','2016-03-09 00:00:00',1,'0000-00-00 00:00:00'),(2,1,'htghgf','hggdh','ghgfh','hfh','hgh','hfh','hfgh','hgh','2016-03-09 00:00:00',1,'0000-00-00 00:00:00'),(3,1,'htghgf','hggdh','ghgfh','','small','private','gfsag','micro','2016-03-17 05:49:05',3,'0000-00-00 00:00:00'),(4,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(5,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(6,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(7,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(8,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(9,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(10,1,'htghgf','hggdh','ghgfh','','','','','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),(11,1,'htghgf','dfdf','dfsdf','','','','','','0000-00-00 00:00:00',0,'2016-03-17 03:19:05');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `q_answers` */

insert  into `q_answers`(`con_id`,`con_u_id`,`stage`,`question_id`,`q_answers`,`q_unansewred`,`created_at`,`status`) values (1,1,1,'werwr','rewre','ewrew','2016-03-09 00:00:00',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`created_by`,`updated_by`,`firstname`,`lastname`,`email`,`password`,`mobile`,`date_of_birth`,`address`,`gender`,`created_at`,`updated_at`,`status`) values (1,1,0,'pushpa','d','pushpa@gmail.com','123','900000000','12-3-15','','','2016-03-14 00:21:33','0000-00-00 00:00:00',1),(3,1,1,'hyth','hshgh','p@gmail.com','123','wettr','rtert','tertt','reyte','2016-03-16 00:00:00','2016-03-23 00:00:00',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

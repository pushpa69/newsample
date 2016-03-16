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

/*Table structure for table `confirmation` */

DROP TABLE IF EXISTS `confirmation`;

CREATE TABLE `confirmation` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(50) NOT NULL,
  `question_name` varchar(50) NOT NULL,
  `q_answers` varchar(50) NOT NULL,
  `date_of_inserted` varchar(50) NOT NULL,
  `inserted_by` varchar(50) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `confirmation` */

/*Table structure for table `general_information` */

DROP TABLE IF EXISTS `general_information`;

CREATE TABLE `general_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_oraganization` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `expereince` varchar(50) NOT NULL,
  `other_info` varchar(50) NOT NULL,
  `size_enterprise` varchar(50) NOT NULL,
  `type_enterprise` varchar(50) NOT NULL,
  `services_enterprise` varchar(50) NOT NULL,
  `turover_enterprise` varchar(50) NOT NULL,
  `date_of_updated` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `general_information` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_reg` datetime NOT NULL,
  `status` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

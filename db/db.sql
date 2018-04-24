/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - db_alarabia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_alarabia` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_alarabia`;

/*Table structure for table `tbl_company_info` */

DROP TABLE IF EXISTS `tbl_company_info`;

CREATE TABLE `tbl_company_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `vat_reg_no` varchar(200) NOT NULL,
  `vat_area_code` varchar(200) NOT NULL,
  `vat_status` int(11) NOT NULL,
  `invoice_size` varchar(200) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `saved_by` int(11) NOT NULL,
  `saved_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `saved_by` (`saved_by`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_company_info` */

insert  into `tbl_company_info`(`id`,`company_name`,`address`,`phone`,`mobile`,`email`,`website`,`vat`,`vat_reg_no`,`vat_area_code`,`vat_status`,`invoice_size`,`logo`,`saved_by`,`saved_date`) values (2,'','','','','','',0.00,'','',0,'','',10,'2016-06-26 12:06:37');

/*Table structure for table `tbl_master` */

DROP TABLE IF EXISTS `tbl_master`;

CREATE TABLE `tbl_master` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `order_id` int(100) DEFAULT NULL,
  `order_no` varchar(100) NOT NULL,
  `lomba` varchar(100) DEFAULT NULL,
  `body` varchar(100) DEFAULT NULL,
  `akchata` varchar(100) DEFAULT NULL,
  `tira` varchar(100) DEFAULT NULL,
  `hata` varchar(100) DEFAULT NULL,
  `colar` varchar(100) DEFAULT NULL,
  `mohori` varchar(100) DEFAULT NULL,
  `kof` varchar(100) DEFAULT NULL,
  `left` text,
  `down_1` text,
  `down_2` text,
  `comments` text,
  `status` int(2) DEFAULT '1',
  KEY `id` (`id`),
  KEY `table_master_order_id` (`order_id`),
  CONSTRAINT `table_master_order_id` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_master` */

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `cloth` double(10,2) DEFAULT NULL,
  `salary` double(10,2) DEFAULT NULL,
  `panjabi` int(100) NOT NULL DEFAULT '0',
  `sherwani` int(100) NOT NULL DEFAULT '0',
  `akchata` int(100) NOT NULL DEFAULT '0',
  `aligod` int(100) NOT NULL DEFAULT '0',
  `dhuti` int(100) NOT NULL DEFAULT '0',
  `saluar` int(100) NOT NULL DEFAULT '0',
  `cudi` int(100) DEFAULT '0',
  `kabli` int(100) NOT NULL DEFAULT '0',
  `jubba` int(100) NOT NULL DEFAULT '0',
  `phatua` int(100) NOT NULL DEFAULT '0',
  `veltsaluar` int(100) NOT NULL DEFAULT '0',
  `ambrodary` int(100) NOT NULL DEFAULT '0',
  `total` double(10,2) NOT NULL,
  `advance` double(10,2) NOT NULL,
  `due` double(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1= order, 2= delivered, 0= deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_order` */

insert  into `tbl_order`(`id`,`order_no`,`order_date`,`delivery_date`,`name`,`mobile`,`cloth`,`salary`,`panjabi`,`sherwani`,`akchata`,`aligod`,`dhuti`,`saluar`,`cudi`,`kabli`,`jubba`,`phatua`,`veltsaluar`,`ambrodary`,`total`,`advance`,`due`,`status`) values (1,'12345','2016-12-01','2016-12-01','MR Mamun','01867254624',0.00,0.00,0,0,0,0,0,0,3,3,0,0,0,0,1500.00,500.00,100.00,1),(2,'11111','2016-12-01','2016-12-08','Rifat','01245344',234.00,434.00,1,2,7,7,12,0,9,9,9,12,0,0,242.00,24.00,244.00,1),(3,'1','0000-00-00','0000-00-00','','',0.00,0.00,0,0,0,0,0,0,0,0,0,0,0,0,0.00,0.00,0.00,1),(4,'786','0000-00-00','2016-12-14','er','123445',0.00,0.00,1,2,0,0,0,0,0,0,0,0,0,0,0.00,0.00,0.00,1),(5,'2','0000-00-00','0000-00-00','','',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0.00,0.00,0.00,1),(6,'123121412','2016-12-04','2016-12-04','ggh','577657568',0.00,0.00,9,1,3,5,1,2,2,2,1,3,4,2,1500.00,10000.00,500.00,1),(7,'11111','2016-12-13','2017-01-10','wrr','1212',0.00,0.00,0,0,0,0,0,0,0,1,0,0,0,0,2244.00,0.00,0.00,1),(8,'78666','2016-12-13','2016-12-31','wrer','124444444444',243.00,0.00,0,0,0,0,0,4,0,0,0,0,0,0,0.00,0.00,0.00,1),(9,'11111999','2016-12-17','2016-12-17','MR RIfat','01867254624',100.00,0.00,1,2,3,0,0,0,0,0,0,0,0,0,0.00,0.00,1000.00,1);

/*Table structure for table `tbl_sales` */

DROP TABLE IF EXISTS `tbl_sales`;

CREATE TABLE `tbl_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qnty` double(10,2) NOT NULL,
  `price` double(10,2) NOT NULL,
  `vat` double(10,2) NOT NULL COMMENT 'per Item',
  `total_price` double(10,2) NOT NULL,
  `discount` double(10,2) NOT NULL COMMENT 'Per Item/Discount not reduce from item here it is calculating in transaction table',
  `saved_by` int(11) NOT NULL,
  `saved_date` datetime NOT NULL,
  `sales_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COMMENT='none';

/*Data for the table `tbl_sales` */

insert  into `tbl_sales`(`id`,`invoice_id`,`item_id`,`qnty`,`price`,`vat`,`total_price`,`discount`,`saved_by`,`saved_date`,`sales_date`) values (1,407079239,2,1.00,250.00,8.75,250.00,0.00,10,'2016-07-14 04:07:07','2016-07-14'),(2,507252173,2,1.00,250.00,8.75,250.00,0.00,10,'2016-07-14 05:07:25','2016-07-14'),(3,507129774,3,1.00,300.00,10.50,300.00,0.00,10,'2016-07-14 05:07:12','2016-07-14'),(4,507224028,3,1.00,300.00,10.50,300.00,0.00,10,'2016-07-14 05:07:22','2016-07-14'),(5,508014281,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-04 05:08:01','2016-08-04'),(6,408453755,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-08 04:08:45','2016-08-08'),(7,408453755,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-08 04:08:45','2016-08-08'),(8,408319516,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-08 04:08:31','2016-08-08'),(9,408319516,3,1.00,300.00,10.50,300.00,0.00,10,'2016-08-08 04:08:31','2016-08-08'),(10,408319516,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-08 04:08:31','2016-08-08'),(11,408518512,2,2.00,250.00,17.50,500.00,0.00,10,'2016-08-08 04:08:51','2016-08-08'),(12,408518512,3,1.00,300.00,10.50,300.00,0.00,10,'2016-08-08 04:08:51','2016-08-08'),(13,408518512,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-08 04:08:51','2016-08-08'),(14,608222764,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-11 06:08:22','2016-08-11'),(15,608222764,4,0.50,120.00,2.10,60.00,0.00,10,'2016-08-11 06:08:22','2016-08-11'),(16,608222764,3,1.00,500.00,17.50,500.00,0.00,10,'2016-08-11 06:08:22','2016-08-11'),(17,1108158008,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-12 11:08:15','2016-08-12'),(18,1108158008,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-12 11:08:15','2016-08-12'),(19,1108158008,3,2.50,500.00,43.75,1250.00,0.00,10,'2016-08-12 11:08:15','2016-08-12'),(20,1108534343,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-12 11:08:53','2016-08-12'),(21,1108534343,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-12 11:08:53','2016-08-12'),(22,1108534343,3,2.50,500.00,43.75,1250.00,0.00,10,'2016-08-12 11:08:53','2016-08-12'),(23,1108178610,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-12 11:08:17','2016-08-12'),(24,1108178610,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-12 11:08:17','2016-08-12'),(25,1108178610,3,2.50,500.00,43.75,1250.00,0.00,10,'2016-08-12 11:08:17','2016-08-12'),(26,1108561133,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-12 11:08:56','2016-08-12'),(27,1108561133,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-12 11:08:56','2016-08-12'),(28,1208093724,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:09','2016-08-13'),(29,1208146592,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:14','2016-08-13'),(30,1208146592,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-13 12:08:14','2016-08-13'),(31,1208172319,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:17','2016-08-13'),(32,1208172319,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-13 12:08:17','2016-08-13'),(33,1208024211,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:02','2016-08-13'),(34,1208024211,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-13 12:08:02','2016-08-13'),(35,1208285919,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:28','2016-08-13'),(36,1208285919,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-13 12:08:28','2016-08-13'),(37,1208433163,2,1.00,250.00,8.75,250.00,0.00,10,'2016-08-13 12:08:43','2016-08-13'),(38,1208433163,4,1.00,120.00,4.20,120.00,0.00,10,'2016-08-13 12:08:43','2016-08-13');

/*Table structure for table `tbl_user_info` */

DROP TABLE IF EXISTS `tbl_user_info`;

CREATE TABLE `tbl_user_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `about` text NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `saved_by` int(11) NOT NULL,
  `saved_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `saved_by` (`saved_by`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_info` */

insert  into `tbl_user_info`(`id`,`name`,`email`,`mobile`,`username`,`password`,`about`,`usertype`,`status`,`saved_by`,`saved_date`) values (10,'admin','admin@admin.com','','admin','21232f297a57a5a743894a0e4a801fc3','','admin',1,1,'2016-06-26 00:00:00'),(11,'Kamal','kamal@kamal.com','565521','kamal','e10adc3949ba59abbe56e057f20f883e','This is me','waiter',1,10,'2016-06-27 02:06:59'),(12,'waiter','waiter@waiter.com','','waiter','f64cff138020a2060a9817272f563b3c','','waiter',1,10,'2016-07-14 03:07:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

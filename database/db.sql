/*
SQLyog - Free MySQL GUI v5.17
Host - 5.5.24-log : Database - electronix
*********************************************************************
Server version : 5.5.24-log
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `electronix`;

USE `electronix`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `ad_log` */

DROP TABLE IF EXISTS `ad_log`;

CREATE TABLE `ad_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) DEFAULT NULL,
  `apwd` varchar(50) DEFAULT NULL,
  `secques` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aname` (`aname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ad_log` */

insert into `ad_log` (`id`,`aname`,`apwd`,`secques`) values (1,'electronixadmin','12345678','dreaming');

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `brands` */

insert into `brands` (`brand_id`,`brand_title`) values (1,'HP'),(2,'Asus'),(3,'Dell'),(4,'Nikon'),(5,'Samsung'),(7,'Motorola'),(8,'Intel');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert into `cart` (`p_id`,`ip_add`,`qty`) values (19,'::1',0);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert into `categories` (`cat_id`,`cat_title`) values (1,'Laptops'),(2,'Motherboards'),(3,'Desktops'),(4,'Cameras'),(5,'Mobiles');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `prd_id` int(100) NOT NULL AUTO_INCREMENT,
  `prd_cat` int(100) NOT NULL,
  `prd_brand` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert into `products` (`prd_id`,`prd_cat`,`prd_brand`,`prd_title`,`prd_price`,`prd_desc`,`prd_img`,`prd_keyword`) values (14,4,5,'Samsung webcam',6500,'digital webcam with optical zoom','camera.png','webcam,samsung,camera,samsung camera,cameras'),(15,5,7,'Motorola maxi m23',3800,'5 MP Primary Camera\n2 MP Secondary Camera\nDual Sim (GSM + UMTS)\nAndroid v4.4 (KitKat)','20140904-193820-moto-e.jpg','motorola mobile,android,motorola,android phone,android mobiles'),(16,5,7,'Moto-Turbo mx888',4800,'\nAndroid v4.4.4 OS\nDual Sim (GSM + GSM)\n5 inch HD Screen\n8 MP Primary Camera','20150312-04712-moto-turbo.jpg','motorola mobile,android,motorola,android phone,android mobiles'),(17,5,2,'Asus568-molixva',4300,'1 GB RAM\n8 MP Primary Camera\n2 MP Secondary Camera\n1.2 Ghz Quad Core','asus-ze550ml-ze550ml-1a076ww-125x125-imae6qafassv5kcz.jpeg','Asus mobile,android,asus,android phone,android mobiles'),(18,5,5,'Samsung galaxy ace',5000,'5 Inch Super AMOLED ...\nDual SIM (LTE + GSM)\n13 MP | 5 MP Camera ...\n2600 mAh Battery','samsung-galaxy-ace-nxt-sm-g313hrwdinu-sm-g313hrwdins-125x125-imae2fjadm7qrghm.jpeg','samsung mobile,android,samsung,android phone,android mobiles,galaxy,ace'),(19,2,8,'Intel DZ68BC Motherboard',6999,'form factor:ATX\r\nCore i7\r\nLGA1155\r\nDDR3 SDRAM\r\nGigabit Ethernet','$_35.JPG','motherboard,intel,core i7,ethernet'),(20,2,2,'ASUS M5A78L-M LX Motherboard',3895,'Form Factor Micro-ATX\r\nSocket type AM3+\r\nAudio Codec Realtec ALC887\r\nBuffered Memory','18279201679984motherboard138606973113875996181389273744.jpg','asus,gaming,raltek,motherboard'),(21,1,1,'HP Pavilion P245SA',33990,'OS W8.1\r\nNotebook\r\n1TB Hard disk\r\n15.6\" screen size ','$_35(2).JPG','notebook,1tb,hp,laptop'),(23,4,4,'Nikon Coolpix P600  Optical Zoom',18000,'16.1 Megapixel,\r\ncolor:black,\r\n60X Otical Zoom,\r\nISO 100 to 6400 Senstivity,\r\n3 inch vari Angle Display','digital-camera-391444626208.jpg','nikon,camera,black,zoom,cameras');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

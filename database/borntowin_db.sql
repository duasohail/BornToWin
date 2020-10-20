/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - born_to_win
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`born_to_win` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `born_to_win`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `about` */

insert  into `about`(`id`,`value`,`name`) values 
(1,'lorem ipsim dolor deismet color far far away ','hello');

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `s_description` text NOT NULL,
  `l_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `articles` */

insert  into `articles`(`id`,`image`,`title`,`s_description`,`l_description`) values 
(2,'../img/articles/manage-1.png','get ready','lorem ipsum dolor decolor ismet far away lorem','<p><strong>lorem ipsum dolor decolor ismet far away lorem</strong> lorem ipsum dolor decolor ismet far away lorem lorem ipsum dolor decolor ismet far away lorem lorem ipsum dolor decolor ismet far away lorem&nbsp; loremipsum</p>'),
(3,'../img/articles/manage-2.png','fuel up ','lorem ipsum dolor decolor ismet far away lorem','<p style=\"text-align: left;\">jds kjndwnfri<strong> kjenwdlkrj</strong> kjmndskcd<em>,nfkdkw</em>&nbsp; jnsdwk kjebnfw kjbkdjwsb nkjcew</p>'),
(4,'../img/articles/manage-3.png','exercise','lorem ipsum dolor decolor ismet far away lorem','<p>lorem ipsum dolor decolor ismet far away lorem lorem ipsum dolor decolor ismet far away loremlorem ipsum dolor decolor ismet far away lorem<strong>&nbsp;</strong><strong>lorem ipsum dolor decolor ismet far away lorem&nbsp;</strong><em>&nbsp;</em><em>lorem ipsum dolor decolor ismet far away lorem&nbsp;lorem ipsum dolor decolor ismet far away lorem</em></p>'),
(5,'../img/articles/manage-4.png','wake up early','lorem ipsum dolor decolor ismet far away lorem','<p>jndskjajkd kjdnas ,jnedw<strong>jndksa kjsnca&nbsp;<em>lkmsdac</em></strong><em>,jndcsam&nbsp;</em>jansdkcaskj kjdnjkfc lkdmsnl</p>'),
(6,'../img/articles/header-back.png','yoga','lorem ipsum dolor decolor ismet far away lorem','<p>knmde&nbsp;<strong>kjsdkvcndjn&nbsp;</strong><em>mldkws kdmscl&nbsp;</em>mmswkl</p>');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contact` */

insert  into `contact`(`id`,`name`,`phone`,`email`,`msg`,`details`) values 
(1,'xyz','+0923456789','xyz@gmail.com','lorem ipsum dolor de color ismet far far away v lorem ipsum dolor de color ismet far far away lorem ipsum dolor de color ismet far far away','lorem ipsum dolor de color ismet far far away lorem ipsum dolor de color ismet far far away'),
(2,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd',''),
(3,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd',''),
(4,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd',''),
(5,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd',''),
(6,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd',''),
(7,'a','a','abdulhadeedhamirani@gmail.com','asdasdasd','');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `thumnail` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `img6` varchar(255) DEFAULT NULL,
  `img7` varchar(255) DEFAULT NULL,
  `img8` varchar(255) DEFAULT NULL,
  `img9` varchar(255) DEFAULT NULL,
  `img10` varchar(255) DEFAULT NULL,
  `img11` varchar(255) DEFAULT NULL,
  `img12` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `events` */

insert  into `events`(`id`,`title`,`short_desc`,`desc`,`thumnail`,`img1`,`img2`,`img3`,`img4`,`img5`,`img6`,`img7`,`img8`,`img9`,`img10`,`img11`,`img12`) values 
(5,'The Test','Short Description Of The Test','Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The TestShort Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test Short Description Of The Test','img/event_imgs/thumnails/6EgCxDNfd3Q1582625606.jpg','img/event_imgs/other_images/arypbS_s9FA1582625606.jpg','img/event_imgs/other_images/cNXvw3jMn7I1582625606.jpg','img/event_imgs/other_images/dQsJ43SQg_E1582625606.jpg','img/event_imgs/other_images/JQYlzXObZtk1582625606.jpg','img/event_imgs/other_images/L6SDVDPHSh41582625606.jpg','img/event_imgs/other_images/LnvCEXQwC-o1582625606.jpg','img/event_imgs/other_images/pqWyuZUFeVQ1582625606.jpg','img/event_imgs/other_images/pqWyuZUFeVQ1582625606.jpg','img/event_imgs/other_images/pqWyuZUFeVQ1582625606.jpg','img/event_imgs/other_images/XXO8n4sFO1I1582625606.jpg','img/event_imgs/other_images/-xy-eayI5MA1582625606.jpg','img/event_imgs/other_images/yMeqBjSmogs1582625606.jpg');

/*Table structure for table `footer` */

DROP TABLE IF EXISTS `footer`;

CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mon_wed` varchar(200) NOT NULL,
  `sat` varchar(200) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `l_in` varchar(200) NOT NULL,
  `google` varchar(200) NOT NULL,
  `twit` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `footer` */

insert  into `footer`(`id`,`address`,`phone`,`mobile`,`email`,`mon_wed`,`sat`,`fb`,`l_in`,`google`,`twit`) values 
(1,'born to win ','+09634623732','+09634623732','borntowin@gmail.com','8:am || 4:pm','9:am || 5:pm','https://facebook.com','https://linkedin.com','www.google.com','https://twitter.com');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `gallery` */

insert  into `gallery`(`id`,`image`) values 
(1,'../img/gallery/manage-1.png'),
(2,'../img/gallery/manage-3.png'),
(3,'../img/gallery/manage-2.png'),
(4,'../img/gallery/manage-1.png'),
(5,'../img/gallery/manage-1.png'),
(6,'../img/gallery/manage-2.png');

/*Table structure for table `login_details` */

DROP TABLE IF EXISTS `login_details`;

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login_details` */

insert  into `login_details`(`id`,`username`,`password`) values 
(1,'admin','VmpGYWExVXlVa2hTYkdoUFVrUkJPUT09');

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`img`,`text`) values 
(9,'img/sliders/bg_31582280058.jpg',''),
(10,'img/sliders/victory1582280075.jpg',''),
(11,'img/sliders/bg_11582362899.jpg','');

/*Table structure for table `sponser` */

DROP TABLE IF EXISTS `sponser`;

CREATE TABLE `sponser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sponser` */

insert  into `sponser`(`id`,`image`) values 
(16,'../img/logo/aetuts.jpg'),
(17,'../img/logo/creative-market.jpg'),
(18,'../img/logo/new_logo.png'),
(19,'../img/logo/wordpress.jpg'),
(20,'../img/logo/themeforest.jpg'),
(21,'../img/logo/microlancer.jpg'),
(22,'../img/logo/envato.jpg'),
(23,'../img/logo/designmodo.jpg'),
(24,'../img/logo/themeforest.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

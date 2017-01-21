/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.27 : Database - onlinestore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`onlinestore` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `onlinestore`;

/*Table structure for table `relacion_usuarios_tipos` */

DROP TABLE IF EXISTS `relacion_usuarios_tipos`;

CREATE TABLE `relacion_usuarios_tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(11) NOT NULL,
  `usuarios_tipos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `relacion_usuarios_tipos` */

insert  into `relacion_usuarios_tipos`(`id`,`usuarios_id`,`usuarios_tipos_id`) values (1,1,1),(2,8,1),(3,9,1),(4,12,1),(5,13,1),(6,14,2);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cumpleanios` date DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`email`,`password`,`cumpleanios`,`nombre`,`apellidos`,`telefono`,`fotografia`,`creado_en`) values (1,'admin@admin','5f4dcc3b5aa765d61d8327deb882cf99','2015-12-01','admin',NULL,NULL,NULL,'2017-01-16 21:43:07'),(2,'jdany.mc@gmail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-13','aa','bb','cc',NULL,'2017-01-16 21:43:07'),(3,'jmamanic@uandina.edu.pe','a9e7f4848e40deb03cba8edd294d3a17','2017-01-19','aaaaaaaaaaaaaaaa','bbbbbbbbbbbbbbbbb','',NULL,'2017-01-16 21:43:07'),(4,'mail1@mail.com','e00cf25ad42683b3df678c61f42c6bda','2017-01-27','s','s','',NULL,'2017-01-16 21:43:07'),(5,'mail2@mail.com','e00cf25ad42683b3df678c61f42c6bda','2017-01-12','s','s','',NULL,'2017-01-16 21:43:07'),(6,'mail3@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-14','w','w','',NULL,'2017-01-16 21:43:07'),(7,'mail4@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-12','cccc','ddddd','',NULL,'2017-01-16 21:43:07'),(8,'mail5@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-12','d','d','xxxx',NULL,'2017-01-16 21:43:07'),(9,'mail6@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-12','John','Smith','',NULL,'2017-01-16 21:43:07'),(10,'aaaa@mail.clm','',NULL,NULL,NULL,NULL,NULL,'2017-01-16 21:43:07'),(11,'b','b',NULL,NULL,NULL,NULL,NULL,'2017-01-16 21:43:18'),(12,'mail8@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-04','sadasds','dsadsd','',NULL,'2017-01-16 22:10:13'),(13,'mail9@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-06','dddddddddddddd','dddddddddd','',NULL,'2017-01-16 22:11:25'),(14,'mail10@mail.com','e10adc3949ba59abbe56e057f20f883e','2017-01-12','jhon dany','mamani canahuire','',NULL,'2017-01-20 21:05:29');

/*Table structure for table `usuarios_tipos` */

DROP TABLE IF EXISTS `usuarios_tipos`;

CREATE TABLE `usuarios_tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usuarios_tipos` */

insert  into `usuarios_tipos`(`id`,`tipo_usuario`,`descripcion`) values (1,'Administrador',NULL),(2,'Usuario',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

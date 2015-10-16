CREATE DATABASE  IF NOT EXISTS `mis_notas_app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mis_notas_app`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mis_notas_app
-- ------------------------------------------------------
-- Server version	5.6.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `nota_ID` int(20) NOT NULL AUTO_INCREMENT,
  `user_ID` int(20) NOT NULL,
  `nota_titulo` text NOT NULL,
  `nota_contenido` longtext,
  `nota_privacidad` varchar(45) DEFAULT 'publica',
  `nota_color` varchar(45) DEFAULT NULL,
  `nota_creada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nota_modificada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nota_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (2,1,'Lista de compras','Huevos, avena, leche, frutillas y manzandas','publica',NULL,'2015-10-15 10:48:56','0000-00-00 00:00:00'),(3,2,'Temás para el examen','Revolución Rusa. Cap 1 al 3','publica',NULL,'2015-10-15 10:52:16','2015-10-15 10:52:16'),(4,2,'Foo','Bar','publica',NULL,'2015-10-15 10:52:16','2015-10-15 10:52:16'),(5,1,'Tip PHP','Los \"inlcude\" y \"require\" nos ayudan a separar un proyecto en pequeñas porciones de código.','publica',NULL,'2015-10-15 10:52:16','2015-10-15 10:52:16'),(6,3,'Super Tip','Comentar el código describiendo que es lo que hace, y cómo lo hace.','publica',NULL,'2015-10-15 10:52:16','2015-10-15 10:52:16');
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `user_ID` int(20) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(64) NOT NULL,
  `user_clave_activacion` varchar(45) DEFAULT NULL,
  `user_activado` int(1) DEFAULT NULL,
  `user_total_notas` int(20) DEFAULT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`),
  KEY `user_clave_activacion` (`user_clave_activacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'me@fgilio.com','mi pass!','s6dg41s6df85',1,NULL),(2,'fiocchigabriel@gmail.com','blaBlaaaa','gdfiofhsdgfh65d',0,NULL),(3,'lucas.nz.d@gmail.com','añaña','askldfhjñasldf',0,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-15 12:58:38

-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnueabihf (armv7l)
--
-- Host: localhost    Database: webServer
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0+deb9u1

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
-- Table structure for table `msgUpdate`
--

DROP TABLE IF EXISTS `msgUpdate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msgUpdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg65` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msgUpdate`
--

LOCK TABLES `msgUpdate` WRITE;
/*!40000 ALTER TABLE `msgUpdate` DISABLE KEYS */;
INSERT INTO `msgUpdate` VALUES (6,'010101111010100010101000010100101111111101010101001110010001'),(7,'0101011110101'),(8,'Creation and Design for Linugux'),(9,'Hi'),(10,''),(11,'fortune'),(12,'cat fortune.txt');
/*!40000 ALTER TABLE `msgUpdate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phonebook`
--

DROP TABLE IF EXISTS `phonebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phonebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(32) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phonebook`
--

LOCK TABLES `phonebook` WRITE;
/*!40000 ALTER TABLE `phonebook` DISABLE KEYS */;
INSERT INTO `phonebook` VALUES (1,'+52 56 2460 0477','Linugux','Inx.','Cuautitlan Izcalli, Mexico','linugux@gmail.com'),(2,'+1 607 358 7405','Xugunil','Xni.','Cuautitlan Izcalli, Mexico','xugunil@gmail.com'),(3,'+1 607 358 7405','Ayesk','Trep Mitter','Cuautitlan Izcalli, Mexico','gusgra2004@hotmail.com'),(4,'+1 607 358 7405','Pepe','Bras','Cuautitlan Izcalli, Mexico','braspepe@gmail.com'),(5,'+52 56 2460 0477','Nestor','Garrido','Cuautitlan Izcalli, Mexico','nestor.garrido.g@gmail.com'),(6,'+1 823 4838 8212','Patricia','Torres','Cuautitlan Izcalli, Mexico','patriciatren@gmail.com'),(7,'+1 823 4838 8212','Abraham','Condor','Cuautitlan Izcalli, Mexico','nestor.garrido.condor@gmail.com'),(8,'+1 823 4838 2145','Edith','Vela','Cuautitlan IZcalli, Mexico','epantene@gmail.com'),(9,'+52 56 2460 0477','Neto','Gardo','Cuautitlan Izcalli, Mexico','netogardo@hotmail.com'),(10,'+52 56 2460 0477','Create','Design','Cuautitlan Izcalli, Mexico','erickvega.soluciones@gmail.com'),(11,'+1 607 358 7405','Vacante','Castro','Cuautitlan Izcalli, Mexico','profuturo.berenice@gmail.com'),(12,'+1 607 358 7405','Dessire','Cristina','Cuautitlan Izcalli, Mexico','arturleee@gmail.com'),(13,'+52 55 1278 4420','Sugusmen','Ocho','Cuautitlan Izcalli, Mexico','sugusmen8@yahoo.com.mx'),(14,'+52 55 1278 4420','FirstEmail','Sgs','Cuautitlan Izcalli, Mexico','sugusmen@hotmail.com'),(15,'+52 55 4366 4826','Karmen','Danny','Cuautitlan Izcalli, Mexico','sugusmen8@yahoo.com.mx');
/*!40000 ALTER TABLE `phonebook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titleUpdate`
--

DROP TABLE IF EXISTS `titleUpdate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titleUpdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(66) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titleUpdate`
--

LOCK TABLES `titleUpdate` WRITE;
/*!40000 ALTER TABLE `titleUpdate` DISABLE KEYS */;
INSERT INTO `titleUpdate` VALUES (67,'LiNUGUX'),(68,'LiNUGUX iNX.'),(69,'Linugux'),(70,'Linugux Inx.'),(71,'Linugux >._');
/*!40000 ALTER TABLE `titleUpdate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-06 13:33:34

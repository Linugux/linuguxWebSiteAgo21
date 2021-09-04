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
-- Table structure for table `phonebook`
--

DROP TABLE IF EXISTS `phonebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phonebook` (
  `phone` varchar(32) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phonebook`
--

LOCK TABLES `phonebook` WRITE;
/*!40000 ALTER TABLE `phonebook` DISABLE KEYS */;
INSERT INTO `phonebook` VALUES ('+52 56 2460 0477','Linugux','Inx.','Cuautitlan Izcalli, Mexico','linugux@gmail.com'),('+1 607 358 7405','Xugunil','Inx','Cuautitlan Izcalli, Mexico','xugunil@gmail.com'),('+1 607 358 7405','Nestor','Garrido','Cuautitlan Izcalli, Mexico','nestor.garrido.g@gmail.com'),('+1 607 358 7405','Pepe','Bras','Cuautitlan Izcalli, Mexico','braspepe@gmail.com'),('+1 607 358 7405','Ayesk','Trep Mitter','Cuautitlan Izcalli, Mexico','gusgar2004@hotmail.com'),('+52 55 3754 6722','Patricia','Torres','Cuautitlan Izcalli, Mexico','patriciatren@gmail.com'),('+52 55 6722 3487','Edith','Rosendez','Cuautitlan Izcalli, Mexico','epantene@gmail.com'),('+52 55 1278 44 20','Condor','Mitter','Cuautitlan Izcalli, Mexico','nestor.garrido.condor@gmail.com'),('+52 55 1278 4420','Neto','Gardo','Cuautitlan Izcalli, Mexico','netogardo@gmail.com'),('+52 55 1278 4420','Nestor','Garrido','Cuautitlan Izcalli, Mexico','nestor.garrido.linugux@gmail.com'),('+52 55 1278 4420','First','Sgs','Cuautitlan Izcalli, Mexico','sugusmen@hotmail.com');
/*!40000 ALTER TABLE `phonebook` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-04  7:48:21

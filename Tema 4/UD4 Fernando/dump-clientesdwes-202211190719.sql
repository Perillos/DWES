-- MySQL dump 10.13  Distrib 5.7.37, for osx10.17 (x86_64)
--
-- Host: localhost    Database: clientesdwes
-- ------------------------------------------------------
-- Server version	5.7.37

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `DNI` varchar(15) DEFAULT NULL,
  `Dirección` varchar(50) DEFAULT NULL,
  `Localidad` varchar(20) DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'mike','$2y$10$ipbvg3zcdMe1wa1tPiRXQefPzitmRBEipmUxIGXNhhtR1sCcv9X/O','user','Maëline','404231294-2','Grayhawk Cross','Avignon','Paraćin','964-838-2782','bewells5@hubpages.com'),(2,'pchick0','$2y$10$ob9sAxI.FkVBD.StNTgFW.P/KzaDBcXU5zBv/K.AaWuu1U6.CvBxq','user','Maï','856241620-7','Mallard Plaza','Rybnoye','Alto del Espino','696-962-9287','cgreenley0@seesaa.net'),(3,'ebayle1','$2y$10$L6x2WmxYvdJATzs0qNiWCef1rZDigPI7GPsTZKbinb1ssyM3ldK6C','user','Bérengère','121657233-X','Sherman Lane','Inta','Cashel','210-825-5194','edubble1@umich.edu'),(4,'tcasseldine2','$2y$10$S7lzv1nxmLDvESgzXXZZceQoNhQFtXiigd8zjVCMh7aNbSHZAm.4y','user','Illustrée','937464738-9','Atwood Court','Ji’an','Ko Samui','443-278-2098','jfishly2@senate.gov'),(5,'bfeathersby3','$2y$10$SGGIgMydbfTjbTiRpNmPj.aV.VgmNVkkcs7nppSjm0LJypcfZZKv6','user','Yè','574880877-3','Sutteridge Parkway','Czerniewice','Sainte-Marthe','412-212-0061','jdanilishin3@nbcnews.com'),(6,'super','$2y$10$GpPCH6TQ3CPjJOqDwzshoOaykCVaMz2tJ4fRA3yyAe85RA1gLL2lK','admin','Manolo','365603718-3','10 Bluestem Terrace','Klampok','Rennes','890-314-2770','vjarnell9@wsj.com'),(7,'admin','$2y$10$f6Gx.xV7cqgoVJ9s2O701ub51dg9W.Y58/NWcJ2vz.g0BCBN6o3bm','admin','admin','716036238-4','45 Northridge Lane','Dýšina','Pontivy','407-614-5331','bzavattero8@cnbc.com');
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

-- Dump completed on 2022-11-19  7:19:15

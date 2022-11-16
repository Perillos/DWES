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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `DNI` varchar(15) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Dirección` varchar(50) DEFAULT NULL,
  `Localidad` varchar(20) DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES ('129153931-X','Elnar','46 Gulseth Center','Sainte-Thérèse','Sobradinho','785-978-1569','elardner1@unblog.fr',2),('416427667-3','Papapaapa','44 Garrison Way','Lugu','Trujillo','632-432-9485','wshinton2@house.gov',3),('608742343-5','Corette','5987 Eagan Park','Lamovita','Orocuina','536-124-8603','ckendrick3@archive.org',4),('312845626-7','Garald','25215 Schlimgen Terrace','Krabi','Sagbayan','396-298-0590','gnecrews0@yellowbook.com',12),('223831120-3','Averil','69193 Vahlen Junction','Altkirch','Lahar','822-369-0435','ahuebner1@tinyurl.com',13),('093821475-6','Dolorita','098 Quincy Avenue','Vargas','Pravda','562-150-7530','dparrish2@reverbnation.com',14),('581581511-X','Coleman','653 Spaight Street','Imus','Żurowa','169-510-6414','cthain3@technorati.com',15),('834610901-6','Amalia','15 Amoth Crossing','Guniushan','Anfeng','500-455-6494','agrinaway4@netlog.com',16),('471425789-7','Spense','9177 Havey Court','G‘azalkent','Yaroslavl','733-403-7261','sgorthy5@usda.gov',17),('760066289-2','Roger','074 Prairieview Way','Stockholm','Hammarö','596-121-3768','rferdinand6@deliciousdays.com',18),('090125562-9','Matilda','8 Surrey Junction','La Unión','Oslo','256-860-8796','mnugent7@house.gov',19),('913553115-0','Sibeal','801 Caliangt Point','Kalmar','Mobile','162-436-6682','sheaford8@bbc.co.uk',20),('966237168-0','Ricard','22 Burrows Trail','Bełk','Siasi','568-169-6181','rlemarquis9@tinyurl.com',21);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesiones`
--

DROP TABLE IF EXISTS `sesiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `urls` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `convivientes` varchar(100) DEFAULT NULL,
  `aficiones` json DEFAULT NULL,
  `menu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sesiones`
--

LOCK TABLES `sesiones` WRITE;
/*!40000 ALTER TABLE `sesiones` DISABLE KEYS */;
INSERT INTO `sesiones` VALUES (9,'Sid','sgrunson0@jalbum.net','bluehost.com','M','1',NULL,NULL),(10,'Elsbeth','egiovannini1@nationalgeographic.com','bloglovin.com','F','9',NULL,NULL),(11,'Sandie','seaglen2@arizona.edu','networksolutions.com','F','10',NULL,NULL),(12,'Nikos','nmoggle3@blogspot.com','java.com','M','8',NULL,NULL),(13,'Susanetta','spicker4@howstuffworks.com','about.com','F','5',NULL,NULL),(14,'Lisabeth','lboulds5@arizona.edu','answers.com','F','1',NULL,NULL),(15,'Deni','dhessel6@si.edu','imageshack.us','F','10',NULL,NULL),(16,'Meara','mdukelow7@free.fr','businesswire.com','F','3',NULL,NULL),(17,'Oralia','oomurtagh8@diigo.com','altervista.org','F','7',NULL,NULL),(18,'Terrence','tpalk9@seattletimes.com','e-recht24.de','M','5',NULL,NULL);
/*!40000 ALTER TABLE `sesiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'clientesdwes'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-06  9:47:37

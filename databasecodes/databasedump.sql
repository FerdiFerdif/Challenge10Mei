-- MySQL dump 10.13  Distrib 5.7.24, for Win32 (AMD64)
--
-- Host: localhost    Database: ferdigames
-- ------------------------------------------------------
-- Server version	5.7.24-log

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
-- Table structure for table `antagonist`
--

DROP TABLE IF EXISTS `antagonist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antagonist` (
  `antagonist_ID` int(11) NOT NULL AUTO_INCREMENT,
  `storyline` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`antagonist_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antagonist`
--

LOCK TABLES `antagonist` WRITE;
/*!40000 ALTER TABLE `antagonist` DISABLE KEYS */;
INSERT INTO `antagonist` VALUES (1,'Je kan de wind horen waaien.'),(2,'Je kan de wolven horen huilen.'),(3,'Je kan de motoren horen brullen.'),(4,'Je kan de mensen horen aankomen.'),(5,'Je kan de stilte bijna voelen.'),(6,'Je kan de kippen bijna aanraken.'),(7,'Je kan je vader horen snurken'),(8,'Je kan je vader horen snurken2'),(9,'Je kan je vader horen snurken3');
/*!40000 ALTER TABLE `antagonist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complication`
--

DROP TABLE IF EXISTS `complication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complication` (
  `complication_ID` int(11) NOT NULL AUTO_INCREMENT,
  `storyline` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`complication_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complication`
--

LOCK TABLES `complication` WRITE;
/*!40000 ALTER TABLE `complication` DISABLE KEYS */;
INSERT INTO `complication` VALUES (1,'Je voelt je koud en ziek en hebt geen medicijnen'),(2,'Je voelt je bedreigd en hebt geen wapen.'),(3,'Je voelt je bedrogen maar weet niets te zeggen.'),(4,'Je voelt je slap en kan niet opstaan');
/*!40000 ALTER TABLE `complication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objective`
--

DROP TABLE IF EXISTS `objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objective` (
  `objective_ID` int(11) NOT NULL AUTO_INCREMENT,
  `storyline` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`objective_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objective`
--

LOCK TABLES `objective` WRITE;
/*!40000 ALTER TABLE `objective` DISABLE KEYS */;
INSERT INTO `objective` VALUES (1,'Je weet dat je het pakketje moet ophalen.'),(2,'Je weet dat de opdracht vandaag af moet.'),(3,'Je weet dat je moet betalen.'),(4,'Je weet dat je die persoon moet bevrijden.'),(5,'Je weet dat je het hek moet slopen.');
/*!40000 ALTER TABLE `objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resultaat`
--

DROP TABLE IF EXISTS `resultaat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resultaat` (
  `resultaat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `speler_ID` int(11) DEFAULT NULL,
  `moment_ID` datetime DEFAULT NULL,
  `gok` int(11) DEFAULT NULL,
  `gooi` int(11) DEFAULT NULL,
  `spel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`resultaat_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resultaat`
--

LOCK TABLES `resultaat` WRITE;
/*!40000 ALTER TABLE `resultaat` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultaat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `setting_ID` int(11) NOT NULL AUTO_INCREMENT,
  `storyline` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`setting_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'Je bent gevangen in een donkere kerker in een kasteel.'),(2,'Je zwemt vlakbij een eiland in de Stille Oceaan.'),(3,'Je wordt wakker verdwaald in het bos.'),(4,'je bent geland in de Sahara woestijn.'),(5,'Je loopt over de grens van Ivoorkust naar Ghana.'),(6,'Je zit op de bank voor buis.'),(7,'Je valt in slaap in het vliegtuig.'),(8,'Het is erg koud buiten en het is gewoon koud.'),(9,'Het is erg koud buiten en het is gewoon koud.'),(10,'Het is erg koud buiten en het is gewoon koud.');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speler`
--

DROP TABLE IF EXISTS `speler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speler` (
  `speler_ID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`speler_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speler`
--

LOCK TABLES `speler` WRITE;
/*!40000 ALTER TABLE `speler` DISABLE KEYS */;
INSERT INTO `speler` VALUES (1,'Ferdi','Ferdi@hotmail.nl');
/*!40000 ALTER TABLE `speler` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-13  9:43:21

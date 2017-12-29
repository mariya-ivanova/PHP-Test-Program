-- MySQL dump 10.13  Distrib 5.5.32, for Linux (x86_64)
--
-- Host: localhost    Database: mivanova_tests
-- ------------------------------------------------------
-- Server version	5.5.32-cll

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
-- Table structure for table `answers_test1`
--

DROP TABLE IF EXISTS `answers_test1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `points` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_test1`
--

LOCK TABLES `answers_test1` WRITE;
/*!40000 ALTER TABLE `answers_test1` DISABLE KEYS */;
INSERT INTO `answers_test1` (`id`, `name`, `question_id`, `points`) VALUES (1,'Отговор1 на Въпрос1',1,1),(2,'Отговор2 на Въпрос1',1,-1),(3,'Отговор3 на Въпрос1',1,1),(4,'Отговор4 на Въпрос1',1,1),(5,'Отговор1 на Въпрос2',2,-1),(6,'Отговор2 на Въпрос2',2,1),(7,'Отговор3 на Въпрос2',2,-1),(8,'Отговор1 на Въпрос3',3,1),(9,'Отговор2 на Въпрос3',3,1),(10,'Отговор1 на Въпрос4',4,1),(11,'Отговор2 на Въпрос4',4,-1),(12,'Отговор3 на Въпрос3',3,-1),(13,'Отговор4 на Въпрос3',3,1),(14,'Отговор5 на Въпрос3',3,1),(15,'Отговор1 на Въпрос7',7,-1),(16,'Отговор2 на Въпрос7',7,1),(17,'Отговор3 на Въпрос7',7,1),(18,'Отговор1 на Въпрос8',8,1),(19,'Отговор2 на Въпрос8',8,-1),(20,'Отговор1 на Въпрос9',9,1),(21,'Отговор2 на Въпрос9',9,1),(22,'Отговор3 на Въпрос9',9,-1),(23,'Отговор4 на Въпрос9',9,1),(24,'Отговор1 на Въпрос10',10,-1),(25,'Отговор2 на Въпрос10',10,1),(26,'Отговор1 на Въпрос5',5,-1),(27,'Отговор2 на Въпрос5',5,1),(28,'Отговор1 на Въпрос6',6,1),(29,'Отговор2 на Въпрос6',6,-1);
/*!40000 ALTER TABLE `answers_test1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers_test2`
--

DROP TABLE IF EXISTS `answers_test2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_test2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `points` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_test2`
--

LOCK TABLES `answers_test2` WRITE;
/*!40000 ALTER TABLE `answers_test2` DISABLE KEYS */;
INSERT INTO `answers_test2` (`id`, `name`, `question_id`, `points`) VALUES (1,'Отговор1 на Въпрос1_2',1,1),(2,'Отговор2 на Въпрос1_2',1,-1),(3,'Отговор3 на Въпрос1_2',1,1),(4,'Отговор4 на Въпрос1_2',1,1),(5,'Отговор1 на Въпрос2_2',2,-1),(6,'Отговор2 на Въпрос2_2',2,1),(7,'Отговор3 на Въпрос2_2',2,-1),(8,'Отговор1 на Въпрос3_2',3,1),(9,'Отговор2 на Въпрос3_2',3,1),(10,'Отговор1 на Въпрос4_2',4,1),(11,'Отговор2 на Въпрос4_2',4,-1),(12,'Отговор3 на Въпрос3_2',3,-1),(13,'Отговор4 на Въпрос3_2',3,1),(14,'Отговор5 на Въпрос3_2',3,1),(15,'Отговор1 на Въпрос7_2',7,-1),(16,'Отговор2 на Въпрос7_2',7,1),(17,'Отговор3 на Въпрос7_2',7,1),(18,'Отговор1 на Въпрос8_2',8,1),(19,'Отговор2 на Въпрос8_2',8,-1),(20,'Отговор1 на Въпрос9_2',9,1),(21,'Отговор2 на Въпрос9_2',9,1),(22,'Отговор3 на Въпрос9_2',9,-1),(23,'Отговор4 на Въпрос9_2',9,1),(24,'Отговор1 на Въпрос10_2',10,-1),(25,'Отговор2 на Въпрос10_2',10,1),(26,'Отговор1 на Въпрос5_2',5,-1),(27,'Отговор2 на Въпрос5_2',5,1),(28,'Отговор1 на Въпрос6_2',6,1),(29,'Отговор2 на Въпрос6_2',6,-1);
/*!40000 ALTER TABLE `answers_test2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_test1`
--

DROP TABLE IF EXISTS `questions_test1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(535) NOT NULL,
  `multiple` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_test1`
--

LOCK TABLES `questions_test1` WRITE;
/*!40000 ALTER TABLE `questions_test1` DISABLE KEYS */;
INSERT INTO `questions_test1` (`id`, `name`, `multiple`) VALUES (1,'Въпрос1',1),(2,'Въпрос2',0),(3,'Въпрос3',1),(4,'Въпрос4',0),(5,'Въпрос5',0),(6,'Въпрос6',0),(7,'Въпрос7',1),(8,'Въпрос8',0),(9,'Въпрос9',1),(10,'Въпрос10',0);
/*!40000 ALTER TABLE `questions_test1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_test2`
--

DROP TABLE IF EXISTS `questions_test2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_test2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(535) NOT NULL,
  `multiple` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_test2`
--

LOCK TABLES `questions_test2` WRITE;
/*!40000 ALTER TABLE `questions_test2` DISABLE KEYS */;
INSERT INTO `questions_test2` (`id`, `name`, `multiple`) VALUES (1,'Въпрос1_2',1),(2,'Въпрос2_2',0),(3,'Въпрос3_2',1),(4,'Въпрос4_2',0),(5,'Въпрос5_2',0),(6,'Въпрос6_2',0),(7,'Въпрос7_2',1),(8,'Въпрос8_2',0),(9,'Въпрос9_2',1),(10,'Въпрос10_2',0);
/*!40000 ALTER TABLE `questions_test2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-05 17:13:48

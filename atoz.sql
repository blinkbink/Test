-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: atoz
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('asassins@y7mail.com','$2y$10$tU8On5Hcn2CL.Jo2ctyQR.6Kol2iXFxC63XesE5wjyCVPbpaB2O4e','2017-06-04 23:00:28');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prepaid_balance`
--

DROP TABLE IF EXISTS `prepaid_balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prepaid_balance` (
  `idorder` int(11) NOT NULL,
  `iduser` varchar(45) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `valuee` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `information` varchar(45) NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prepaid_balance`
--

LOCK TABLES `prepaid_balance` WRITE;
/*!40000 ALTER TABLE `prepaid_balance` DISABLE KEYS */;
INSERT INTO `prepaid_balance` VALUES (1,'$iduser','$phone','$value','',''),(2,'1','0881812821','10000','',''),(3,'1','0881812821','10000','',''),(4,'1','0881812821','10000','',''),(5,'1','0881812821','10000','',''),(6,'1','0881812821','10000','',''),(7,'1','0881812821','10000','',''),(8,'1','0881812821','10000','',''),(9,'1','0881812821','10000','',''),(10,'1','0881812821','10000','',''),(11,'1','0881812821','10000','',''),(12,'1','0881812821','10000','',''),(13,'1','0881812821','10000','',''),(14,'1','0881812821','10100','',''),(15,'1','0881812821','10100','',''),(16,'1','0881812821','10100','',''),(17,'1','0881812821','10100','',''),(18,'1','0881812821','10100','',''),(19,'1','0881812821','10100','',''),(20,'1','0881812821','10100','',''),(21,'1','0881812821','10100','',''),(22,'1','0881812821','10100','',''),(23,'1','0881812821','10100','',''),(24,'1','0881812821','10100','',''),(25,'1','0881812821','10100','',''),(26,'1','0881812821','10100','',''),(27,'1','0881812821','10100','',''),(23968702,'1','0818281821','10100','',''),(58480190,'1','08217212123','10100','',''),(105470895,'1','08562144666','101000','',''),(118122239,'1','0818281821','10100','',''),(142650354,'1','0818281821','10100','',''),(152160378,'1','08562144666','101000','',''),(174450841,'1','0818281821','10100','',''),(187317343,'1','0818281821','10100','',''),(215847414,'1','0818281821','10100','',''),(222087023,'1','0818281821','10100','',''),(230951569,'1','08562144666','101000','',''),(264860613,'1','0818281821','10100','',''),(271788730,'1','0818281821','10100','',''),(280438118,'1','0818281821','10100','',''),(283063057,'1','0881812821','10100','',''),(341414152,'1','0818281821','10100','',''),(378292388,'1','0818281821','10100','',''),(451231258,'1','08562144666','101000','',''),(483978443,'1','08562144666','101000','',''),(496156437,'1','0818281821','10100','',''),(525891398,'1','0881812821','10100','',''),(578347140,'1','0881812821','10100','',''),(605715352,'1','08562144666','101000','',''),(657095299,'1','0818281821','10100','',''),(659332952,'1','0818281821','10100','',''),(679557889,'1','0818281821','10100','',''),(745568641,'1','0818281821','10100','',''),(768934899,'1','08562144666','101000','',''),(775217539,'1','0818281821','10100','',''),(781112893,'1','0818281821','10100','',''),(814032205,'1','0872626121','101000','100000For0872626121','pending'),(895233177,'1','0818281821','10100','',''),(918556402,'1','0818281821','10100','',''),(968774491,'1','0818281821','10100','',''),(1024629743,'1','0881812821','10100','',''),(1041110915,'1','08562144666','101000','',''),(1050836098,'1','08562144666','101000','',''),(1066413602,'1','08562144666','101000','',''),(1074288418,'1','0818281821','10100','',''),(1161987189,'1','0818281821','10100','',''),(1197746599,'1','0872626121','101000','100000 For 0872626121','Success'),(1253472756,'1','08562144666','101000','','');
/*!40000 ALTER TABLE `prepaid_balance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'iqbal','asassins@y7mail.com','$2y$10$eCAepzsPx58mawEAPLkYBOzvIWzTEn3vJt7xAPOLVnB9s8ztRyi9O','c9Hr29GyjZHq6fLElekK1wTknyI0sP3iZqsJpaJNf1eVlaMQCb2UNp1wH1pI','2017-06-04 22:55:24','2017-06-04 22:55:24'),(2,'angga','blinkbink@gmail.com','$2y$10$/FxWdWETaVbjgn1OMYS68uXY3yMX9m0TYLYtoMogiCEWlXw8XVAES','TnEImgNVE1m4AwkIcjZKleJPl9zkBs5TeXhcePxIBfpc1J7zBmyLOSG77EJU','2017-06-05 00:05:09','2017-06-05 00:05:09'),(3,'kaskus','asdasd@gmail.com','$2y$10$ScGfKxBKM.JURNAyvEyStOyeDO0lc6ucRnq0WtxoYd.c.zIeT.W4a','zk95zDoPfo09DtRvRKyPqhqYPP82YfSylp602d3wZFCizoUsUgOE5bsTswrW','2017-06-05 00:17:09','2017-06-05 00:17:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-05 21:38:50

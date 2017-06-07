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
  `total` varchar(45) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prepaid_balance`
--

LOCK TABLES `prepaid_balance` WRITE;
/*!40000 ALTER TABLE `prepaid_balance` DISABLE KEYS */;
INSERT INTO `prepaid_balance` VALUES (9165769,'1','0816461621','10000','10000 For 0816461621','Success','10100','2017-06-07 14:19:34'),(23495352,'1','0000000000','100000','100000 For 0000000000','Success','101000','2017-06-06 00:15:50'),(374591655,'1','08272721','10000','10000 For 08272721','Success','10100','2017-06-07 11:52:05'),(375237132,'1','08562144666','10000','10000 For 08562144666','Failed by Time','10100','2017-06-07 12:52:54'),(384488965,'1','0001929','10000','10000 For 0001929','Failed by Time','10100','2017-06-07 12:22:54'),(572021468,'1','08118867719','50000','50000 For 08118867719','Failed by Time','50500','2017-06-07 02:47:54'),(779348590,'1','08562144666','10000','10000 For 08562144666','Cancelled','10100','2017-06-07 10:22:16'),(801509957,'1','08562144666','50000','50000 For 08562144666','Failed by Time','50500','2017-06-07 09:52:54'),(814032205,'1','0872626121','101000','100000For0872626121','Failed by Time','','2017-06-07 02:47:54'),(1111166655,'1','085854371','100000','100000 For 085854371','Success','101000','2017-06-07 09:52:54'),(1197746599,'1','0872626121','101000','100000 For 0872626121','Success','','2017-06-06 00:14:30'),(1212121211,'1','0182881821','101000','100000 For 0182881821','Failed by Time','101000','2017-06-07 02:19:31'),(1212121212,'1','0872727272','101000','100000 for 0872727272','Cancelled','101000','2017-06-07 02:21:42'),(1218143663,'1','08562144666','100000','100000 For 08562144666','Failed by Time','101000','2017-06-07 12:27:54'),(1364968101,'1','0857575212','10000','10000 For 0857575212','Success','10100','2017-06-07 02:56:10');
/*!40000 ALTER TABLE `prepaid_balance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name_product` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `description` varchar(45) NOT NULL,
  `information` varchar(45) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (17040585,1,'kajsbdlajsbdljasdbl','jbaljdsblajsbdljasbd','101010','111010','kajsbdlajsbdljasdbl that cost 101010','Shipping Code:Y0dSvF5C','2017-06-07 13:50:27'),(147771136,1,'asdasdasdasdas','asdasdasdasdasdas','19912','29912','asdasdasdasdas that cost 19912','asdqasd','2017-06-07 13:42:59'),(315422956,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Cancelled','2017-06-07 10:17:48'),(335217575,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Cancelled','2017-06-07 10:17:58'),(373558893,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Cancelled','2017-06-07 11:50:34'),(452307052,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Cancelled','2017-06-07 10:17:37'),(678697253,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Success','2017-06-07 10:17:09'),(780209225,1,'ps4','cilimus, kuningan','4000000','4010000','ps4 that cost 4000000','Success','2017-06-07 10:01:36'),(1027125586,1,'qljhnalkjnsldkasn','lknalskdnalksd','12','10012','qljhnalkjnsldkasn that cost 12','Shipping Code:kJpzXsns','2017-06-07 14:29:29'),(1172529975,1,'handphone','caracas, kuningan','100000','110000','handphone that cost 100000','Success','2017-06-06 00:39:58'),(1329079595,1,'printer','jakarta','290000','300000','printer that cost 290000','Failed by Time','2017-06-07 12:13:30'),(1335104045,1,'kajsdbkajsbdkasdkj','bkjabkdjabskdjabskjdbkj','10092','20092','kajsdbkajsbdkasdkj that cost 10092','1xbeu5c7','2017-06-07 13:42:26');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'iqbal','asassins@y7mail.com','$2y$10$eCAepzsPx58mawEAPLkYBOzvIWzTEn3vJt7xAPOLVnB9s8ztRyi9O','zkXm31YFOL8NxOTEZvTTqPmTRL4yOcD59Fbl552Cnzlzj8baPU0WuyxyPXMv','2017-06-04 22:55:24','2017-06-04 22:55:24'),(2,'angga','blinkbink@gmail.com','$2y$10$/FxWdWETaVbjgn1OMYS68uXY3yMX9m0TYLYtoMogiCEWlXw8XVAES','TnEImgNVE1m4AwkIcjZKleJPl9zkBs5TeXhcePxIBfpc1J7zBmyLOSG77EJU','2017-06-05 00:05:09','2017-06-05 00:05:09'),(3,'kaskus','asdasd@gmail.com','$2y$10$ScGfKxBKM.JURNAyvEyStOyeDO0lc6ucRnq0WtxoYd.c.zIeT.W4a','zk95zDoPfo09DtRvRKyPqhqYPP82YfSylp602d3wZFCizoUsUgOE5bsTswrW','2017-06-05 00:17:09','2017-06-05 00:17:09'),(4,'balun','mip.mip774@gmail.com','$2y$10$WEC/ZaPEdfNlOA1bBvFDj.tabvqwZ9DlRTCQ26WUEvI2QS2/3seoK','VCF6kRlCHWNqGZPVGNA8QHtKQKZ5DAzjiaQMYGiGgZUfPZ7egs0VGyS6REOP','2017-06-07 10:08:26','2017-06-07 10:08:26');
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

-- Dump completed on 2017-06-08  0:20:57

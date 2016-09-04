-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: friends_pharmacy
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `customer_id` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `prescription _id` varchar(10) NOT NULL,
  `otc_id` varchar(10) NOT NULL,
  `password` varchar(18) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drug`
--

DROP TABLE IF EXISTS `drug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drug` (
  `medicine_id` varchar(10) NOT NULL,
  `medicine_name` varchar(250) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `generic_name` varchar(30) NOT NULL,
  `medicine_group` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `shelf_no` varchar(5) NOT NULL,
  `supplier_id` varchar(10) NOT NULL,
  `content` varchar(300) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`medicine_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drug`
--

LOCK TABLES `drug` WRITE;
/*!40000 ALTER TABLE `drug` DISABLE KEYS */;
INSERT INTO `drug` VALUES ('45','tgyhk','jnuyvy','cfctgju','ftugu','gvygigbk','yuguyhho','12','15',NULL,NULL),('13','chvjv ','ftuyhb','drhfyg','sesdfdr','drtytiu','edytutf','21','20',NULL,NULL);
/*!40000 ALTER TABLE `drug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otc`
--

DROP TABLE IF EXISTS `otc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otc` (
  `otc_id` varchar(10) NOT NULL,
  `medicine_id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otc`
--

LOCK TABLES `otc` WRITE;
/*!40000 ALTER TABLE `otc` DISABLE KEYS */;
/*!40000 ALTER TABLE `otc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prescription` (
  `prescription_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescription`
--

LOCK TABLES `prescription` WRITE;
/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price` (
  `supplier_id` varchar(10) NOT NULL,
  `medicine_id` varchar(10) NOT NULL,
  `price` decimal(15,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price`
--

LOCK TABLES `price` WRITE;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
/*!40000 ALTER TABLE `price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchasing`
--

DROP TABLE IF EXISTS `purchasing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchasing` (
  `purchasing_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(10) NOT NULL,
  `supllier` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `production_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `buying_price` float NOT NULL,
  PRIMARY KEY (`purchasing_id`),
  KEY `medicine_id` (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchasing`
--

LOCK TABLES `purchasing` WRITE;
/*!40000 ALTER TABLE `purchasing` DISABLE KEYS */;
INSERT INTO `purchasing` VALUES (1,'13','20',50,'2016-09-03','2016-09-01','2016-09-30',15),(2,'45','14',30,'2016-09-03','2016-09-01','2016-09-29',20),(3,'16','12',100,'2016-08-23','2016-09-05','2016-09-30',10),(4,'18','14',150,'2016-08-30','2016-08-10','2016-09-29',11);
/*!40000 ALTER TABLE `purchasing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `re-enter password` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `gender` text NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selling`
--

DROP TABLE IF EXISTS `selling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selling` (
  `selling_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(14) NOT NULL,
  `date` date NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `selling_price` float NOT NULL,
  PRIMARY KEY (`selling_id`),
  KEY `fk_customerid_selling` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selling`
--

LOCK TABLES `selling` WRITE;
/*!40000 ALTER TABLE `selling` DISABLE KEYS */;
INSERT INTO `selling` VALUES (1,'45','2016-09-03','10',10,25),(2,'13','2016-09-03','20',15,30),(3,'13','2016-09-03','10',12,30);
/*!40000 ALTER TABLE `selling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `medicine_id` varchar(10) NOT NULL,
  `batch_no` varchar(10) NOT NULL,
  `category` varchar(250) NOT NULL,
  `quantity` int(10) NOT NULL,
  `supplier` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `production_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `buying_price` decimal(15,0) NOT NULL,
  `selling_price` decimal(15,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES ('02','10','asfg',5,'ghth','2016-09-06','2016-09-01','2016-09-30',10,12),('15','26',' bv ',3,'gnhbvgh','2016-09-01','2016-09-01','2016-09-22',52,60),('13','25','guhn',150,'ftyuh','2016-09-02','2016-08-03','2016-10-13',15,20),('45','40','v hgvb jm',200,'cfgv','2016-09-01','2016-08-01','2016-10-26',10,50);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `supplier_id` varchar(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `medicine_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-04 23:02:48

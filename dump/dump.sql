-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: heo
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_title` varchar(100) NOT NULL,
  `b_content` varchar(5000) NOT NULL,
  `b_writer` varchar(30) NOT NULL,
  `b_time` int(11) NOT NULL,
  `b_id` varchar(20) NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (1,'sdf','dsf','gjdydwns',1,'gjdydwns'),(2,'asdf','asdf','gjdydwns',1,'gjdydwns'),(3,'asdf','asdf','gjdydwns',1,'gjdydwns'),(4,'asdf','asdf','gjdydwns',1,'gjdydwns'),(5,'asdf','asdf','gjdydwns',1,'gjdydwns'),(6,'asdf','asdf','gjdydwns',1,'gjdydwns'),(7,'asdf','asdf','gjdydwns',1,'gjdydwns'),(8,'asdf','','gjdydwns',1,'gjdydwns'),(9,'asdf','','gjdydwns',1,'gjdydwns'),(10,'asdf','aaasdfasdfasdf','gjdydwns',1,'gjdydwns'),(11,'asdf','aaasdfasdfasdfasdfasdf','gjdydwns',1,'gjdydwns'),(12,'asdf','asdfadsfasdfasdfasdf','gjdydwns',1,'gjdydwns'),(13,'asdf','','gjdydwns',1,'gjdydwns'),(14,'asdfasdf','asdfasdf','gjdydwns',1,'gjdydwns'),(15,'sasdfasdfasdfaasdfa','asdf','gjdydwns',1,'gjdydwns'),(16,'asdFasdfasdfas','asdfasdfasdfasdf','gjdydwns',1,'gjdydwns'),(17,'asdfasdfasdfasdfsssss','asdf','gjdydwns',1,'gjdydwns'),(18,'afasdf','','gjdydwns',1,'gjdydwns'),(19,'asdfasdfasdf','adfasdfasd','gjdydwns',1,'gjdydwns'),(20,'asdf','asdf','',1,'gjdydwns'),(21,'asdf','asdf','',1,'gjdydwns'),(22,'','','gjdydwns93',1,'gjdydwns');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `community` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_id` varchar(15) NOT NULL,
  `b_passwd` varchar(50) NOT NULL,
  `b_title` varchar(50) NOT NULL,
  `b_content` varchar(500) NOT NULL,
  `b_filePath` varchar(50) NOT NULL,
  `b_fileName` varchar(20) NOT NULL,
  `b_regist_day` varchar(50) DEFAULT NULL,
  `visitNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `community`
--

LOCK TABLES `community` WRITE;
/*!40000 ALTER TABLE `community` DISABLE KEYS */;
INSERT INTO `community` VALUES (1,'eeee','admin','안녕하세요(공지사항)','마이클조던사진굿','../upfile/aa.jpg','aa.jpg','2016년12월13일03시',2),(9,'admin','asd','조던사진받아요','ㅁㄴㅇ','../upfile/aa.jpg','aa.jpg','2016년12월15일06시',1),(10,'admin','aaa','ㅁㅁㄴㅇㄹ','ㅁㄴㅇ','','','2016년12월15일06시',0),(11,'admin','asd','ㅁㄴㅇ','ㅁㄴㅇㅁㄴㅇ','','','2016년12월15일06시',0),(12,'admin','sdsds','ㄴㅇㄴㅇㄴ','ㅁㄴㅇㅁㄴㅇ','','','2016년12월15일06시',0),(13,'admin','asdasd','ㄴㅇㄴㅇ','ㅁㄴㅇㅁㄴㅇ','','','2016년12월15일06시',2),(14,'admin','dsdsd','ㄴㅇㄴㄴ','ㅁㄴㅇㅁㄴ','','','2016년12월15일06시',0),(15,'admin','asdasd','ㄴㅇㄴㅇ','ㅁㄴㅇㄴㅇ','','','2016년12월15일06시',0),(16,'admin','sdasd','ㄴㅇㄴㅇ','ㅁㄴㅇㅁㄴㅇ','','','2016년12월15일06시',0);
/*!40000 ALTER TABLE `community` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_filename` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (13,'aa.jpg'),(14,'asdf.jpg'),(15,'asdf.jpg');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heo`
--

DROP TABLE IF EXISTS `heo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heo` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_title` varchar(100) NOT NULL,
  `b_date` varchar(20) NOT NULL,
  `b_id` varchar(20) NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heo`
--

LOCK TABLES `heo` WRITE;
/*!40000 ALTER TABLE `heo` DISABLE KEYS */;
INSERT INTO `heo` VALUES (1,'안녕','211221','허용준');
/*!40000 ALTER TABLE `heo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heo2`
--

DROP TABLE IF EXISTS `heo2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heo2` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_content` varchar(100) NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heo2`
--

LOCK TABLES `heo2` WRITE;
/*!40000 ALTER TABLE `heo2` DISABLE KEYS */;
INSERT INTO `heo2` VALUES (1,'느느느느느는느느느');
/*!40000 ALTER TABLE `heo2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_id` varchar(15) NOT NULL,
  `goodsName` varchar(20) NOT NULL,
  `goodsPrice` varchar(20) NOT NULL,
  `buy_regist_day` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,'eeee','나이키에어조던레트로6V','189000원','2016년12월13일04시'),(2,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(3,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(4,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(5,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(6,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(7,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(8,'admin','나이키조던이스티게이터','99000원','2016년12월14일14시'),(9,'popopo','아디다스로즈6부스트니트','179000원','2016년12월15일07시'),(10,'popopo','아디다스로즈6부스트니트','179000원','2016년12월15일07시'),(11,'popopo','아디다스로즈6부스트니트','179000원','2016년12월15일07시'),(12,'popopo','아디다스디로즈5부스트','145000원','2016년12월15일07시');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content_number` int(11) NOT NULL,
  `image_name` varchar(20) DEFAULT NULL,
  `image_path` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,19,'aa.jpg','../image/aa.jpg'),(2,19,'asdf.jpg','../image/asdf.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_id` varchar(15) NOT NULL,
  `b_passwd` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_nick` varchar(50) NOT NULL,
  `b_sex` varchar(50) NOT NULL,
  `b_phone_number` varchar(50) NOT NULL,
  `b_regist_day` varchar(50) DEFAULT NULL,
  `b_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'admin','admin','관리자','관리자염','M','010-7777-7777','2016년12월13일02시59분22초','대구광역시북구복현동영진전문대'),(2,'eeee','eee','사용자','사용자염','F','010-3434-3434','2016년12월13일03시00분01초','대구광역시북구복현동본관'),(3,'popopo','asd','김영진','닉쿠네임','F','010-3434-3434','2016년12월15일07시28분52초','영진전문대전문점');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership`
--

LOCK TABLES `membership` WRITE;
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;
INSERT INTO `membership` VALUES (1,'남','허용준','gjdydwns93','$2y$10$aBzKMUcHR/O4HK2PyWR.QeXzC7AXcu2DR3hCkEeYkIY2hBAjbi8z2'),(2,'남','추승협','kms40725','$2y$10$Freivk96LhfJQ75WRla.duiGOUdHqX4N3mUCZiWWqPakCfrdBfYhK'),(3,'','','','$2y$10$aUNse9g5Zsd62wsF9UMeAOFiVPiuTqSJfWsHcmSKqN9wAp.R5P89u');
/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mm`
--

DROP TABLE IF EXISTS `mm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mm` (
  `b_no` int(11) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mm`
--

LOCK TABLES `mm` WRITE;
/*!40000 ALTER TABLE `mm` DISABLE KEYS */;
/*!40000 ALTER TABLE `mm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passwd`
--

DROP TABLE IF EXISTS `passwd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passwd` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_pw` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passwd`
--

LOCK TABLES `passwd` WRITE;
/*!40000 ALTER TABLE `passwd` DISABLE KEYS */;
INSERT INTO `passwd` VALUES (1,'$2y$10$zJK19hpgx8don4/gD82T..QfFYdJ9oUiKS.4FseBoXdgCs.6btoYa'),(2,'$2y$10$wYc3K1pBkIKl/tB52rzeOuODiIkImDzgzsuXRPbHdJpM1k96ZoDkm'),(3,'$2y$10$tkEWX2qeKeNGRdI979lx7uazRHNlRiWVsaIDfM1YtIpGbO2Ot7wCm'),(4,'$2y$10$SctXqx49pifD9VD7PHz70.I6oRyX1QcqfwKt4RYyRd4G1Dur/8CPa');
/*!40000 ALTER TABLE `passwd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `b_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodsName` varchar(20) NOT NULL,
  `goodsOrigin` varchar(15) NOT NULL,
  `mainGroup` varchar(15) NOT NULL,
  `subGroup` varchar(15) NOT NULL,
  `mainPhoto` varchar(60) NOT NULL,
  `subPhoto` varchar(120) NOT NULL,
  `goodsPrice` varchar(15) NOT NULL,
  `goodsNumber` varchar(15) NOT NULL,
  `goods_regist_day` varchar(50) DEFAULT NULL,
  `visitNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_no`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'나이키에어조던9레트로BG','미국','nike','nike/jordan','../goodsImage/mainPhoto/a1.PNG','../goodsImage/subPhoto/a2.PNG*../goodsImage/subPhoto/a3.png','10500원','100','2016년12월13일02시20분54초',1),(2,'나이키에어조던레트로6V','미국','nike','nike/jordan','../goodsImage/mainPhoto/b1.PNG','../goodsImage/subPhoto/b2.PNG*../goodsImage/subPhoto/b3.PNG','189000원','99','2016년12월13일02시21분40초',3),(3,'나이키에어조던레트로3','미국','nike','nike/jordan','../goodsImage/mainPhoto/c1.PNG','../goodsImage/subPhoto/c2.PNG*../goodsImage/subPhoto/c3.PNG','189000원','100','2016년12월13일02시22분23초',0),(4,'나이키에어조던레트로10','미국','nike','nike/jordan','../goodsImage/mainPhoto/d1.PNG','../goodsImage/subPhoto/d2.PNG*../goodsImage/subPhoto/d3.PNG','179000원','100','2016년12월13일02시22분59초',0),(5,'나이키조던2레트로BG','미국','nike','nike/jordan','../goodsImage/mainPhoto/e1.PNG','../goodsImage/subPhoto/e2.PNG*../goodsImage/subPhoto/e3.PNG','109000원','100','2016년12월13일02시23분34초',0),(6,'나이키조던11조던메탈릭','미국','nike','nike/jordan','../goodsImage/mainPhoto/f1.PNG','../goodsImage/subPhoto/f2.PNG*../goodsImage/subPhoto/f3.PNG','279000원','100','2016년12월13일02시24분38초',1),(7,'나이키조던30XXX','미국','nike','nike/jordan','../goodsImage/mainPhoto/h1.PNG','../goodsImage/subPhoto/h2.PNG*../goodsImage/subPhoto/h3.PNG','259000원','100','2016년12월13일02시26분00초',0),(8,'나이키조던울트라플라이','미국','nike','nike/jordan','../goodsImage/mainPhoto/i1.PNG','../goodsImage/subPhoto/i2.PNG*../goodsImage/subPhoto/i3.PNG','129000원','100','2016년12월13일02시26분31초',0),(9,'나이키조던9리트로Statue','미국','nike','nike/jordan','../goodsImage/mainPhoto/j1.PNG','../goodsImage/subPhoto/j2.PNG*../goodsImage/subPhoto/j3.PNG','149000원','100','2016년12월13일02시27분11초',0),(10,'나이키조던6레트로샴페인','미국','nike','nike/jordan','../goodsImage/mainPhoto/k1.PNG','../goodsImage/subPhoto/k2.PNG*../goodsImage/subPhoto/k3.PNG','389000원','100','2016년12월13일02시27분43초',0),(11,'나이키조던6레트로시가','미국','nike','nike/jordan','../goodsImage/mainPhoto/l1.PNG','../goodsImage/subPhoto/l2.PNG*../goodsImage/subPhoto/l3.PNG','389000원','100','2016년12월13일02시28분11초',0),(12,'나이키조던4GS','미국','nike','nike/jordan','../goodsImage/mainPhoto/m1.PNG','../goodsImage/subPhoto/m2.PNG*../goodsImage/subPhoto/m3.PNG','155000원','100','2016년12월13일02시29분11초',0),(13,'나이키조던레트로얼터네이트','미국','nike','nike/jordan','../goodsImage/mainPhoto/o1.PNG','../goodsImage/subPhoto/o2.PNG*../goodsImage/subPhoto/o3.PNG','279000원','100','2016년12월13일02시29분47초',0),(14,'나이키조던11리트로CROC','미국','nike','nike/jordan','../goodsImage/mainPhoto/p1.PNG','../goodsImage/subPhoto/p2.PNG*../goodsImage/subPhoto/p3.PNG','189000원','100','2016년12월13일02시30분55초',4),(15,'나이키조던DubZero','미국','nike','nike/jordan','../goodsImage/mainPhoto/r1.PNG','../goodsImage/subPhoto/r2.PNG*../goodsImage/subPhoto/r3.PNG','139000원','100','2016년12월13일02시31분40초',5),(16,'나이키조던1KOAJKO','미국','nike','nike/jordan','../goodsImage/mainPhoto/q1.PNG','../goodsImage/subPhoto/q2.PNG*../goodsImage/subPhoto/q3.PNG','149000원','100','2016년12월13일02시32분17초',11),(18,'아디다스부스트존월2','미국','adidas','adidas','../goodsImage/mainPhoto/aa1.PNG','../goodsImage/subPhoto/aa2.PNG*../goodsImage/subPhoto/aa3.PNG','149000원','100','2016년12월13일02시40분30초',0),(19,'아디다스로즈6부스트니트','미국','adidas','adidas','../goodsImage/mainPhoto/bb1.PNG','../goodsImage/subPhoto/bb2.PNG*../goodsImage/subPhoto/bb3.PNG','179000원','97','2016년12월13일02시41분09초',13),(21,'아디다스디로즈5부스트','미국','adidas','adidas','../goodsImage/mainPhoto/dd1.PNG','../goodsImage/subPhoto/dd2.PNG*../goodsImage/subPhoto/dd3.PNG','145000원','99','2016년12월13일02시42분37초',2),(22,'앤드윈타이치미드흰노','미국','others','others/andwon','../goodsImage/mainPhoto/aaa1.PNG','../goodsImage/subPhoto/aaa2.PNG*../goodsImage/subPhoto/aaa3.PNG','119000원','100','2016년12월13일02시48분12초',22),(23,'리복브릭시티','미국','others','others/rebook','../goodsImage/mainPhoto/bbb1.PNG','../goodsImage/subPhoto/bbb2.PNG*../goodsImage/subPhoto/bbb3.PNG','125000원','100','2016년12월13일02시49분08초',2),(24,'앤드원타이치미드흰빨','미국','others','others/andwon','../goodsImage/mainPhoto/ccc1.PNG','../goodsImage/subPhoto/ccc2.PNG*../goodsImage/subPhoto/ccc3.PNG','129000원','100','2016년12월13일02시49분48초',3),(25,'앤드원20주년기념모델','미국','others','others/andwon','../goodsImage/mainPhoto/ddd1.PNG','../goodsImage/subPhoto/ddd2.PNG*../goodsImage/subPhoto/ddd3.PNG','179000원','100','2016년12월13일02시50분37초',0),(27,'마이클조던','미국','nike','nike/jordan','../goodsImage/mainPhoto/aa.jpg','../goodsImage/subPhoto/bb.png*../goodsImage/subPhoto/cc.jpg','456000','100','2016년12월15일03시01분21초',0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15 22:14:30

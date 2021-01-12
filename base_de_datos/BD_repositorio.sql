-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: repositorio_ae_manizales_unal_2021
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cat_tema`
--

DROP TABLE IF EXISTS `cat_tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_tema` (
  `idCat` int(11) NOT NULL,
  `idTem` int(11) NOT NULL,
  PRIMARY KEY (`idCat`,`idTem`),
  KEY `idTem` (`idTem`),
  CONSTRAINT `cat_tema_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`idCat`),
  CONSTRAINT `cat_tema_ibfk_2` FOREIGN KEY (`idTem`) REFERENCES `tema` (`idTem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_tema`
--

LOCK TABLES `cat_tema` WRITE;
/*!40000 ALTER TABLE `cat_tema` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCat` int(11) NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(50) NOT NULL,
  `desCat` varchar(400) NOT NULL,
  `imaCat` blob NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuente`
--

DROP TABLE IF EXISTS `fuente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuente` (
  `idFue` int(11) NOT NULL AUTO_INCREMENT,
  `nomFue` varchar(50) NOT NULL,
  PRIMARY KEY (`idFue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuente`
--

LOCK TABLES `fuente` WRITE;
/*!40000 ALTER TABLE `fuente` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ind_reg`
--

DROP TABLE IF EXISTS `ind_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ind_reg` (
  `idInd` varchar(11) NOT NULL,
  `idReg` int(11) NOT NULL,
  PRIMARY KEY (`idInd`,`idReg`),
  KEY `idReg` (`idReg`),
  CONSTRAINT `ind_reg_ibfk_1` FOREIGN KEY (`idInd`) REFERENCES `indicador` (`idInd`),
  CONSTRAINT `ind_reg_ibfk_2` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ind_reg`
--

LOCK TABLES `ind_reg` WRITE;
/*!40000 ALTER TABLE `ind_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `ind_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicador`
--

DROP TABLE IF EXISTS `indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicador` (
  `idInd` varchar(11) NOT NULL,
  `nomInd` varchar(50) NOT NULL,
  PRIMARY KEY (`idInd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicador`
--

LOCK TABLES `indicador` WRITE;
/*!40000 ALTER TABLE `indicador` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `idPer` int(11) NOT NULL AUTO_INCREMENT,
  `nomPer` varchar(7) NOT NULL,
  PRIMARY KEY (`idPer`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo`
--

LOCK TABLES `periodo` WRITE;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT INTO `periodo` VALUES (1,'2016-1'),(2,'2016-3'),(3,'2017-1'),(4,'2017-3'),(5,'2018-1'),(6,'2018-3'),(7,'2019-1'),(8,'2019-3'),(9,'2020-1'),(10,'2020-3');
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `idProg` int(11) NOT NULL AUTO_INCREMENT,
  `nomProg` varchar(50) NOT NULL,
  PRIMARY KEY (`idProg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_fue`
--

DROP TABLE IF EXISTS `reg_fue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_fue` (
  `idReg` int(11) NOT NULL,
  `idFue` int(11) NOT NULL,
  PRIMARY KEY (`idReg`,`idFue`),
  KEY `idFue` (`idFue`),
  CONSTRAINT `reg_fue_ibfk_1` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`),
  CONSTRAINT `reg_fue_ibfk_2` FOREIGN KEY (`idFue`) REFERENCES `fuente` (`idFue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_fue`
--

LOCK TABLES `reg_fue` WRITE;
/*!40000 ALTER TABLE `reg_fue` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_fue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_per`
--

DROP TABLE IF EXISTS `reg_per`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_per` (
  `idReg` int(11) NOT NULL,
  `idPer` int(11) NOT NULL,
  PRIMARY KEY (`idReg`,`idPer`),
  KEY `idPer` (`idPer`),
  CONSTRAINT `reg_per_ibfk_1` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`),
  CONSTRAINT `reg_per_ibfk_2` FOREIGN KEY (`idPer`) REFERENCES `periodo` (`idPer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_per`
--

LOCK TABLES `reg_per` WRITE;
/*!40000 ALTER TABLE `reg_per` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_per` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_prog`
--

DROP TABLE IF EXISTS `reg_prog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_prog` (
  `idReg` int(11) NOT NULL,
  `idProg` int(11) NOT NULL,
  PRIMARY KEY (`idReg`,`idProg`),
  KEY `idProg` (`idProg`),
  CONSTRAINT `reg_prog_ibfk_1` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`),
  CONSTRAINT `reg_prog_ibfk_2` FOREIGN KEY (`idProg`) REFERENCES `programa` (`idProg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_prog`
--

LOCK TABLES `reg_prog` WRITE;
/*!40000 ALTER TABLE `reg_prog` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_prog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `idReg` int(11) NOT NULL AUTO_INCREMENT,
  `nomReg` varchar(50) NOT NULL,
  `desReg` varchar(400) NOT NULL,
  `linkReg` blob NOT NULL,
  PRIMARY KEY (`idReg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(15) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'ADMINISTRADOR'),(2,'EDITOR'),(3,'VISUALIZADOR'),(996699,'SUPERADMIN');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema` (
  `idTem` int(11) NOT NULL AUTO_INCREMENT,
  `nomTem` varchar(50) NOT NULL,
  `desTem` varchar(400) NOT NULL,
  `imaTem` blob NOT NULL,
  PRIMARY KEY (`idTem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema_ind`
--

DROP TABLE IF EXISTS `tema_ind`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema_ind` (
  `idTem` int(11) NOT NULL,
  `idInd` varchar(11) NOT NULL,
  PRIMARY KEY (`idTem`,`idInd`),
  KEY `idInd` (`idInd`),
  CONSTRAINT `tema_ind_ibfk_1` FOREIGN KEY (`idTem`) REFERENCES `tema` (`idTem`),
  CONSTRAINT `tema_ind_ibfk_2` FOREIGN KEY (`idInd`) REFERENCES `indicador` (`idInd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema_ind`
--

LOCK TABLES `tema_ind` WRITE;
/*!40000 ALTER TABLE `tema_ind` DISABLE KEYS */;
/*!40000 ALTER TABLE `tema_ind` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsu` varchar(15) NOT NULL,
  `nomUsu` varchar(80) NOT NULL,
  `passUsu` varchar(30) NOT NULL,
  `rolUsu` int(11) NOT NULL,
  PRIMARY KEY (`idUsu`),
  KEY `rolUsu` (`rolUsu`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rolUsu`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('editor','SEÑOR USUARIO EDITOR','123456',2),('judsanchezga','JULIAN DAVID SANCHEZ GALLEGO','916062',1),('superadmin','USUARIO SUPERADMINISTRADOR','1053868914',996699),('usupru01','USUARIO DE PRUEBA 01','098765',2),('visu','SEÑOR USUARIO VISUALIZADOR','123456',3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-11 16:09:20

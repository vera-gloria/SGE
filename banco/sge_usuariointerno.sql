-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: sge
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.10-MariaDB

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
-- Table structure for table `usuariointerno`
--

DROP TABLE IF EXISTS `usuariointerno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuariointerno` (
  `idusuariointerno` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `tipoacesso` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `evento_idevento` int(11) NOT NULL,
  `evento_usuario_idusuario` int(11) NOT NULL,
  `evento_usuario_usuariointerno_idusuariointerno` int(11) NOT NULL,
  PRIMARY KEY (`idusuariointerno`,`evento_idevento`,`evento_usuario_idusuario`,`evento_usuario_usuariointerno_idusuariointerno`),
  KEY `fk_usuariointerno_evento1_idx` (`evento_idevento`,`evento_usuario_idusuario`,`evento_usuario_usuariointerno_idusuariointerno`),
  CONSTRAINT `fk_usuariointerno_evento1` FOREIGN KEY (`evento_idevento`, `evento_usuario_idusuario`, `evento_usuario_usuariointerno_idusuariointerno`) REFERENCES `eventosnu` (`idevento`, `usuario_idusuario`, `usuario_usuariointerno_idusuariointerno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuariointerno`
--

LOCK TABLES `usuariointerno` WRITE;
/*!40000 ALTER TABLE `usuariointerno` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuariointerno` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-12 15:38:35

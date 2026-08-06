-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: adiuas
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `escuela` varchar(100) DEFAULT NULL,
  `unidad` varchar(100) DEFAULT NULL,
  `poblacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (20,'Juan Pablo Castro Beltran',21,'masculino','juan.castro@gmail.com','6672223344','Estudiante','Escuela preparatoria Central','Psicopedagogia','TDAH'),(21,'Laura Elena Flores Leyva',22,'femenino','laura.flores@gmail.com','6673334455','Estudiante','Facultad de Derecho','Asesoria juridica','Discapacidad visual'),(22,'Diego Armando Gutierrez Cruz',20,'masculino','diego.gutierrez@gmail.com','6674445566','Estudiante','Facultad de Ingenieria','Soporte tecnico','Baja vision'),(23,'Sofia Guadalupe Ramos Felix',25,'femenino','sofia.ramos@gmail.com','6675556677','Docente','Escuela preparatoria Allende','Capacitacion','Sin vulnerabilidad'),(24,'Jose Luis Morales Soto',23,'masculino','jose.morales@gmail.com','6676667788','Estudiante','Facultad de Contabilidad','Tutorias','Problemas de conducta'),(25,'Valeria Isabel Cazarez Parra',18,'femenino','valeria.cazarez@gmail.com','6677778899','Estudiante','Escuela preparatoria Hermanos Flores Magon','Psicopedagogia','Discalculia'),(26,'Fernando Javier Espinoza Vega',22,'masculino','fernando.espinoza@gmail.com','6678889900','Estudiante','Facultad de Informatica','Desarrollo web','Autismo'),(27,'Patricia Elizabeth Nuñez Ibarra',28,'femenino','patricia.nunez@gmail.com','6679990011','Docente','Facultad de Psicologia','Orientacion educativa','Sin vulnerabilidad'),(28,'Gabriel Antonio Medina Rocha',20,'masculino','gabriel.medina@gmail.com','6671010101','Estudiante','Escuela preparatoria Guasave','Atencion integral','Sordera'),(30,'Rodrigo Emanuel Duarte Acosta',24,'masculino','rodrigo.duarte@gmail.com','6673030303','Dependencia uas','Facultad de Agronomia','Operatividad y logistica','Sin vulnerabilidad'),(31,'Adriana Marcela Orozco Zamudio',19,'femenino','adriana.orozco@gmail.com','6674040404','Estudiante','Escuela preparatoria Mochis','Psicopedagogia','Ansiolisis');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `admin` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Yadira','Yadira','1234',1),(2,'Crisol','Crisol','4321',1);
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

-- Dump completed on 2026-08-04 14:57:26

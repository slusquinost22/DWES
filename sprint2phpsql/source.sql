-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0+deb11u1

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
-- Table structure for table `tComentarios`
--

DROP TABLE IF EXISTS `tComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tComentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `pelicula_id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `pelicula_id` (`pelicula_id`),
  CONSTRAINT `tComentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tUsuarios` (`id`),
  CONSTRAINT `tComentarios_ibfk_2` FOREIGN KEY (`pelicula_id`) REFERENCES `tPeliculas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tComentarios`
--

LOCK TABLES `tComentarios` WRITE;
/*!40000 ALTER TABLE `tComentarios` DISABLE KEYS */;
INSERT INTO `tComentarios` VALUES (1,'Una película fantástica, James Cameron no defrauda',5,2,NULL),(2,'No me ha gustado porque Jack si que entraba en la tabla y Rose no le dejó ni un trocito. Pobre Jack',1,3,NULL),(3,'Soy super fan de las películas de Harry Potter, ¡me encantan todas!',4,1,NULL),(4,'¡¡Peliculón!!',3,4,NULL),(5,'¡IRONMAN el mejor!',2,5,NULL),(6,'¡Me encanta!',NULL,1,NULL),(7,'Está genial!!',NULL,1,NULL),(8,'GENIAL!',NULL,2,NULL),(9,'Quiero la segunda parte ¡ya!',NULL,2,NULL),(10,'¡Maravillosa!',NULL,3,NULL),(11,'David Fincher no defrauda',NULL,4,'2022-10-17'),(12,'¡Me encantan todas las películas de los vengadores!',NULL,5,'2022-10-17'),(13,'Mi favorita!',1,1,'2022-10-19'),(14,'guay',NULL,2,'2022-10-20'),(15,'Me encanta!',1,5,'2022-10-20'),(16,'Me encanta!',1,5,'2022-10-20'),(17,'me gusta',NULL,4,'2022-10-20'),(18,'mola!',NULL,4,'2022-10-20'),(19,':(',NULL,3,'2022-10-20'),(20,'genial!',1,1,'2022-10-23'),(21,'no me gustó',2,4,'2022-10-23'),(22,'Increíble',2,2,'2022-10-23'),(23,'Viva Slytherin!',3,1,'2022-10-23'),(24,'Me gustan todas!',3,5,'2022-10-23'),(25,'qué llorera!',3,3,'2022-10-23'),(26,'¡Yo también quiero ser un avatar!',4,2,'2022-10-23'),(27,'Me gustan todas las de David Fincher',4,4,'2022-10-23'),(28,'qué pena que Jack muriera',5,3,'2022-10-23'),(29,'Yo quiero ser del club de la lucha!!',5,4,'2022-10-23'),(30,'genial',NULL,5,'2022-10-23'),(31,'!!!',NULL,5,'2022-10-23'),(32,'genial',NULL,5,'2022-10-23'),(33,'khbvk',NULL,5,'2022-10-23'),(34,'hola',NULL,5,'2022-10-24'),(35,'prueba',NULL,5,'2022-10-24'),(36,'prueba',NULL,1,'2022-10-24'),(37,'hola',NULL,1,'2022-10-24'),(38,'prueba',1,1,'2022-10-24'),(39,'me gusta',1,4,'2022-10-24');
/*!40000 ALTER TABLE `tComentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tPeliculas`
--

DROP TABLE IF EXISTS `tPeliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tPeliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `url_imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tPeliculas`
--

LOCK TABLES `tPeliculas` WRITE;
/*!40000 ALTER TABLE `tPeliculas` DISABLE KEYS */;
INSERT INTO `tPeliculas` VALUES (1,'Harry Potter y la piedra filosofal','Chris Columbus','Fantasía, Aventuras','https://es.web.img2.acsta.net/pictures/14/04/30/11/55/592219.jpg'),(2,'Avatar','James Cameron','Acción, animación, ciencia ficción','https://i0.wp.com/aragondigital.es/wp-content/uploads/2022/09/avatar.jpg?w=960&ssl=1'),(3,'Titanic','James Cameron','Romance, catastrofe, drama','https://i.etsystatic.com/10683147/r/il/748406/3548361422/il_1588xN.3548361422_or4e.jpg'),(4,'El club de la lucha','David Fincher','Drama, comedia negra, suspense','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFjrw5El73GKyBX5yzfAD7uwHIwhlCoe9YIw&usqp=CAU'),(5,'Los vengadores','Joss Whedon','Acción, ciencia ficción','https://es.web.img3.acsta.net/pictures/14/03/10/10/35/587504.jpg');
/*!40000 ALTER TABLE `tPeliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tUsuarios`
--

DROP TABLE IF EXISTS `tUsuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tUsuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tUsuarios`
--

LOCK TABLES `tUsuarios` WRITE;
/*!40000 ALTER TABLE `tUsuarios` DISABLE KEYS */;
INSERT INTO `tUsuarios` VALUES (1,'Sara','Lusquiños Torres','sara.lusquinos@gmail.com','0000'),(2,'Pablo','García Fernández','pablo.garcia@gmail.com','4567'),(3,'Arturo','del Castillo Barros','arturo.castillo@gmail.com','1111'),(4,'María','Vázquez Pérez','M.v.p@gmail.com','2222'),(5,'Brais','Díaz Blanco','braisdb@gmail.com','8888');
/*!40000 ALTER TABLE `tUsuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-26 13:29:02

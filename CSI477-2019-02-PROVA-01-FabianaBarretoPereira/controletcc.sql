-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: controletcc
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (1,'Pablo Ledner DDS','SJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(2,'Prof. Jules Hagenes V','CJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(3,'Tevin Wiza','CJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(4,'Dr. Rashawn Stoltenberg DDS','SJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(5,'Nikko Donnelly','SJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(6,'Dr. Webster Feest DVM','PJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(7,'Ransom Morissette','PJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(8,'Mr. Nico Dibbert DDS','CJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(9,'Maegan Casper','SJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(10,'Vinnie Carter','SJM','2019-12-08 05:07:49','2019-12-08 05:07:49'),(11,'Luella Harber','SJM','2019-12-08 08:09:40','2019-12-08 08:09:40'),(12,'Prof. Llewellyn Boyer IV','PJM','2019-12-08 08:09:40','2019-12-08 08:09:40'),(13,'Antone Waelchi','SJM','2019-12-08 08:09:40','2019-12-08 08:09:40'),(14,'Prof. Rebekah Bogisich','PJM','2019-12-08 08:09:40','2019-12-08 08:09:40'),(15,'Kayli Emard','SJM','2019-12-08 08:09:41','2019-12-08 08:09:41'),(16,'Ms. Lauryn Harvey','CJM','2019-12-08 08:09:41','2019-12-08 08:09:41'),(17,'Dr. Myrtis Beer V','CJM','2019-12-08 08:09:41','2019-12-08 08:09:41'),(18,'Nona Wyman','PJM','2019-12-08 08:09:41','2019-12-08 08:09:41'),(19,'Name Kerluke','SJM','2019-12-08 08:09:41','2019-12-08 08:09:41'),(20,'Bradford Hodkiewicz','PJM','2019-12-08 08:09:41','2019-12-08 08:09:41');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_07_194104_create_alunos_table',1),(5,'2019_12_07_194128_create_professors_table',2),(6,'2019_12_07_194130_create_projetos_table',3);
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
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professors`
--

DROP TABLE IF EXISTS `professors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professors`
--

LOCK TABLES `professors` WRITE;
/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
INSERT INTO `professors` VALUES (1,'Pearlie Strosin','BANCO DE DADOS','2019-12-08 05:10:39','2019-12-08 05:10:39'),(2,'Vickie McCullough','SISTEMAS WEB','2019-12-08 05:10:39','2019-12-08 05:10:39'),(3,'Mrs. Telly Daniel IV','ACESSIBILIDADE WEB','2019-12-08 05:10:39','2019-12-08 05:10:39'),(4,'Dr. Bernhard Schmeler','ACESSIBILIDADE WEB','2019-12-08 05:10:39','2019-12-08 05:10:39'),(5,'Prof. Eino Kohler II','APRENDIZAGEM DE MÁQUINA','2019-12-08 05:10:39','2019-12-08 05:10:39'),(6,'Pinkie Erdman','INTELIGÊNCIA ARTIFICIAL','2019-12-08 05:10:39','2019-12-08 05:10:39'),(7,'Dr. Lulu Nader','INTELIGÊNCIA ARTIFICIAL','2019-12-08 05:10:39','2019-12-08 05:10:39'),(8,'Mr. Delbert Rempel DVM','SISTEMAS WEB','2019-12-08 05:10:39','2019-12-08 05:10:39'),(9,'Earl Braun','INTELIGÊNCIA ARTIFICIAL','2019-12-08 05:10:39','2019-12-08 05:10:39'),(10,'Reba Herman','ACESSIBILIDADE WEB','2019-12-08 05:10:39','2019-12-08 05:10:39');
/*!40000 ALTER TABLE `professors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projetos`
--

DROP TABLE IF EXISTS `projetos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projetos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` int(10) unsigned NOT NULL,
  `professor_id` int(10) unsigned NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL,
  `semestre` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projetos_aluno_id_foreign` (`aluno_id`),
  KEY `projetos_professor_id_foreign` (`professor_id`),
  CONSTRAINT `projetos_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`),
  CONSTRAINT `projetos_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projetos`
--

LOCK TABLES `projetos` WRITE;
/*!40000 ALTER TABLE `projetos` DISABLE KEYS */;
INSERT INTO `projetos` VALUES (1,3,8,'Aplicação web para sistema financeiro de um consultório odontológico',2018,2,'2019-12-08 05:22:27','2019-12-08 05:22:27'),(2,5,9,'Explorando IA para buscas de documentos',2017,1,'2019-12-08 05:25:08','2019-12-08 05:25:08'),(3,10,1,'Banco de dados para empresa de mineração',2018,2,'2019-12-08 05:27:04','2019-12-08 05:27:04'),(4,9,10,'Acessibilidade do sistema do SUS',2019,1,'2019-12-08 05:28:21','2019-12-08 05:28:21'),(5,4,7,'IA para negócios',2017,1,'2019-12-08 05:29:17','2019-12-08 05:29:17'),(6,2,7,'IA para websites',2017,2,'2019-12-08 05:30:28','2019-12-08 05:30:28'),(7,7,4,'Acessibilidade do website de um consultório médico',2019,1,'2019-12-08 06:54:54','2019-12-08 06:54:54'),(8,3,1,'Mudança de paradigma do banco de dados de uma empresa de pequeno porte',2019,2,'2019-12-08 07:49:47','2019-12-08 07:49:47');
/*!40000 ALTER TABLE `projetos` ENABLE KEYS */;
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'colegiado','colegiado@email.com',NULL,'$2y$10$ZHgpEHk8cpYihTLPV8hhvO1WlZOvxJv.oImAn42KjIVzNgXHi7.ve',NULL,'2019-12-08 07:39:22','2019-12-08 07:39:22');
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

-- Dump completed on 2019-12-10  0:09:34

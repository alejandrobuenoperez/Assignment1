CREATE DATABASE  IF NOT EXISTS `assignment3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `assignment3`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: assignment3
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `NewId` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Content` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`NewId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'SpaceX\'s Next Starship Prototype Taking Shape','Images/spacex-starship.png','Construction of the test craft is proceeding apace, as two new photos posted on Twitter today (Sept. 17) by company founder and CEO Elon Musk reveal.'),(2,'NASA\'s Juno Mission Cheks Out Eclipse on Jupiter','Images/juno-mission.png','All is well on our largest neighbor; NASA\'s Juno spacecraft just managed to spot the shadow of Jupiter\'s moon, Io, passing over its marbled clouds.'),(3,'Europe Wants Ideas for Cave-Spelumking Moon Robots','Images/moon-robots.png','As NASA makes a big push to land humans on the moon\'s surface by 2024, the European Space Agency (ESA) wants to learn more about the lunar caves that lie beneath.'),(4,'NASA\'s Mars lander hears the \'bloop\' of meteorites hitting the Red Planet','Images/mars-meteorite.png','The Mars InSight lander has detected seismic and acoustic waves created when four space rocks impacted the surface of the Red Planet. InSight\'s seismometer felt the vibrations from the impacts in 2020 and 2021, marking the first detections of meteoroids hitting the planet since the lander began gathering data after touching down in 2018. The meteoroid impacts occurred between 53 miles (85 kilometers) and 180 miles (290 km) from InSight\'s location in the Elysium Planitia region of Mars, a broad plain that stretches across the Martian equator.'),(5,'China Mars mission data offers evidence for ancient ocean','Images/china-mars-mission.png','The China National Space Administration (CNSA) has revealed new data from its Tianwen 1 Mars orbiter and Zhurong Mars rover, according to a report from state-run media network CGTN. '),(6,'NASA\'s DART asteroid-impact mission will be a key test of planetary defense','Images/asteroid-impact.png','When NASA\'s Double Asteroid Redirection Test (DART) slams into the tiny asteroid Dimorphos, it will be our first attempt to demonstrate our ability to deflect dangerous incoming asteroids.'),(7,'\'Terror and joy\': NASA\'s DART asteroid impact a historic success (and relief)','Images/dart-asteroid-impact.png','Team members are celebrating the successful impact of NASA\'s Double Asteroid Redirection Test (DART), which slammed into an asteroid called Dimorphos tonight (Sept. 26) at 7:14 p.m. EDT (2314 GMT) as planned.'),(8,'NASA\'s Artemis 1 moon mission: Live updates','Images/artemis-1-moon-mission.png','Artemis 1 is now currently scheduled to launch no earlier than mid-October from Launch Complex 39B at NASA\'s Kennedy Space Center in Florida.'),(9,'Expedition 48 crew lands safely on Earth','Images/expedition-48.png','The Soyuz TMA-20M spacecraft is seen as it lands with Expedition 48 crew members NASA astronaut Jeff Williams, Russian cosmonauts Alexey Ovchinin, and Oleg Skripochka of Roscosmos near the town of Zhezkazgan, Kazakhstan on Wednesday, Sept. 7, 2016 (Kazakh time).'),(10,'Artemis I travel Essentials: The ultimate Personal Tour Guide for your trip to the Moon','Images/lunar-orbit.png','Artemis I is an uncrewed flight test that will lay the foundation for a sustained long-term presence on and around the Moon. Launching this summer, the Space Launch System (SLS) rocket and integrated Orion spacecraft will help us get a feel for what astronauts will experience on future flights.'),(11,'Artemis Generation Returns to school as Nasa Returns to the Moon','Images/back-to-school.png','Adventure awaits as students return to the classroom for the 2022-2023 school year and NASA returns to the Moon with Artemis.'),(12,'Water worlds are likely common','Images/ocean-worlds.png','When it comes to searching for evidence of alien life, the phrase follow the water is often quoted as a guiding principle. All life on Earth depends on water, so it makes sense to focus on other places where water exists as well.');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `UserId` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Doe'),(2,'Homer','Simpson');
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

-- Dump completed on 2022-10-04 19:02:51

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2021 at 12:43 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgi`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Direito'),
(2, 'Engenharia Eletrotécnica'),
(3, 'Engenharia Informática'),
(4, 'Engenharia Mecânica'),
(5, 'Medicina'),
(6, 'Relações Internacionais'),
(7, 'Outro');


-- --------------------------------------------------------

--
-- Table structure for table `graduation_level`
--

DROP TABLE IF EXISTS `graduation_level`;
CREATE TABLE IF NOT EXISTS `graduation_level` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `graduation_level`
--

INSERT INTO `graduation_level` (`id`, `name`) VALUES
(1, 'A fazer licenciatura'),
(2, 'Licenciatura'),
(3, 'A fazer mestrado'),
(4, 'Mestrado'),
(5, 'A fazer douturamento'),
(6, 'Douturamento');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
CREATE TABLE IF NOT EXISTS `internship` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salary` int UNSIGNED NOT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `graduation_id` int UNSIGNED NOT NULL,
  `remote` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `start_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salary` int UNSIGNED NOT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `graduation_id` int UNSIGNED NOT NULL,
  `remote` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `start_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------

--
-- Table structure for table `research`
--

DROP TABLE IF EXISTS `research`;
CREATE TABLE IF NOT EXISTS `research` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salary` int UNSIGNED NOT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `graduation_id` int UNSIGNED NOT NULL,
  `remote` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `start_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Constraints for dumped tables
--

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`graduation_id`) REFERENCES `graduation_level` (`id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`graduation_id`) REFERENCES `graduation_level` (`id`);

--
-- Constraints for table `research`
--
ALTER TABLE `research`
  ADD CONSTRAINT `research_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `research_ibfk_2` FOREIGN KEY (`graduation_id`) REFERENCES `graduation_level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Dez-2021 às 18:07
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pgi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `course`
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
-- Estrutura da tabela `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(320) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ua` text COLLATE utf8_bin NOT NULL,
  `ip` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `email`, `timestamp`, `ua`, `ip`) VALUES
(1, 'mikepro2013@gmail.com', '2021-12-16 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '::1'),
(2, 'mikepro2013@gmail.com', '2021-12-16 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '::1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduation_level`
--

DROP TABLE IF EXISTS `graduation_level`;
CREATE TABLE IF NOT EXISTS `graduation_level` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `graduation_level`
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
-- Estrutura da tabela `internship`
--

DROP TABLE IF EXISTS `internship`;
CREATE TABLE IF NOT EXISTS `internship` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `salary` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8_bin NOT NULL,
  `company` varchar(25) COLLATE utf8_bin NOT NULL,
  `graduation_requirements` varchar(25) COLLATE utf8_bin NOT NULL,
  `remote` varchar(11) COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `start_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `salary` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8_bin NOT NULL,
  `company` varchar(25) COLLATE utf8_bin NOT NULL,
  `graduation_requirements` varchar(25) COLLATE utf8_bin NOT NULL,
  `remote` varchar(11) COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `start_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `job`
--

INSERT INTO `job` (`id`, `name`, `salary`, `details`, `company`, `graduation_requirements`, `remote`, `creation_timestamp`, `location`, `course_id`, `start_date`, `end_date`) VALUES
(7, 'asd', 2134, 'asd', 'sad', '5', '2', '2021-12-20 17:49:36', 'asd', 4, '2021-02', '2021-11'),
(8, 'asd', 123, 'asd', 'asd', '2', 'Presen', '2021-12-20 18:20:08', 'asd', 3, '2021-10', '2021-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `research`
--

DROP TABLE IF EXISTS `research`;
CREATE TABLE IF NOT EXISTS `research` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `salary` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8_bin NOT NULL,
  `company` varchar(25) COLLATE utf8_bin NOT NULL,
  `graduation_requirements` varchar(25) COLLATE utf8_bin NOT NULL,
  `remote` varchar(11) COLLATE utf8_bin NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `start_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `end_date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Limitadores para a tabela `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Limitadores para a tabela `research`
--
ALTER TABLE `research`
  ADD CONSTRAINT `research_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

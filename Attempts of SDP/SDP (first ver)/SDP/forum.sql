-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 29, 2024 at 11:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_comment` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `student` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `post` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(34, '0', '222', '222', '2024-02-29 18:27:17'),
(27, '26', 'yong', 'gg\n', '2024-02-25 19:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `discussiondatabase`
--

DROP TABLE IF EXISTS `discussiondatabase`;
CREATE TABLE IF NOT EXISTS `discussiondatabase` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_comment` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `student` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `post` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussiondatabase`
--

INSERT INTO `discussiondatabase` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(6, '0', 'opp', 'halo\n', '2024-02-29 19:09:09'),
(5, '0', '333', '333', '2024-02-29 18:27:26'),
(4, '3', 'king', 'hi', '2024-02-29 18:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `discussionhtml`
--

DROP TABLE IF EXISTS `discussionhtml`;
CREATE TABLE IF NOT EXISTS `discussionhtml` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_comment` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `student` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `post` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussionhtml`
--

INSERT INTO `discussionhtml` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(5, '0', '...', '...', '2024-02-29 18:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `discussionothers`
--

DROP TABLE IF EXISTS `discussionothers`;
CREATE TABLE IF NOT EXISTS `discussionothers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_comment` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `student` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `post` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussionothers`
--

INSERT INTO `discussionothers` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(5, '0', '555', '555', '2024-02-29 18:27:36'),
(3, '0', 'orange', 'hi', '2024-02-29 18:17:13'),
(4, '3', 'apple', 'hi', '2024-02-29 18:17:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

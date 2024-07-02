-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `python`
--

-- --------------------------------------------------------

--
-- Table structure for table `sqlgame`
--

CREATE TABLE `sqlgame` (
  `questionID` int(11) NOT NULL,
  `questionText` longtext NOT NULL,
  `tableReference` longtext NOT NULL,
  `questionOutput` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `answerOptions` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sqlgame`
--

INSERT INTO `sqlgame` (`questionID`, `questionText`, `tableReference`, `questionOutput`, `answer`, `answerOptions`) VALUES
(1, 'Insert these values into the Book Table:\r\nBookID = \"B01\"\r\nName = \"Chemistry\" \r\nAuthor = \"H.Potter\"\r\nPrice = \"45.20\"\r\nPublishedDate = \"31 May 2017\"\r\nPublisherID = \"P02\"', 'IMG-65d1c48a9455a7.93755850.png', 'Q1questionOutput.png', 'INSERT INTO Book ( BookID , Name , Author , Price , PublishedDate , PublisherID ) VALUES ( \'B06\' , \'Chemistry\' , \'H.Potter\' , \'45.20\' , \'31May2017\' , \'P02\' ) ;', 'SELECT * FROM ADD =');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sqlgame`
--
ALTER TABLE `sqlgame`
  ADD PRIMARY KEY (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

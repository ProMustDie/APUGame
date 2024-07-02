-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 03:19 AM
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
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `questionID` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answerOptions` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`questionID`, `question`, `answerOptions`, `answer`, `quizID`) VALUES
(1, '_____(\"Hello World\")', 'def, print, insert, show', 'print', 1),
(2, 'How do you insert COMMENTS in Python code?', '//This is a comment, /*This is a comment*/, #This is a comment', '#This is a comment', 1),
(3, 'Which is NOT a legal variable name?', 'my-var, myvar_, my_var, Myvar', 'my-var', 1),
(4, 'How do you create a variable with the numeric value 5?', 'Both the other answers are correct, x = 5, x = int(5)', 'x = 5', 1),
(5, 'What is the correct file extension for Python files?', '.pyt, .pt, .pyth, .py', '.py', 1),
(6, 'How do you create a variable with the floating number 2.8?', 'Both the other answers are correct, x = 2.8, x = float(2.8)', 'x = 2.8', 1),
(7, 'What is the correct syntax to output the type of a variable or object in Python?', 'print(typeof(x)), print(typeOf(x)), print(typeof x), print(type(x))', 'print(type(x))', 1),
(8, 'What is the correct way to create a function in Python?', 'function myfunction():, create myFunction():, def myFunction():', 'def myFunction():', 1),
(9, 'In Python, \'Hello\', is the same as \"Hello\"', 'True, False', 'True', 2),
(10, 'What is a correct syntax to return the first character in a string?', 'x = \"Hello\".sub(0,1), x=sub(\"Hello\",0,1), x = \"Hello\"[0]', 'x = \"Hello\"[0]', 2),
(11, 'Which method can be used to remove any whitespace from both the beginning and the end of a string?', 'strip(), len(), ptrim(), trim()', 'strip()', 2),
(12, 'Which method can be used to return a string in upper case letters?', 'uppercase(), toUpperCase(), upper(), upperCase()', 'upper()', 2),
(13, 'Which method can be used to replace parts of a string?', 'switch(), repl(), replace(), replaceString()', 'replace()', 2),
(14, 'Which operator is used to multiply numbers?', '%, x, #, *', '*', 3),
(15, 'Which operator can be used to compare two values?', '==, =, <>, ><', '==', 3),
(16, 'Which collection is ordered, changeable, and allows duplicate members?', 'TUPLE, LIST, DICTIONARY, SET', 'LIST', 3),
(17, 'Which collection does not allow duplicate members?', 'TUPLE, LIST, SET', 'SET', 3),
(18, 'How do you start writing an if statement in Python?', 'if (x > y), if x > y, if x > y then:', 'if (x > y)', 3),
(19, 'How do you start writing a while loop in Python?', 'while x > y:, while (x > y), while x > y {, x > y while{', 'while (x > y)', 3),
(20, 'Which statement is used to stop a loop?', 'return, break, exit, stop', 'break', 3);

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

CREATE TABLE `memory` (
  `questionID` int(11) NOT NULL,
  `cardOne` longtext NOT NULL,
  `cardTwo` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`questionID`, `cardOne`, `cardTwo`, `quizID`) VALUES
(1, 'print', 'Hello World', 9),
(2, 'x = 5', '5', 9),
(3, 'Creating integer variable', 'x = int(3)', 9),
(4, 'def myfunc(): print(\"python is awesome\")', 'summoning a function to print text', 9);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `quizID` int(11) NOT NULL,
  `gametype` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`quizID`, `gametype`, `name`, `Id`) VALUES
(1, 'MCQ', 'MCQ Quiz 1', 3),
(2, 'MCQ', 'MCQ Quiz 2', 8),
(3, 'MCQ', 'mcq quiz 3', 3),
(7, 'rearrange', 'SQL Rearrange Game', 2),
(9, 'Memory', 'Python Matching Quiz', 3);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultID` int(11) NOT NULL,
  `quizID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `results` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `answerOptions` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sqlgame`
--

INSERT INTO `sqlgame` (`questionID`, `questionText`, `tableReference`, `questionOutput`, `answer`, `answerOptions`, `quizID`) VALUES
(1, 'Insert these values into the Book Table:\nBookID = \"B01\"\nName = \"Chemistry\" \nAuthor = \"H.Potter\"\nPrice = \"45.20\"\nPublishedDate = \"31 May 2017\"\nPublisherID = \"P02\"', 'IMG-65d1c48a9455a7.93755850.png', 'Q1questionOutput.png', 'INSERT INTO Book ( BookID , Name , Author , Price , PublishedDate , PublisherID ) VALUES ( \'B06\' , \'Chemistry\' , \'H.Potter\' , \'45.20\' , \'31May2017\' , \'P02\' ) ;', 'SELECT * FROM ADD =', 7),
(2, 'Delete a row for a Table \"Publisher\" where the Publisher is Named \"Deitel\"', '', '', 'DELETE FROM Publisher WHERE Name = \' Deitel \'', '; REMOVE TABLE VALUE :', 7),
(3, 'Display a list of Publishers where publisher Name starts with the alphabet \'r\'', '', '', 'SELECT * FROM Publisher WHERE NAME like \' r % \'', '+ START # = ', 7),
(4, 'What is the command needed to display the entire \"Book\" Table?', '', '', 'SELECT * FROM Book', 'ALL TABLE VIEW SEE', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Id`, `username`, `password`) VALUES
(1, 'Admin1', 'admin123'),
(2, 'parent1', 'parent123'),
(3, 'teacher1', 'teacher123'),
(4, 'student1', 'student123');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `Id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`Id`, `username`, `password`, `email`, `phone_number`, `user_type`) VALUES
(1, 'Admin1', 'admin123', 'admin1@gmail.com', '0125858023', 'admin'),
(2, 'parent1', 'parent123', 'parent1@gmail.com', '0165859458', 'parents'),
(3, 'student1', 'student123', 'student1@gmail.com', '0128489555', 'students'),
(8, 'Teacher1 ', 'teacher123', 'teacher1@gmail.com', '60125158484', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quizID`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `quizID` (`quizID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `sqlgame`
--
ALTER TABLE `sqlgame`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `memory`
--
ALTER TABLE `memory`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sqlgame`
--
ALTER TABLE `sqlgame`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mcq`
--
ALTER TABLE `mcq`
  ADD CONSTRAINT `mcq_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quizzes` (`quizID`);

--
-- Constraints for table `memory`
--
ALTER TABLE `memory`
  ADD CONSTRAINT `memory_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quizzes` (`quizID`);

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `user_register` (`Id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quizzes` (`quizID`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user_register` (`Id`);

--
-- Constraints for table `sqlgame`
--
ALTER TABLE `sqlgame`
  ADD CONSTRAINT `sqlgame_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quizzes` (`quizID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
